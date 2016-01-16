<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include 'connection.php';

if(isset($_POST['name']))
{
    $name = $_POST['name'];
    //$name ="rahul";
    try{
        $sql = "select uname from register where uname = :name";
        $stmt = $db->prepare($sql);
        $stmt->bindParam(":name",$name,PDO::PARAM_STR);
        $stmt->execute();

        $result = $stmt->fetchAll();


        if(isset($result[0]['uname']))
        {
            echo "success";
        }
        else{
            echo "fail";
        }
    } catch (Exception $ex) {
        echo $ex->getMessage();
    }
}

if(isset($_POST['date']))
{
    $date = $_POST['date'];
    //$date = "1992-04-15";
    //$name = "rahul";
    $day = substr($date, 8, 2);
    $mon = substr($date, 5, 2);
    $name = $_POST['name'];
    $name1=$name."".$day;
    $suggest = array();
    $rs = checkName($name1);
    
    if(!empty($rs))
    {
        //echo $rs[0]['uanme'];
    }
    else{
        
        array_push($suggest, $name1);
     
    }
    $name2 = $day.$name;
    $rs2=  checkName($name2);
    
    if(empty($rs2))
    {
       
        array_push($suggest, $name2);
    }
    
    $name3=$name.$mon;
    $rs3 = checkName($name3);
    if(empty($rs3))
    {
        array_push($suggest, $name3);
    }
    
    
    $name4=$mon.$name;
    $rs4 = checkName($name4);
    if(empty($rs4))
    {
        array_push($suggest, $name3);
    }
     
    echo json_encode($suggest);
    //print_r($suggest);
    
    
}

function checkName($str){
    global $db;
    try
    {
        $sql = "select uname from register where uname = :name ";
        $stmt = $db->prepare($sql);
        $stmt->bindParam(":name",$str,PDO::PARAM_STR);
        $stmt->execute();
        $result = $stmt->fetchAll();
        //print_r($result);
        return $result;
    
    } catch (Exception $ex) {
        $ex->getMessage();
    }
}
<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include 'connection.php';
$name = "rahul";
 try
    {
        $sql = "select uname from register where uname = :name ";
        $stmt = $db->prepare($sql);
        $stmt->bindParam(":name",$name,PDO::PARAM_INT);
        $stmt->execute();
        $result = $stmt->fetchAll();
        
        print_r($result);
    
    } 
    catch (Exception $ex) {
        $ex->getMessage();
    }
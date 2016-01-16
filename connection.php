<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
error_reporting(E_ALL);
ini_set("display_errors", 1);
$uname = "root";
$pass = "root";
$host = "localhost";
$dbname = "ajax";
$dsn = "mysql:host=localhost;dbname=ajax;charset=utf8";
$db = new PDO($dsn, $uname, $pass);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
<?php
session_start();
include '../db/dbconnect.php';

$post = htmlspecialchars($_POST['post-area'] );
$aid = htmlspecialchars($_SESSION['aid'] );

$sql = "INSERT INTO post VALUES(0,$aid,'$post',NOW(),NOW())";

$con->query($sql); 

 header("location:../profile.php");
<?php
$name = $_POST['empname'];
$email = $_POST['emailid'];
$phn = $_POST['phn'];
$address = $_POST['address'];
$uname = $_POST['uname'];
$password = $_POST['password'];
$submit = $_POST['submit'];

/*$q = $_REQUEST["q"];
mkdir($q);*/
mkdir($name);
mkdir($email);
include_once("other.php");
$obj = new other();
?>    
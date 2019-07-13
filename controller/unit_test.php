<?php
require("../model/UserModel.php");

$Data= new UserModel();

$Data->name = "alvin perante";
$Data->email = "alvin@gmail.com";
$Data->username = "123";
$Data->password ="123123123";
echo"Case#1: Inserting record  RESULT :";
var_dump($Data->insert());


$Data->password = "1";
$Data->id = 43;
echo "Case#2 updating record RESULT :";
var_dump($Data->update());


echo "Case#3 Read All record RESULT";
var_dump($Data->readAll());

$Data->id = "41";
echo"Case#4 Delete record RESULT ";
var_dump($Data->delete());


?>
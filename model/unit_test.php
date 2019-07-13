<?php

require("../model/UserModel.php");

$Data = new UserModel();

$Data->name = "alvin perante";
$Data->email = "alvin@gmail.com";
$Data->username = "123";
$Data->password ="123123123";
echo"Case#1: Inserting record  RESULT :";
var_dump($Data->insert());


$Data->password = "1";
$Data->id = 40;
echo "Case#2 updating record RESULT :";
var_dump($Data->update());


echo "Case#3 Read All record RESULT";
var_dump($Data->readAll());

$Data->id = "28";
echo"Case#4 Delete record RESULT ";
var_dump($Data->delete());

echo"Case#5: Inserting record with 3 missing fields  RESULT :";
var_dump($Data->insertC5());


$Data->password = "1";
$Data->id = "asdasd";
echo"updating record with a non-existing ID RESULT: ";
var_dump($Data->update());

$Data->id = "asdsd";
echo"Case#4 Deleting record with a non-existing ID ";
var_dump($Data->delete());

?>
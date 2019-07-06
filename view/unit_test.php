<?php
//require("../database/Database.php");
require("../model/UserModel.php");

$Data = new UserModel();

$Data->name = "alvin perante";
$Data->email = "alvin@gmail.com";
$Data->username = "123";
$Data->password ="123123123";
echo"Case#1: Inserting data using valid SQL insert command  RESULT :";
var_dump($Data->insert());


// $insertData->password = "1";

// $insertData->id = "28";
// echo "Case#2 Updating data using valid SQL update command RESULT :".$insertData->update()."</br>";


// echo "Case#3 Extracting data using valid SQL select command RESULT".$insertData->readAll()."</br>";

// $insertData->id = "28";
// echo"Case#4 Deleting data using valid SQL delete command RESULT ".$insertData->delete();

// $dbObj = new Database();

// $result = $dbObj->execute("INSERT into tbluser(name, email,username,password)
//  values('alvin', 'a@g.com', '123sda', '123123123')");
//  echo"Case#1: Inserting data using valid SQL insert command  RESULT :".$result."</br>";

// $result = $dbObj->execute("UPDATE tbluser set  name ='kulas' where id = 40" );
// echo"Case#2: UPdate data using valid SQL insert command  RESULT :".$result."</br>";

// $result = $dbObj->execute("SELECT * from tbluser");
// echo "Case#3 Extracting data using valid SQL select command RESULT ".$result."</br>";

// $result = $dbObj->execute("DELETE from tbluser where id = 42");
// echo "Case#4 Delete data using valid SQL select command RESULT ".$result."</br>";


// $result = $dbObj->execute("INSER into");
// echo "Case#5  Inserting data using invalid SQL insert command RESULT ".$result."</br>";

// $result = $dbObj->execute("UPDAT tbluser set password = 'asd' where id = 30");
//  echo "Case#6 Updating data using invalid SQL update command RESULT ".$result."</br>";

// $result = $dbObj->execute("select * from tbluse");
// echo "Case#7 Extracting data using invalid SQL select command. RESULT ".$result."</br>";

// $result = $dbObj->execute("DELET from tbluser where id = 42");
// echo "Case#7 Deleting data using invalid SQL delete command.RESULT ".$result."</br>";

?>


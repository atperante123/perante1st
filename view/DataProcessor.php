<?php
require("../controller/UserController.php");

if(isset($_POST['btnAdd'])){
    $userCont = new UserController();
    $action = $_POST['action'];
    switch($action){
        case "insert":
            //do insert
            insert();
            break;
        case "update":
            //do update
            break;
        default:
            //none selected :(
    }
}
function insert(){
    global $userCont;
    $name = $_POST['name'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $userCont->addUser($name,$email,$username,$password);
}
?>
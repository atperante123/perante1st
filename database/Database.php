<?php
class Database{
    private $con;
    public $servername="localhost";
    public $username="root";
    public $password="";
    public $dbname = "perante_db";

    public function __construct(){
        $this->con = mysqli_connect($this->servername, $this->username,$this->password,$this->dbname);
    }

    public function execute($sql){
        //for act2
        // return mysqli_query($this->con, $sql);

        //for act1
       if(mysqli_query($this->con, $sql)){
        return 1;

       } else{
           return 0;
       }

    }


    public function __destruct(){
        mysqli_close($this->con);
    }
}
?>
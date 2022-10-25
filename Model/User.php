<?php

    require "../Model/DBClass.php";

    class User extends DBClass{


        public function __construct() {
            global $host,$root,$pass,$DBName;

            $host="localhost";
            $root="root";
            $pass="";
            $DBName="blogsdb";

            parent::__construct($host,$root,$pass,$DBName);
            parent::ConnectToDB();
        }

        public function execQuery($con,$query)
        {
            $res=mysqli_query($con,$query);
            return $res;
        }


        public function AddUser($con,$username,$email,$password,$age)
        {
            $query="INSERT INTO `user`(`Username`, `Email`, `Password`, `Age`) 
            VALUES ('".$username."','".$email."','".$password."','".$age."') ";

            $this->execQuery($con,$query);
        }

        public function Location($locate)
        {
            header($locate);
        }

        public function Login($con,$email,$password)
        {
            $query= " SELECT * FROM `user` 
                WHERE Email LIKE '".$email."' AND Password LIKE '".$password."' ";

            $res=$this->execQuery($con,$query);
            return $res;
        }



    }


?>
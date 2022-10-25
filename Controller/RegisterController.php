<?php
    require "../Model/User.php";

    if ($_SERVER['REQUEST_METHOD']=='POST') {
        $model=new User();
        $con=$model->ConnectToDB();

        $username=mysqli_escape_string($con,$_POST["Username"]);
        $email=mysqli_escape_string($con,$_POST["Email"]);
        $password=mysqli_escape_string($con,$_POST["Password"]);
        $age=mysqli_escape_string($con,$_POST["Age"]);


        if (strlen($password) < 8 || strlen($password) > 8 ) {
            $l="Location:../Views/RegisterForm.php";
            $model->Location($l);
        }
        else {
            $model->AddUser($con,$username,$email,$password,$age);
            $l="Location:../Views/LoginForm.php";
            $model->Location($l);
        }

        $model->Disconnect($con);
    }


?>
<?php 
    require "../Model/User.php";
    session_start();

    if ($_SERVER['REQUEST_METHOD']=='POST') {
        $model=new User();
        $con=$model->ConnectToDB();

        $email=mysqli_escape_string($con,$_POST["Email"]);
        $password=mysqli_escape_string($con,$_POST["Password"]);

        $res=$model->Login($con,$email,$password);

        if ($row=mysqli_fetch_assoc($res)) {
            $_SESSION["ID"]=$row["ID"];
            $_SESSION["Username"]=$row["Username"];
            $_SESSION["Email"]=$row["Email"];
            $_SESSION["Password"]=$row["Password"];
            $_SESSION["Age"]=$row["Age"];
            
            $l="Location:../Views/HomePage.php";
            $model->Location($l);
        }
        else {
            $l="Location:../Views/LoginForm.php";
            $model->Location($l);
        }

        mysqli_free_result($res);
        $model->Disconnect($con);



    }




?>
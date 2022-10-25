<?php
    require "../Model/PostClass.php";
    session_start();

    if ($_SERVER['REQUEST_METHOD']=="POST") {
        $model=new Post();
        $con=$model->ConnectToDB();

        $text=mysqli_escape_string($con,$_POST['Text']);
        $userID=$_SESSION["ID"];

        $fileName=$_FILES['Img']['name'];
        $tmpName=$_FILES['Img']['tmp_name'];
        $folder="../images/".$fileName;

        $res=$model->CreatePost($con,$text,$fileName,$userID);

        if (move_uploaded_file($tmpName,$folder)) {
            echo "<script> alert('is moved') </script>";
        }
        else {
            echo" <script> alert('is not moved') </script>";

        }
        
        $l="Location:../Views/HomePage.php";
        $model->Location($l);
        
        $model->Disconnect($con);

    }

?>
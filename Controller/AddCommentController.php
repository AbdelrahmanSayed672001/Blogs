<?php
    require "../Model/CommentClass.php";
    require "../Model/PostClass.php";
    session_start();

    if ($_SERVER["REQUEST_METHOD"]=="GET") {
        $model=new Post();
        $con=$model->ConnectToDB();

        $c=new Comment();
        $comment=mysqli_escape_string($con,$_GET["comment"]);
        $postID=mysqli_escape_string($con,$_GET["id"]);
        $userID=$_SESSION["ID"];
        

        $res=$c->AddComment($con,$comment,$postID,$userID);

        $l="Location:../Views/Post.php?id=".$postID;
        $c->Location($l);
        $model->Disconnect($con);

    }


?>
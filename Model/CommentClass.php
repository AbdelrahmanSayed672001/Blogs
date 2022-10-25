<?php
    //require "../Model/DBClass.php";

    class Comment{

        // public function __construct() {
        //     global $host,$root,$pass,$DBName;

        //     $host="localhost";
        //     $root="root";
        //     $pass="";
        //     $DBName="blogsdb";

        //     parent::__construct($host,$root,$pass,$DBName);
        //     //parent::ConnectToDB();
        // }

        public function __construct() {
            
        }


        public function AddComment($con,$CommentMSG,$PostID,$userID)
        {
            $query="INSERT INTO `comment`(`CommentMSG`, `PostID`, `UserID`) 
                    VALUES ('".$CommentMSG."', '".$PostID."' , '".$userID."' ) ";
            $this->exec_Query($con,$query);
        }

        public function exec_Query($con,$query)
        {
            $res=mysqli_query($con,$query);
            return $res;
        }

        public function Location($location)
        {
            header($location);
        }
    }

?>
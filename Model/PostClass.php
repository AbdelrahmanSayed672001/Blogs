<?php
    require "../Model/DBClass.php";

    class Post extends DBClass{
        
        public function __construct() {
            global $host,$root,$pass,$DBName;
            $host="localhost";
            $root="root";
            $pass="";
            $DBName="blogsdb";

            parent::__construct($host,$root,$pass,$DBName);
            parent::ConnectToDB();
        }


        public function CreatePost($con,$text,$img,$userID)
        {
            $query="INSERT INTO `post`(`Text`, `PostIMG`, `UserID`) 
                    VALUES ('".$text."' ,'".$img."' ,'".$userID."') ";
            $this->execQuery($con,$query);
        }

        public function execQuery($con,$query)
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
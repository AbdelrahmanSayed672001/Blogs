<?php

    class DBClass{
        private string $host;
        private string $root;
        private string $pass;
        private string $DBName;


        public function __construct(string $host,string $root,string $pass,string $DBName) {
            $this->host = $host;
            $this->root = $root;
            $this->pass = $pass;
            $this->DBName = $DBName;
        }

        public function FailConnection($con)
        {
            if (! $con) {
                return true;
            }
            
        }

        public function ConnectToDB()
        {
            $con=mysqli_connect($this->host,$this->root,$this->pass,$this->DBName);
            
            if ( $this->FailConnection($con)) {
                return mysqli_error($con);
            }
            else return $con;
        }

        public function Disconnect($con)
        {
            mysqli_close($con);
            exit;
        }



        

    }



?>
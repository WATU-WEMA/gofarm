<?php
     $servername= "localhost";
     $username= "root";
     $dbName = "registration_users";
     $password="" ;
     $conn =  mysqli_connect($servername , $username , $password,$dbName);
     if(!$conn){
          die ("unable to host");
     }


?>
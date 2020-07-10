
<?php
   if(isset($_POST['loginphp'])){
       require 'connection.php';

   $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];
    $email = $_REQUEST['email'];

    $sql = "INSERT INTO users (username,password,email) VALUES (?,?,?);";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
        exit();
    }else{
       $haspass = password_hash($password,PASSWORD_DEFAULT);
       mysqli_stmt_bind_param($stmt,"sss",$username,$password,$email);
       mysqli_stmt_execute($stmt);
       header("Location:farmgo.php");
       exit();
    }

    mysqli_stmt_close($stmt);
    mysqli_close($conn);

   }



?>
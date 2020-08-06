 <?php
   session_start();
if(isset($_POST['loginphp']))
{
   require 'connection.php';
   $username=$_POST['username'];
   $password=$_POST['password'];
   $result=mysqli_query($conn,'SELECT * FROM users where username="'.$username.'" and password="'.$password.'"');
   if(mysqli_num_rows($result)==1)
   {
      $_SESSION['username']=$username;
      header('location:contgo.php');
   }
   else
   {
      echo "username or password is invalid";
   }
}
if(isset($_GET['logout']))
{
   session_unregister('username');
}





 ?>
 <!DOCTYPE html>
<html>
<head>
    <title>form</title>
   <style>
   form
   {
       text-align: center;
     font-size:50px;
   }
   body
   {
      background-image:url('body.jpeg');
      background-repeat: no-repeat;
      background-size: cover;
      color:#15CC31;
   }
   #register
   {
     
   }
   #box
    {
     
    }




   </style>
</head>
<body>
     <form method="post" id ="box">
     <div id ="">
<h2>LOG IN HERE</h2>

<label> User Name :</label><br>
<input type="text" name="username" name="username"
placeholder="Enter your First Name" required/><br><br>



<label> Password :</label><br>
<input type="password" name="password" name="password"
placeholder="Enter your password" required/><br><br>



<input type= "submit" value="log in" id="sub" name="loginphp">
</div>
</form>
 </body>
</html>

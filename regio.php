<html>
<head>
<title>Registration Form</title>
<style>
       body
       {
           text-align: center;
       }
       #register
       {

           border-width: 50%;
           border-radius: 50%;
       }
       body
       {
           background-image:url('body2.jpeg');
           background-repeat:no-repeat;
           background-size:cover;
           color: #1100CC ;
       }

</style>

</head>
<body>
<h1>Registration Form</h1>
<div class="register">
<form method="post" id="register" action="modified.php">
<h2>Register Here</h2>

<label> user Name :</label><br>
<input type="text" name="username" id="username"
placeholder="Enter your First Name" required/><br><br>





<label> Mobile Number :</label><br>
<select id="phone">
<option>+255</option>
<option>+254</option>
<option>+256</option>

</select>
<input type="number" name="MNum" id="num"
placeholder="Enter your Mobile Number"><br><br>

<label> Region :</label><br>
<select id="region">
<option>Dar es salaam</option>
<option>Arusha</option>
<option>Mwanza</option>
<option>Dodoma</option>
<option>Tanga</option>
</select> <br><br>


<label> email :</label><br>
<input type="email" name="email" id="email"
placeholder="Enter your email" required/>
  <br> <br>

<label> Password :</label><br>
<input type="password" name="password" id="password"
placeholder="Enter your password" required/><br><br>

<label> Re enter Password :</label><br>
<input type="password" name="psd2" id="name"
placeholder="Re Enter your password"required/><br><br>

<input type= "submit" value="submit" id="sub" name="loginphp">

</form>
</div>

</body>
</html>
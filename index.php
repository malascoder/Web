<?php
include('login.php');
if(isset($_SESSION['login_user'])){
    header("location: profile.php");
}
?>
<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Form Login</title>
    
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container"> 
<div class="main"> 
<form action="" method="post"> 
<h2>NYEKRIP.COM FORM LOGIN DENGAN PHP</h2><hr/>
<label>Username :</label> 
<input id="name" name="username" placeholder="username" type="text"> 
<label>Password :</label> 
<input id="password" name="password" placeholder="**********" type="password">
<input type="submit" name="submit" id="submit" value="Login">  
</form> 
</div>
</div> 
</body>
</html>
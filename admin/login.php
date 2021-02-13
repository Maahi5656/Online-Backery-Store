
<?php
$inputError="";

if(isset($_POST['submit'])){

  include('database.php');

  $username = $_POST['username'];
  $password = $_POST['password'];

  if(empty($username) || empty($password)){
    $inputError= "*Input Field Missing! Please Fill Out The Missing Field";

  }

  $query = "select * from admin where UserName ='$username' and Password= '$password' ";

  $result = mysqli_query($connection, $query);
  if(mysqli_num_rows($result) == 1){
     session_start();

    //create session variable
    $_SESSION['admin'] = 'true';
    $_SESSION['username'] = $username;
    header('location:index.php');
  }else{
    $inputError= "* Wrong Username Or Password! Please Try Again";
  }
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Transparent Login Form</title>
</head>
<body>
    <div class="login-box">
       <img src="img/avatar.png" class="avatar" alt="">
       <h1>Login Here</h1>
       <form method="post">
         <fieldset>
            <span class="error" style="color: red; font-size: 12px;"><?php echo $inputError;  ?></span>
         </fieldset>
         <fieldset>
           <p>Username</p>
           <input type="text" name="username" placeholder="Enter Username">
         </fieldset>
         <fieldset>
           <p>Password</p>
           <input type="password" name="password" placeholder="Enter Your Password" value="">
         </fieldset>
         <fieldset>
           <button type="submit" name="submit">Login</button>
           <a href="">Forgot Password?</a>
         </fieldset>

       </form>
    </div>
</body>
</html>
<style>
body{
  margin: 0;
  padding: 0;
  background: linear-gradient(rgb(239, 182, 102,0.8),rgba(0,0,0,0.5)), url('img/puro-backery-image.png');
  background-size: cover;
/*  background-position: center;*/
  background-repeat: no-repeat;
  font-family: 'Nunito', sans-serif;
  height: 100vh;
  transition: 0.5s;
}

.login-box{
  min-width: 350px;
  min-height: 420px;
  background: rgba(0, 0, 0, 0.85);
  color: #fff;
  position: absolute;
  box-sizing: border-box;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
  padding: 70px 30px;
  transition: 0.5s;
}

.avatar{
  width: 100px;
  height: 100px;
  border-radius: 50%;
  position: absolute;
  top: -50px;
  left: calc(50% - 50px);
}

h1{
  margin: 0;
  padding: 0 0 20px;
  text-align: center;
  font-size: 22px;
}

.login-box p{
  margin: 0;
  padding: 0;
  font-weight: bold;
}

.login-box input{
  width: 100%;
  margin-bottom: 20px;
}

.login-box input[type="text"], input[type="password"]{
  border: none;
  border-bottom: 1px solid #fff;
  background: transparent;
  outline: none;
  height: 40px;
  color: #fff;
  font-size: 16px;
  transition: 0.3s;
}

.login-box button[type="submit"]{
  border: none;
  outline: none;
  width:100%;
  height: 40px;
  background: #1c8adb;
  color: #fff;
  font-size: 18px;
  font-weight: bold;
  border-radius: 20px;
  transition: 0.5s;
  margin-bottom: 20px;
}

.login-box button[type="submit"]:hover{
  cursor: pointer;
  background: #39dc79;
}

.login-box a{
  text-decoration: none;
  font-size: 14px;
  color: #fff;
}

.login-box a:hover{
  color: blue;
}

fieldset{
  margin: 0;
  border: none;
  outline: none;
  padding-left: 0;
  padding-right: 0;
}

span.error{
  color: rgb(255, 0, 0);
  font-size: 12px;
  font-weight: bold;
  margin: 0;
  padding: 0;
  transition: 0.5s;
}



</style>

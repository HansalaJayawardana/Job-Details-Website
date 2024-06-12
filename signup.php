<?php
session_start();
include("connection.php");
include("function.php");

//  $user_data= check_login($con);
if($_SERVER['REQUEST_METHOD'] == "POST")
{
     $user_name = $_POST['user_name'];
      $email = $_POST['email'];
     $password = $_POST['password'];
     $confirmpassword = $_POST['confirmpassword'];
      if(!empty($user_name) && !empty($email) && !empty($password) && !empty($confirmpassword) && !is_numeric($user_name) && !is_numeric($email))
    {
        $user_id = random_num(20);
      $query = "insert into users (user_id,user_name,email,password,confirmpassword) values ('$user_id','$user_name','$email','$password','$confirmpassword')";
      mysqli_query($con, $query);
      header("Location: loging.php");
      die;
    }else
    {
        echo "Please enter some valid information!";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <!-- <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <title>Loging</title>
    <link rel="stylesheet" href="register.css">
</head>
<body>
    <style type="text/css">

    </style>
    
    <section>
        <div class="form-container">
           <h1>Register </h1> 
           <!-- <form action="#"> -->
            <form method="post">
            <div class="control">
                <label for="name">Enter Your Name</label>
                <input type="text" name="user_name" id="user_name">
            </div>
            <div class="control">
                <label for="name">Enter Your E-mail</label>
                <input type="text" name="email" id="email">
            </div>
            <div class="control">
               <label for="password">Enter password</label> 
               <input type="password" name="password" id="password">
            </div>
            <div class="control">
                <label for="psw">Confirm password</label> 
                <input type="confirmpassword" name="confirmpassword" id="confirmpassword">
             </div>
            
             <div class="control">
              <input type="submit"value="Register" >
                
            </div> 
            <a href="loging.php">Back to Login</a> 
           </form>
           <div class="link">
            <a href="#">Forgot password</a>
           </div>
        </div>
    </section>
</body>
</html>
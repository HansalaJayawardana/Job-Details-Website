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
    //     $user_id = random_num(20);
    //   $query = "insert into users (user_id,user_name,email,password,confirmpassword) values ('$user_id','$user_name','$email','$password','$confirmpassword')";
    //   mysqli_query($con,$query);
    //   header("Location:loging.php");
    //   die;
     $query = "select * from users where user_name= '$user_name' limit 1";
     $result =mysqli_query($con, $query);

     if($result)
     {
        if($result && mysqli_num_rows($result) > 0)
        {
            $user_data = mysqli_fetch_assoc($result);

            if($user_data['password'] == $password)
            {
                $_SESSION['user_id'] = $user_data['user_id'];
                header("Location: index.php");
                die;
            }
        }
     }
     echo"wrong username or password!";
    }else
    {
        echo"wrong username or password!";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <!-- <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <title>Login</title>
    <link rel="stylesheet" href="register.css">
</head>
<body>
    <style type="text/css">

    </style>
    
    <section>
        <div class="form-container">
           <h1>Login</h1> 
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
                <input type="password" name="confirmpassword" id="confirmpassword">
             </div>
            
             <div class="control">
              <input type="submit"value="Login" >
                
            </div> 
            <a href="signup.php">Click to Register</a> 
           </form>
           <div class="link">
            <a href="#">Forgot password</a>
           </div>
        </div>
    </section>
</body>
</html>

<!-- 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loging</title>
    <link rel="stylesheet" href="stylesinin.css">
</head>
<body>
    <style type="text/css">

    </style>
    <section>
        <div class="form-container">
           <h1>sing in </h1> 
            <form action="#" method="POST">
            <div class="control">
                <label for="name">E-mail</label>
                <input type="text" name="user_name" id="user_name">
            </div>
            <div class="control">
               <label for="psw">pasword</label> 
               <input type="password" name="password" id="password">
            </div>
            <span><input type="checkbox" >Remember me.</span>
            <div class="control">
                <input type="submit" value="Login">
            </div>
            <div class="control">
                <input type="submit" value="Regiter">
            </div>
           </form>
           <div class="link">
             <a href="signup.php">Signup</a> 
</br>
            <a href="#">Forgot password</a>
           </div>
        </div>
    </section>
</body>
</html> -->
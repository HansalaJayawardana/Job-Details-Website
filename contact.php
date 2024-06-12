<?php
session_start();
include("connection.php");
include("contactfunction.php");

//  $user_data= check_login($con);
if($_SERVER['REQUEST_METHOD'] == "POST")
{
     $first_name = $_POST['first_name'];
     $last_name = $_POST['last_name'];
     $phone = $_POST['phone'];
     $email = $_POST['email'];
     $message = $_POST['message'];

      if(!empty($first_name) && !empty($last_name) && !empty($phone) && !empty($email) && !empty($message) && !is_numeric($first_name) && !is_numeric($last_name) && !is_numeric($email))
    {
        $user_id = random_num(20);
      $query = "insert into usercontacts (user_id,first_name,last_name,phone,email,message) values ('$user_id','$first_name','$last_name','$phone','$email','$message')";
      mysqli_query($con, $query);
      header("Location: index.php");
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
     <title>Contact</title> 
    <!-- <link rel="stylesheet" href="register.css"> -->
    <link rel="stylesheet" href="contact.css">
</head>
<body>
<div class="navbar">
        <header>
            <h1 class="h1t">Wellcome To Top Jobs</h1>
           <!-- <a href="#"> <button class="btn1">SIGN IN</button></a> -->
            <a href="loging.php"><button class="btn">Log out</button></a>
        </header>
        <nav>
            <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="About Us.php">About Us</a></li>
                    <li><a href="Carrers.php">Careers</a></li>
                    <li><a href="Qualification.php">Qualification</a></li>
                    <li><a href="Portfolio.php">Portfoliyo</a></li>
                    <li><a href="Blog.php">Blog</a></li>
                   
                    <li><a href="Contact.php">Contact Us</a></li>
            </ul>
            <div class="mobnav">
                <h3>Menu</h3>
                <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="About Us.php">About Us</a></li>
                    <li><a href="Carrers.php">Careers</a></li>
                    <li><a href="Qualification.php">Qualification</a></li>
                    <li><a href="Portfolio.php">Portfoliyo</a></li>
                    <li><a href="Blog.php">Blog</a></li>
                   
                    <li><a href="Contact.php">Countack Us</a></li>
                </ul>
            </div>
        </nav>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.mobnav h3').click(function(){
                $('.mobnav ul').slideToggle();
            })

        });
    </script>
    
    <!-- <div class="header">
        <h1>BLOG </h1>
    </div> -->
    
    
    
    
   <!-- <div class="right">
<div class="button">Test Your Self</div>
    </div>-->

    <div class="form-container">
           <h1>Contact </h1> 

            <form method="post">
            <div class="control">
                <label for="name">Enter first_name</label>
                <input type="text" name="first_name" id="first_name">
            </div>
            <div class="control">
                <label for="name">Enter Your last_name</label>
                <input type="text" name="last_name" id="last_name">
            </div>
            <div class="control">
               <label for="name">Enter phone</label> 
               <input type="text" name="phone" id="phone">
            </div>
            <div class="control">
                <label for="name">Enter your email</label> 
                <input type="text" name="email" id="email">
             </div>
             <div class="control">
                <label for="name">message </label> 
                <input type="text" name="message" id="message">
             </div>
            
             <div class="control">
              <input type="submit"value="submit" >
                
            </div> 

           </form>
            <div class="link">
            <a href="loging.php">Back to Home</a>
           </div> 
            
        </div>



       
     
<!-- foot beging -->
<footer class="footer">
    <div class="container1">
        <div class="row">
            <div class="footer-col">
                <h4>Main Tab</h4>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="Carrers.php">Careers</a></li>
                    <li><a href="Qualification.php">Qualification</a></li>
                    <li><a href="Portfolio.php">Portfoliyo</a></li>
                    <li><a href="Blog.php">Blog</a></li>
                    <li><a href="About Us.php">About Us</a></li>
                    <li><a href="Contact.php">Countack Us</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Populer catagary</h4>
                <ul>
                    <li><a href="Carrers.php">Software</a></li>
                    <li><a href="Carrers.php">Developer</a></li>
                    <li><a href="Carrers.php">Managment</a></li>
                    <li><a href="Carrers.php">Network</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Porthfolio</h4>
                <ul>
                    <li><a href="#">Template</a></li>
                    <li><a href="#">Guid</a></li>
                </ul>
            </div>
            
             <div class="footer-col">  
                <h4>HELP</h4>
                <ul>
                    <li><a href="#">Contack Us</a></li>
                </ul>
            </div>

            
            
            
            
        </div>
    </div>
</footer>








    <!-- <section>
    <div class="form-container">
           <h1>Contact </h1> 

            <form method="post">
            <div class="control">
                <label for="name">Enter first_name</label>
                <input type="text" name="first_name" id="first_name">
            </div>
            <div class="control">
                <label for="name">Enter Your last_name</label>
                <input type="text" name="last_name" id="last_name">
            </div>
            <div class="control">
               <label for="name">Enter phone</label> 
               <input type="text" name="phone" id="phone">
            </div>
            <div class="control">
                <label for="name">Enter your email</label> 
                <input type="text" name="email" id="email">
             </div>
             <div class="control">
                <label for="name">message </label> 
                <input type="text" name="message" id="message">
             </div>
            
             <div class="control">
              <input type="submit"value="submit" >
                
            </div> 

           </form>
            <div class="link">
            <a href="loging.php">Back to Home</a>
           </div> 
            
        </div>
    </section> -->
</body>
</html>
<?php
//   session_start();
//   $_SESSION;
session_start();
include("connection.php");
include("function.php");

 $user_data= check_login($con);
?>















<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no,initial-scale=1.0">
    <link rel="stylesheet" href="home.css">
    <title>Jobs.lk</title>
    <script src="https://kit.fontawesome.com/c4254e24a8.js" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
    <header>
        <h1 class="h1t">Welcome to Top Jobs</h1>
       
        <a href="loging.php"><button class="btn">Log out</button></a>
    </header>
    <nav>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="About Us.php">About us</a></li>
            <li><a href="Carrers.php">Careers</a></li>
            <li><a href="Qualification.php">Qualification</a></li>
            <li><a href="Portfolio.php">Portfolio</a></li>
            <li><a href="Blog.php">Blog</a></li>
            <li><a href="contact.php">Contact Us</a></li>
        </ul>
        <div class="mobnav">
            <h3>Menu</h3>
            <ul>
            <li><a href="index.php">Home</a></li>
                    <li><a href="Carrers.php">Careers</a></li>
                    <li><a href="Qualification.php">Qualification</a></li>
                    <li><a href="Portfolio.php">Portfoliyo</a></li>
                    <li><a href="Blog.php">Blog</a></li>
                    <li><a href="About Us.php">About Us</a></li>
                    <li><a href="contact.php">Countack Us</a></li>
            </ul>
        </div>
    </nav>
</div>

    
    <div class="div1">
        <h1 class="h1d2">Start your career with us</h1>
        <div class="surch"><form>
            <i class="fas fa-search"></i>
            <input type="text" placeholder="What you are looking for?">
            <button type="submit">Search</button>
        </form>
    </div>
    <h4 class="h4d">With job stock, you can learn everything about it's features,<br> an informative and
        comprehensive documentation source which it offers.</h4>
    </div>
    <div class="div2">
        <h2 class="alin">What You Think About Your Skils</h2><br>
        <ul class="ul">
            <li><a class="img" href="Carrers.php"> <img class="a" src="1.jpeg" alt=""></a></li>
            <li><a class="img" href="Carrers.php"> <img class="a" src="res.jpeg" alt=""></a></li>
            <li><a class="img" href="Carrers.php"> <img class="a" src="resh.jpeg" alt=""></a></li>
            <li><a class="img" href="Carrers.php"> <img class="a" src="reshan.jpeg" alt=""></a></li>
        </ul>
        <p class="pd3">
            <b><a style="padding-left: 14%;" href="Carrers.php">Software</b></a>
            <b><a style="padding-left: 9%;" href="Carrers.php">Network</b></a>
            <b><a style="padding-left: 7%;" href="Carrers.php">Management</b></a>
            <b><a style="padding-left: 4%;" href="Carrers.php">Development</b></a>
        </p>
    </div>
    <div class="div3">
        <div><h1 class="h2h">What You Think About Your Skils</h1>
            <p class="p3">Job skills are the entire collection of skills you use to complete your work.
                They typically comprise: Workplace skills: The personal skills that ensure you do your job well, such as
                being adept at teamwork, time management, or solving problems.
            </div>
                <img class="img2" src="yar.jpeg" alt="tech photo">
            </p>
    </div>
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
                    <li><a href="contact.php">Contact Us</a></li>
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
                    <h4>Help</h4>
                    <ul>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.mobnav h3').click(function(){
                $('.mobnav ul').slideToggle();
            })

        });
    </script>
</body>
</html>
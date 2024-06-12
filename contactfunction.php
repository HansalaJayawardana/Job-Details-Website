<?php
function check_contact($con)//I change login to loging.
{
    if(isset($_SESSION['user_id']))
    {
        $id = $_SESSION['user_id'];
        $query = "select * from usercontacts where user_id = '$id' limit 1";
        
        $result = mysqli_query($con, $query);
        if($result && mysqli_num_rows($result) > 0)
        {
           $user_data = mysqli_fetch_assoc($result);
        //    print $user_data;
           return $user_data;
        }
    } 
    header("Location: contact.php");
    die;
}
function random_num($length)
{
   $text = "";
   if($length < 5)
   {
    $length = 5;
   }
   $len = rand(4,$length);
   for($i=0; $i < $len; $i++){
    # code...
    $text .= rand(0,9);

   }
   return $text;
}
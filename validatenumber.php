<?php
session_start();
echo $otp1 =$_POST['otp'];

if($otp1==$_SESSION['otp']){
    
   echo"verified successfully";
   header('location:signup.php');
   
}
else{
  echo"invalid opt";
}
?>
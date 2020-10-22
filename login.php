<?php
  if(isset($_POST['send'])){
      $name=$_POST['name'];
      $email=$_POST['email'];
      $message=$_POST['message'];
      

      $to="suchindramishra02@gmail.com";
      $subject="From submission";
      $message="Name: ".$name."\n"."Email: ".$email."\n"."Message: "."\n\n".$message ;
      $headers="From: ".$email;


      if(mail($to,$subject,$message,$headers)){
          echo"<h1>Sent Sucessfully! Thank you"." " .$name." , We will contact you shortly . Have a good day!</h1>";

      }


      else{
          echo"Something went wrong!";
        }
    }





?>
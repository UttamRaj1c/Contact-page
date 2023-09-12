<?php
 include 'conn.php';

 if(isset($_POST['done'])){
  $name = $_POST['name'];
  $email = $_POST['email'];
  $mobile=$_POST['mobile'];
  $sub=$_POST['sub'];
  $message=$_POST['message'];
  
  $q = " INSERT INTO demotable VALUES ( '$name','$email', '$mobile', '$sub', '$message' )";
 
  $query = mysqli_query($con,$q);
 
 }

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />''
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Form</title>
    <link rel="stylesheet" href="style.css" />
    <style>
      ::placeholder
      {
        color: white !important;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <div class="form">
        <div class="contact-form">
          <form action="" method="post" autocomplete="off">
            <h3 class="title">Contact us</h3>
            <div class="input-container">
              <input type="text" name="name" class="input" placeholder="FULLNAME" />
              
            </div>
            <div class="input-container">
              <input type="number" name="mobile" class="input" placeholder="MOBILE NO" />
              
              <span>Email</span>
            </div>
            <div class="input-container">
              <input type="email" name="email" class="input" placeholder="EMAIL"/>
              
            </div>
            <div class="input-container">
              <input type="text" name="sub" class="input" placeholder="SUBJECT" />
              
            </div>
            <div class="input-container textarea">
              <textarea name="message" class="input" placeholder="MESSAGE"></textarea>
              
            </div>
            <input type="submit" name="done" value="Send" class="btn" />
          </form>
        </div>
      </div>
    </div>
  </body>
</html>

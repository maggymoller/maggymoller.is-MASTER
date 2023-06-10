 <?php

/*$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

if(!empty($email) && !empty($message)){ //if email and message fields is not empty
if(filter_var($email, FILTER_VALIDATE_EMAIL)){
$subject = "From: $name <$email>";
$body = "Name: $name\nEmail: $email\nPhone: $phone\nWebsite: $website\n\nMessage: $message\n\nRegards, \n$name";
$sender = "From: $email"; //sender email
if(mail($receiver, $subject, $body,)){
    echo "Your message has been sent"
    else{
echo "Sorry, failed to send your message";    }
}
}else{
    echo "Enter a valid address";
}
}else{
    echo "Email and password field is required";
}
})} */

// PHP Code from CodingNepal begins 
<?php
  $name = htmlspecialchars($_POST['name']);
  $email = htmlspecialchars($_POST['email']);
  $phone = htmlspecialchars($_POST['phone']);
  $website = htmlspecialchars($_POST['website']);
  $message = htmlspecialchars($_POST['message']);
  if(!empty($email) && !empty($message)){
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
      $receiver = "maggy.moller@gmail.com"; //enter that email address where you want to receive all messages
      $subject = "From: $name <$email>";
      $body = "Name: $name\nEmail: $email\nPhone: $phone\nWebsite: $website\n\nMessage:\n$message\n\nRegards,\n$name";
      $sender = "From: $email";
      if(mail($receiver, $subject, $body, $sender)){
         echo "Your message has been sent";
      }else{
         echo "Sorry, failed to send your message!";
      }
    }else{
      echo "Enter a valid email address!";
    }
  }else{
    echo "Email and message field is required!";
  }
?>
// PHP Code from CodingNepal ends

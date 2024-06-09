<?php 
if (isset($_POST['btn-subscription'])) {
  
  $email = $_POST['email'];
  
  $headers = "MIME-Version: 1.0" . "\r\n";
  $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
  $message = "<html>
  <head>
  	<title>New subscription from following email:</title>
  </head>
  <body>
  	<h1>" . $email . "</h1>
  
  </body>
  </html>";
  if (mail('info@atomdigitalcorp.com', $headers)) {
   echo "Thank you for subscription..";
  }else{
   echo "Failed to send email. Please try again later.";
  }
}
?>
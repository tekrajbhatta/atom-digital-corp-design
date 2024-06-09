<?php 
if (isset($_POST['btn-send'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];
  $headers = "MIME-Version: 1.0" . "\r\n";
  $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
  $message = "<html>
  <head>
  	<title>New message from website contact form</title>
  </head>
  <body>
  	<h1>" . $subject . "</h1>
  	<p>".$msg."</p>
  </body>
  </html>";
  if (mail('info@atomdigitalcorp.com', $subject, $message, $headers)) {
   echo "Your email has been sent.";
  }else{
   echo "Failed to send email. Please try again later.";
  }
}
?>
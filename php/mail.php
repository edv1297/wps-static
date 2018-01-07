<?php
/* Subject and email variables */

  $emailSubject = 'Email from website';
  $webMaster = 'edv2@williams.edu';
  
/* Gathering Data Variables */
  $nameField = $_POST['name'];
  $emailField = $_POST['email'];
  $messageField = $_POST['message'];
  
  $body = <<<EOD
<br><hr><br>

Email: $email <br>
Name: $name <br>
Message: $message <br>
EOD;

  $headers = "From: $email\r\n";
  $headers .= "Content-type: text/html\r\n";
  $success = mail($webmaster,$emailSubject,$body,$headers);
  
  /* Results rendered as HTML */
  
  $theResults = <<<EOD
echo '<script language="javascript">';
echo 'alert("message successfully sent")';
echo '</script>';  
EOD;
  
?>
<?php

if (isset($_POST['subject']) && $_POST['subject'] == '') {
	
if(isset($_POST['email'])) {
     
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "jared@jmkentbuilding.com";
    $email_subject = "Website Contact Form";
	
    $name = $_POST['name']; 
    $email = $_POST['email']; 
    $phone = $_POST['phone']; 
    $message = $_POST['message'];
	
    $email_message = "This email was generated from the contact from at your website:\n\n";
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
     
    $email_message .= "Name: ".clean_string($name)."\n";
    $email_message .= "Email: ".clean_string($email)."\n";
    $email_message .= "Phone: ".clean_string($phone)."\n";
    $email_message .= "Message: ".clean_string($message)."\n";
     
     
// create email headers
$headers = 'From: '.$email."\r\n".
'Reply-To: '.$email."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers); 

}

} else {
	echo "Error";
}
?>


<?php include ("head.php"); ?> 
<?php include ("masthead.php"); ?> 
        <div id="content">
		<h1 class="center tagline" >Your message has been sent. </h1>
        <p class="center">Thank you for contacting J.M. Kent Building,<br/>we will be in touch with you as soon as possible.</p>
  <?php include ("footer.php"); ?> 
      


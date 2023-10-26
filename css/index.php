

<?php 
if(!empty($_POST['submit'])){
$name=$_POST['name'];
$email=$_POST['email'];
$num=$_POST['phone'];
$quantityName=$_POST['quantity'];
$widthName=$_POST['width'];
$heightName=$_POST['height'];
$styleName=$_POST['style'];
$backingName=$_POST['backing'];
$attachmentName = $_FILES['attachment']['name'];
    $attachmentTmpName = $_FILES['attachment']['tmp_name'];
$msg=$_POST['message'];

$to="mahmudul489@gmail.com";
$subject = 'New Inquiry from ' . $name;
//$mailheader= "Name: " . $name . "\r\n" . "Phone: " . $num . "\r\n" . "Email: " . $email;

    $headers = "From: $email\r\n";
   $headers = "MIME-Version: 1.0\r\n";
  //  $headers = "Content-Type: multipart/mixed; boundary=\"boundary\"\r\n";

$htmlContent = "Client Name: " .$name . "\r\n" . "Quantity:" .$quantityName . "\r\n" . "width: " .$widthName . "\r\n" . "height: " .$heightName . "\r\n" . "Style: " .$styleName ."\r\n". "Backing Name: " . $backingName. "\r\n". "Attachment: " .$attachmentName ;



if (mail($to, $subject, $htmlContent, $msg))
{
    Header("Location: thankyou.html");
}
}

?>
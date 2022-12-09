<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';

$mail = new PHPMailer();
$mail->IsSMTP();
$mail->Mailer = "smtp";

$mail->SMTPDebug  = 1;  
$mail->SMTPAuth   = TRUE;
$mail->SMTPSecure = "tls";
$mail->Port       = 587;
$mail->Host       = "smtp.gmail.com";
$mail->Username   = "hannah13200@gmail.com";
$mail->Password   = "hzwyscqvlnuuftfi";

$mail->IsHTML(true);
$mail->AddAddress("advikabhat3@gmail.com", "Advika");
$mail->SetFrom("hannah13200@gmail.com", "hannah");
$mail->AddReplyTo("advikabhat3@gmail.com", "Advika");
//$mail->AddCC("cc-recipient-email@domain", "cc-recipient-name");
$mail->Subject = "Test is Test Email sent via Gmail SMTP Server using PHP Mailer";
$content = "<b>This is a Test Email sent via Gmail SMTP Server using PHP mailer class.</b>";

/*if(isset($_POST["SubmitBtn"])){

$to = "advikabhat3@gmail.com";
$subject = "Contact mail";
$from=$_POST["email"];
$msg=$_POST["msg"];
$headers = "From: $from";

mail($to,$subject,$msg,$headers);
echo "Email successfully sent.";
}*/
$mail->MsgHTML($content); 
if(!$mail->Send()) {
  echo "Error while sending Email.";
  var_dump($mail);
} else {
  echo "Email sent successfully";
}
?>

<form id="emailForm" name="emailForm" method="post" action="" >
<table width="100%" border="0" align="center" cellpadding="4" cellspacing="1">
<tr>
  <td colspan="2"><strong>Online Contact Form</strong></td>
</tr>
<tr>
  <td>E-mail :</td>
  <td><input name="email" type="text" id="email"></td>
</tr>
<tr>
  <td>Message :</td>
  <td>
  <textarea name="msg" cols="45" rows="5" id="msg"></textarea>
  </td>
</tr>
<tr>
  <td>&nbsp;</td>
  <td><input name="SubmitBtn" type="submit" id="SubmitBtn" value="Submit"></td>
</tr>
</table>
</form>
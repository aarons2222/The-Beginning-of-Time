<?php
$field_subject = $_POST['subject'];
$field_name = $_POST['name'];
$field_email = $_POST['email'];
$field_message = $_POST['message'];

$email_to = 'aaron@aaronstrickland.co.uk';
$email_subject = 'Contact Form Message';

$body_message .= 'Name: '.$field_name."\n";
$body_message .= 'E-mail: '.$field_email."\n";
$body_message .= 'Subject: '.$field_subject."\n";
$body_message .= 'Message: '.$field_message;

$headers = "From: $field_email\r\n";
$headers .= "Reply-To: $field_email\r\n";

$mail_status = mail($email_to, $email_subject, $body_message, $headers);

if ($mail_status) { 


?>
<script language="javascript" type="text/javascript">
// Print a message
alert('Thank you for contacting Beginning Of Time,  will contact you shortly.');
// Redirect to some page of the site.
window.location = '../index.php';
</script>
<?php
}

else { ?>
<script language="javascript" type="text/javascript">
// Print a message
alert('Message failed. Please, call me on 07447 000 599');
// Redirect to some page of the site.
window.location = '../index.php';
</script>
<?php
}
?>


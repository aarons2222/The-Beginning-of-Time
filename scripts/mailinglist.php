<?php 


if (isset($_POST['submit'])){
	
	
	$con = mysql_connect("Your_DB_ADDRESS","YOUR_USERNAME","London1YOUR_PASSWORD");
	if (!$con){
		die("can not connect: " . mysql_error ());
		}
		
	mysql_select_db("YOUR_DB_NAME",$con);
	
$sql = "INSERT INTO maillist (email) VALUES ('$_POST[maillist]')";	


mysql_query($sql,$con);

mysql_close($con);		
}


?>



<?php
$field_email = $_POST['maillist'];


$email_to = 'EMAIL TO';
$email_subject = 'Newsletter Subscription';


$body_message .= 'I have subscribed to your mailing list';

$headers = "From: $field_email\r\n";
$headers .= "Reply-To: $field_email\r\n";

$mail_status = mail($email_to, $email_subject, $body_message, $headers);



$mail_status = mail($field_email, "Mailing list subscription!",
"Dear Sir/Madam, 


Thank you for subscribing to our monthly newsletter!


Yours sincerely,


Beginning Of Time", 

$headers='From: subscriptions@beginningoftime.co.uk');


if ($mail_status) { ?>
<script language="javascript" type="text/javascript">
// Print a message
alert('Thank you for subscribing to our mailing list..');
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
window.location = 'contact.html';
</script>
<?php
}
?>







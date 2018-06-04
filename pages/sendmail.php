<?php 
if (isset($_POST["send"])){

	$name = $_POST['name'];
	$visitor_email = $_POST['email'];
	$message = $_POST['message'];
	$email_from = 'tom.brissonnet@gmail.com';

	$email_subject = "New Form submission";

	$email_body = "You have received a new message from the user $name.\n".
					"Here is the message:\n $message";
	$to = "thomas.brissonnet@master-stic.fr";

	$headers = "From: $email_from \r\n";

	$headers .= "Reply-To: $visitor_email \r\n";

	mail($to,$email_subject,$email_body,$headers);
	
}
?>
<form method="post" name="myemailform" action="sendmail.php">

Enter Name:	<input type="text" name="name">

Enter Email Address:	<input type="text" name="email">

Enter Message:	<textarea name="message"></textarea>

<input name="send" type="submit" value="Send Form">
</form>
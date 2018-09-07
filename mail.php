<?php
if (isset($_POST['submit'])){
	$email_to="kotech.ke@gmail.com";
	$email=$_POST['email'];
	$subject= $_POST['subject'];
	$name= $_POST['name'];
	$message= $_POST['message'];

	mail($email_to,$name,$subject,$message,$email);

}

?>
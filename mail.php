<?php
if(isset($_POST['login'])){
$name=$_POST['name'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];
$to ="kotech.ke@gmail.com";
$headers ="From :$name "; 
$message ="Name: ".$name ."/n"."Email:".$email."subject: ".$subject."/n"."Message:".$message;
$headers="From:".$name;
mail($to,$subject,$message ,$headers);

}
?>

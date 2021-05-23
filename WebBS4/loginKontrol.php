<?php
error_reporting(0);
session_start();

$mail=$_POST["mail"];
$pass=$_POST["pass"];
$kayitlimail="g191210081@sakarya.edu.tr";
$kayitlipass="123456";
if(empty($_POST)==false)
{
  $mail=$_POST["mail"];
  $pass=$_POST["pass"];
  $kayitlimail="g19121081@sakarya.edu.tr";
  $kayitlipass="123456";



  if($mail==$kayitlimail||$pass==$kayitlipass)
  {
    header("location:basariligiris.html");
  }
  else
  {        
    header("location:login.php");
  };
}


?>
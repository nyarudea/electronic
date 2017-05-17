<?php 
require 'db/konek.php';
$name=$_POST['Name'];
$email=$_POST['Email'];
$password=$_POST['Password'];
$cpassword=$_POST['Password2'];

if($password==$cpassword)
{
$sql = "INSERT INTO member (Username, Email, Password) VALUES ('$name','$email', '$password')";
                     if ($conn->query($sql) === TRUE) 
                      {
                       echo "Sign up Berhasil<br>";
                       } 
}
else
{
	echo"password tdk sesuai<br>";
}
	echo"<a href=index.html>bek</a>";

?>
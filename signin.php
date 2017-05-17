<?php
require "db/konek.php";

$email=$_POST['Email'];
$password=$_POST['Password'];
// echo "$email<br>$password";
$sql = $conn->query("Select * FROM member WHERE Email ='$email' AND Password='$password'");
if($sql->num_rows>0)
	{
		while ($row = $sql->fetch_assoc()) {
				// echo $row['Username'];
            	echo "Sign up Berhasil<br>";
            }
    }
    else
    {
    	echo "pass salah";
    }
	echo"<a href=index.html>bek</a>";
?>
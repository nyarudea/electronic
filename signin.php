<?php
require "db/konek.php";

$email=$_POST['Email'];
$password=$_POST['Password'];
// echo "$email<br>$password";
$sql = $conn->prepare("Select * FROM member WHERE Email=? AND Password=?");
$sql->bind_param('ss', $email, $password);

$sql->execute();

$result = $sql->get_result();
if($result->num_rows>0)
	{
		while ($row = $result->fetch_assoc()) {
				//echo $row['Username'];
            	echo "Sign in Berhasil<br>";
            }
    }
    else
    {
    	echo "pass salah";
    }
	echo"<a href=index.html>bek</a>";
?>
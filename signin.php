<?php
require "db/konek.php";
session_start();

$email=$_POST['Email'];
$password=$_POST['Password'];
// echo "$email<br>$password";
$sql = $conn->prepare("Select * FROM member WHERE Email=? AND Password=?");
$sql->bind_param('ss', $email, $password);

$sql->execute();

$result = $sql->get_result();
if($result->num_rows>0)
{
	while($row = $result->fetch_assoc())
	{
		if($email==$row['Email'])
		{
			$_SESSION['email'] = $email;
			header("Location: home.php");
			exit();
		}
  }
}
?>

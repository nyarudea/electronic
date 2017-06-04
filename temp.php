<?PHP session_start();?>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>Electronic Store a Ecommerce Online Shopping Category Bootstrap Responsive Website Template | Products2 :: w3layouts</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Electronic Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	SmartPhone Compatible web template, free web designs for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
	function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<!-- Custom Theme files -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" /> 
<link href="css/fasthover.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- js -->
<script src="js/jquery.min.js"></script> 
<!-- //js -->  
<!-- web fonts --> 
<link href='//fonts.googleapis.com/css?family=Glegoo:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- //web fonts --> 
<!-- for bootstrap working -->
<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
<!-- //for bootstrap working -->
<!-- start-smooth-scrolling -->
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- //end-smooth-scrolling --> 
<style type="text/css">
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
</head> 

<body>

	<!-- header -->
	<div class="header" id="home1">
		<div class="container">
			<div class="w3l_logo">
				<h1><a href="index.php">Electronic Store<span>Your stores. Your place.</span></a></h1>
			</div>
			<div class="search">
				<input class="search_box" type="checkbox" id="search_box">
				<label class="icon-search" for="search_box"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></label>
				<div class="search_form">
					<form action="search.php" method="post">
						<input type="text" name="Search" placeholder="Search...">
						<input type="submit" value="Send">
					</form>
				</div>
			</div>

		</div>
	</div>
	<!-- //header -->
	<!-- navigation -->
		<div class="navigation">
		<div class="container">
			<nav class="navbar navbar-default">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header nav_2">
					<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
					<ul class="nav navbar-nav">
						<li><a href="home.php">Home</a></li>
						<li><a href="products.php">Products </a></li>
						<li><a href="products1.php">Products1 </a></li>
						<li><a href="products2.php">Products2 </a></li>
						<li><a href="about.php">About Us</a></li>
					</ul>
				</div>
			</nav>
		</div>
	</div>
	<!-- //navigation -->

<?PHP
require "db/konek.php";
$nama=$_SESSION['nama_barang'];
$harga=$_SESSION['harga'];
$email=$_SESSION['email'];
 if(isset($_SESSION["nama_barang"]) && !empty($_SESSION["nama_barang"]) && isset($_SESSION["harga"]) && !empty($_SESSION["harga"])  ){
$sql=$conn->query("INSERT INTO beli(nama_barang, harga,username) values ('$nama','$harga','$email')");
$x=1;
if ($sql === TRUE) {
    $sql2=$conn->query("SELECT * FROM beli WHERE username='$email'");
   if($sql2->num_rows>0)
{
	echo "<br><h1 align='center'>LIST BELANJA ANDA<table align='center'><tr>
						<th>
						No
						</th>
						<th>
							Nama Barang
						</th>
						<th>
							Harga
						</th>
					</tr>";
	while($row = $sql2->fetch_assoc())
	{
			echo "<tr>
						<td>
							$x
						</td>
						<td>";
							echo $row['nama_barang'];
						echo"</td>	
						<td>";
							echo $row['harga'];
						echo"</td>
					</tr>";
					$x++;
	}
$x++;
}
}
echo "</table></h1>"; }
else {
	echo "wasd";
}
echo "<h1 align='center'><a href='home.php'>kembali ke menu utama</a></h1>";
?>


<?PHP
require "db/konek.php";

$result3=$conn->query("SELECT * FROM barang WHERE id<=9");
if($result3->num_rows>0)
	{
		while ($row = $result3->fetch_assoc())
		 {
		 	// echo "a<br>";
			echo "<div class='w3ls_mobiles_grid_right_grid3'>";
			echo"<div class='col-md-4 agileinfo_new_products_grid agileinfo_new_products_grid_mobiles'>";
			echo"<div class='agile_ecommerce_tab_left mobiles_grid'>";
			echo"<img src='"; echo $row['url']; echo"' class='img-responsive' />";
			echo"<h5>"; echo $row['nama_barang'] ;echo "</h5> ";
			echo"<div class='simpleCart_shelfItem'>";
			echo"<p> <i class='item_price'>",$row['harga'],"</i></p>";
			echo"<form action='' method='post'>";
			echo"<input type='hidden' name='w3ls_item' value='Smart Phone' /> ";
			echo"<input type='hidden' name='amount' value='245.00'/>   ";
			echo"<button type='submit' class='w3ls-cart'>Add to cart</button>";
			echo"</form>";
			echo"</div> ";
			echo"<div class='mobiles_grid_pos'>";
			echo"	<h6>New</h6>";
			echo"	</div>";
			echo"</div>";
			echo"</div>";
		}
	}
?>


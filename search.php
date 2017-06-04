<?PHP
require "db/konek.php";
		$search=$_POST['Search'];
		$result = $conn->query("SELECT * FROM barang WHERE nama_barang LIKE '%$search%' OR harga LIKE '%$search%'");

if($result->num_rows>0)
{
	while($row = $result->fetch_assoc())
	{
			echo "<table align='center'>
					<tr>
						<td>";
							echo $row['nama_barang'];
						echo"</td>	
						<td>
							wads
						</td>
						<td>
							wuds
						</td>
					</tr>
					<tr>
						<td>
							asdw
						</td>
					</tr>
					</table>";
	}

}
else 
{
	echo "a";
}
		?>

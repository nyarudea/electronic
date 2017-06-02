<?PHP
require "db/konek.php";

$nama=$_POST['nama_barang'];
$harga=$_POST['harga'];
$a='1';
$sql=$conn->query("INSERT INTO beli(`nama_barang`, `harga`, `username`) values ('$nama','$harga','$a') ");
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
echo "<h1><a href='index.php'>kembali ke menu utama</a></h1>";
?>


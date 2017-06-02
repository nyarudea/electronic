<?PHP session_start();?>
<?PHP
require "db/konek.php";
$nama=$_SESSION['nama_barang'];
$harga=$_SESSION['harga'];
$sql=$conn->query("INSERT INTO beli(nama_barang, harga) values ('$nama','$harga')");

if ($sql === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
echo "<h1><a href='index.php'>kembali ke menu utama</a></h1>";
session_destroy();
?>


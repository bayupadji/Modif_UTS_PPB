<?php
$connection = mysqli_connect("localhost", "root", "", "dbjual");
$kd_brg = $_POST["kd_brg"];
$nm_brg = $_POST["nm_brg"];
$satuan = $_POST["satuan"];
$harga = $_POST["harga"];
$harga_beli = $_POST["harga_beli"];
$stok = $_POST["stok"];
$stok_min = $_POST["stok_min"];
$gambar = $_POST["gambar"];
$sql = "INSERT INTO barang(kd_brg, nm_brg, satuan, harga, harga_beli, stok, stok_min, gambar) VALUES ('$kd_brg', '$nm_brg', '$satuan',
'$harga', '$harga_beli', '$stok', '$stok_min', '$gambar')";
$result = mysqli_query($connection, $sql);
if ($result) {
    echo "Data Inserted";
} else {
    echo "Failed";
}
mysqli_close($connection);

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
$sql = "UPDATE barang SET nm_brg = '$nm_brg', satuan = '$satuan',harga = '$harga', harga_beli = '$harga_beli', stok = '$stok', stok_min = '$stok_min'
WHERE kode = '$kode', gambar = '$gambar'";
$result = mysqli_query($connection, $sql);
if ($result) {
    echo "Data Updated";
} else {
    echo "Failed";
}
mysqli_close($connection);

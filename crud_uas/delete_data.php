<?php
$connection = mysqli_connect("localhost", "root", "", "dbjual");
$kd_brg = $_POST["kd_brg"];
$sql = "DELETE FROM barang WHERE kd_brg = '$kd_brg'";
$result = mysqli_query($connection, $sql);
if ($result) {
    echo "Data Deleted";
} else {
    echo "Failed";
}
mysqli_close($connection);

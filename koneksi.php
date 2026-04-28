<?php
$conn = mysqli_connect("localhost", "root", "", "sql_injection_demo");

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
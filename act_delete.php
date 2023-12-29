<?php
    $koneksi = mysqli_connect("localhost","root","","inventory") or die ("Gagal Koneksi Database");
    $ID_barang = $_GET['ID_barang'];
    $query = "delete from barang where ID_barang = '$ID_barang'";
    $sql = mysqli_query($koneksi, $query) or die ("Gagal input" . $query);
    header("location:index.php");
?>
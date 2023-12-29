<?php
    $koneksi = mysqli_connect("localhost","root","","inventory") or die ("Gagal Koneksi Database");
    $ID_bentuk = $_POST['ID_bentuk'];
    $Nama_bentuk = $_POST['Nama_bentuk'];
    
    $query = "update bentuk_barang set ID_bentuk = '$ID_bentuk', Nama_bentuk = '$Nama_bentuk' where ID_bentuk = '$ID_bentuk'";

    $sql = mysqli_query($koneksi, $query) or die("Gagal input".$query);
    header("location:index.php");
?>
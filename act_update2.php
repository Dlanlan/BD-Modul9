<?php
    $koneksi = mysqli_connect("localhost","root","","inventory") or die ("Gagal Koneksi Database");
    $ID_pegawai = $_POST['ID_pegawai'];
    $Nama_pegawai = $_POST['Nama_pegawai'];
    $Alamat = $_POST['Alamat'];
    $Nomor_telepon = $_POST['Nomor_telepon'];
    $ID_barang = $_POST['ID_barang'];
    
    $query = "update pegawai set ID_pegawai = '$ID_pegawai', Nama_pegawai = '$Nama_pegawai', Alamat = '$Alamat', Nomor_telepon = '$Nomor_telepon', ID_barang = '$ID_barang' where ID_pegawai = '$ID_pegawai'";

    $sql = mysqli_query($koneksi, $query) or die("Gagal input".$query);
    header("location:index.php");
?>
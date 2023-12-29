<?php
    $koneksi = mysqli_connect("localhost","root","","inventory") or die ("Gagal Koneksi Database");
    $ID_pegawai = $_POST['ID_pegawai'];
    $Nama_pegawai = $_POST['Nama_pegawai'];
    $Alamat = $_POST['Alamat'];
    $Nomor_telepon = $_POST['Nomor_telepon'];
    $ID_barang = $_POST['ID_barang'];
    
    $query = "insert into pegawai values('$ID_pegawai', '$Nama_pegawai', '$Alamat', '$Nomor_telepon', '$ID_barang')";
    $sql = mysqli_query($koneksi, $query) or die("Gagal input".$query);
    header("location:index.php");
?>
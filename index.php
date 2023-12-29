<?php
$koneksi = mysqli_connect("localhost", "root", "", "inventory") or die("Gagal koneksi database");
// echo "Sukses koneksi database";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modul 9</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- title icon -->
    <link rel="icon" href="https://cdn.discordapp.com/attachments/813500727199662181/1186858632143446046/chara_stand_1089_108901.png?ex=6594c73c&is=6582523c&hm=780bfe5d5444841f55e1e6d9f27332db8e7da638ac047bdf056e9f8eaaa757a0&" type="image/css">

    <!-- css -->
    <style>

    </style>

</head>

<body style="background-color: #f3f3f3;">
    <!-- navbar -->
    <nav class="navbar bg-dark bg-body-tertiary" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-backpack4" viewBox="0 0 20 20">
                    <path d="M4 9.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5zm1 .5v3h6v-3h-1v.5a.5.5 0 0 1-1 0V10z" />
                    <path d="M8 0a2 2 0 0 0-2 2H3.5a2 2 0 0 0-2 2v1c0 .52.198.993.523 1.349A.5.5 0 0 0 2 6.5V14a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V6.5a.5.5 0 0 0-.023-.151c.325-.356.523-.83.523-1.349V4a2 2 0 0 0-2-2H10a2 2 0 0 0-2-2m0 1a1 1 0 0 0-1 1h2a1 1 0 0 0-1-1M3 14V6.937c.16.041.327.063.5.063h4v.5a.5.5 0 0 0 1 0V7h4c.173 0 .34-.022.5-.063V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1m9.5-11a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1h-9a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1z" />
                </svg>
                Inventori
            </a>
        </div>
    </nav>

    <!-- content 3 -->
    <div class="container mt-3" style="background-color: #b3b3b3; border-radius: 5px;">
        <h2 style="color: white;">Bentuk Barang</h2>
        <!-- button add -->
        <a href="input3.php"><button type="button" class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2" />
                </svg> Add</button></a>

        <table class="table table-striped table-hover mt-3">
            <!-- header -->
            <tr>
                <th>ID Bentuk</th>
                <th>Nama Bentuk</th>
                <th colspan="2" style="text-align: center;">Action</th>
            </tr>

            <?php
            $query = "select * from bentuk_barang";
            $data = mysqli_query($koneksi, $query) or die("Gagal query :" . $query);
            ?>

            <?php while ($v = mysqli_fetch_array($data)) :; ?>
                <tr>
                    <td><?php echo $v["ID_bentuk"]; ?></td>
                    <td><?php echo $v["Nama_bentuk"]; ?></td>

                    <!-- button action -->
                    <td><a href="act_delete3.php?ID_bentuk=<?php echo $v["ID_bentuk"]; ?>"><button type="button" class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z" />
                                    <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z" />
                                </svg> Delete</button></a>&nbsp;</td>

                    <td><a href="update3.php?ID_bentuk=<?php echo $v["ID_bentuk"]; ?>"><button type="button" class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z" />
                                </svg> Update</button></a></td>
                </tr>
            <?php endwhile; ?>
        </table>
    </div>
    <!-- content 3 end -->

    <!-- content 1 -->
    <div class="container mt-3" style="background-color: #b3b3b3; border-radius: 5px;">
        <h2 style="color: white;">Barang</h2>
        <!-- button add -->
        <a href="input.php"><button type="button" class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2" />
                </svg> Add</button></a>

        <table class="table table-striped table-hover mt-3">
            <!-- header -->
            <tr>
                <th>ID Barang</th>
                <th>Nama Barang</th>
                <th>Jenis Barang</th>
                <th>Bentuk Barang (ID)</th>
                <th>Stok</th>
                <th>Kadaluarsa</th>
                <th colspan="2" style="text-align: center;">Action</th>
            </tr>

            <?php
            $query = "select * from barang";
            $data = mysqli_query($koneksi, $query) or die("Gagal query :" . $query);
            ?>

            <?php while ($v = mysqli_fetch_array($data)) :; ?>
                <tr>
                    <td><?php echo $v["ID_barang"]; ?></td>
                    <td><?php echo $v["Nama_barang"]; ?></td>
                    <td><?php echo $v["Jenis_barang"]; ?></td>
                    <td><?php echo $v["Bentuk_barang"]; ?></td>
                    <td><?php echo $v["Stok"]; ?></td>
                    <td><?php echo $v["Kadaluarsa"]; ?></td>

                    <!-- button action -->
                    <td><a href="act_delete.php?ID_barang=<?php echo $v["ID_barang"]; ?>"><button type="button" class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z" />
                                    <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z" />
                                </svg> Delete</button></a>&nbsp;</td>

                    <td><a href="update.php?ID_barang=<?php echo $v["ID_barang"]; ?>"><button type="button" class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z" />
                                </svg> Update</button></a></td>
                </tr>
            <?php endwhile; ?>
        </table>
    </div>
    <!-- content 1 end -->

    <!-- content 2 -->
    <div class="container mt-3" style="background-color: #b3b3b3; border-radius: 5px;">
        <h2 style="color: white;">Pegawai</h2>
        <!-- button add -->
        <a href="input2.php"><button type="button" class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2" />
                </svg> Add</button></a>

        <table class="table table-striped table-hover mt-3">
            <!-- header -->
            <tr>
                <th>ID Pegawai</th>
                <th>Nama Pegawai</th>
                <th>Alamat</th>
                <th>No Telp</th>
                <th>Mengambil Barang (ID)</th>
                <th colspan="2" style="text-align: center;">Action</th>
            </tr>

            <?php
            $query = "select * from pegawai";
            $data = mysqli_query($koneksi, $query) or die("Gagal query :" . $query);
            ?>

            <?php while ($v = mysqli_fetch_array($data)) :; ?>
                <tr>
                    <td><?php echo $v["ID_pegawai"]; ?></td>
                    <td><?php echo $v["Nama_pegawai"]; ?></td>
                    <td><?php echo $v["Alamat"]; ?></td>
                    <td><?php echo $v["Nomor_telepon"]; ?></td>
                    <td><?php echo $v["ID_barang"]; ?></td>

                    <!-- button action -->
                    <td><a href="act_delete2.php?ID_pegawai=<?php echo $v["ID_pegawai"]; ?>"><button type="button" class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z" />
                                    <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z" />
                                </svg> Delete</button></a>&nbsp;</td>

                    <td><a href="update2.php?ID_pegawai=<?php echo $v["ID_pegawai"]; ?>"><button type="button" class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z" />
                                </svg> Update</button></a></td>
                </tr>
            <?php endwhile; ?>
        </table>
    </div>
    <!-- content 2 end -->

    <!-- footer -->
    <div class="container" style="background-color: #b3b3b3; border-radius: 5px;">
        <h2 style="color: white;">Our Teams</h2>
        <div class="card-group">
            <div class="card">
                <img src="https://cdn.discordapp.com/attachments/852499762098864140/1190144546202468432/WhatsApp_Image_2023-12-29_at_11.04.47_4df0b2a2.jpg?ex=65a0bb7b&is=658e467b&hm=33313c7ba779dbd49f305c6b206034a14bab0e20bb955a5f8aace42f4071060b&" style="width: 100px; height: 100px; border-radius:5px;" class="card-img-top" alt=" ">
                <div class="card-body">
                    <h5 class="card-title">Anwar Syarifuddin</h5>
                    <h5 class="card-title">2250081025</h5>
                </div>
            </div>

            <div class="card">
                <img src="https://cdn.discordapp.com/attachments/852499762098864140/1190145090920915074/image.png?ex=65a0bbfd&is=658e46fd&hm=90367f57bda495bfbd41eab3f718da9846591b4749786be8912ac73ebe7347aa&" style="width: 100px; height: 100px; border-radius:5px;" class="card-img-top" alt=" ">
                <div class="card-body">
                    <h5 class="card-title">El Ridho</h5>
                    <h5 class="card-title">2250081023</h5>
                </div>
            </div>

            <div class="card">
                <img src="https://cdn.discordapp.com/attachments/852499762098864140/1190144587054993498/WhatsApp_Image_2023-12-29_at_11.04.47_64d8efea.jpg?ex=65a0bb85&is=658e4685&hm=f596901db2644c01bf81c69d67612472d235ac39985332d97fc67cde525ab4e4&" style="width: 100px; height: 100px; border-radius:5px;" class="card-img-top" alt=" ">
                <div class="card-body">
                    <h5 class="card-title">Muhammad Fadlan Dzikra</h5>
                    <h5 class="card-title">2250081001</h5>
                </div>
            </div>
        </div>
    </div>

    <!-- script bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>
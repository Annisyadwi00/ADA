<?php

include_once("./connect.php");

$query = mysqli_query($db , "SELECT * FROM mahasiswa");
?>

<!DOCTYPE html>
<html lang="en">
<head>
<style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-image: url('Wenzhou Dalton Elementary School _ FAX ARCHITECTS.jpeg'); /* Ganti dengan path gambar background */
            background-size: cover;
            background-position: center;
        }
        .container {
            text-align: center;
            color: white;
            padding: 25px;
            background-color: rgba(0, 0, 0, 0.5); /* Transparan hitam untuk membuat teks lebih terbaca */
            margin: 50px auto;
            width: 50%;
            border-radius: 50px;
        }
        h1 {
            margin: 0;
            font-size: 3em;
        }
        p {
            font-size: 1.2em;
            margin: 20px 0;
        }
        .btn {
            display: inline-block;
            padding: 10px 20px;
            font-size: 1em;
            color: white;
            background-color: #007BFF;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            cursor: pointer;
        }
        .btn:hover {
            background-color: #0056b3;
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATA MAHASISWA</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1 align ="center" class="container">DATA MAHASISWA</h1>

    <table border="2" width ="100%" align="center"  cellspacing="10">
        <tr height ="50px" bgcolor ="lightblue" >
            <th width = 30%  >Nama</th>
            <th width = 15%>NPM</th>
            <th width = 10%>Prodi</th>
            <th width = "15%x" >Action</th>
        </tr>

        <?php foreach ($query as $mahasiswa){ ?>
            <tr height ="30px" bgcolor ="lightgrey">
                <td><?php echo $mahasiswa["nama"]?></td>
                <td><?php echo $mahasiswa["npm"]?></td>
                <td><?php echo $mahasiswa["prodi"]?></td>

                <td>
                    <table border ="1" align="right">
                        <tr bgcolor ="lightgrey" >
                            <th width ="100px" align="center"> <a href=<?php echo "edit-buku.php?id=" . $mahasiswa["id"] ?>>EDIT</a></th>
                            <th width ="100px" align="center"> <a href=<?php echo "delete-buku.php?id=" . $mahasiswa["id"] ?>>HAPUS</a></th>
                        </tr>
                    </table>
                </td>
            </tr>

       <?php } ?>
    </table>
    
    <br><br><br>

    <table border ="2" align="center" cellspacing="10" width = "50%">
                        <tr bgcolor ="white">
                            <th width ="100px" align="center"> <a href="./tambah-data.php">Tambahkan data mahasiswa</a></th>
                            <th width ="100px" align="center"> <a href="./index.php">Kembali ke halaman utama</a></th>
                        </tr>
                    </table>
    
    <br>
    
    
</body>
</html>
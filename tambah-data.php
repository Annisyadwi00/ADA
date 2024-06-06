<?php

    include_once("./connect.php");
    if(isset($_POST["submit"])){
        $nama = $_POST["nama"];
        $npm = $_POST["npm"];
        $prodi = $_POST["prodi"];

        $query = mysqli_query($db, "INSERT INTO mahasiswa VALUES(
            NULL, '$nama', '$npm', '$prodi')");
    }
?>

<!DOCTYPE html>
<html>
<head>
    <style>
        * {
          box-sizing: border-box;
        }

        input[type=text], select, textarea {
          width: 100%;
          padding: 12px;
          border: 1px solid #ccc;
          border-radius: 4px;
          resize: vertical;
        }

        label {
          padding: 12px 12px 12px 0;
          display: inline-block;
        }

        input[type=submit] {
          background-color: #04AA6D;
          color: white;
          padding: 12px 20px;
          border: none;
          border-radius: 4px;
          cursor: pointer;
          float: right;
        }

        input[type=submit]:hover {
          background-color: #45a049;
        }

        .container {
          border-radius: 5px;
          background-color: #f2f2f2;
          padding: 20px;
        }

        .col-25 {
          float: left;
          width: 25%;
          margin-top: 6px;
        }

        .col-75 {
          float: left;
          width: 75%;
          margin-top: 6px;
        }

        /* Clear floats after the columns */
        .row::after {
          content: "";
          display: table;
          clear: both;
        }

        /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
        @media screen and (max-width: 600px) {
          .col-25, .col-75, input[type=submit] {
            width: 100%;
            margin-top: 5%;
          }
        }
    </style>
    <title>FORM PENAMBAHAN DATA MAHASISWA</title>
</head>
<body>


<div class="container">
    <h1 align ="center">Form Penambahan Data Mahasiswa</h1>
    <form class="form" action="" method="POST">
    <div class="row">
            <div class="col-25">
                <label for="nama">Nama</label>
            </div>
            <div class="col-75">
                <input type="text" id="nama" name="nama">
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="npm">NPM</label>
            </div>
            <div class="col-75">
                <input type="text" id="npm" name="npm">
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="prodi">Prodi</label>
            </div>
            <div class="col-75">
                <input type="text" id="prodi" name="prodi">
            </div>
        </div>
        <div class="row">
            <input type="submit" value="Submit" name="submit">
        </div>
    </form>
    <br><br>
    <table border="2" cellspacing="10" width="50%" align="center">
        <tr bgcolor="white">
            <th width="100px" align="center"><a href="./data-mhs.php">Kembali ke Daftar Mahasiswa</a><br></th>
            <th width="100px" align="center"><a href="./index.php">Kembali ke halaman Utama</a></th>
        </tr>
    </table>
</div>

</body>
</html>

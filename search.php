<?php
include_once("./connect.php"); // Pastikan file db_connect.php sudah menyertakan kode koneksi seperti yang Anda berikan sebelumnya.

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $npm = $_POST['npm'];
    $prodi = $_POST['prodi'];

    function searchStudent($db, $nama, $npm, $prodi) {
        if ($db === null) {
            throw new Exception("Database connection is not set");
        }

        $query = "SELECT * FROM mahasiswa";
        $conditions = array();

        if (!empty($nama)) {
            $conditions[] = "nama LIKE '%$nama%'";
        }

        if (!empty($npm)) {
            $conditions[] = "npm='$npm'";
        }

        if (!empty($prodi)) {
            $conditions[] = "prodi LIKE '%$prodi%'";
        }

        if (count($conditions) > 0) {
            $query .= " WHERE " . implode(' OR ', $conditions);
        }

        $query .= " LIMIT 1"; // Limit to 1 result for backtracking purposes

        $result = mysqli_query($db, $query); // Menggunakan variabel $db untuk melakukan query

        if ($result && mysqli_num_rows($result) > 0) {
            return mysqli_fetch_assoc($result);
        } else {
            return null;
        }
    }

    try {
        $result = searchStudent($db, $nama, $npm, $prodi);

        if ($result) {
            echo "Data Mahasiswa Ditemukan: <br>";
            echo "Nama: " . $result['nama'] . "<br>";
            echo "NPM: " . $result['npm'] . "<br>";
            echo "Prodi: " . $result['prodi'] . "<br>";
        } else {
            echo "Data Mahasiswa Tidak Ditemukan.";
        }
    } catch (Exception $e) {
        echo 'Caught exception: ',  $e->getMessage(), "\n";
    }

    mysqli_close($db);
}
?>

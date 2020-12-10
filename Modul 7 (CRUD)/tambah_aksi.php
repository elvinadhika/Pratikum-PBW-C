<?php
include 'koneksi.php';

    if(isset($_POST['simpan'])) {
        $nim = $_POST['nim'];
        $nama = $_POST['nama'];
        $telp = $_POST['telp'];
        $alamat = $_POST['alamat'];
        $email = $_POST['email'];
        $prodi = $_POST['prodi'];

        include_once("koneksi.php");

        $result  = mysqli_query($mysqli, "INSERT INTO mahasiswa(nim,nama,telp,alamat,email,prodi) VALUES('$nim','$nama','$telp','$alamat','$email','$prodi')");
        echo "<script>alert('Data Berhasil Disimpan');location='index.php';</script>";
    }
?>
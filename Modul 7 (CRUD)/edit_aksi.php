<?php
include 'koneksi.php';

if (isset($_POST['update']))
{
    $nim = $_POST['nim'];

    $nama = $_POST['nama'];
    $telp = $_POST['telp'];
    $alamat = $_POST['alamat'];
    $email = $_POST['email'];
    $prodi = $_POST['prodi'];

    $result  = mysqli_query($mysqli, "UPDATE mahasiswa SET nama='$nama',telp='$telp',alamat='$alamat',email='$email',prodi='$prodi' WHERE nim=$nim");

        echo "<script>alert('Data Berhasil Diubah');location='index.php';</script>";
}
?>
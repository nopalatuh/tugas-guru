<?php
include("convig.php");

if(isset($_POST['daftar'])){
    $nama = $_POST['nama'];
    $alamat = $_POST['jenis_kelamin'];
    $jk = $_POST['alamat'];
    $agama = $_POST['number'];
    $sekolah = $_POST['email'];
    $sql = "INSERT INTO data_guru (nama,jenis_kelamin,alamat,no_telpon, 
    email) VALUE ('$nama', '$alamat', '$jk', '$agama', '$sekolah')";
    $query = mysqli_query($db, $sql);
    if( $query ) {
        header('Location: index.php?status=sukses');
    } else {
        
        header('Location: index.php?status=gagal');
    }
} else {
    die("Akses dilarang...");
}
?>
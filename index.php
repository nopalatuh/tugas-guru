<?php include("convig.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMK Negeri 1 Lagos</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">SMK Negeri 1 cisarua</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    <a class="nav-link" href="form-daftar.php">Pendaftaran</a>
                </div>
            </div>
        </div>
    </nav>
    <div class="container mt-4">
        <h2>Data Pelanggan</h2>
        <a class="btn btn-primary" href="form-daftar.php" role="button">Tambah Data</a>
        <br><br>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>jenis kelamin</th>
                    <th>alamat</th>
                    <th>no telpon</th>
                    <th>email</th>
                    <th>Aksi</th>
                </tr> 
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM data_guru";
                $query = mysqli_query($db, $sql);
                while($siswa = mysqli_fetch_array($query)) {
                    echo "<tr>";
                    echo "<td>".$siswa['id_guru']."</td>";
                    echo "<td>".$siswa['nama']."</td>";
                    echo "<td>".$siswa['jenis_kelamin']."</td>";
                    echo "<td>".$siswa['alamat']."</td>";
                    echo "<td>".$siswa['no_telpon']."</td>";
                    echo "<td>".$siswa['email']."</td>";
                    echo "<td>
                        <a href='index.php?edit=" . $siswa['id_guru'] . "' class='btn btn-warning'>Edit</a>
                        <a href='index.php?delete=" . $siswa['id_guru']. "' class='btn btn-danger'>Delete</a>
                    </td>";
                    echo "</tr>"; // Close the table row properly
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>

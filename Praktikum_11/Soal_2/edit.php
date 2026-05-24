<?php
include 'koneksi.php';

$id = $_GET['id'];

$data = mysqli_query($conn, "SELECT * FROM siswa WHERE id='$id'");
$d = mysqli_fetch_array($data);
?>

<html>
<head>
    <title>Alex simon sianturi_2473036</title>
    <style type="text/css">
        body{
            font-family: Arial;
        }

        .box{
            width: 400px;
            border: 1px solid lightgray;
            border-radius: 8px;
            padding: 20px;
            margin: auto;
        }

        .simpan{
            background-color: green;
            color: white;
            border: 0px;
            padding: 8px;
        }

        .kembali{
            background-color: dodgerblue;
            color: white;
            padding: 8px;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <div class="box">

        <h2 style="text-align: center;">Edit Data Siswa</h2>

        <form method="POST" action="proses_edit.php">
            <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
            Nama :
            <br>
            <input type="text" name="nama" value="<?php echo $d['nama']; ?>">

            <br><br>

            Kelas :
            <br>
            <input type="text" name="kelas" value="<?php echo $d['kelas']; ?>">

            <br><br>

            <input type="submit" value="update" class="simpan">

            <br><br>

            <a href="index.php" class="kembali">Kembali</a>

        </form>
    </div>

</body>

</html>
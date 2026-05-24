<?php
include 'koneksi.php';

$data = mysqli_query($conn, "SELECT * FROM siswa");
?>

<html>

<head>
    <title>Alex simon sianturi_2473036</title>
    <style type="text/css">

        body{
            font-family: Arial;
        }

        .box{
            width: 500px;
            border: 1px solid lightgray;
            border-radius: 5px;
            padding: 20px;
            margin: auto;
        }

        table{
            width: 100%;
            border-collapse: collapse;
        }

        th{
            background-color: #eeeeee;
        }

        th, td{
            padding: 8px;
            border: 1px solid lightgray;
            text-align: center;
        }

        .tambah{
            background-color: green;
            color: white;
            padding: 8px;
            text-decoration: none;
        }

        .edit{
            background-color: dodgerblue;
            color: white;
            padding: 5px;
            text-decoration: none;
        }

        .hapus{
            background-color: red;
            color: white;
            padding: 5px;
            text-decoration: none;
        }

    </style>

</head>

<body>

    <div class="box">

        <h2 style="text-align: center;">Data Siswa</h2>

        <a href="tambah.php" class="tambah">Tambah Data</a>

        <br><br>

        <table>

            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Kelas</th>
                <th>Aksi</th>
            </tr>

            <?php
            while($d = mysqli_fetch_array($data)){
            ?>

            <tr>
                <td><?php echo $d['id']; ?></td>
                <td><?php echo $d['nama']; ?></td>
                <td><?php echo $d['kelas']; ?></td>
                <td>
                    <a href="edit.php?id=<?php echo $d['id']; ?>" class="edit">Edit</a>

                    <a href="hapus.php?id=<?php echo $d['id']; ?>" class="hapus">Hapus</a>
                </td>
            </tr>

            <?php
            }
            ?>

        </table>
    </div>

</body>

</html>
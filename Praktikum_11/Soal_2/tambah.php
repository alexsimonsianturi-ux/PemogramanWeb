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
            border-radius: 5px;
            padding: 20px;
            margin: auto;
        }

        input[type=text]{
            width: 100%;
            padding: 8px;
        }

       .simpan{
            background-color: green;
            color: white;
            border: 0px;
            padding: 8px 12px;
            border-radius: 3px;
        }

        .kembali{
            background-color: dodgerblue;
            color: white;
            padding: 8px 12px;
            text-decoration: none;
            border-radius: 3px;
        }

    </style>

</head>

<body>
    <div class="box">


        <h2 style="text-align: center;">Tambah Data Siswa</h2>

        <form method="POST" action="proses_tambah.php">

            Nama :
            <br>
            <input type="text" name="nama">

            <br><br>

            Kelas :
            <br>
            <input type="text" name="kelas">

            <br><br>

            <input type="submit" value="Simpan" class="simpan">

            <br><br>

            <a href="index.php" class="kembali">Kembali</a>

        </form>
    </div>
</body>
</html>
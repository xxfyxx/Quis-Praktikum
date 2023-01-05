<?php include("config.php");?>

<html>
    <head>
        <title>system informasi kepegawaian</title>
    </head>
    <body>
        <header>
            <h3>Pendaftaran Pegawai Baru</h3>
        </header>
        <nav>
            <a href="form-daftar.php">[+] Tambah Data</a>
        </nav>

        <br>

        <table border="1">

        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Jenis Kelamin</th>
                <th>Agama</th>
                <th>Pendidikan Terakhir</th>
                <th>pengalaman</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM nama pegawai";
            $query = mysqli_query($db, $sql);
            
            while($np = mysqli_fetch_array($query))
            {
                echo"<tr>";
                echo"<td>".$np['id']."</td>";
                echo"<td>".$np['nama']."</td>";
                echo"<td>".$np['alamat']."</td>";
                echo"<td>".$np['jenis_kelamin']."</td>";
                echo"<td>".$np['agama']."</td>";
                echo"<td>".$np['pendidikan_terakhir']."</td>";
                echo"<td>".$np['pengalaman']."</td>";

                echo"<td>";
                echo"<a href='form-edit.php?id=".$np['id'].">Hapus</a>";
                echo"<a href='hapus.php?id=".$np['id'].">Hapus</a>";
                echo"</td>";
                echo"</tr>";
            }
            ?>
        </tbody>
        </table>
        <p>Total:<?php echo mysqli_num_rows($query)?></p>
    </body>
</html>
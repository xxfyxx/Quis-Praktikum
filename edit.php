<?php
include("config.php");
?>

<html>
    <head>
        <title>edit</title>
    </head>
    <body>
        <table>
            <tr>
                <td><a href="form-daftar.php">form pendaftaran</a></td>
                <td><a href="list-pegawai.php">list pegawai</a></td>
            </tr>
        </table>
        <table>
            <?php
            $id=$_GET['id'];
            $query=mysql_query("SELECT *  FROM pegawai WHERE id='".$id."'");
            $data=mysql_fetch_assoc($query);
            if(isset($_POST['edit']))
            {
                $query=mysql_query("UPDATE barang SET nama_pegawai'".$_POST.['nama_pegawai']."' WHERE id='$id'");
                if($query)
                {
                    echo"data berhasil disimpan";
                    $query=mysql_query("SELECT * FROM pegawai WHERE id='".$id."'");
                    $data=mysql_fetch_assoc($query);
                }else{
                    echo"data gagal disimpan".mysql_error();
                }
            }
            ?>
            <form method="POST">
                <tr>
                    <td>Nama Pegawai</td>
                    <td><input type="text" name="nama_pegawai" size="30" value="<?php echo
                    $data['nama_pegawai'];?>"></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" name="edit" value="Edit"></td>
                </tr>
        </form>
        </table>
    </body>
</html>
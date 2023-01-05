<?php include("config.php");

// cek apakah tombol daftar sudah diklik atau belum?
if(isset($_POST['daftar']));
{

    // ambil data dari formulir
    $id=$_POST['id'];
    $nama=$_POST['nama'];
    $jk=$_POST['jenis_kelamin'];
    $tl=$_POST['tanggal_lahiir'];
    $alamat=$_POST['alamat'];
    $agama=$_POST['agama'];

    // buat query
    $sql = "INSERT INTO nama pegawai (id, nama, jenis_kelamin, tanggal_lahir, alamat, agama) VALUE ('$id', '$nama', '$jk', '$tl', '$alamat', '$agama')";
    $query = mysqli_query($db, $sql);
    
    // apakah query simpan berhasil?
    if($query)
    {
        // kalau berhasil aihkan ke halaman index.php dengan status=sukses
        header('Location: index.php?status=sukses');
    }else
    {
        //kalu gagal alihkan ke halaman index.php dengan status=gagal
        header('Location: index.php?status=gagal'); 
    }
    
} {
    die("Akses dilarang...");
    exit;
}
    ?>
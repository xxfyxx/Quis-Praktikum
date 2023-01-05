<<?php
include("config.php");
$id=$_GET['id'];
$query=mysql_query("DELETE FROM pegawai WHERE id='".$id."'");
header("Location:form-daftar.php");
?>
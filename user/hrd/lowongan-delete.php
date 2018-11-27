<?php
include("../../db_connect.php");
if($_GET['lowongan_id']) {
  $lowongan_id = $_GET['lowongan_id'];
  $sql = "DELETE FROM lowongan WHERE lowongan_id={$lowongan_id}";

  if ($connect-> query($sql) === TRUE ) {
    echo "
    <script type= 'text/javascript'>
        alert('Anda Telah berhasil menghapus lowongan ');
        window.location = 'lowongan.php';
    </script>";
    } else {
    echo "<script type= 'text/javascript'>alert('Error: " . $sql . "<br>" . $connect->error."');</script>";
    }
  $connect->close();
  }
 ?>

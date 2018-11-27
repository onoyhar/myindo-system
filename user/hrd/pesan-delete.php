<?php
include("../../db_connect.php");
if($_GET['pesan_id']) {
  $pesan_id = $_GET['pesan_id'];
  $sql = "DELETE FROM pesan WHERE pesan_id={$pesan_id}";

  if ($connect-> query($sql) === TRUE ) {
    echo "
    <script type= 'text/javascript'>
        alert('Anda Telah berhasil menghapus Pesan ');
        window.location = 'business-inquiries.php';
    </script>";
    } else {
    echo "<script type= 'text/javascript'>alert('Error: " . $sql . "<br>" . $connect->error."');</script>";
    }
  $connect->close();
  }
 ?>

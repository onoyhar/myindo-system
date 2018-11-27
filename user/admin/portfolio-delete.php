<?php
include("../../db_connect.php");
if($_GET['portfolio_id']) {
  $portfolio_id = $_GET['portfolio_id'];
  $sql = "DELETE FROM portfolio WHERE portfolio_id={$portfolio_id}";

  if ($connect-> query($sql) === TRUE ) {
    echo "
    <script type= 'text/javascript'>
        alert('Anda Telah berhasil menghapus Portfolio ');
        window.location = 'webdev.php';
    </script>";
    } else {
    echo "<script type= 'text/javascript'>alert('Error: " . $sql . "<br>" . $connect->error."');</script>";
    }
  $connect->close();
  }
 ?>

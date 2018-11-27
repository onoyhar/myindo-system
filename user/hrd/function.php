<?php
    $lowongan = "SELECT * FROM lowongan ORDER BY lowongan_end DESC ";
    $show_lowongan = mysqli_query($connect,$lowongan);

    $pendaftar = "SELECT * FROM lowongan_daftar INNER JOIN lowongan ON lowongan.lowongan_id = lowongan_daftar.lowongan_id ORDER BY logdate ASC ";
    $show_pendaftar = mysqli_query($connect,$pendaftar);

    $pesan = "SELECT * FROM pesan ORDER BY logdate DESC ";
    $show_pesan = mysqli_query($connect,$pesan);

    $interview = "SELECT * FROM interview INNER JOIN lowongan_daftar ON lowongan_daftar.daftar_id = interview.daftar_id INNER JOIN lowongan ON lowongan.lowongan_id = lowongan_daftar.lowongan_id ORDER BY logdate ASC LIMIT 5";
    $show_interview = mysqli_query($connect,$interview);

    
 ?>

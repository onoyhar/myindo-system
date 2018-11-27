<?php
    include("../../db_connect.php");
	date_default_timezone_set("Asia/Bangkok");
require '../../PHPMailer/PHPMailerAutoload.php';
$mail = new PHPMailer;

// Konfigurasi SMTP
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'kirimpesanphp@gmail.com';
$mail->Password = '170419951';
$mail->SMTPSecure = 'tls';
$mail->Port = 587;

$mail->setFrom('recruitment@myindo.co.id', 'HRD PT MYINDO CYBER MEDIA');

if($_POST) {
    $daftar_email = $_POST['daftar_email'];
    $daftar_nama = $_POST['daftar_nama'];
    $daftar_id = $_POST['daftar_id'];
    $judul = $_POST['judul'];
    $interview_id = rand(999,999);
    $pesan = $_POST['pesan'];

    $sql = "INSERT INTO interview ( interview_id, daftar_id, daftar_nama, daftar_email,pesan,judul )
    VALUES ( '$interview_id', '$daftar_id','$daftar_nama','$daftar_email','$pesan','$judul')";

    if ($connect-> query($sql) === TRUE ) {
        $mail->addReplyTo('recruitment@myindo.co.id', 'HRD PT MYINDO CYBER MEDIA');
        // Menambahkan penerima
        $mail->addAddress($daftar_email);
        //$mail->addAddress('halo@myindo.co.id');
        $mail->addAddress('recruitment@myindo.co.id');
        // Menambahkan cc atau bcc
        //$mail->addCC('1995fajarsidik@gmail.com');
        //$mail->addCC('halo@myindo.co.id');
        //$mail->addBCC('1995fajarsidik@gmail.com');
        // Subjek email
        $mail->Subject = "$judul";
        // Mengatur format email ke HTML
        $mail->isHTML(true);
        // Konten/isi email
        $mailContent = "$pesan";
        $mail->Body = $mailContent;
        // Menambahakn lampiran
        //$mail->addAttachment('lmp/file1.pdf');
        //$mail->addAttachment('lmp/file2.png', 'nama-baru-file2.png'); //atur nama baru
        // Kirim email
        if(!$mail->send()){
            echo "Mailer Error: " . $mail->ErrorInfo;
        }else{
            echo "Pesan telah terkirim";
            echo "<script type='text/javascript'>
                    alert('Terima kasih telah melakukan panggilan interview melalui sistem kami');
                    window.location = 'listuser.php';
                </script>";
        }
    echo "
    <script type='text/javascript'>
        alert('Pesan anda Berhasil terkirim');
        window.location = 'listuser.php';
    </script>";
    } else {
    echo "<script type= 'text/javascript'>alert('Error: " . $sql . "<br>" . $connect->error."');</script>";
    }
    $connect->close();
    }

  ?>

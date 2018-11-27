<?php
  include("component/header.php");
  include("component/sidebar.php");
?>
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Tambah Portfolio
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-desktop"></i> Tambah Portfolio</a></li>
        <li class="active">disini</li>
      </ol>
    </section>
    <section class="content container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Add Portfolio</h3>
              <a href="webdev.php" class="btn btn-primary pull-right">Kembali</a>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="POST" action="portfolio-add.php" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputFile">Nama</label>
                  <input name="nama" class="form-control" type="text" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">Link</label>
                  <input name="link" class="form-control" type="text" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">Category</label>
                  <select name="category" class="form-control select2">
                    <option value="Web Development">Web Development</option>
                    <option value="Web-Based Application">Web-Based Application</option>
                    <option value="Web Maintenance">Web Maintenance</option>
                  </select>

                </div>
                <div class="form-group">
                  <label for="exampleInputFile">Image</label>
                    <input type="file" name="image" class="form-control" id="user_photo" required>
                  <label style="color:red;" for="exampleInputFile">*Ukuran 978x500</label>
                </div>
              </div>
              <div class="box-footer">
                <button type="submit" name="submit" class="btn btn-success pull-right">Submit</button>
              </div>


              <?php

            if(isset($_POST["submit"])){
                $check = getimagesize($_FILES["image"]["tmp_name"]);
                if($check !== false){
                    $image = $_FILES['image']['tmp_name'];
                    $imgContent = addslashes(file_get_contents($image));
                    $portfolio_id = rand(00000,99999);
                    $nama = $_POST['nama'];
                    $link = $_POST['link'];
                    $category = $_POST['category'];
                    $insert = $connect->query("INSERT INTO portfolio (portfolio_id, image, category, link, nama)
                    VALUES ('$portfolio_id','$imgContent','$category','$link','$nama')
                    ");

                    if($insert){
                        echo "<script type= 'text/javascript'>
                              alert('Penambahan Portfolio berhasil');
                              window.location = 'webdev.php';
                              </script>
                        ";

                    }else{
                        echo "<script type= 'text/javascript'>alert('File upload failed, please try again');</script>";
                    }


                }else{
                    echo "Please select an image file to upload.";
                }
            }
            ?>


            </form>
          </div>
      </div>
    </section>

  </div>
  <?php
  include("component/footer.php");
   ?>

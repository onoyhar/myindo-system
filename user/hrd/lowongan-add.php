<?php
  include("component/header.php");
  include("component/sidebar.php");
?>
  <div class="content-wrapper">
    <section class="content-header">

    </section>
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-warning">
            <div class="box-header">
              <h3 class="box-title">Add Vacancy</h3>
            </div>
            <div class="box-body">
              <form role="form" method="POST" action="lowongan-add.php">
                <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Job Position</label>
                  <input name="lowongan_job" type="text" class="form-control" id="exampleInputEmail1">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Vacancy End</label>
                  <input name="lowongan_end" type="date" class="form-control" id="exampleInputEmail1">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Description</label>
                  <textarea id="editor1" name="lowongan_desc" rows="10" cols="80">
															This is my textarea to be replaced with CKEditor.
									</textarea>
                </div>
                <div class="form-group">
                  <button class="btn btn-primary pull-right" style="width:120px;">Add</button>
                </div>
              </div>
              </form>


              <?php
                if($_POST) {
                    $lowongan_id = rand(00000,99999);
                    $lowongan_job = $_POST['lowongan_job'];
                    $lowongan_end = $_POST['lowongan_end'];
                    $lowongan_desc = $_POST['lowongan_desc'];
                    $lowongan_status = 'active';
                    $user_create = $_SESSION['user_id'];
                    $log_date = date("Y-m-d H:i:s");

                    $sql = "INSERT INTO lowongan (lowongan_id, lowongan_job, lowongan_end, lowongan_status, user_create, log_date, lowongan_desc)
                    VALUES ('$lowongan_id','$lowongan_job','$lowongan_end','$lowongan_status','$user_create','$log_date','$lowongan_desc')
                    ";
                    if ($connect-> query($sql) === TRUE ) {
                    echo "
                    <script type='text/javascript'>
                        alert('Lowongan ".$lowongan_job." Berhasil ditambah');
                        window.location = 'lowongan.php';
                    </script>";
                    } else {
                    echo "<script type= 'text/javascript'>alert('Error: " . $sql . "<br>" . $connect->error."');</script>";
                    }
                    $connect->close();
                    }
                ?>

              </div> <!-- Tutup Body -->
            </div><!-- Tutup Box -->
          </div><!-- Tutup row -->
      </div>
    </section>
  </div>
  <?php
  include("component/footer.php");
   ?>

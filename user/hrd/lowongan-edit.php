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
              <form role="form" method="POST" action="lowongan-edit.php" enctype="multipart/form-data">
                <?php
                  $lowongan_id = $_GET['lowongan_id'];
                  $show_lowongan = mysqli_query($connect,"SELECT * FROM lowongan WHERE lowongan_id = '$lowongan_id'");
                  while($row = mysqli_fetch_array($show_lowongan)) {
                   ?>
                <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Job Position</label>
                  <input name="lowongan_job" type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $row['lowongan_job']; ?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Vacancy End</label>
                  <input name="lowongan_end" type="date" class="form-control" id="exampleInputEmail1" value="<?php echo $row['lowongan_end']; ?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Status</label>
                  <div class="radio">
                    <label> <input type="radio" name="lowongan_status" id="optionsRadios2" value="active">ACTIVE</label>
                  </div>
                  <div class="radio">
                    <label> <input type="radio" name="lowongan_status" id="optionsRadios2" value="non-active">NON ACTIVE</label>
                  </div>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Description</label>
                  <textarea id="editor1" name="lowongan_desc" rows="10" cols="80">
															<?php echo $row['lowongan_desc']; ?>
									</textarea>
                </div>
                <div class="form-group">
                  <input type="hidden" class="form-control" name="lowongan_id" value="<?php echo $row['lowongan_id']; ?>" />
                  <button type="submit" name="submit" class="btn btn-primary pull-right" style="width:120px;">Edit Vacancy</button>
                </div>
              </div>
                <?php } ?>
              </form>

              <?php
              if(isset($_POST["submit"])) {
                $lowongan_id = $_POST['lowongan_id'];
                $lowongan_job = $_POST['lowongan_job'];
                $lowongan_end = $_POST['lowongan_end'];
                $lowongan_desc = $_POST['lowongan_desc'];
                $lowongan_status = $_POST['lowongan_status'];
                $user_create = $_SESSION['user_id'];
                $log_date = date("Y-m-d H:i:s");

                $sql = "UPDATE lowongan SET
                      lowongan_job='$lowongan_job', lowongan_end='$lowongan_end',
                      lowongan_desc='$lowongan_desc', lowongan_status='$lowongan_status',
                      user_create='$user_create', log_date='$log_date'   WHERE lowongan_id = '$lowongan_id' ";

                  if ($connect-> query($sql) === TRUE ) {
                  echo "
                  <script type='text/javascript'>
                      alert('Lowongan ".$lowongan_job." berhasil diubah');
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

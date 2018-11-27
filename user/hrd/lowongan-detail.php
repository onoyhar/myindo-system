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
              <form role="form" method="POST" action="">
                <?php
                  if($_GET['lowongan_id']) {
                    $lowongan_id = $_GET['lowongan_id'];
                    $sql = "SELECT * FROM lowongan WHERE lowongan_id = {$lowongan_id}";
                    $result = $connect->query($sql);
                    $data = $result->fetch_assoc();
                    $connect->close();
                   ?>
                <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Job Position</label>
                  <input name="lowongan_job" type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $data['lowongan_job']; ?>" readonly>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Vacancy End</label>
                  <input name="lowongan_end" type="date" class="form-control" id="exampleInputEmail1" value="<?php echo $data['lowongan_end']; ?>" readonly>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Status</label>
                  <input name="lowongan_status" type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $data['lowongan_status']; ?>" readonly>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Vacancy Create</label>
                  <input name="lowongan_status" type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $data['log_date']; ?>" readonly>
                </div>


                <div class="form-group">
                  <label for="exampleInputEmail1">Description</label>
                  <textarea id="editor1" name="lowongan_desc" rows="10" cols="80" readonly>
															<?php echo $data['lowongan_desc']; ?>
									</textarea>
                </div>
                <div class="form-group">
                  <input type="hidden" class="form-control" name="lowongan_id" value="<?php echo $data['lowongan_id']; ?>" />
                  <a href="lowongan.php" class="btn btn-primary pull-right" style="width:120px;">Back</a>
                </div>
              </div>
                <?php } ?>
              </form>




              </div> <!-- Tutup Body -->
            </div><!-- Tutup Box -->
          </div><!-- Tutup row -->
      </div>
    </section>
  </div>
  <?php
  include("component/footer.php");
   ?>

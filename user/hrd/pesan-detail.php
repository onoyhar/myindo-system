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
                  if($_GET['pesan_id']) {
                    $pesan_id = $_GET['pesan_id'];
                    $sql = "SELECT * FROM pesan WHERE pesan_id = {$pesan_id}";
                    $result = $connect->query($sql);
                    $data = $result->fetch_assoc();
                    $connect->close();
                   ?>
                <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Pesan ID</label>
                  <input name="pesan_id" type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $data['pesan_id']; ?>" readonly>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama</label>
                  <input name="nama" type="date" class="form-control" id="exampleInputEmail1" value="<?php echo $data['nama']; ?>" readonly>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Perusahaan</label>
                  <input name="company" type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $data['company']; ?>" readonly>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Email</label>
                  <input name="email" type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $data['email']; ?>" readonly>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Contact</label>
                  <input name="contact" type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $data['contact']; ?>" readonly>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">date</label>
                  <input name="logdate" type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $data['logdate']; ?>" readonly>
                </div>


                <div class="form-group">
                  <label for="exampleInputEmail1">Pesan</label>
                  <textarea id="editor1" name="lowongan_desc" rows="10" cols="80" readonly>
															<?php echo $data['pesan']; ?>
									</textarea>
                </div>
                <div class="form-group">
                  <input type="hidden" class="form-control" name="pesan_id" value="<?php echo $data['pesan_id']; ?>" />
                  <a href="business-inquiries.php" class="btn btn-primary pull-right" style="width:120px;">Back</a>
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

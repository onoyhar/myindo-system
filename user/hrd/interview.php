<?php
  include("component/header.php");
  include("component/sidebar.php");
?>
  <div class="content-wrapper">
    <section class="content-header">

    </section>
    <?php
    if($_GET['daftar_id']) {
      $daftar_id = $_GET['daftar_id'];
      $sql = "SELECT * FROM lowongan_daftar WHERE daftar_id = {$daftar_id}";
      $result = $connect->query($sql);
      $data = $result->fetch_assoc();
      $connect->close();
     ?>
    <section class="content">
      <div class="row">
          <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Interview Invitation</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form role="form" method="POST"  action="proses-interview.php">
                  <div class="box-body">
                    <div class="col-md-3">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" name="daftar_email" value="<?php echo $data['daftar_email']; ?>" readonly>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Name</label>
                        <input type="hidden" class="form-control" id="exampleInputPassword1" name="daftar_id" value="<?php echo $data['daftar_id']; ?>" readonly>
                        <input type="text" class="form-control" id="exampleInputPassword1" name="daftar_nama" value="<?php echo $data['daftar_nama']; ?>" readonly>
                      </div>
                    </div>
                    <div class="col-md-8">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Judul Pesan</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="judul" placeholder="masukkan judul pesan disini" >
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Pesan</label>
                            <textarea id="editor1" name="pesan" rows="10" cols="80">
                               Masukan pesan anda disini
                            </textarea>
                      </div>
                    </div>



                  </div>
                  <!-- /.box-body -->

                  <div class="box-footer text-center">
                    <button type="submit" type="submit" name="submit" class="btn btn-primary">Kirim</button>
                  </div>
                </form>
              </div>
          </div>
      </div>
    </section>
  <?php } ?>
  </div>
  <?php
  include("component/footer.php");
   ?>

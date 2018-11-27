<?php
  include("component/header.php");
  include("component/sidebar.php");
?>
  <div class="content-wrapper">
    <section class="content-header">

    </section>
    <section class="content">
      <div class="row">
        <div class="col-md-3">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Interview Invitation</h3>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <ul class="products-list product-list-in-box">
                <?php
                  while($row = mysqli_fetch_array($show_interview)) {
                 ?>

                <li class="item">
                  <div class="product-img">

                    <?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['image'] ).'" />';?>
                  </div>
                  <div class="product-info">
                    <a href="detail-jobseeker.php?daftar_id=<?php echo $row['daftar_id'] ?>" class="product-title"><?php echo $row['daftar_nama'] ?>
                        <span class="product-description">
                          <?php echo $row['lowongan_job'] ?>
                        </span>
                        <span class="product-description">
                          <?php echo $row['judul'] ?>
                        </span>
                  </div>
                </li>
              <?php } ?>

              </ul>
            </div>
            <!-- /.box-body -->
            <div class="box-footer text-center">
              <a href="javascript:void(0)" class="uppercase">View All Interview Invitation</a>
            </div>
            <!-- /.box-footer -->
          </div>
        </div>
      </div>
    </section>
  </div>
  <?php
  include("component/footer.php");
   ?>

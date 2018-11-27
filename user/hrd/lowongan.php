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
              <h3 class="box-title">List Vacancy</h3>
              <a href="lowongan-add.php" class="btn btn-primary pull-right">Add Vacancy</a>
            </div>
            <div class="box-body">
              <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                  <div class="row">
                    <div class="col-sm-12 table-responsive">
                      <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                        <thead>
                        <tr role="row">
                          <th>Job Position</th>
                          <th>End Date</th>
                          <th>Status</th>
                          <th>Date Create</th>
                          <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                          <?php
                            while($row = mysqli_fetch_array($show_lowongan)) {
                              $phpdate = strtotime( $row['lowongan_end'] );
                           ?>
                          <tr role="row" class="odd">
                            <td><?php echo $row['lowongan_job'] ?></td>
                            <td><?php echo date('l, d-m-Y', $phpdate) ?></td>
                            <td><?php echo "  <a data-str='".$row['lowongan_status']."' class='btn btn-xs  btn-flat'>".$row['lowongan_status']."</a>"; ?></td>
                            <td><?php echo $row['log_date'] ?></td>
                            <td width="200px;">
                              <a href="lowongan-detail.php?lowongan_id=<?php echo $row['lowongan_id']; ?>"  class="btn btn-xs btn-success"> Detail </a>
                              <a href="lowongan-edit.php?lowongan_id=<?php echo $row['lowongan_id']; ?>"  class="btn btn-xs btn-info"> Edit </a>
                              <a href="lowongan-delete.php?lowongan_id=<?php echo $row['lowongan_id']; ?>"   class="btn btn-xs btn-danger"> Delete </a>
                            </td>
                          </tr>
                          <?php } ?>
                        </tbody>
                      </table>

                    </div>
                  </div>
                </div>
              </div> <!-- Tutup Body -->
            </div><!-- Tutup Box -->
          </div><!-- Tutup row -->
      </div>
    </section>
  </div>
  <?php
  include("component/footer.php");
   ?>

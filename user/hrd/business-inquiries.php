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

            </div>
            <div class="box-body">
              <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                  <div class="row">
                    <div class="col-sm-12 table-responsive">
                      <table style="font-size:12px;" id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                        <thead>
                        <tr role="row">
                          <th>ID Pesan</th>
                          <th>Nama</th>
                          <th>Perusahaan</th>
                          <th>Email</th>
                          <th>Contact</th>
                          <th>Tanggal Terkirim</th>
                          <th>Detail</th>
                        </tr>
                        </thead>
                        <tbody>
                          <?php
                            while($row = mysqli_fetch_array($show_pesan)) {
                              $phpdate = strtotime( $row['logdate'] );
                           ?>
                          <tr role="row" class="odd">
                            <td><?php echo $row['pesan_id'] ?></td>
                            <td><?php echo $row['nama'] ?></td>
                            <td><?php echo $row['company'] ?></td>
                            <td><?php echo $row['email'] ?></td>
                            <td><?php echo $row['contact'] ?></td>
                            <td><?php echo date('l, d-m-Y', $phpdate) ?></td>
                            <td>
                              <a href="pesan-detail.php?pesan_id=<?php echo $row['pesan_id']; ?>"  class="btn btn-xs btn-success"> Detail </a>
                              <a href="pesan-delete.php?pesan_id=<?php echo $row['pesan_id']; ?>"   class="btn btn-xs btn-danger"> Delete </a>
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

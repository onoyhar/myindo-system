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
                          <th>ID Daftar</th>
                          <th>ID Lowongan</th>
                          <th>Tanggal Daftar</th>
                          <th>Nama Pendaftar</th>
                          <th>Jenjang Pendidikan</th>
                          <th>Email</th>
                          <th>No Tlp</th>
                          <th>Detail</th>
                        </tr>
                        </thead>
                        <tbody>
                          <?php
                            while($row = mysqli_fetch_array($show_pendaftar)) {
                              //$phpdate = strtotime( $row['logdate'] );
                           ?>
                          <tr role="row" class="odd">
                            <td><?php echo $row['daftar_id'] ?></td>
                            <td><?php echo $row['lowongan_job'] ?></td>
                            <td><?php echo $row['logdate'] ?></td>
                            <td><?php echo $row['daftar_nama'] ?></td>
                              <td><?php echo $row['level'] ?></td>
                            <td><?php echo $row['daftar_email'] ?></td>
                            <td><?php echo $row['daftar_notlp'] ?></td>
                            <td>
                              <?php
                                //echo '<a class="btn btn-xs btn-primary" style="font-weight:500;" href="../../files/'.$row['resume'].'" download> Detail </a>';
                                echo "<a class='btn btn-xs btn-primary' style='font-weight:500;' href='detail-jobseeker.php?daftar_id=".$row['daftar_id']."' > Detail </a>";
                               ?>
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

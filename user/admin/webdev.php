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
              <h3 class="box-title">List Portfolio</h3>
              <a href="portfolio-add.php" class="btn btn-primary pull-right">Add Portfolio</a>
            </div>
            <div class="box-body">
              <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                  <div class="row">
                    <div class="col-sm-12 table-responsive">
                      <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                        <thead>
                        <tr role="row">
                          <th>ID Portfolio</th>
                          <th>Image</th>
                          <th>Category</th>
                          <th>Name</th>
                          <th>Link</th>
                          <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                          <?php
                            while($row = mysqli_fetch_array($show_portfolio_web_dev)) {
                           ?>
                          <tr role="row" class="odd">
                            <td><?php echo $row['portfolio_id'] ?></td>
                            <td>
                              <?php
                                echo '<img width="117px" src="data:image/jpeg;base64,'.base64_encode( $row['image'] ).'"/>';
                              ?>
                            </td>
                            <td><?php echo $row['category'] ?></td>
                            <td><?php echo $row['nama'] ?></td>
                            <td><?php echo $row['link'] ?></td>
                            <td>
                            <a href="portfolio-delete.php?portfolio_id=<?php echo $row['portfolio_id']; ?>"   class="btn btn-xs btn-danger"> Delete </a></td>
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

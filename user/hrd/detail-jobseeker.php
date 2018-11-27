<?php
  include("component/header.php");
  include("component/sidebar.php");
?>
  <div class="content-wrapper">
    <section class="content-header">

    </section>
    <section class="content">
      <?php
      if($_GET['daftar_id']) {
        $daftar_id = $_GET['daftar_id'];
        $sql = "SELECT * FROM lowongan_daftar WHERE daftar_id = {$daftar_id}";
        $result = $connect->query($sql);
        $data = $result->fetch_assoc();
        $connect->close();
       ?>

      <div class="row">
              <div class="col-md-3">
                  <!-- Profile Image -->
                  <div class="box box-primary">
                    <div class="box-body box-profile">
                      <?php echo '<img class="profile-user-img img-responsive img-circle" src="data:image/jpeg;base64,'.base64_encode( $data['image'] ).'" />';?>
                      <h3 class="profile-username text-center"><?php echo $data['daftar_nama']; ?></h3>
                      <?php
                        //echo '<a class="btn btn-xs btn-primary" style="font-weight:500;" href="../../files/'.$row['resume'].'" download> Detail </a>';
                        echo "<a class='btn btn-primary btn-block' href='interview.php?daftar_id=".$data['daftar_id']."' > <b>Undang Interview</b> </a>";
                       ?>
                    </div>
                    <!-- /.box-body -->
                  </div>
                  <!-- /.box -->

                  <!-- About Me Box -->
                  <div class="box box-primary">
                    <div class="box-header with-border">
                      <h3 class="box-title">Biodata</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                      <strong><i class="fa fa-envelope margin-r-5"></i> Email</strong>
                      <p class="text-muted">
                        <?php echo $data['daftar_email']; ?>
                      </p>
                      <hr>
                      <strong><i class="fa fa-phone margin-r-5"></i> Phone Number</strong>
                      <p class="text-muted"><?php echo $data['daftar_notlp']; ?></p>
                      <hr>

                    </div>
                    <!-- /.box-body -->
                  </div>
                  <!-- /.box -->
                </div>



                <div class="col-md-9">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#detail" data-toggle="tab" aria-expanded="true">Detail Jobseeker</a></li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="detail">
                <div class="box-body">
                  <div class="col-md-4">
                    <label>Last Education</label> <br/>
                    <p>
                      Level: <?php echo $data['level']; ?> <br/>
                      Major:  <?php echo $data['major']; ?> <br/>
                      School/Institute: <?php echo $data['institusi']; ?> <br/>
                      Graduate Date: <?php echo $data['graduate']; ?> <br/>
                    </p>
                  </div>

                  <div class="col-md-4">
                    <label>Last Work Experience</label> <br/>
                    <p>
                      Company Name: <?php echo $data['companyname']; ?> <br/>
                      Position:  <?php echo $data['position']; ?> <br/>
                      Start Date: <?php echo $data['start_date']; ?> <br/>
                      End Date: <?php echo $data['end_date']; ?> <br/>
                    </p>
                  </div>

                  <div class="col-md-4">
                    <label>Document</label> <br/>
                    <p>
                      Download CV: </br><?php
                        echo '<a class="btn btn-xs btn-primary" style="font-weight:500;" href="../../files/'.$data['resume'].'" download> Download CV </a>';
                        //echo "<a class='btn btn-xs btn-primary' style='font-weight:500;' href='detail-jobseeker.php?daftar_id=".$row['daftar_id']."' > Detail </a>";
                       ?> <br/>

                    </p>
                  </div>


                </div>


              </div>
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>


          <div class="col-md-9">
            <div class="box box-body box-primary">
              <div class="box-header with-border ">
                <h3 class="box-title">Interview Invitation</h3>
                <div class="box-tools pull-right">
                  <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                </div>
              </div>

              <div class="box-body">
                <b>Pesan Interview:</b><br/>
                <?php
                include("../../db_connect.php");
                $interview2 = "SELECT * FROM interview
                      INNER JOIN lowongan_daftar ON lowongan_daftar.daftar_id = interview.daftar_id
                      INNER JOIN lowongan ON lowongan.lowongan_id = lowongan_daftar.lowongan_id
                      WHERE interview.daftar_id={$data['daftar_id']} ";

                $show_interview2 = mysqli_query($connect,$interview);
                  while($row = mysqli_fetch_array($show_interview2)) {

                    echo "Judul:";
                    echo $row['judul'];
                    echo "<br/>Isi:";
                    echo $row['pesan'];
                    echo "<hr>";
                  }
                 ?>
              </div>
            </div>
          </div>
          <!-- /.nav-tabs-custom -->
        </div>

  <?php } ?>
      </div>

    </section>
  </div>
  <?php
  include("component/footer.php");
   ?>

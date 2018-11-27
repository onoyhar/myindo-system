<?php
  include("component/header.php");
  include("component/sidebar.php");
?>
  <div class="content-wrapper">
    <section class="content-header">

    </section>
    <section class="content container-fluid">
        <div class="row">
          <div class="col-md-4 col-md-offset-4  shadow-lg" style="margin-top:100px;">
            <div class="box box-widget widget-user">
              <!-- Add the bg color to the header using any of the bg-* classes -->


              <div class="box-footer">
                <?php
                $user_name = $_SESSION['user_name'];
                $show_user = mysqli_query($connect,"SELECT * FROM users where user_name='$user_name' ");
                  while($row = mysqli_fetch_array($show_user)) {
                  ?>
                <div class="row">

                  <!-- /.col -->

                  <div class="col-sm-12">
                    <div class="description-block">
                      <span class="description-text">Password Sebelumnya</span>
                      <h5 class="description-header">
                        <?php
                            echo "".$row['user_password']." ";
                          }
                          ?>
                        </h5>

                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->
              </div>
                <div class="box box-success">
                  <div class="box-header with-border">
                    <h3 class="box-title">Change Password</h3>
                  </div>
                  <!-- /.box-header -->
                  <!-- form start -->
                  <form role="form" method="POST" action="change-password.php" enctype="multipart/form-data">
                    <div class="box-body">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Password</label>
                        <input type="password" class="form-control" id="user_password" name="user_password" placeholder="*****" required>
                      </div>
                    </div>
                    <div class="box-footer">
                      <button type="submit" name="submit" class="btn btn-success pull-right">Submit</button>
                    </div>

                    <?php

                    if(isset($_POST["submit"])) {
                      $user_password          = $_POST['user_password'];
                      $user_name              = $_SESSION['user_name'];

                      $sql = "UPDATE users SET
                      user_password='$user_password' WHERE user_name = '$user_name' ";

                        if ($connect-> query($sql) === TRUE ) {
                        echo "
                        <script type= 'text/javascript'>
                            alert('Password ".$user_name." Berhasil diUbah');
                            window.location = 'change-password.php ';
                        </script>";

                        } else {
                        echo "<script type= 'text/javascript'>alert('Error: " . $sql . "<br>" . $connect->error."');</script>";
                        }
                        $connect->close();
                        }
                    ?>
                  </form>
                </div>
            </div>

          </div>

        </div>
    </section>
  </div>
  <?php
  include("component/footer.php");
   ?>

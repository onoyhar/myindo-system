

<section class="latest_news_area p_120" id="careers">
  <div class="container">
    <div class="main_title">
      <h2>Careers</h2>
      <p>Explore opportunities to take your career to the next level. Whether you are a student, a graduate or an experienced professional, going to <b>Indonizing The World</b> with us at My<b>indo</b>.</p>
    </div>
    <div class="latest_news_inner row">
      <?php
        $show_career = mysqli_query($connect,"SELECT * FROM hr_lowongan");
        while($row = mysqli_fetch_array($show_career)) {
      ?>
      <div class="col-lg-4 karir">
        <div class="l_news_item">
          <a class="date" href="#"><?php echo $row['tanggal_dibuka'];?> - <?php echo $row['tanggal_ditutup'];?></a>
          <a data-toggle="modal" data-target="#<?php echo $row['id_lowongan'];?>" href="#"><h4><?php echo $row['judul'];?></h4></a>
          <p><?php echo $row['pendahuluan'];?></p>
          <!--
          <div class="post_view">
            <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 4.5k Views</a>
            <a href="#"><i class="fa fa-commenting" aria-hidden="true"></i> 07</a>
            <a href="#"><i class="fa fa-reply" aria-hidden="true"></i> 362</a>
          </div>
          -->
        </div>
      </div>



      <div class="modal fade bd-example-modal-lg" id="<?php echo $row['id_lowongan'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel"><?php echo $row['judul'];?></h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p><?php echo $row['pendahuluan'];?></p>
              <p><?php echo $row['detail'];?></p>
              <p style="font-size:14px;">Send your CV and Portfolio to <b> hrd@myindo.co.id</b></p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
      <?php } ?>


<!-- Modal -->

    </div>
  </div>
</section>

<!-- /.content-wrapper -->
<footer class="main-footer">
  <div class="pull-right hidden-xs">
    <b>Version</b> 2.4.0
  </div>
  <strong>Copyright &copy; 2018 <a href="#">Myindo Cyber Media</a>.</strong> All rights
  reserved.
</footer>

<div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="../core/bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../core/bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
$.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="../core/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="../core/bower_components/select2/dist/js/select2.full.min.js"></script>
<!-- Morris.js charts -->
<script src="../core/bower_components/raphael/raphael.min.js"></script>
<script src="../core/bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="../core/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="../core/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="../core/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="../core/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="../core/bower_components/moment/min/moment.min.js"></script>
<script src="../core/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="../core/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="../core/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="../core/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../core/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../core/dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="d../core/ist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="d../core/ist/js/demo.js"></script>


<script src="../core/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../core/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="../core/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<script src="../core/bower_components/select2/dist/js/select2.full.min.js"></script>
<script src="../core/bower_components/ckeditor/ckeditor.js"></script>


<script>
  $(function () {

    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
   CKEDITOR.replace('editor1')
   CKEDITOR.replace('editor2')
   $('.textarea').wysihtml5()


  })
</script>
</body>
</html>

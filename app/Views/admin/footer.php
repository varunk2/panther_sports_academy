<!-- /.content-wrapper -->
<footer class="main-footer text-centerin">
    <strong>Copyright &copy; 2021 <a href="<?= base_url() ?>" target="_blank">Panther Sports Academy</a>.</strong>
    All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="https://adminlte.io/themes/dev/AdminLTE/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://adminlte.io/themes/dev/AdminLTE/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->

<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="https://adminlte.io/themes/dev/AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Font Awsome -->
<script src="https://kit.fontawesome.com/debf87daa5.js" crossorigin="anonymous"></script>
<!-- ChartJS -->
<script src="https://adminlte.io/themes/dev/AdminLTE/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="https://adminlte.io/themes/dev/AdminLTE/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="https://adminlte.io/themes/dev/AdminLTE/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="https://adminlte.io/themes/dev/AdminLTE/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="https://adminlte.io/themes/dev/AdminLTE/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="https://adminlte.io/themes/dev/AdminLTE/plugins/moment/moment.min.js"></script>
<script src="https://adminlte.io/themes/dev/AdminLTE/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="https://adminlte.io/themes/dev/AdminLTE/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<!-- <script src="https://adminlte.io/themes/dev/AdminLTE/plugins/summernote/summernote-bs4.min.js"></script> -->
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<!-- overlayScrollbars -->
<script src="https://adminlte.io/themes/dev/AdminLTE/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="https://adminlte.io/themes/dev/AdminLTE/dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="https://adminlte.io/themes/dev/AdminLTE/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="https://adminlte.io/themes/dev/AdminLTE/dist/js/demo.js"></script>
<!-- DataTables -->
<script src="https://adminlte.io/themes/dev/AdminLTE/plugins/datatables/jquery.dataTables.js"></script>
<script src="https://adminlte.io/themes/dev/AdminLTE/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/27.0.0/classic/ckeditor.js"></script>

<script>
  window.setTimeout(() => {
    document.querySelector(".alert-success").remove();
  }, 2000);
  
  $(function () {
    $("#example1").DataTable();
    $('#summernote').summernote({
      height: 500
    });
  });

  ClassicEditor
    .create( document.querySelector( '#editor' ), {
      
      toolbar: {
        items: [
          'heading',
          '|',
          'bold',
          'italic',
          'link',
          'bulletedList',
          'numberedList',
          '|',
          'outdent',
          'indent',
          '|',
          'undo',
          'redo'
        ]
      },
      language: 'en',
      licenseKey: '',
    } )
    .then( editor => {
      editor.editing.view.change( writer => { writer.setStyle( 'height', '400px', editor.editing.view.document.getRoot() ); } );
      window.editor = editor;
    } )
    .catch( error => {
      console.error( 'Oops, something went wrong!' );
      console.error( 'Please, report the following error on https://github.com/ckeditor/ckeditor5/issues with the build id and the error stack trace:' );
      console.warn( 'Build id: 5jqe5mxvu8fo-a3158np2os9l' );
      console.error( error );
    } );
</script>

</body>
</html>
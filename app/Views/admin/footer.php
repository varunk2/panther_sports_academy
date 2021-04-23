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
<!-- overlayScrollbars -->
<script src="https://adminlte.io/themes/dev/AdminLTE/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="https://adminlte.io/themes/dev/AdminLTE/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="https://adminlte.io/themes/dev/AdminLTE/dist/js/demo.js"></script>
<!-- DataTables -->
<script src="https://adminlte.io/themes/dev/AdminLTE/plugins/datatables/jquery.dataTables.js"></script>
<script src="https://adminlte.io/themes/dev/AdminLTE/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/27.0.0/classic/ckeditor.js"></script>

<script>const base_url = "<?= base_url() ?>"; </script>
<script src="<?= base_url("js/adminScript.js") ?>"></script>

<script>
  window.setTimeout(() => {
    document.querySelector(".alert-success").remove();
  }, 2000);
  
  $(function () {
    $("#example1").DataTable({
      ordering: false
    });
  });
</script>

</body>
</html>
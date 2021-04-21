<!-- jQuery -->
<script src="/vendoradmin/sb-admin/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="/vendoradmin/sb-admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="/vendoradmin/sb-admin/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/vendoradmin/sb-admin/dist/js/demo.js"></script>
<!-- Summernote -->
<script src="/vendoradmin/sb-admin/plugins/summernote/summernote-bs4.min.js"></script>
<script>
  $(function () {
    // Summernote
    $('.textarea').summernote()
  })
</script>
<!-- DataTables -->
<script src="/vendoradmin/sb-admin/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="/vendoradmin/sb-admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="/vendoradmin/sb-admin/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="/vendoradmin/sb-admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>

<!--  -->
<script type="text/javascript">
$(document).ready(function () {
  bsCustomFileInput.init();
});
</script>

<!-- -------------je veux la table qui pagine -->


<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
<!-- --------fin je veux la table qui pagine -->
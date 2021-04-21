<!DOCTYPE html>
<html>
<!-- head enlever -->
@include('sb-admin/head')

<!--fin head enlever -->
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <!-- ----------------------------au niveau des icone de message lui il prend tous----------- -->
  @include('sb-admin/topbar')

  <!-- -------------------------fin---au niveau des icone de message lui il prend tous----------- -->

  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <!-- -------------------------------------------------------------------------------------- -->
  <!-- au niveau des navigateur du dashboard -->

  @include('sb-admin/sidebar')
  <!-- au niveau des navigateur du dashboard -->

  <!-- --------------------------------------------------------------------------------------- -->

  <!-- Content Wrapper. Contains page content -->
  <!-- -----------------lui la c'est le contenue de mes formulaire d'ajout , tableau pour voir -->
  @yield('content')
  <!-- ----------------fin -lui la c'est le contenue de mes formulaire d'ajout , tableau pour voir -->

  <!-- /.content-wrapper -->
@include('sb-admin/footer')

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<!-- ------------------------------------------------- -->
<!-- mon javascript qui etait ici -->
@include('sb-admin/javascript')
<!--fin  mon javascript qui etait ici ------------------------------------------>

</body>
</html>

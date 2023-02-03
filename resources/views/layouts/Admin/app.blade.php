<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin - ASE</title>

  <!-- styles -->
  @include('layouts.Admin.Components.styles')

</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  @include('layouts.Admin.Components.navBar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('layouts.Admin.Components.sideBar')

  <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

      <!-- Content Header (Page header) -->
      @include('layouts.Admin.Components.content.contentHead')

      <!-- Main content -->
      @include('layouts.Admin.Components.content.contentMain')


    </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  @include('layouts.Admin.Components.controllerBar')
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  @include('layouts.Admin.Components.footer')
</div>
<!-- ./wrapper -->

<!-- script -->
@include('layouts.Admin.Components.script')
</body>
</html>

<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Client - ASE</title>

  <!-- styles -->
  @include('layouts.User.Components.styles')

</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  @include('layouts.User.Components.navBar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('layouts.User.Components.sideBar')

  <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

      <!-- Content Header (Page header) -->
      @include('layouts.User.Components.content.contentHead')

      <!-- Main content -->
      @include('layouts.User.Components.content.contentMain')


    </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  @include('layouts.User.Components.controllerBar')
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  @include('layouts.User.Components.footer')
</div>
<!-- ./wrapper -->

<!-- script -->
@include('layouts.User.Components.script')
</body>
</html>

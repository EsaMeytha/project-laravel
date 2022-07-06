<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>DISTRO KAOS BEKASI | WEBSITE</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- style -->
    @stack('before-stack')
    @include('includes.style')
    @stack('after-stack')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
  <!-- Navbar -->
  @include('includes.navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('includes.sidebar')

  <!-- Content Wrapper. Contains page content -->
  @yield('content')
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- script -->
    @stack('before-script')
    @include('includes.script')
    @stack('after-script')
</body>
</html>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Skydash Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{ asset('vendors/adminVendor/feather/feather.css') }}">
  <link rel="stylesheet" href="{{ asset('vendors/adminVendor/ti-icons/css/themify-icons.css') }}">
  <link rel="stylesheet" href="{{ asset('vendors/adminVendor/css/vendor.bundle.base.css') }}">
  <!-- endinject -->
  <!-- Plugin css for this pagejs/adminJs/ -->
  <link rel="stylesheet" href="{{ asset('vendors/adminVendor/datatables.net-bs4/dataTables.bootstrap4.css') }}">
  <link rel="stylesheet" href="{{ asset('vendors/adminVendor/ti-icons/css/themify-icons.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('js/adminJs/select.dataTables.min.css') }}">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ asset('css/adminCss/style.css') }}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{ asset('images/adminimage/favicon.png') }}" />
</head>
<body>
  <div class="container-scroller">
   
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
     
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
       

        @include('layouts.inc.adminnav')
        @include('layouts.inc.adminsidebar')

        @yield('content')
        @include('layouts.inc.adminfooter')

        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="{{ asset('js/adminJs/vendors/js/vendor.bundle.base.js') }}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="{{ asset('js/adminJs/js/dataTables.select.min.js') }}"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="{{ asset('js/adminJs/off-canvas.js') }}"></script>
  <script src="{{ asset('js/adminJs/hoverable-collapse.js') }}"></script>
  <script src="{{ asset('js/adminJs/template.js') }}"></script>
  <script src="{{ asset('js/adminJs/settings.js') }}"></script>
  <script src="{{ asset('js/adminJs/todolist.js') }}"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/adminJs/dashboard.js"></script>
  <script src="js/adminJs/Chart.roundedBarCharts.js"></script>
  <!-- End custom js for this page-->
</body>

</html>


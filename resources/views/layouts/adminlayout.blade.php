<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Skydash Admin</title>
  <!-- plugins:bootstrap css -->

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{ asset('vendors/adminVendor/feather/feather.css') }}">
  <link rel="stylesheet" href="{{ asset('vendors/adminVendor/ti-icons/css/themify-icons.css') }}">
  <link rel="stylesheet" href="{{ asset('vendors/adminVendor/css/vendor.bundle.base.css') }}">
  <!-- endinject -->
  <!-- Plugin css for this pagejs/adminJs/ -->
  <link rel="stylesheet" href="{{ asset('vendors/adminVendor/datatables.net-bs4/dataTables.bootstrap5.css') }}">
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


  {{-- <--------------------DatatableJs--------------------> --}}
  <script src="  https://code.jquery.com/jquery-3.5.1.js
"></script>

<script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>


<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
  <!-- inject:bootstrap js -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


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


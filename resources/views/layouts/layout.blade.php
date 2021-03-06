<!DOCTYPE html>
<html lang="en">

<head>
  @include('theme.head')
  <script src="{{url('js/app.js')}}"></script>
  <script src="{{url('vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{url('js/jquery.easing.min.js')}}"></script>
  <script src="{{url('js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{url('js/jquery.dataTables.js')}}"></script>
  <script src="{{url('js/dataTables.bootstrap4.js')}}"></script>
  <script src="{{url('js/datatables-demo.js')}}"></script>

</head>

<body id="page-top">
<!--token no eliminar-->
<input type="hidden" id="_token" name="_token" value="{{ csrf_token() }}">
  <!-- Page Wrapper -->
  <div id="wrapper">
  <!--sidebar-->
    @include('theme.sidebar')
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
      <!-- Main Content -->
      <div id="content">
        @include('theme.header')
        <!-- Begin Page Content -->
        <div class="container-fluid">
            @section('content')
            @yield('content')
        </div>
        <!-- /.container-fluid -->
      </div>
      <!-- End of Main Content -->
      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        @include('theme.footer')
      </footer>
      <!-- End of Footer -->
    </div>
    <!-- End of Content Wrapper -->
  </div>
  <!-- End of Page Wrapper -->
  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>
  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!--script-->

<!--<script src="{{url('js/jquery.min.js')}}"></script>-->

<!--script src="{{url('js/sb-admin.min.js')}}"></script-->


<script src="{{url('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!--<script src="{{url('vendor/jquery-easing/jquery.easing.min.js')}}"></script>-->
<script src="{{url('js/sb-admin-2.min.js')}}"></script>

<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>

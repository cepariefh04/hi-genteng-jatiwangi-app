<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>HI Admin - Dashboard</title>
  <!-- Custom fonts for this template-->
  <link href="{{ asset('vendor/sb-admin/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">
</head>

<body id="page-top">
    <div id="wrapper">
      @include('admin.partials.sidebar')
      <!-- End of Sidebar -->

      <!-- Content Wrapper -->
      <div id="content-wrapper" class="d-flex flex-column">
        <!-- Main Content -->
        <div id="content">
            <!-- Topbar -->
            @include('admin.partials.navbar')
            <div class="container-fluid">
              @yield('admin-content')
            </div>

        </div>
        @include('admin.partials.footer')
      </div>
    </div>

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    {{-- <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
            <form action="">
                <button type="submit" class="btn btn-danger">Konfirmasi</button>
            </form>
          </div>
        </div>
      </div>
    </div> --}}

    <script src="{{ asset('vendor/sb-admin/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/sb-admin/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/sb-admin/jquery-easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('js/sb-admin-2.min.js') }}"></script>
    <script>
      function formatRupiah(angka) {
        if (angka != null) {
          return 'Rp' + angka.toString().replace(/\B(?=(\d{3})+(?!\d))/g, '.');
        }
        return '';
      }
      var hargaElement = document.getElementById('harga');
      var harga = hargaElement.dataset.harga;

      hargaElement.textContent = formatRupiah(harga);

      function previewImage() {
        const image = document.querySelector('#photo');
        const imgPreview = document.querySelector('.img-preview');
        imgPreview.style.display = 'block';

        const ofReader = new FileReader();
        ofReader.readAsDataURL(image.files[0]);

        ofReader.onload = function(oFREvent) {
          imgPreview.src = oFREvent.target.result;
        }
      }

      function previewTitleLogo() {
        const image = document.querySelector('#title_logo');
        const imgPreview = document.querySelector('.title-logo-preview');
        imgPreview.style.display = 'block';

        const ofReader = new FileReader();
        ofReader.readAsDataURL(image.files[0]);

        ofReader.onload = function(oFREvent) {
          imgPreview.src = oFREvent.target.result;
        }
      }

      function previewNavbarLogo() {
        const image = document.querySelector('#navbar_logo');
        const imgPreview = document.querySelector('.navbar-logo-preview');
        imgPreview.style.display = 'block';

        const ofReader = new FileReader();
        ofReader.readAsDataURL(image.files[0]);

        ofReader.onload = function(oFREvent) {
          imgPreview.src = oFREvent.target.result;
        }
      }

      function previewHero() {
        const image = document.querySelector('#hero');
        const imgPreview = document.querySelector('.hero-preview');
        imgPreview.style.display = 'block';

        const ofReader = new FileReader();
        ofReader.readAsDataURL(image.files[0]);

        ofReader.onload = function(oFREvent) {
          imgPreview.src = oFREvent.target.result;
        }
      }
    </script>
</body>
</html>

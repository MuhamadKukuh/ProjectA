<!DOCTYPE html>
<html lang="en">
<head>
    @include('template.head')
</head>
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">
        @include('template.navbar')
        @include('template.sidebar')
        <div class="content-wrapper">
            @yield('content')
        </div>
        <footer class="main-footer">
            <strong>Copyright &copy; 2022-2077 <a href="#">Agenda Absen</a>.</strong>
            All rights saya Maling.
            <div class="float-right d-none d-sm-inline-block">
              <b>Version</b> 6.9-nc
            </div>
          </footer>
    </div>
    {{-- js --}}
    @include('template.js')
</body>
</html>
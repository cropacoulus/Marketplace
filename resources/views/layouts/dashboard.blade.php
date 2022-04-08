<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>@yield('title')</title>

  {{-- Style --}}
  @stack('prepend-style')
  @include('includes.style')
  @stack('addon-style')
  {{-- End Style --}}
</head>

<body>

    <div class="page-dashboard">
        <div class="d-flex" id="wrapper" data-aos="fade-right">
        <!--- Sidebar -->
        @include('includes.sidebar')
        <!--- End Sidebar -->

        <!--- Page Content -->
        <div id="page-content-wrapper">
            <!--- Top Navbar -->
            @include('includes.navbar-dashboard')
            <!--- End Top Navbar -->

            <!--- Section Content -->
            @yield('content')
            <!--- End Section Content -->
        </div>
        <!--- End Page Content -->
        </div>

    <!-- Bootstrap core JavaScript -->
    @stack('prepend-script')
    @include('includes.script-dashboard')
    @stack('addon-script')
</body>

</html>
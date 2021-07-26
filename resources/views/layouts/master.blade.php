<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name') }}</title>

    {{-- Scripts & Stylesheets --}}
    @include('inc.scripts')
  </head>

  <body class="hold-transition sidebar-mini">
    <div class="wrapper">

      {{-- Main Navbar --}}
      @include('inc.navbar')

      <!-- Main Sidebar  -->
      @include('inc.aside')

      <div class="content-wrapper">

        <!-- Main content -->
        <div class="content">
          <div class="container-fluid">
            @yield('content')
          </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->

      <!-- Main Footer -->
      @include('inc.footer')
    </div>
    <!-- ./wrapper -->

  </body>
</html>

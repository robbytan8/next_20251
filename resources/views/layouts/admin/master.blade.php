<!DOCTYPE html>
<html lang="en">
<!-- [Head] start -->

<head>
  <title>My Admin Template</title>
  <!-- [Meta] -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Mantis template form Project NEXT 2025.">
  <meta name="keywords" content="Mantis, Dashboard UI Kit, Bootstrap 5, Admin Template, Admin Dashboard, CRM, CMS, Bootstrap Admin Template">
  <meta name="author" content="Robby Tan">

  <!-- [Favicon] icon -->
  <link rel="icon" href="{{ asset('../assets/images/favicon.svg') }}" type="image/x-icon"> <!-- [Google Font] Family -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;400;500;600;700&display=swap" id="main-font-link">
  <!-- [Tabler Icons] https://tablericons.com -->
  <link rel="stylesheet" href="{{ asset('../assets/fonts/tabler-icons.min.css') }}">
  <!-- [Feather Icons] https://feathericons.com -->
  <link rel="stylesheet" href="{{ asset('../assets/fonts/feather.css') }}">
  <!-- [Font Awesome Icons] https://fontawesome.com/icons -->
  <link rel="stylesheet" href="{{ asset('../assets/fonts/fontawesome.css') }}">
  <!-- [Material Icons] https://fonts.google.com/icons -->
  <link rel="stylesheet" href="{{ asset('../assets/fonts/material.css') }}">
  <!-- [Template CSS Files] -->
  <link rel="stylesheet" href="{{ asset('../assets/css/style.css') }}" id="main-style-link">
  <link rel="stylesheet" href="{{ asset('../assets/css/style-preset.css') }}" id="preset-style-link">
  @yield('CSS')
</head>
<!-- [Head] end -->
<!-- [Body] Start -->

<body data-pc-preset="preset-1" data-pc-direction="ltr" data-pc-theme="light">
  <!-- [ Pre-loader ] start -->
  <div class="loader-bg">
    <div class="loader-track">
      <div class="loader-fill"></div>
    </div>
  </div>
  <!-- [ Pre-loader ] End -->
  <!-- [ Sidebar Menu ] start -->
  @include('layouts.admin.sidebar')
  <!-- [ Sidebar Menu ] end --> <!-- [ Header Topbar ] start -->
  @include('layouts.admin.header')
  <!-- [ Header ] end -->

  <!-- [ Main Content ] start -->
  @yield('content')
  <!-- [ Main Content ] end -->
  @include('layouts.admin.footer')

  <!-- Required Js -->
  <script src="{{ asset('../assets/js/plugins/popper.min.js') }}"></script>
  <script src="{{ asset('../assets/js/plugins/simplebar.min.js') }}"></script>
  <script src="{{ asset('../assets/js/plugins/bootstrap.min.js') }}"></script>
  <script src="{{ asset('../assets/js/fonts/custom-font.js') }}"></script>
  <script src="{{ asset('../assets/js/pcoded.js') }}"></script>
  <script src="{{ asset('../assets/js/plugins/feather.min.js') }}"></script>
  @yield('JS')
  <script>
    layout_change('light');
  </script>
  <script>
    change_box_container('false');
  </script>
  <script>
    layout_rtl_change('false');
  </script>
  <script>
    preset_change("preset-1");
  </script>
  <script>
    font_change("Public-Sans");
  </script>

</body>
<!-- [Body] end -->
</html>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{-- Bootstrap --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css">
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('custom/admin/assets/media/image/favicon.png') }}" />

    <!-- Main css -->
    <link rel="stylesheet" href="{{ asset('custom/admin/vendors/bundle.css') }}" type="text/css">

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap" rel="stylesheet">

    <!-- Daterangepicker -->
    <link rel="stylesheet" href="{{ asset('custom/admin/vendors/datepicker/daterangepicker.css') }}" type="text/css">

    <!-- DataTable -->
    <link rel="stylesheet" href="{{ asset('custom/admin/vendors/dataTable/datatables.min.css') }}" type="text/css">


    <!-- Select2 -->
    <link rel="stylesheet" href="{{ asset('custom/admin/vendors/select2/css/select2.min.css') }}" type="text/css">

    <!-- Range slider -->
    <link rel="stylesheet" href="{{ asset('custom/admin/vendors/range-slider/css/ion.rangeSlider.min.css') }}"
        type="text/css">

    <!-- Tagsinput -->
    <link rel="stylesheet" href="{{ asset('custom/admin/vendors/tagsinput/bootstrap-tagsinput.css') }}"
        type="text/css">

    <!-- Prism -->
    <link rel="stylesheet" href="={{ asset('custom/admin/vendors/prism/prism.css') }}" type="text/css">

    <!-- App css -->
    <link rel="stylesheet" href="{{ asset('custom/admin/assets/css/app.min.css') }}" type="text/css">
    <!-- App css -->
    <link rel="stylesheet" href="{{ asset('custom/style.css') }}" type="text/css">




    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <title> @yield('title') | {{ config('app.name') }}</title>
</head>

<body>


    @yield('content')



    {{-- Bootstrape Script --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Main scripts -->
    <script src="{{ asset('custom/admin/vendors/bundle.js') }}"></script>

    <!-- Apex chart -->
    <script src="{{ asset('custom/admin/vendors/charts/apex/apexcharts.min.js') }}"></script>

    <!-- Daterangepicker -->
    <script src="{{ asset('custom/admin/vendors/datepicker/daterangepicker.js') }}"></script>
    <script src="{{ asset('custom/admin/assets/js/examples/pages/user-list.js') }}"></script>

    <!-- DataTable -->
    <script src="{{ asset('custom/admin/vendors/dataTable/datatables.min.js') }}"></script>




    <!-- Select2 -->
    <script src="{{ asset('custom/admin/vendors/select2/js/select2.min.js') }}"></script>
    <script src="{{ asset('custom/admin/assets/js/examples/select2.js') }}"></script>

    <!-- Range slider -->
    <script src="{{ asset('custom/admin/vendors/range-slider/js/ion.rangeSlider.min.js') }}"></script>
    <script src="{{ asset('custom/admin/assets/js/examples/range-slider.js') }}"></script>

    <!-- Input mask -->
    <script src="{{ asset('custom/admin/vendors/input-mask/jquery.mask.js') }}"></script>
    <script src="{{ asset('custom/admin/assets/js/examples/input-mask.js') }}"></script>

    <!-- Tagsinput -->
    <script src="{{ asset('custom/admin/vendors/tagsinput/bootstrap-tagsinput.js') }}"></script>
    <script src="{{ asset('custom/admin/assets/js/examples/tagsinput.js') }}"></script>

    <!-- Prism -->
    <script src="{{ asset('custom/admin/vendors/prism/prism.js') }}"></script>
    <!-- Dashboard scripts -->
    <script src="{{ asset('custom/admin/assets/js/examples/pages/dashboard.js') }}"></script>

    <script src="{{ asset('custom/admin/vendors/jquery.repeater.min.js') }}"></script>

    <!-- App scripts -->
    <script src="{{ asset('custom/admin/assets/js/app.min.js') }}"></script>

    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from phantom-themes.com/circl/theme/templates/admin1/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 21 Apr 2021 05:12:22 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive Admin Dashboard Template">
    <meta name="keywords" content="admin,dashboard">
    <meta name="author" content="stacks">
    <!-- The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Virtual Tour</title>
    <link rel="shortcut icon" href="{{ asset('circl/images/logo.png') }}">

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,700,800&amp;display=swap" rel="stylesheet">
    <link href="{{ asset('circl/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
{{--    <link href="{{ asset('circl/plugins/font-awesome/css/all.min.css') }}" rel="stylesheet">--}}
    <link rel="stylesheet" type="text/css" href="{{ asset('fontawesome-pro/css/all.css') }}">
    <link href="{{ asset('circl/plugins/perfectscroll/perfect-scrollbar.css') }}" rel="stylesheet">
    <link href="{{ asset('circl/plugins/apexcharts/apexcharts.css') }}" rel="stylesheet">

    <link href="{{ asset('circl/plugins/DataTables/datatables.min.css') }}" rel="stylesheet">

    <!-- Theme Styles -->
    <link href="{{ asset('circl/css/main.min.css') }}" rel="stylesheet">
    <link href="{{ asset('circl/css/custom.css') }}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="{{ asset('cute-alert/style.css') }}" />
    <script src="{{ asset('cute-alert/cute-alert.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
</head>
<body>
@if(Session::has('success'))
    <script>
        window.onload = function() {
            cuteToast({
                type: "success", // or 'info', 'error', 'warning'
                message: "{{ Session::get('success') }}",
                timer: 10000
            })}
    </script>
@endif
<div class='loader'>
    <div class='spinner-grow text-primary' role='status'>
        <span class='sr-only'>Loading...</span>
    </div>
</div>
<div class="page-container">
    @include('layouts.admin.header')
    @include('layouts.admin.sidebar')
    <div class="page-content">
        @yield('content')
    </div>
</div>

<script>
    function confirm() {
        event.preventDefault(); // prevent form submit
        var form = event.target.form;
        Swal.fire({
            title: 'Apakah anda yakin?',
            text: "Data yang telah dihapus tidak dapat dikembalikan!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Hapus',
            cancelButtonText: 'Batal'
        }).then((result) => {
            if (result.isConfirmed) {

                form.submit();
            }
        });
    }
</script>

<!-- Javascripts -->
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
{{--<script src="{{ asset('circl/plugins/jquery/jquery-3.4.1.min.j') }}s"></script>--}}
<script src="https://unpkg.com/@popperjs/core@2"></script>
<script src="{{ asset('circl/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="https://unpkg.com/feather-icons"></script>
<script src="{{ asset('circl/plugins/perfectscroll/perfect-scrollbar.min.js') }}"></script>
<script src="{{ asset('circl/plugins/apexcharts/apexcharts.min.js') }}"></script>
<script src="{{ asset('circl/js/main.min.js') }}"></script>
<script src="{{ asset('circl/js/pages/dashboard.js') }}"></script>

<script src="{{ asset('circl/plugins/DataTables/datatables.min.js') }}"></script>
<script src="{{ asset('circl/js/pages/datatables.js') }}"></script>

</body>

<!-- Mirrored from phantom-themes.com/circl/theme/templates/admin1/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 21 Apr 2021 05:12:55 GMT -->
</html>

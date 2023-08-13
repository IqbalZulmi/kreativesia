<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PsychoSpace</title>
    <link rel="icon shortcut" href="{{ asset('web-assets/image/logo-footer.png') }}">
    <link rel="stylesheet" href="{{ asset('web-assets/css/common.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://cdn.datatables.net/v/bs5/jq-3.7.0/jszip-3.10.1/dt-1.13.6/b-2.4.1/b-html5-2.4.1/b-print-2.4.1/r-2.5.0/datatables.min.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.5/dist/sweetalert2.min.css">
    @stack('css')
</head>
<body>
    @include('components.navbar')
    @yield('content')
    @include('components.footer')
    <div id="jump-to-top" class="jump-to-top">
        <button class="btn d-flex justify-content-center align-items-center">
            <i class="fa-solid fa-circle-arrow-up"></i>
        </button>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script src="{{ asset('web-assets/js/common.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/v/bs5/jq-3.7.0/jszip-3.10.1/dt-1.13.6/b-2.4.1/b-html5-2.4.1/b-print-2.4.1/r-2.5.0/datatables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.5/dist/sweetalert2.all.min.js"></script>
    <script src="{{ asset('web-assets/js/finisher-header.es5.min.js') }}"></script>

    <script type="text/javascript">
        new FinisherHeader({
            "count": 100,
            "size": {
                "min": 2,
                "max": 8,
                "pulse": 0
            },
            "speed": {
                "x": {
                "min": 0,
                "max": 0.4
                },
                "y": {
                "min": 0,
                "max": 0.6
                }
            },
            "colors": {
                "background": "#fff6f6",
                "particles": [
                "#e7c7c6",
                "#c98f8f",
                "#ffc088"
                ]
            },
            "blending": "none",
            "opacity": {
                "center": 1,
                "edge": 0
            },
            "skew": 0,
            "shapes": [
                "c"
            ]
        });
    </script>

    @if (session('notifikasi'))
    <script>
        Swal.fire({
            text: '{{ session('notifikasi') }}',
            icon: '{{ session('type') }}',
            confirmButtonText:'OK',
            showCloseButton: true,
            timer: 2000,
        })
    </script>
    @endif

    @stack('js')
</body>
</html>

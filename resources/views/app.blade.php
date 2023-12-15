<!DOCTYPE html>

<html lang="en" class="light-style layout-menu-fixed layout-compact" dir="ltr" data-theme="theme-default"
    data-assets-path="{{ asset('../assets/') }}" data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <title>Digital Scale</title>
    <meta name="description" content="" />
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/favicon/favicon.ico') }}" />
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/fonts/boxicons.css') }}" />
    <!-- Core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/core.css') }}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/theme-default.css') }}"
        class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ asset('assets/css/demo.css') }}" />
    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/apex-charts/apex-charts.css') }}" />
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.4.2/css/all.css">
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="{{ asset('assets/vendor/js/helpers.js') }}"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{ asset('assets/js/config.js') }}"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.26/webcam.min.js"></script>
</head>

<body>
    @if (session('success'))        
        <div class="position-absolute top-0 mt-4 end-0 me-4" style="z-index: 2000;" id="success-alert">
            <div class="alert alert-success d-flex" role="alert">
                <span class="badge badge-center rounded-pill bg-success border-label-success p-3 me-2"><i
                        class="bx bx-check fs-6"></i></span>
                <div class="d-flex flex-column ps-1">
                    <h6 class="alert-heading d-flex align-items-center fw-bold mb-1">Success !</h6>
                    <span>{{ session('success') }}</span>
                </div>
            </div>
        </div>
    @endif
    @if ($errors->any())
        @foreach ($errors->all() as $err)
            <div class="position-absolute top-0 mt-4 end-0 me-4" style="z-index: 2000;" id="error-alert">
                <div class="alert alert-danger d-flex" role="alert">
                    <span class="badge badge-center rounded-pill bg-danger border-label-danger p-3 me-2"><i
                            class="bx bxs-bell-ring fs-6"></i></span>
                    <div class="d-flex flex-column ps-1">
                        <h6 class="alert-heading d-flex align-items-center fw-bold mb-1">Alert !</h6>
                        <span>{{ $err }}</span>
                    </div>
                </div>
            </div>
        @endforeach
    @endif
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            @yield('sidebar')
            <!-- Layout container -->
            <div class="layout-page">
                @yield('navbar')
                <!-- Content wrapper -->
                <div class="content-wrapper">
                    @yield('content')
                    <!-- Footer -->
                    <footer class="content-footer footer bg-footer-theme">
                        <div
                            class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                            <div class="mb-2 mb-md-0">
                                ©
                                <script>
                                    document.write(new Date().getFullYear());
                                </script>
                                , DigitalScale Team
                            </div>
                            <div class="d-none d-lg-inline-block">
                                <a href="https://themeselection.com/license/" class="footer-link me-4"
                                    target="_blank">License</a>
                                <a href="https://themeselection.com/" target="_blank" class="footer-link me-4">More
                                    Themes</a>

                                <a href="https://demos.themeselection.com/sneat-bootstrap-html-admin-template/documentation/"
                                    target="_blank" class="footer-link me-4">Documentation</a>

                                <a href="https://github.com/themeselection/sneat-html-admin-template-free/issues"
                                    target="_blank" class="footer-link">Support</a>
                            </div>
                        </div>
                    </footer>
                    <!-- / Footer -->
                    <div class="content-backdrop fade"></div>
                </div>
                <!-- Content wrapper -->
            </div>
            <!-- / Layout page -->
        </div>
        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->

    <!-- Your existing HTML code -->
    <!-- Scripts -->
    <script src="{{ asset('assets/vendor/libs/jquery/jquery.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/popper/popper.js') }}"></script>
    <script src="{{ asset('assets/vendor/js/bootstrap.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('assets/vendor/js/menu.js') }}"></script>

    <!-- Vendors JS -->
    <script src="{{ asset('assets/vendor/libs/apex-charts/apexcharts.js') }}"></script>

    <!-- Main JS -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

    <!-- Page JS -->
    <script src="{{ asset('assets/js/dashboards-analytics.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <script>
        setTimeout(function() {
            document.getElementById('success-alert').style.display = 'none';
        }, 5000);
        setTimeout(function() {
            document.getElementById('error-alert').style.display = 'none';
        }, 5000);
    </script>

    @yield('js')

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>

</body>

</html>

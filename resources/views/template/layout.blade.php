<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Pedido Prime</title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <link rel="icon" href="https://cdn.icon-icons.com/icons2/218/PNG/512/Ordering_25406.png" type="image/x-icon" />

    <!-- Fonts and icons -->
    <script src="http://127.0.0.1:8000/assets/js/plugin/webfont/webfont.min.js"></script>
    <script>
        WebFont.load({
            google: {
                "families": ["Lato:300,400,700,900"]
            },
            custom: {
                "families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"],
                urls: ['../assets/css/fonts.min.css']
            },
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="http://127.0.0.1:8000/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://127.0.0.1:8000/assets/css/atlantis2.css">
    <link rel="stylesheet" href="http://127.0.0.1:8000/assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <!-- <link rel="stylesheet" href="//cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css"> -->
    
    <!-- <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/atlantis2.css">
    <link rel="stylesheet" href="../assets/css/style.css"> -->

</head>

<body>
    <div class="wrapper">
        <div class="main-header" data-background-color="purple">
            <div class="nav-top">
                <div class="container d-flex flex-row">
                    <button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon">
                            <i class="icon-menu"></i>
                        </span>
                    </button>
                    <button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
                    <!-- Logo Header -->
                    <a href="/" class="logo d-flex align-items-center">
                        <img src="https://cdn.icon-icons.com/icons2/218/PNG/512/Ordering_25406.png" alt="navbar brand" class="navbar-brand" style="width: 32px;">
                    </a>
                    <h2 style="color: #fff;">Pedido Prime</h2>
                    <!-- End Logo Header -->
                </div>
            </div>
            <div class="nav-bottom bg-white">
                <h3 class="title-menu d-flex d-lg-none">
                    Menu
                    <div class="close-menu"> <i class="flaticon-cross"></i></div>
                </h3>
                <div class="container d-flex flex-row">
                    <ul class="nav page-navigation page-navigation-secondary">
                        <li class="nav-item">
                            <a class="nav-link" href="/">
                                <i class="link-icon icon-screen-desktop"></i>
                                <span class="menu-title">Início</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/clients">
                                <i class="link-icon icon-book-open"></i>
                                <span class="menu-title">Clientes</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/suppliers">
                                <i class="link-icon icon-grid"></i>
                                <span class="menu-title">Fornecedor</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/products">
                                <i class="link-icon icon-disc"></i>
                                <span class="menu-title">Produtos</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <main class="mainCard">
            @yield('content')
        </main>

        <footer class="footer">
            <div class="container">
                <div class="copyright">
                    2023, Desenvolvido <i class="fa fa-copyright text-primary"></i> por <a href="/">Anthony</a>
                </div>
            </div>
        </footer>

    </div>

    <!--   Core JS Files   -->
	<script src="../assets/js/core/jquery.3.2.1.min.js"></script>
	<script src="../assets/js/core/popper.min.js"></script>
	<script src="../assets/js/core/bootstrap.min.js"></script>

	<!-- jQuery UI -->
	<script src="../assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
	<script src="../assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

	<!-- jQuery Scrollbar -->
	<script src="../assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>

	<!-- Moment JS -->
	<script src="../assets/js/plugin/moment/moment.min.js"></script>

	<!-- Chart JS -->
	<script src="../assets/js/plugin/chart.js/chart.min.js"></script>

	<!-- jQuery Sparkline -->
	<script src="../assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

	<!-- Chart Circle -->
	<script src="../assets/js/plugin/chart-circle/circles.min.js"></script>

	<!-- Datatables -->
	<script src="../assets/js/plugin/datatables/datatables.min.js"></script>

	<!-- Bootstrap Notify -->
	<script src="../assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>

	<!-- Bootstrap Toggle -->
	<script src="../assets/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js"></script>

	<!-- jQuery Vector Maps -->
	<script src="../assets/js/plugin/jqvmap/jquery.vmap.min.js"></script>
	<script src="../assets/js/plugin/jqvmap/maps/jquery.vmap.world.js"></script>

	<!-- Google Maps Plugin -->
	<script src="../assets/js/plugin/gmaps/gmaps.js"></script>

	<!-- Dropzone -->
	<script src="../assets/js/plugin/dropzone/dropzone.min.js"></script>

	<!-- Fullcalendar -->
	<script src="../assets/js/plugin/fullcalendar/fullcalendar.min.js"></script>

	<!-- DateTimePicker -->
	<script src="../assets/js/plugin/datepicker/bootstrap-datetimepicker.min.js"></script>

	<!-- Bootstrap Tagsinput -->
	<script src="../assets/js/plugin/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>

	<!-- Bootstrap Wizard -->
	<script src="../assets/js/plugin/bootstrap-wizard/bootstrapwizard.js"></script>

	<!-- jQuery Validation -->
	<script src="../assets/js/plugin/jquery.validate/jquery.validate.min.js"></script>

	<!-- Summernote -->
	<script src="../assets/js/plugin/summernote/summernote-bs4.min.js"></script>

	<!-- Select2 -->
	<script src="../assets/js/plugin/select2/select2.full.min.js"></script>

	<!-- Sweet Alert -->
	<script src="../assets/js/plugin/sweetalert/sweetalert.min.js"></script>

	<!-- Atlantis JS -->
	<!-- <script src="../assets/js/atlantis2.min.js"></script> -->

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="http://127.0.0.1:8000/assets/js/datatable.js"></script>
</body>

</html>
<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Control Fluidos | Inicio</title>

    <!-- Custom fonts for this template-->
    <link rel="shortcut icon" href="{{ asset('img/favicon.png') }}">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <link rel="stylesheet" href="css/grafcias.css">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul style="background-color: #5e80b7;" class="navbar-nav  sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="dashboard">
                <div class="sidebar-brand-icon">
                    <img width="70px" src="{{ asset('img/logo_cf.png') }}" alt="logo">
                </div>
                <div class="sidebar-brand-text mx-3">Control Fluidos</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="dashboard">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Módulos
            </div>

            <!-- Nav Item - Pages Collapse Menu -->

            <li class="nav-item">
                <a class="nav-link" href="menu">
                    <i class="fas fa-database"></i>
                    <span>Registros</span></a>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Ubicaciones</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Consulta de módulos:</h6>
                        <a class="collapse-item" href="plantas"><i class="fas fa-industry"></i> Plantas</a>
                        <a class="collapse-item" href="areas"><i class="fas fa-project-diagram"></i>
                            Áreas</a>
                        <a class="collapse-item" href="lineas"><i class="fas fa-sitemap"></i>
                            Líneas</a>
                        <a class="collapse-item" href="maquinas"><i class="fas fa-columns"></i> Máquinas</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Reportes
            </div>

            <!-- Nav Item - Pages Collapse Menu -->


            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="reportes">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Estado de Máquina</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fas fa-fw fa-table"></i>
                    <span>General Área</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <!-- Sidebar Message -->
            <div class="sidebar-card d-none d-lg-flex ">
                <img class="sidebar-card-illustration mb-2" src="{{ asset('img/undraw_upload_re_pasx.svg') }}"
                    alt="admin">
                <p class="text-center mb-2"><strong>Sistema Administrativo</strong> dirigete al panel para administrar
                    tu información.</p>
                <a class="btn btn-success btn-sm {{ auth()->user()->role_id > 2 ? '' : 'disabled' }}"  href="admin">Ingresar</a>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Contenido Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->

                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">

                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">


                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <!--  <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                        -->

                        <!-- Dropdown - Messages -->
                        <!--
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>
                          -->

                        <!-- Nav Item - Alerts

                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>   -->

                        <!-- Counter - Alerts
                                <span class="badge badge-danger badge-counter">3+</span>
                            </a>   -->




                        <!-- Dropdown - Alerts
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alerts Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 12, 2019</div>
                                        <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                            <i class="fas fa-donate text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 7, 2019</div>
                                        $290.29 has been deposited into your account!
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 2, 2019</div>
                                        Spending Alert: We've noticed unusually high spending for your account.
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                            </div>
                        </li>   -->

                        <!-- Nav Item - Messages
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i>   -->


                        <!-- Counter - Messages
                                <span class="badge badge-danger badge-counter">7</span>
                            </a>    -->


                        <!-- Dropdown - Messages
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                    Message Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_1.svg"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div class="font-weight-bold">
                                        <div class="text-truncate">Hi there! I am wondering if you can help me with a
                                            problem I've been having.</div>
                                        <div class="small text-gray-500">Emily Fowler · 58m</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_2.svg"
                                            alt="...">
                                        <div class="status-indicator"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">I have the photos that you ordered last month, how
                                            would you like them sent to you?</div>
                                        <div class="small text-gray-500">Jae Chun · 1d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_3.svg"
                                            alt="...">
                                        <div class="status-indicator bg-warning"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Last month's report looks great, I am very happy with
                                            the progress so far, keep up the good work!</div>
                                        <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                                            told me that people say this to all dogs, even if they aren't good...</div>
                                        <div class="small text-gray-500">Chicken the Dog · 2w</div>
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>       -->

                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle"  id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <script type="text/javascript">
                                    function startTime() {
                                        today = new Date();
                                        h = today.getHours();
                                        m = today.getMinutes();
                                        s = today.getSeconds();
                                        m = checkTime(m);
                                        s = checkTime(s);
                                        document.getElementById('reloj').innerHTML = h + ":" + m + ":" + s;
                                        t = setTimeout('startTime()', 500);
                                    }

                                    function checkTime(i) {
                                        if (i < 10) {
                                            i = "0" + i;
                                        }
                                        return i;
                                    }
                                    window.onload = function() {
                                        startTime();
                                    }
                                </script>
                                <div id="reloj" style="font-size:15px;"></div>
                            </a>
                        </li>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span
                                    class="mr-2 d-none d-lg-inline text-gray-600 small">{{ auth()->user()->name }}</span>
                                <img class="img-profile rounded-circle" src="{{ asset('img/avatar.png') }}">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="perfil">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Perfil
                                </a>

                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal"
                                    data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Cerrar sesión
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- ================================ Begin Page Content  ======================================-->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h5 class="h6 mb-0 text-gray-800"><i class="fas fa-tachometer-alt"></i> Dashboard</h5>
                        <a  class="d-none d-sm-inline-block "><i
                                class="fas fa-stroopwafel fa-spin"></i></a>
                    </div>

                    <!-- Seccion de Tarjetasphp artisa -->

                    @livewire('dashboard.tarjetas')


                    <!-- Seccion 2 -->
                    <div class="row">

                        <!-- Content Column -->
                        <div class="col-lg-6 mb-4">
                            <!-- Contenido 1 -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Nivel de Máquinas</h6>
                                </div>
                                <div class="card-body">
                                    <h4 class="small font-weight-bold"> Honder 010 <span
                                            class="float-right">50%</span></h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 50%"
                                            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <h4 class="small font-weight-bold">Honder 07 <span class="float-right">40%</span>
                                    </h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 40%"
                                            aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <h4 class="small font-weight-bold">Honder 06 <span class="float-right">60%</span>
                                    </h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar" role="progressbar" style="width: 60%"
                                            aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <h4 class="small font-weight-bold">Honder 04 <span class="float-right">80%</span>
                                    </h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 80%"
                                            aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <h4 class="small font-weight-bold">Honder 05 <span class="float-right">40%</span>
                                    </h4>
                                    <div class="progress">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 40%"
                                            aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                            <!-- Contenido 1 -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Nivel de Máquinas</h6>
                                </div>
                                <div class="card-body">
                                    <h4 class="small font-weight-bold"> Honder 010 <span
                                            class="float-right">50%</span></h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 50%"
                                            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <h4 class="small font-weight-bold">Honder 07 <span class="float-right">40%</span>
                                    </h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 40%"
                                            aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <h4 class="small font-weight-bold">Honder 06 <span class="float-right">60%</span>
                                    </h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar" role="progressbar" style="width: 60%"
                                            aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <h4 class="small font-weight-bold">Honder 04 <span class="float-right">80%</span>
                                    </h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 80%"
                                            aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <h4 class="small font-weight-bold">Honder 05 <span class="float-right">40%</span>
                                    </h4>
                                    <div class="progress">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 40%"
                                            aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="col-lg-6 mb-4">

                            <!-- Illustrations -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Noticias marketing</h6>
                                </div>
                                <div class="card-body">
                                    <div class="text-center">
                                        <!--<img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;"
                                            src="{{ asset('img/undraw_posting_photo.svg') }}" alt="...">  -->


                                        <div id="carouselExampleIndicators" class="carousel slide"
                                            data-ride="carousel">
                                            <ol class="carousel-indicators">
                                                <li data-target="#carouselExampleIndicators" data-slide-to="0"
                                                    class="active"></li>
                                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                                                <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>

                                            </ol>
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <img class="d-block w-100"
                                                        src="{{ asset('img/publicidad1.jpg') }}"
                                                        alt="First slide">
                                                   <!-- <div v class="carousel-caption d-none d-md-block">
                                                        <h5> Nuevo comentario</h5>
                                                        <p>Esta es una descripcion del comentario</p>
                                                    </div>-->
                                                </div>
                                                <div class="carousel-item">
                                                    <img class="d-block w-100" src="{{ asset('img/publicidad2.png') }}"
                                                        alt="Second slide">

                                                </div>
                                                <div class="carousel-item">
                                                    <img class="d-block w-100" src="{{ asset('img/publicidad3.jpg') }}"
                                                        alt="Third slide">

                                                </div>
                                                <div class="carousel-item">
                                                    <img class="d-block w-100" src="{{ asset('img/publicidad4.png') }}"
                                                        alt="Second slide">

                                                </div>
                                                <div class="carousel-item">
                                                    <img class="d-block w-100" src="{{ asset('img/publicidad5.jpg') }}"
                                                        alt="Third slide">

                                                </div>
                                            </div>
                                            <a class="carousel-control-prev" href="#carouselExampleIndicators"
                                                role="button" data-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Anterior</span>
                                            </a>
                                            <a class="carousel-control-next" href="#carouselExampleIndicators"
                                                role="button" data-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Siguiente</span>
                                            </a>
                                        </div>
                                    </div>
                                    <br>
                                    <a target="_blank" rel="nofollow" href="">Ver mas información &rarr;</a>
                                </div>
                            </div>

                            <!-- Approach
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Sección nueva </h6>
                                </div>
                                <div class="card-body">
                                    <p></p>
                                    <p class="mb-0"></p>
                                </div>
                            </div>
                        -->
                        </div>

                    </div>


                    <!-- Seccion 3 -->
                    <div class="row">
                        <!-- Area Chart -->
                        <div class="col-xl-12 col-lg-7">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Ultimas concentraciones</h6>

                                </div>
                                <!-- Card Body -->
                                <div class="card-body">

                                    <figure class="highcharts-figure">
                                        <div id="graficas"></div>
                                    </figure>
                                </div>
                            </div>
                        </div>

                    </div>



                </div>
                <!-- ================================== /.container-fluid ============================================= -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <!--<span>Copyright &copy; Cutting Fluids 2022</span>-->
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">¿Listo para salir?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Seleccione "Cerrar sesión" a continuación si está listo para finalizar su
                    sesión actual.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <div class="nav-item">
                            <a class="btn btn-primary" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                        this.closest('form').submit(); "
                                role="button">Cerrar Sesión</a>
                        </div>
                    </form>


                </div>

            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

    <!-- highcharts Graficas -->
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/series-label.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>

    <script>
        Highcharts.chart('graficas', {
            chart: {
                type: 'spline'
            },
            title: {
                text: 'Snow depth at Vikjafjellet, Norway'
            },
            subtitle: {
                text: 'Irregular time data in Highcharts JS'
            },
            xAxis: {
                type: 'datetime',
                dateTimeLabelFormats: { // don't display the dummy year
                    month: '%e. %b',
                    year: '%b'
                },
                title: {
                    text: 'Date'
                }
            },
            yAxis: {
                title: {
                    text: 'Snow depth (m)'
                },
                min: 0
            },
            tooltip: {
                headerFormat: '<b>{series.name}</b><br>',
                pointFormat: '{point.x:%e. %b}: {point.y:.2f} m'
            },

            plotOptions: {
                series: {
                    marker: {
                        enabled: true,
                        radius: 2.5
                    }
                }
            },

            colors: ['#6CF', '#39F', '#06C', '#036', '#000'],

            // Define the data points. All series have a dummy year of 1970/71 in order
            // to be compared on the same x axis. Note that in JavaScript, months start
            // at 0 for January, 1 for February etc.
            series: [{
                name: "Winter 2019-2020",
                data: [
                    [Date.UTC(1970, 9, 24), 0],
                    [Date.UTC(1970, 9, 27), 0.12],
                    [Date.UTC(1970, 9, 30), 0.09],
                    [Date.UTC(1970, 10, 3), 0.13],
                    [Date.UTC(1970, 10, 6), 0.12],
                    [Date.UTC(1970, 10, 9), 0.13],
                    [Date.UTC(1970, 10, 12), 0.13],
                    [Date.UTC(1970, 10, 15), 0.16],
                    [Date.UTC(1970, 10, 18), 0.19],
                    [Date.UTC(1970, 10, 21), 0.25],
                    [Date.UTC(1970, 10, 24), 0.26],
                    [Date.UTC(1970, 10, 27), 0.24],
                    [Date.UTC(1970, 10, 30), 0.25],
                    [Date.UTC(1970, 11, 3), 0.26],
                    [Date.UTC(1970, 11, 6), 0.36],
                    [Date.UTC(1970, 11, 9), 0.43],
                    [Date.UTC(1970, 11, 12), 0.32],
                    [Date.UTC(1970, 11, 15), 0.48],
                    [Date.UTC(1970, 11, 18), 0.5],
                    [Date.UTC(1970, 11, 21), 0.44],
                    [Date.UTC(1970, 11, 24), 0.43],
                    [Date.UTC(1970, 11, 27), 0.45],
                    [Date.UTC(1970, 11, 30), 0.4],
                    [Date.UTC(1971, 0, 3), 0.39],
                    [Date.UTC(1971, 0, 6), 0.56],
                    [Date.UTC(1971, 0, 9), 0.57],
                    [Date.UTC(1971, 0, 12), 0.68],
                    [Date.UTC(1971, 0, 15), 0.93],
                    [Date.UTC(1971, 0, 18), 1.11],
                    [Date.UTC(1971, 0, 21), 1.01],
                    [Date.UTC(1971, 0, 24), 0.99],
                    [Date.UTC(1971, 0, 27), 1.17],
                    [Date.UTC(1971, 0, 30), 1.24],
                    [Date.UTC(1971, 1, 3), 1.41],
                    [Date.UTC(1971, 1, 6), 1.47],
                    [Date.UTC(1971, 1, 9), 1.4],
                    [Date.UTC(1971, 1, 12), 1.92],
                    [Date.UTC(1971, 1, 15), 2.03],
                    [Date.UTC(1971, 1, 18), 2.46],
                    [Date.UTC(1971, 1, 21), 2.53],
                    [Date.UTC(1971, 1, 24), 2.73],
                    [Date.UTC(1971, 1, 27), 2.67],
                    [Date.UTC(1971, 2, 3), 2.65],
                    [Date.UTC(1971, 2, 6), 2.62],
                    [Date.UTC(1971, 2, 9), 2.79],
                    [Date.UTC(1971, 2, 13), 2.93],
                    [Date.UTC(1971, 2, 20), 3.09],
                    [Date.UTC(1971, 2, 27), 2.76],
                    [Date.UTC(1971, 2, 30), 2.73],
                    [Date.UTC(1971, 3, 4), 2.9],
                    [Date.UTC(1971, 3, 9), 2.77],
                    [Date.UTC(1971, 3, 12), 2.78],
                    [Date.UTC(1971, 3, 15), 2.76],
                    [Date.UTC(1971, 3, 18), 2.76],
                    [Date.UTC(1971, 3, 21), 2.7],
                    [Date.UTC(1971, 3, 24), 2.61],
                    [Date.UTC(1971, 3, 27), 2.52],
                    [Date.UTC(1971, 3, 30), 2.53],
                    [Date.UTC(1971, 4, 3), 2.55],
                    [Date.UTC(1971, 4, 6), 2.52],
                    [Date.UTC(1971, 4, 9), 2.44],
                    [Date.UTC(1971, 4, 12), 2.43],
                    [Date.UTC(1971, 4, 15), 2.43],
                    [Date.UTC(1971, 4, 18), 2.48],
                    [Date.UTC(1971, 4, 21), 2.41],
                    [Date.UTC(1971, 4, 24), 2.16],
                    [Date.UTC(1971, 4, 27), 2.01],
                    [Date.UTC(1971, 4, 30), 1.88],
                    [Date.UTC(1971, 5, 2), 1.62],
                    [Date.UTC(1971, 5, 6), 1.43],
                    [Date.UTC(1971, 5, 9), 1.3],
                    [Date.UTC(1971, 5, 12), 1.11],
                    [Date.UTC(1971, 5, 15), 0.84],
                    [Date.UTC(1971, 5, 18), 0.54],
                    [Date.UTC(1971, 5, 21), 0.19],
                    [Date.UTC(1971, 5, 23), 0]
                ]
            }, {
                name: "Winter 2020-2021",
                data: [
                    [Date.UTC(1970, 10, 14), 0],
                    [Date.UTC(1970, 11, 6), 0.35],
                    [Date.UTC(1970, 11, 13), 0.35],
                    [Date.UTC(1970, 11, 20), 0.33],
                    [Date.UTC(1970, 11, 30), 0.53],
                    [Date.UTC(1971, 0, 13), 0.62],
                    [Date.UTC(1971, 0, 20), 0.6],
                    [Date.UTC(1971, 1, 2), 0.69],
                    [Date.UTC(1971, 1, 18), 0.67],
                    [Date.UTC(1971, 1, 21), 0.65],
                    [Date.UTC(1971, 1, 24), 0.66],
                    [Date.UTC(1971, 1, 27), 0.66],
                    [Date.UTC(1971, 2, 3), 0.61],
                    [Date.UTC(1971, 2, 6), 0.6],
                    [Date.UTC(1971, 2, 9), 0.69],
                    [Date.UTC(1971, 2, 12), 0.66],
                    [Date.UTC(1971, 2, 15), 0.75],
                    [Date.UTC(1971, 2, 18), 0.76],
                    [Date.UTC(1971, 2, 21), 0.75],
                    [Date.UTC(1971, 2, 24), 0.69],
                    [Date.UTC(1971, 2, 27), 0.82],
                    [Date.UTC(1971, 2, 30), 0.86],
                    [Date.UTC(1971, 3, 3), 0.81],
                    [Date.UTC(1971, 3, 6), 1],
                    [Date.UTC(1971, 3, 9), 1.15],
                    [Date.UTC(1971, 3, 10), 1.35],
                    [Date.UTC(1971, 3, 12), 1.26],
                    [Date.UTC(1971, 3, 15), 1.18],
                    [Date.UTC(1971, 3, 18), 1.14],
                    [Date.UTC(1971, 3, 21), 1.04],
                    [Date.UTC(1971, 3, 24), 1.06],
                    [Date.UTC(1971, 3, 27), 1.05],
                    [Date.UTC(1971, 3, 30), 1.03],
                    [Date.UTC(1971, 4, 3), 1.01],
                    [Date.UTC(1971, 4, 6), 0.98],
                    [Date.UTC(1971, 4, 9), 0.94],
                    [Date.UTC(1971, 4, 12), 0.8],
                    [Date.UTC(1971, 4, 15), 0.61],
                    [Date.UTC(1971, 4, 18), 0.43],
                    [Date.UTC(1971, 4, 21), 0.29],
                    [Date.UTC(1971, 4, 24), 0.1],
                    [Date.UTC(1971, 4, 26), 0]
                ]
            }, {
                name: "Winter 2021-2022",
                data: [
                    [Date.UTC(1970, 10, 5), 0],
                    [Date.UTC(1970, 10, 12), 0.1],
                    [Date.UTC(1970, 10, 21), 0.15],
                    [Date.UTC(1970, 10, 22), 0.19],
                    [Date.UTC(1970, 10, 27), 0.17],
                    [Date.UTC(1970, 10, 30), 0.27],
                    [Date.UTC(1970, 11, 2), 0.25],
                    [Date.UTC(1970, 11, 4), 0.27],
                    [Date.UTC(1970, 11, 5), 0.26],
                    [Date.UTC(1970, 11, 6), 0.25],
                    [Date.UTC(1970, 11, 7), 0.26],
                    [Date.UTC(1970, 11, 8), 0.26],
                    [Date.UTC(1970, 11, 9), 0.25],
                    [Date.UTC(1970, 11, 10), 0.25],
                    [Date.UTC(1970, 11, 11), 0.25],
                    [Date.UTC(1970, 11, 12), 0.26],
                    [Date.UTC(1970, 11, 22), 0.22],
                    [Date.UTC(1970, 11, 23), 0.22],
                    [Date.UTC(1970, 11, 24), 0.22],
                    [Date.UTC(1970, 11, 25), 0.24],
                    [Date.UTC(1970, 11, 26), 0.24],
                    [Date.UTC(1970, 11, 27), 0.24],
                    [Date.UTC(1970, 11, 28), 0.24],
                    [Date.UTC(1970, 11, 29), 0.24],
                    [Date.UTC(1970, 11, 30), 0.22],
                    [Date.UTC(1970, 11, 31), 0.18],
                    [Date.UTC(1971, 0, 1), 0.17],
                    [Date.UTC(1971, 0, 2), 0.23],
                    [Date.UTC(1971, 0, 9), 0.5],
                    [Date.UTC(1971, 0, 10), 0.5],
                    [Date.UTC(1971, 0, 11), 0.53],
                    [Date.UTC(1971, 0, 12), 0.48],
                    [Date.UTC(1971, 0, 13), 0.4],
                    [Date.UTC(1971, 0, 17), 0.36],
                    [Date.UTC(1971, 0, 22), 0.69],
                    [Date.UTC(1971, 0, 23), 0.62],
                    [Date.UTC(1971, 0, 29), 0.72],
                    [Date.UTC(1971, 1, 2), 0.95],
                    [Date.UTC(1971, 1, 10), 1.73],
                    [Date.UTC(1971, 1, 15), 1.76],
                    [Date.UTC(1971, 1, 26), 2.18],
                    [Date.UTC(1971, 2, 2), 2.22],
                    [Date.UTC(1971, 2, 6), 2.13],
                    [Date.UTC(1971, 2, 8), 2.11],
                    [Date.UTC(1971, 2, 9), 2.12],
                    [Date.UTC(1971, 2, 10), 2.11],
                    [Date.UTC(1971, 2, 11), 2.09],
                    [Date.UTC(1971, 2, 12), 2.08],
                    [Date.UTC(1971, 2, 13), 2.08],
                    [Date.UTC(1971, 2, 14), 2.07],
                    [Date.UTC(1971, 2, 15), 2.08],
                    [Date.UTC(1971, 2, 17), 2.12],
                    [Date.UTC(1971, 2, 18), 2.19],
                    [Date.UTC(1971, 2, 21), 2.11],
                    [Date.UTC(1971, 2, 24), 2.1],
                    [Date.UTC(1971, 2, 27), 1.89],
                    [Date.UTC(1971, 2, 30), 1.92],
                    [Date.UTC(1971, 3, 3), 1.9],
                    [Date.UTC(1971, 3, 6), 1.95],
                    [Date.UTC(1971, 3, 9), 1.94],
                    [Date.UTC(1971, 3, 12), 2],
                    [Date.UTC(1971, 3, 15), 1.9],
                    [Date.UTC(1971, 3, 18), 1.84],
                    [Date.UTC(1971, 3, 21), 1.75],
                    [Date.UTC(1971, 3, 24), 1.69],
                    [Date.UTC(1971, 3, 27), 1.64],
                    [Date.UTC(1971, 3, 30), 1.64],
                    [Date.UTC(1971, 4, 3), 1.58],
                    [Date.UTC(1971, 4, 6), 1.52],
                    [Date.UTC(1971, 4, 9), 1.43],
                    [Date.UTC(1971, 4, 12), 1.42],
                    [Date.UTC(1971, 4, 15), 1.37],
                    [Date.UTC(1971, 4, 18), 1.26],
                    [Date.UTC(1971, 4, 21), 1.11],
                    [Date.UTC(1971, 4, 24), 0.92],
                    [Date.UTC(1971, 4, 27), 0.75],
                    [Date.UTC(1971, 4, 30), 0.55],
                    [Date.UTC(1971, 5, 3), 0.35],
                    [Date.UTC(1971, 5, 6), 0.21],
                    [Date.UTC(1971, 5, 9), 0]
                ]
            }]
        });
    </script>

</body>

</html>

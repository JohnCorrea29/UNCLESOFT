<body class="white-content">
  <div class="wrapper">
    <div class="sidebar">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red"
    -->
      <div class="sidebar-wrapper">
        <div class="logo">
          <img src="View/Dashboard/assets/img/LOGO2.png" alt="Logo Empresa">
        </div>
        <ul class="nav">
          <li>
            <a href="dashboard.php">
              <i class="tim-icons icon-chart-pie-36"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li>
              <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                <i class="tim-icons icon-chart-pie-36"></i>
                <p>Gestión Empleado<p>
              </a>
                <ul class="collapse list-unstyled" id="homeSubmenu">              
                  <li>
                    <a href="?c=Empleado">Administrar Empleado</a>
                  </li>
                  <li>
                    <a href="?c=Horario">Horario</a>
                  </li>
                </ul> 
          </li>
          <li>
            
              <a href="#homeSubmenu1" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                <i class="tim-icons icon-chart-pie-36"></i>
                <p>Gestión Pedido<p>
              </a>
                <ul class="collapse list-unstyled" id="homeSubmenu1">              
                  <li>
                    <a href="AdministrarPro.php">Administrar Productos</a>
                  </li>
                  <li>
                    <a href="GestionarPed.php">Gestionar Pedidos</a>
                  </li>
                  <li>
                    <a href="?c=TipoServ">Administrar Servicio</a>
                  </li>
                </ul> 
          </li>
          <li>
              <a href="#homeSubmenu2" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                <i class="tim-icons icon-chart-pie-36"></i>
                <p>Gestión Seguimiento<p>
              </a>
                <ul class="collapse list-unstyled" id="homeSubmenu2">             
                  <li>
                    <a href="Evaluacion.php">Evaluación</a>
                  </li>
                  <li>
                    <a href="Reportes.php">Reportes</a>
                  </li>
                  <li>
                    <a href="Historial.php">Historial Cliente</a>
                  </li>
                </ul> 
          </li>
          <li>
            <a href="?c=Pago">
              <i class="tim-icons icon-puzzle-10"></i>
              <p>Gestión Pago</p>
            </a>
          </li>
          <li>
            <a src="Dashboard.tawk.to/login.com">
              <i class="tim-icons icon-puzzle-10"></i>
              <p>Contacto</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle d-inline">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="javascript:void(0)">ADMINISTRADOR</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse" id="navigation">
            <ul class="navbar-nav ml-auto">
              <li class="search-bar input-group">
                <button class="btn btn-link" id="search-button" data-toggle="modal" data-target="#searchModal"><i class="tim-icons icon-zoom-split" ></i>
                  <span class="d-lg-none d-md-block">Search</span>
                </button>
              </li>
              <li class="dropdown nav-item">
                <a href="javascript:void(0)" class="dropdown-toggle nav-link" data-toggle="dropdown">
                  <div class="notification d-none d-lg-block d-xl-block"></div>
                  <i class="tim-icons icon-sound-wave"></i>
                  <p class="d-lg-none">
                    Notificaciones
                  </p>
                </a>
                <ul class="dropdown-menu dropdown-menu-right dropdown-navbar">
                  <li class="nav-link"><a href="#" class="nav-item dropdown-item">Mike John responded to your email</a></li>
                  <li class="nav-link"><a href="javascript:void(0)" class="nav-item dropdown-item">You have 5 more tasks</a></li>
                  <li class="nav-link"><a href="javascript:void(0)" class="nav-item dropdown-item">Your friend Michael is in town</a></li>
                  <li class="nav-link"><a href="javascript:void(0)" class="nav-item dropdown-item">Another notification</a></li>
                  <li class="nav-link"><a href="javascript:void(0)" class="nav-item dropdown-item">Another one</a></li>
                </ul>
              </li>
              <li class="dropdown nav-item">
                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                  <div class="photo">
                    <img src="View/Dashboard/assets/img/anime3.png" alt="Profile Photo">
                  </div>
                  <b class="caret d-none d-lg-block d-xl-block"></b>
                  <p class="d-lg-none">
                    Log out
                  </p>
                </a>
                <ul class="dropdown-menu dropdown-navbar">
                  <li class="nav-link"><a href="Profile.php" class="nav-item dropdown-item">Profile</a></li>
                  <li class="dropdown-divider"></li>
                  <li class="nav-link"><a href="javascript:void(0)" class="nav-item dropdown-item">Log out</a></li>
                </ul>
              </li>
              <li class="separator d-lg-none"></li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="modal modal-search fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="searchModal" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="SEARCH">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <i class="tim-icons icon-simple-remove"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- End Navbar -->
<?php 
    $titulo="VILLA|| Admin";

?>

<?php require_once "layouts/head.php"; ?>

    <link rel="stylesheet" href="<?php echo url; ?>/view/css/nav-bar.css">
    <script src="<?php echo url;?>/view/js/panel_graficos.js" defer></script>
</head>
<body>
<div class="admin-container">
    <!-- Sidebar -->
    <aside class="sidebar">
        <!-- Brand Section -->
        <div class="sidebar-header">
            <div class="brand">
                <i class="fas fa-hotel"></i>
                <h2>HOTEL VILLA</h2>
                <span>EXPERIENCIA DE LUJO </span>
            </div>
        </div>
        
        <!-- Navigation -->
        <nav class="sidebar-nav">
            <!-- Main Section -->
            <div class="nav-section">
                <span>PRINCIPAL</span>
                <ul>
                    <li class="active">
                        <a href="?vista=inicio"><i class="fas fa-tachometer-alt"></i>Vista General</a>
                    </li>
                </ul>
            </div>

            <!-- Hotel Management -->
            <div class="nav-section">
                <span>GESTIÓN HOTELERA</span>
                <ul>
                    <li><a href="?vista=habitaciones"><i class="fas fa-bed"></i>Habitaciones</a></li>
                    <li><a href="?vista=reservaciones"><i class="fas fa-calendar-alt"></i>Reservaciones</a></li>
                    <li><a href="?vista=huespedes"><i class="fas fa-user-tie"></i>Huéspedes</a></li>
                </ul>
            </div>

            <!-- Services Section -->
            <div class="nav-section">
                <span>SERVICIOS</span>
                <ul>
                    <li><a href="?vista=restaurante"><i class="fas fa-utensils"></i>Restaurante</a></li>
                    <li><a href="?vista=spa"><i class="fas fa-spa"></i>Spa & Wellness</a></li>
                    <li><a href="?vista=eventos"><i class="fas fa-glass-cheers"></i>Eventos</a></li>
                </ul>
            </div>

            <!-- Analysis Section -->
            <div class="nav-section">
                <span>ANÁLISIS</span>
                <ul>
                    <li><a href="?vista=reportes"><i class="fas fa-chart-line"></i>Reportes</a></li>
                    <li><a href="?vista=finanzas"><i class="fas fa-dollar-sign"></i>Finanzas</a></li>
                </ul>
            </div>
        </nav>
    </aside>

    <!-- Main Content -->
    <main class="main-content">
        <!-- Top Navigation -->
        <?php include('./view/layouts/nav_bar.php'); ?>

        <!-- Dashboard Content -->
        <div class="dashboard-content">
            <!-- Welcome Section -->
            <div class="welcome-section">
                <h1>Bienvenido, James</h1>
                <p><?php echo date('l, d F Y'); ?></p>
            </div>

            <!-- Statistics -->
            <div class="stat-card flex flex-colum alig-center" >
                <p>Reporte de Ventas Actuales</p>
                <div class="reportes">
                    <div class="stat-info">
                        <h3>Avances de ventas de hoy</h3>
                        <canvas id="ventas"  ></canvas>
                    </div>
                    <div class="stat-info">
                        <h3>Ventas de Hoy</h3>
                        <canvas id="ingresos"></canvas>
                    </div>
                </div>
            </div>

            <!-- Activity Log -->
            <div class="activity-section">
                <div class="section-header">
                    <h2>Actividad Reciente</h2>
                    <button class="filter-btn">
                        <i class="fas fa-filter"></i>Filtrar
                    </button>
                </div>
                <div class="activity-list">
                    <div class="activity-item">
                        <div class="activity-icon">
                            <i class="fas fa-key"></i>
                        </div>
                        <div class="activity-info">
                            <p>Check-in: Suite Presidencial</p>
                            <span class="guest">Sr. Robert Smith</span>
                            <div class="meta">
                                <span>Hace 5 minutos</span>
                                <span>304</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="activity-section">
                <div class="section-header">
                    <h2>Reporte de Nuevos Mienbros</h2>
                    <label class="filter-btn" for="">
                        <input class="fas fa-filter" type="date" name="" id="">
                    </label>
                </div>
                <div class="activity-list">
                    <canvas id="myChart" width="400" height="400"></canvas>
                </div>
            </div>
        </div>
    </main>
</div>
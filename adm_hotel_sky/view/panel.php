<?php 
    $titulo="VILLA|| Admin";
    $fecha = Date('l, F j, Y');
?>

<?php require_once "layouts/head.php"; ?>

    <link rel="stylesheet" href="<?php echo url; ?>/view/css/nav-bar.css">
    
    <script src="<?php echo url;?>/view/js/panel_graficos.js" defer></script>
    <!-- logica de responsive -->
    <script src="<?php echo url;?>/view/js/menu-responsive.js" defer></script>
</head>
<body>
<div class="admin-container">
    <!-- Agregar botón toggle -->
    <button class="menu-toggle">
    <i class="fa-solid fa-bars"></i>
    </button>

    <!-- Agregar overlay -->
    <div class="sidebar-overlay"></div>

    <!-- navegacion izquierda -->
    <?php include('./view/layouts/nav_var_izquierdo.php'); ?>

    <!-- Main Content -->
    <main class="main-content">
        <!--navegacion superior -->
        <?php include('./view/layouts/nav_bar.php'); ?>

        <!-- Dashboard Content -->
        <div class="dashboard-content">
            <!-- Welcome Section -->
            <div class="welcome-section">
                <h1>Bienvenido, <?php echo $_SESSION['nombre']; ?></h1>
                <p><?php echo $fecha; ?></p>
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
                    <label class="filter-btn">
                        <input class="fas fa-filter" type="month" name="" id="fecha_reporte">
                    </label>
                </div>
                <div class="activity-list posicion_cuadro">
                    <canvas id="myChart" ></canvas>
                </div>
            </div>
        </div>
    </main>
</div>
<?php $titulo="VILLA|| Admin" ?>
<?php require_once "layouts/head.php"; ?>
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
        <header class="top-nav">
            <div class="search-wrapper">
                <div class="search-bar">
                    <i class="fas fa-search"></i>
                    <input type="search" placeholder="Buscar...">
                </div>
            </div>

            <div class="nav-actions">
                <button class="action-button">
                    <i class="fas fa-plus"></i>
                    <span>Nueva Reserva</span>
                </button>

                <div class="notifications">
                    <i class="fas fa-bell"></i>
                    <span class="badge">3</span>
                </div>

                <div class="user-profile">
                    <img src="  https://imgs.search.brave.com/dR4fAJSp-ZGtGMQBLZk_rDtJEEXcxtGRuNo-LJatKPc/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9jZG4u/Y2FuYWwyNi5jb20v/bWVkaWEvaW1hZ2Uv/MjAyNC8wNS8yNy82/MDUxODkuanBnP3M9/MSZhPTQwMTQ5Mw" alt="Admin">
                    <div class="user-info">
                        <span class="name">James Wilson</span>
                        <span class="role">Hotel Manager</span>
                    </div>
                </div>
            </div>
        </header>

        <!-- Dashboard Content -->
        <div class="dashboard-content">
            <!-- Welcome Section -->
            <div class="welcome-section">
                <h1>Bienvenido, James</h1>
                <p><?php echo date('l, d F Y'); ?></p>
            </div>

            <!-- Statistics -->
            <div class="stats-grid">
                <div class="stat-card">
                    <div class="stat-header">
                        <div class="stat-icon"><i class="fas fa-bed"></i></div>
                        <i class="fas fa-ellipsis-v"></i>
                    </div>
                    <div class="stat-info">
                        <h3>Ocupación</h3>
                        <div class="stat-data">
                            <p>24/30</p>
                            <span class="trend positive">
                                <i class="fas fa-arrow-up"></i>12.5%
                            </span>
                        </div>
                        <div class="progress-bar" style="--progress: 80%"></div>
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
        </div>
    </main>
</div>
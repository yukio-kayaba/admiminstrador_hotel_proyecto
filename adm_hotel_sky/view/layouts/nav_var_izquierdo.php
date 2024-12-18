<?php
    $valor_var = " ";
    if(isset($_SESSION['opcion'])){
        $valor_var = $_SESSION['opcion'];
    }
?>
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
                    <li class="<?php if(!isset($_GET['vista'])) echo "active"; ?>">
                        <a href="/"><i class="fas fa-tachometer-alt"></i>Vista General</a>
                    </li>
                </ul>
            </div>

            <!-- Hotel Management -->
            <div class="nav-section">
                <span>GESTIÓN HOTELERA</span>
                <ul>
                    <li class="<?php if($valor_var == "habitacion") echo "active"; ?>"><a href="habitaciones"><i class="fas fa-bed"></i>Habitaciones</a></li>  
                    <li class="<?php if($valor_var == "reservacion") echo "active"; ?>"><a href="reservaciones"><i class="fas fa-calendar-alt"></i>Reservaciones</a></li>
                    <li class="<?php if($valor_var == "huespedes") echo "active"; ?>" ><a href="huespedes"><i class="fas fa-user-tie"></i>Huéspedes</a></li>
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
                    <li><a href="cerrar"><i class="fas fa-dollar-sign"></i>Cerrar Sesion</a></li>
                </ul>
            </div>
        </nav>
    </aside>
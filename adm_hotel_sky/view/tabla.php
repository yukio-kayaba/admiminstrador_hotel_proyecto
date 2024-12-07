<?php
    require_once("model/consultas.php");
    $titulo1 = $_SESSION['opcion'];
?>
<?php $titulo = "VILLA | Sistema $titulo1 "; ?>
<?php include("layouts/head.php"); ?>
    <link rel="stylesheet" href="<?php echo url; ?>/view/css/tabla.css">
   
    <script src="<?php echo url;?>/view/js/menu-responsive.js" defer></script>
    <script src="<?php echo url;?>/view/js/tabla.js" defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <!-- Botón toggle -->
    <button class="menu-toggle">
        <i class="fa-solid fa-bars"></i>
    </button>
    
    <!-- Overlay -->
    <div class="sidebar-overlay"></div>
    
    <!-- Navegación izquierda -->
    <?php include('./view/layouts/nav_var_izquierdo.php'); ?>

    <!-- Contenido principal -->
    <main class="main-content">
        <div class="dashboard-content">
            <div class="welcome-section2">
                <h1>Gestión de <?php echo $titulo1; ?></h1>
            </div>
            
            <div class="table-container">
                <table class="reservation-table">
                    <thead>
                        <tr class="titulos_date">
                            
                        </tr>
                    </thead>
                    <tbody class="datos_tabla_master">
                   
                        <tr>
                            <td>#001</td>
                            <td>Juan Pérez</td>
                            <td>101 - Suite Deluxe</td>
                            <td>2024-12-05</td>
                            <td>2024-12-07</td>
                            <td><span class="status-active">Activa</span></td>
                            <td class="actions">
                                <button class="btn-view" data-id="1">
                                    <i class="fas fa-eye"></i>
                                </button>
                                <button class="btn-edit" data-id="1">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <button class="btn-delete" data-id="1">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </td>
                        </tr>
                        
                    </tbody>
                </table>
            </div>
        </div>
    </main>
</body>
</html>
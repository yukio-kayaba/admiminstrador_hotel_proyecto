<?php
    require_once("model/consultas.php");
    $titulo1 = $_SESSION['opcion'];
?>
<?php $titulo = "VILLA | Sistema $titulo1 "; ?>
<?php include("layouts/head.php"); ?>
    <link rel="stylesheet" href="<?php echo url; ?>/view/css/tabla.css">
    <link rel="stylesheet" href="<?php echo url; ?>/view/css/pop-up.css">
    
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
            <div class="welcome-section2" style="display: flex;align-items: center;gap: 15px; ">
                <h1>Gestión de <?php echo $titulo1; ?></h1>
                <div id="boton_add" style="display: flex;flex-direction: column;cursor: pointer; " title="Agregar mas <?php echo $titulo1; ?>">
                    <svg width="35px" height="35px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M15 12L12 12M12 12L9 12M12 12L12 9M12 12L12 15" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"></path> <path d="M7 3.33782C8.47087 2.48697 10.1786 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 10.1786 2.48697 8.47087 3.33782 7" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"></path> </g></svg>
                    <p style="font-size: 15px;">agregar</p>    
                </div>
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
    <div id="pop_up">
        <?php include("view/layouts/form_modal.php"); ?>
    </div>
</body>
</html>
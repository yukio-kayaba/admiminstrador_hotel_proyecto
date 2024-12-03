<?php
    $titulo = "VILLA|SISTEMA DE REGISTROS";
?>

<?php include("layouts/head.php"); ?>
    <link rel="stylesheet" href="<?php echo url; ?>/view/css/tabla.css">
    <!-- Font Awesome y DataTables CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.dataTables.min.css">
</head>



<body>

            <div class="contenido_pagina">
            <?php include('./view/layouts/nav_var_izquierdo.php'); ?>
                <div class="contenido_historial">
                    <header class="historial_header">
                        <h1 class="titulo">HABITACIONES</h1>
                        <div class="header_actions">
                            <button class="btn-agregar">
                                <i class="fas fa-plus"></i> Nuevo Registro
                            </button>
                            <div class="filtros-rapidos">
                                <button class="btn-filtro activo" data-filter="todos">Todos</button>
                                <button class="btn-filtro" data-filter="hoy">Hoy</button>
                                <button class="btn-filtro" data-filter="semana">Esta Semana</button>
                                <button class="btn-filtro" data-filter="mes">Este Mes</button>
                            </div>
                        </div>
                    </header>

                    <div class="tabla_container">
                        <div class="filtros-avanzados">
                            <div class="filtro-grupo">
                                <label>Buscar:</label>
                                <input type="text" id="busqueda" placeholder="Escriba para filtrar...">
                            </div>
                            <div class="filtro-grupo">
                                <label>Estado:</label>
                                <select id="filtro-estado">
                                    <option value="">Todos</option>
                                    <option value="activo">Activo</option>
                                    <option value="completado">Completado</option>
                                    <option value="pendiente">Pendiente</option>
                                </select>
                            </div>
                            <div class="filtro-grupo">
                                <label>Fecha Inicio:</label>
                                <input type="date" id="fecha-inicio">
                            </div>
                            <div class="filtro-grupo">
                                <label>Fecha Fin:</label>
                                <input type="date" id="fecha-fin">
                            </div>
                        </div>

                        <table id="tabla_registros" class="tabla_registros display">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Estado</th>
                                    <th>Fecha</th>
                                    <th>Usuario</th>
                                    <th>Descripción</th>
                                    <th>Categoría</th>
                                    <th>Prioridad</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>#001</td>
                                    <td><span class="estado activo">Activo</span></td>
                                    <td>2024-11-27</td>
                                    <td>Juan Pérez</td>
                                    <td>Registro de nueva reservación</td>
                                    <td>Reservaciones</td>
                                    <td><span class="prioridad alta">Alta</span></td>
                                    <td>
                                        <div class="acciones">
                                            <button class="btn-accion editar" title="Editar">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                            <button class="btn-accion ver" title="Ver detalles">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                            <button class="btn-accion eliminar" title="Eliminar">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#001</td>
                                    <td><span class="estado activo">Activo</span></td>
                                    <td>2024-11-27</td>
                                    <td>Juan Pérez</td>
                                    <td>Registro de nueva reservación</td>
                                    <td>Reservaciones</td>
                                    <td><span class="prioridad alta">Alta</span></td>
                                    <td>
                                        <div class="acciones">
                                            <button class="btn-accion editar" title="Editar">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                            <button class="btn-accion ver" title="Ver detalles">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                            <button class="btn-accion eliminar" title="Eliminar">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#001</td>
                                    <td><span class="estado activo">Activo</span></td>
                                    <td>2024-11-27</td>
                                    <td>Juan Pérez</td>
                                    <td>Registro de nueva reservación</td>
                                    <td>Reservaciones</td>
                                    <td><span class="prioridad alta">Alta</span></td>
                                    <td>
                                        <div class="acciones">
                                            <button class="btn-accion editar" title="Editar">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                            <button class="btn-accion ver" title="Ver detalles">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                            <button class="btn-accion eliminar" title="Eliminar">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#001</td>
                                    <td><span class="estado activo">Activo</span></td>
                                    <td>2024-11-27</td>
                                    <td>Juan Pérez</td>
                                    <td>Registro de nueva reservación</td>
                                    <td>Reservaciones</td>
                                    <td><span class="prioridad alta">Alta</span></td>
                                    <td>
                                        <div class="acciones">
                                            <button class="btn-accion editar" title="Editar">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                            <button class="btn-accion ver" title="Ver detalles">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                            <button class="btn-accion eliminar" title="Eliminar">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#001</td>
                                    <td><span class="estado activo">Activo</span></td>
                                    <td>2024-11-27</td>
                                    <td>Juan Pérez</td>
                                    <td>Registro de nueva reservación</td>
                                    <td>Reservaciones</td>
                                    <td><span class="prioridad alta">Alta</span></td>
                                    <td>
                                        <div class="acciones">
                                            <button class="btn-accion editar" title="Editar">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                            <button class="btn-accion ver" title="Ver detalles">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                            <button class="btn-accion eliminar" title="Eliminar">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#001</td>
                                    <td><span class="estado activo">Activo</span></td>
                                    <td>2024-11-27</td>
                                    <td>Juan Pérez</td>
                                    <td>Registro de nueva reservación</td>
                                    <td>Reservaciones</td>
                                    <td><span class="prioridad alta">Alta</span></td>
                                    <td>
                                        <div class="acciones">
                                            <button class="btn-accion editar" title="Editar">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                            <button class="btn-accion ver" title="Ver detalles">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                            <button class="btn-accion eliminar" title="Eliminar">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#001</td>
                                    <td><span class="estado activo">Activo</span></td>
                                    <td>2024-11-27</td>
                                    <td>Juan Pérez</td>
                                    <td>Registro de nueva reservación</td>
                                    <td>Reservaciones</td>
                                    <td><span class="prioridad alta">Alta</span></td>
                                    <td>
                                        <div class="acciones">
                                            <button class="btn-accion editar" title="Editar">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                            <button class="btn-accion ver" title="Ver detalles">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                            <button class="btn-accion eliminar" title="Eliminar">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <!-- Repite más filas según necesites -->
                            </tbody>
                        </table>
                    </div>
                </div>
       

                <!-- Modal para detalles -->
                <div id="modal-detalles" class="modal">
                    <div class="modal-contenido">
                        <div class="modal-header">
                            <h2>Detalles del Registro</h2>
                            <button class="cerrar-modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <!-- El contenido se llenará dinámicamente -->
                        </div>
                        <div class="modal-footer">
                            <button class="btn-cerrar">Cerrar</button>
                        </div>
                    </div>
                </div>

        </div>

                <!-- Scripts necesarios -->
                <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
                <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
                <script src="https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
                <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js"></script>
                <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.print.min.js"></script>
                
                <script>
                    $(document).ready(function() {
                        $('#tabla_registros').DataTable({
                            dom: 'Bfrtip',
                            buttons: [
                                'copy', 'csv', 'excel', 'pdf', 'print'
                            ],
                            language: {
                                url: '//cdn.datatables.net/plug-ins/1.13.7/i18n/es-ES.json'
                            }
                        });
                    });
                </script>
</body>
</html>
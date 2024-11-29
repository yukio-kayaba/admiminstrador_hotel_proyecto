<?php $titulo = "VILLA || loguin"; ?>
<?php include("view/layouts/head.php"); ?>
<link rel="stylesheet" href="view/css/loguin.css">

<div class="login-container">
    <div class="login-form">
        <h2>HOTEL VILLA</h2>
        <form action="" method="POST">
            <div class="form-group">
                <i class="fas fa-user"></i>
                <input type="text" name="usuario" placeholder="Usuario" required>
            </div>
            <div class="form-group">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" placeholder="Contraseña" required>
            </div>
            <button type="submit">Iniciar Sesión</button>
        </form>
    </div>
</div>
</body>
</html>
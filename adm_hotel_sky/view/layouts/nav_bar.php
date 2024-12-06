<header class="top-nav">
    <div class="search-wrapper">
        <div class="search-bar">
            <i class="fas fa-search">
            </i>
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
            <img src=" https://cdn-icons-png.flaticon.com/512/3135/3135768.png" alt="Admin">
            <div class="user-info">
                <span class="name"><?php echo $_SESSION['nombre']; ?></span>
                <span class="role">|ADMINISTRADOER</span>
            </div>
        </div>
    </div>
</header>
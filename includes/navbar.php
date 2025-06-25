<?php
// includes/navbar.php
?>
<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm pt-3">
  <div class="container">
    <a class="navbar-brand d-flex align-items-center" href="index.php">
      <i class="fas fa-paw fs-3"></i>
      <span class="ms-2 fw-bold">Floppet</span>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar"
      aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="mainNavbar">
      <form class="d-flex ms-auto me-3" action="/EcommerceFloppet/views/catalogo.php" method="get">
        <input class="form-control me-2" type="search" name="q" placeholder="Buscar productos para tu mascota…" aria-label="Buscar">
        <button class="btn btn-outline-secondary" type="submit">
          <i class="fas fa-search"></i>
        </button>
      </form>

      <ul class="navbar-nav mb-2 mb-lg-0 align-items-center">
        <li class="nav-item">
          <a class="nav-link" href="/EcommerceFloppet/views/catalogo.php">Catálogo</a>
        </li>

        <li class="nav-item me-3">
          <a class="nav-link position-relative" href="/EcommerceFloppet/views/carrito.php">
            <i class="fas fa-shopping-cart"></i>
            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
              <?php echo isset($_SESSION['cart_count']) ? $_SESSION['cart_count'] : 0; ?>
              <span class="visually-hidden">productos en carrito</span>
            </span>
          </a>
        </li>

        <?php if (isset($_SESSION['user_name'])): ?>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle fw-semibold" href="#" id="userDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="fas fa-user-circle me-1"></i> <?php echo htmlspecialchars($_SESSION['user_name']); ?>
            </a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
              <li><a class="dropdown-item" href="/EcommerceFloppet/views/profile.php">Mi Perfil</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item text-danger" href="/EcommerceFloppet/controllers/logout.php">Cerrar Sesión</a></li>
            </ul>
          </li>
        <?php else: ?>
          <li class="nav-item">
            <a class="btn btn-outline-warning fw-semibold ms-2" href="/EcommerceFloppet/views/login.php">
              <i class="fas fa-sign-in-alt me-1"></i> Iniciar Sesión
            </a>
          </li>
        <?php endif; ?>
      </ul>
    </div>
  </div>
</nav>
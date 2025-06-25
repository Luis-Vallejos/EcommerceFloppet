<?php 
session_start();
require_once __DIR__ . '/../includes/header.php';
?>

<div class="container d-flex align-items-center justify-content-center min-vh-100">
  <div class="card shadow-lg p-4" style="max-width: 420px; width: 100%;">
    <div class="text-center mb-4">
      <i class="fas fa-paw fa-3x text-warning"></i>
      <h4 class="mt-2 fw-bold">Iniciar Sesión</h4>
      <p class="text-muted small">Accede a tu cuenta para continuar</p>
    </div>

    <?php if (isset($_SESSION['login_error'])): ?>
      <div class="alert alert-danger py-2 text-center">
        <?php 
          echo $_SESSION['login_error']; 
          unset($_SESSION['login_error']);
        ?>
      </div>
    <?php endif; ?>

    <form action="/EcommerceFloppet/controllers/login_handler.php" method="POST">
      <div class="mb-3">
        <label for="email" class="form-label fw-semibold">Correo Electrónico</label>
        <input type="email" class="form-control" id="email" name="email" required placeholder="ejemplo@correo.com">
      </div>
      <div class="mb-3">
        <label for="password" class="form-label fw-semibold">Contraseña</label>
        <input type="password" class="form-control" id="password" name="password" required placeholder="********">
      </div>

      <div class="d-grid mb-3">
        <button type="submit" class="btn btn-warning fw-semibold">Iniciar Sesión</button>
      </div>

      <div class="text-center">
        <small class="text-muted">¿No tienes cuenta? 
          <a href="/EcommerceFloppet/views/register.php" class="text-decoration-none text-warning fw-semibold">Regístrate</a>
        </small>
      </div>
    </form>
  </div>
</div>

<?php require_once __DIR__ . '/../includes/scripts.php';?>
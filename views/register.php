<?php 
session_start();
require_once __DIR__ . '/../includes/header.php';
?>

<div class="container d-flex align-items-center justify-content-center min-vh-100">
  <div class="card shadow-lg p-4" style="max-width: 480px; width: 100%;">
    <div class="text-center mb-4">
      <i class="fas fa-paw fa-3x text-warning"></i>
      <h4 class="mt-2 fw-bold">Crear Cuenta</h4>
      <p class="text-muted small">Regístrate para comenzar a comprar</p>
    </div>

    <?php if (isset($_SESSION['register_error'])): ?>
      <div class="alert alert-danger py-2 text-center">
        <?php 
          echo $_SESSION['register_error']; 
          unset($_SESSION['register_error']);
        ?>
      </div>
    <?php endif; ?>

    <?php if (isset($_SESSION['register_success'])): ?>
      <div class="alert alert-success py-2 text-center">
        <?php 
          echo $_SESSION['register_success']; 
          unset($_SESSION['register_success']);
        ?>
      </div>
    <?php endif; ?>

    <form action="/EcommerceFloppet/controllers/register_handler.php" method="POST">
      <div class="mb-3">
        <label for="name" class="form-label fw-semibold">Nombre Completo</label>
        <input type="text" class="form-control" id="name" name="name" required placeholder="Juan Pérez">
      </div>
      <div class="mb-3">
        <label for="email" class="form-label fw-semibold">Correo Electrónico</label>
        <input type="email" class="form-control" id="email" name="email" required placeholder="correo@ejemplo.com">
      </div>
      <div class="mb-3">
        <label for="password" class="form-label fw-semibold">Contraseña</label>
        <input type="password" class="form-control" id="password" name="password" required placeholder="********">
      </div>

      <div class="d-grid mb-3">
        <button type="submit" class="btn btn-warning fw-semibold">Registrarse</button>
      </div>

      <div class="text-center">
        <small class="text-muted">¿Ya tienes cuenta?
          <a href="/EcommerceFloppet/views/login.php" class="text-decoration-none text-warning fw-semibold">Inicia sesión</a>
        </small>
      </div>
    </form>
  </div>
</div>

<?php require_once __DIR__ . '/../includes/scripts.php';?>
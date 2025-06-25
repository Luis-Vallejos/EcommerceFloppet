<?php 
session_start();
require_once __DIR__ . '/../includes/header.php';
require_once __DIR__ . '/../includes/navbar.php';
?>
<main class="container py-5">
  <!-- “Volver” -->
  <div class="mb-3">
    <a href="catalog.php" class="text-warning text-decoration-none">
      <i class="fas fa-arrow-left me-2"></i>Continuar Comprando
    </a>
  </div>

  <!-- Título y subtítulo -->
  <h1 class="mb-1">Carrito de Compras</h1>
  <p class="text-muted mb-4">3 productos en tu carrito</p>

  <div class="row g-4">
    <!-- Zona de productos -->
    <div class="col-lg-8">
      <!-- Item 1 -->
      <div class="card mb-3 shadow-sm rounded">
        <div class="row g-0 align-items-center p-3">
          <div class="col-auto">
            <img src="images/placeholder.svg" alt="Collar Premium" 
                 class="img-fluid rounded" style="width: 80px; height: 80px;">
          </div>
          <div class="col d-flex flex-column ms-3">
            <h5 class="mb-1">Collar Premium para Perro Grande</h5>
            <small class="text-warning mb-2">Perros</small>
            <div class="input-group input-group-sm" style="width: 100px;">
              <button class="btn btn-outline-secondary" type="button">
                <i class="fas fa-minus"></i>
              </button>
              <input type="text" class="form-control text-center" value="2">
              <button class="btn btn-outline-secondary" type="button">
                <i class="fas fa-plus"></i>
              </button>
            </div>
          </div>
          <div class="col-auto text-end">
            <strong>$59.98</strong><br>
            <small class="text-muted">$29.99 c/u</small><br>
            <button class="btn btn-link btn-sm text-muted mt-2">
              <i class="fas fa-trash-alt"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Item 2 -->
      <div class="card mb-3 shadow-sm rounded">
        <div class="row g-0 align-items-center p-3">
          <div class="col-auto">
            <img src="images/placeholder.svg" alt="Casa para Gatos" 
                 class="img-fluid rounded" style="width: 80px; height: 80px;">
          </div>
          <div class="col d-flex flex-column ms-3">
            <h5 class="mb-1">Casa para Gatos Deluxe</h5>
            <small class="text-warning mb-2">Gatos</small>
            <div class="input-group input-group-sm" style="width: 100px;">
              <button class="btn btn-outline-secondary" type="button">
                <i class="fas fa-minus"></i>
              </button>
              <input type="text" class="form-control text-center" value="1">
              <button class="btn btn-outline-secondary" type="button">
                <i class="fas fa-plus"></i>
              </button>
            </div>
          </div>
          <div class="col-auto text-end">
            <strong>$89.99</strong><br>
            <small class="text-muted">$89.99 c/u</small><br>
            <button class="btn btn-link btn-sm text-muted mt-2">
              <i class="fas fa-trash-alt"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Item 3 -->
      <div class="card mb-3 shadow-sm rounded">
        <div class="row g-0 align-items-center p-3">
          <div class="col-auto">
            <img src="images/placeholder.svg" alt="Juguete Interactivo" 
                 class="img-fluid rounded" style="width: 80px; height: 80px;">
          </div>
          <div class="col d-flex flex-column ms-3">
            <h5 class="mb-1">Juguete Interactivo</h5>
            <small class="text-warning mb-2">Juguetes</small>
            <div class="input-group input-group-sm" style="width: 100px;">
              <button class="btn btn-outline-secondary" type="button">
                <i class="fas fa-minus"></i>
              </button>
              <input type="text" class="form-control text-center" value="3">
              <button class="btn btn-outline-secondary" type="button">
                <i class="fas fa-plus"></i>
              </button>
            </div>
          </div>
          <div class="col-auto text-end">
            <strong>$59.97</strong><br>
            <small class="text-muted">$19.99 c/u</small><br>
            <button class="btn btn-link btn-sm text-muted mt-2">
              <i class="fas fa-trash-alt"></i>
            </button>
          </div>
        </div>
      </div>
    </div>

    <!-- Resumen del pedido -->
    <div class="col-lg-4">
      <div class="card shadow-sm rounded p-4">
        <h5 class="mb-4">Resumen del Pedido</h5>
        <div class="d-flex justify-content-between mb-2">
          <span>Subtotal</span>
          <span>$209.94</span>
        </div>
        <div class="d-flex justify-content-between mb-2">
          <span>Envío</span>
          <span class="text-success">Gratis</span>
        </div>
        <div class="d-flex justify-content-between mb-3">
          <span>Impuestos</span>
          <span>$16.80</span>
        </div>
        <div class="d-flex justify-content-between fs-5 fw-bold mb-4">
          <span>Total</span>
          <span>$226.74</span>
        </div>
        <a href="checkout.php" class="btn btn-warning btn-lg w-100">
          Proceder al Checkout
        </a>
        <p class="text-center text-muted small mt-3">
          Compra segura con encriptación SSL
        </p>
      </div>
    </div>
  </div>
</main>



<?php 
require_once __DIR__ . '/../includes/footer.php';
require_once __DIR__ . '/../includes/scripts.php';
?>
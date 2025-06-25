<?php 
session_start();
require_once __DIR__ . '/../includes/header.php';
require_once __DIR__ . '/../includes/navbar.php';
?>

<main class="container my-5">
  <div class="row">
    <!-- SIDEBAR DE FILTROS -->
    <aside class="col-lg-3 mb-4">
      <div class="card p-4 shadow-sm">
        <h5 class="mb-3">Filtros</h5>

        <!-- Categorías -->
        <div class="mb-4">
          <label class="form-label fw-bold">Categorías</label>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="category" id="cat-all" checked>
            <label class="form-check-label" for="cat-all">
              Todos los productos <span class="text-muted">(156)</span>
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="category" id="cat-dogs">
            <label class="form-check-label" for="cat-dogs">
              Perros <span class="text-muted">(68)</span>
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="category" id="cat-cats">
            <label class="form-check-label" for="cat-cats">
              Gatos <span class="text-muted">(45)</span>
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="category" id="cat-birds">
            <label class="form-check-label" for="cat-birds">
              Aves <span class="text-muted">(23)</span>
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="category" id="cat-accessories">
            <label class="form-check-label" for="cat-accessories">
              Accesorios <span class="text-muted">(20)</span>
            </label>
          </div>
        </div>

        <!-- Rango de Precio -->
        <div class="mb-4">
          <label class="form-label fw-bold">Rango de Precio</label>
          <input type="range" class="form-range" min="0" max="500" id="priceRange">
          <div class="d-flex justify-content-between">
            <small>$0</small>
            <small>$500</small>
          </div>
        </div>

        <!-- Calificación -->
        <div>
          <label class="form-label fw-bold">Calificación</label>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="rating-4">
            <label class="form-check-label" for="rating-4">
              ★★★★ &amp; más
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="rating-3">
            <label class="form-check-label" for="rating-3">
              ★★★ &amp; más
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="rating-2">
            <label class="form-check-label" for="rating-2">
              ★★ &amp; más
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="rating-1">
            <label class="form-check-label" for="rating-1">
              ★ &amp; más
            </label>
          </div>
        </div>
      </div>
    </aside>

    <!-- AREA DE PRODUCTOS -->
    <section class="col-lg-9">
      <!-- Barra de controles -->
      <div class="d-flex justify-content-between align-items-center mb-4 p-3 bg-white rounded shadow-sm">
        <div>Mostrando <strong>8</strong> productos</div>
        <div class="d-flex align-items-center">
          <select class="form-select form-select-sm me-3">
            <option selected>Destacados</option>
            <option>Precio: menor a mayor</option>
            <option>Precio: mayor a menor</option>
            <option>Mejor calificados</option>
          </select>
          <button class="btn btn-outline-secondary btn-sm me-2">
            <i class="fas fa-th"></i>
          </button>
          <button class="btn btn-outline-secondary btn-sm">
            <i class="fas fa-list"></i>
          </button>
        </div>
      </div>

      <!-- Grid de productos -->
      <div class="row g-4">
        <!-- Ejemplo de tarjeta de producto -->
        <div class="col-6 col-md-4 col-xl-3">
          <div class="card h-100 shadow-sm">
            <div class="position-relative">
              <span class="badge bg-danger position-absolute m-2">-25%</span>
              <img src="images/placeholder.svg"
                   class="card-img-top"
                   alt="Collar Premium para Perro Grande">
            </div>
            
            <div class="card-body d-flex flex-column">
              <small class="text-uppercase text-warning mb-1">Perros</small>
              <h6 class="card-title">Collar Premium para Perro Grande</h6>
              <div class="mb-2">
                <i class="fas fa-star text-warning"></i>
                <i class="fas fa-star text-warning"></i>
                <i class="fas fa-star text-warning"></i>
                <i class="fas fa-star text-warning"></i>
                <i class="far fa-star text-warning"></i>
                <small class="text-muted">(124)</small>
              </div>
              <p class="mt-auto mb-3">
                <span class="fw-bold">$29.99</span>
                <del class="text-muted ms-2">$39.99</del>
              </p>
              <a href="#" class="btn btn-warning btn-sm">
                <i class="fas fa-shopping-cart me-1"></i>Añadir al Carrito
              </a>
            </div>
          </div>
        </div>
        <!-- Repite la tarjeta anterior para cada uno de los 8 productos -->
      </div>

      <!-- Paginación -->
      <nav aria-label="Paginación" class="mt-4">
        <ul class="pagination justify-content-center mb-0">
          <li class="page-item disabled">
            <a class="page-link" href="#">Anterior</a>
          </li>
          <li class="page-item active"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item"><a class="page-link" href="#">4</a></li>
          <li class="page-item"><a class="page-link" href="#">5</a></li>
          <li class="page-item">
            <a class="page-link" href="#">Siguiente</a>
          </li>
        </ul>
      </nav>
    </section>
  </div>
</main>


<?php 
require_once __DIR__ . '/../includes/footer.php';
require_once __DIR__ . '/../includes/scripts.php';
?>
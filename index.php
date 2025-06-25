<?php 
session_start();
require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/navbar.php';
?>

<!-- HERO / LANDING -->
<section class="hero text-center text-white py-5"
    style="background: linear-gradient(135deg, #A6F77B 0%, #39B54A 100%);">
    <div class="container">
        <div class="mb-4">
            <i class="fas fa-paw fa-3x mx-2"></i>
            <i class="fas fa-paw fa-3x mx-2"></i>
        </div>
        <h1 class="fw-bold">
            Todo para tu <span class="text-warning">mascota</span>
        </h1>
        <p class="lead">
            Descubre la mejor selección de productos para el cuidado y diversión
            de tus compañeros peludos, emplumados y de todas las especies.
        </p>
        <a href="/EcommerceFloppet/views/catalogo.php" class="btn btn-warning btn-lg me-2">
            Explorar Catálogo <i class="fas fa-arrow-right ms-1"></i>
        </a>
        <a href="offers.php" class="btn btn-light btn-lg">
            Ver Ofertas <i class="far fa-star ms-1"></i>
        </a>
    </div>
</section>

<!-- CATEGORÍAS -->
<section class="py-5">
    <div class="container text-center">
        <h2 class="mb-4">Compra por Categoría</h2>
        <div class="row g-3 justify-content-center">
            <div class="col-6 col-sm-3">
                <a href="/EcommerceFloppet/views/catalogo.php?cat=perros" class="btn btn-warning w-100 py-3 rounded-4">
                    <i class="fas fa-dog fa-2x mb-2"></i><br>
                    Perros
                </a>
            </div>
            <div class="col-6 col-sm-3">
                <a href="/EcommerceFloppet/views/catalogo.php?cat=gatos" class="btn btn-success w-100 py-3 rounded-4">
                    <i class="fas fa-cat fa-2x mb-2"></i><br>
                    Gatos
                </a>
            </div>
            <div class="col-6 col-sm-3">
                <a href="/EcommerceFloppet/views/catalogo.php?cat=aves" class="btn btn-info w-100 py-3 rounded-4">
                    <i class="fas fa-dove fa-2x mb-2"></i><br>
                    Aves
                </a>
            </div>
            <div class="col-6 col-sm-3">
                <a href="/EcommerceFloppet/views/catalogo.php?cat=accesorios" class="btn btn-secondary w-100 py-3 rounded-4">
                    <i class="fas fa-bone fa-2x mb-2"></i><br>
                    Accesorios
                </a>
            </div>
        </div>
    </div>
</section>

<!-- PRODUCTOS DESTACADOS -->
<section class="py-5 bg-light">
    <div class="container text-center">
        <h2 class="mb-1">Productos Destacados</h2>
        <p class="text-muted mb-4">Los favoritos de nuestros clientes peludos</p>
        <div class="row g-4">
            <?php for ($i = 0; $i < 4; $i++): ?>
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="card h-100 shadow-sm">
                        <div class="position-relative">
                            <span class="badge bg-danger position-absolute m-2">
                                -<?= ($i % 2 ? 20 : 25) ?>%
                            </span>
                            <img src="images/placeholder.svg" class="card-img-top" alt="Producto <?= $i + 1 ?>">
                            <button class="btn btn-light btn-sm position-absolute top-0 end-0 m-2 rounded-circle">
                                <i class="far fa-heart"></i>
                            </button>
                        </div>
                        <div class="card-body d-flex flex-column">
                            <small class="text-uppercase text-warning mb-1">
                                <?= ['Perros', 'Gatos', 'Aves', 'Juguetes'][$i] ?>
                            </small>
                            <h5 class="card-title">Nombre Producto <?= $i + 1 ?></h5>
                            <div class="mb-2">
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="far fa-star text-warning"></i>
                                <small class="text-muted">(<?= rand(50, 200) ?>)</small>
                            </div>
                            <p class="mt-auto mb-3">
                                <span class="fw-bold">
                                    $<?= number_format(rand(2000, 20000) / 100, 2) ?>
                                </span>
                                <del class="text-muted ms-2">
                                    $<?= number_format(rand(2500, 25000) / 100, 2) ?>
                                </del>
                            </p>
                            <a href="/EcommerceFloppet/views/carrito.php?action=add&id=<?= $i + 1 ?>" class="btn btn-warning btn-sm">
                                Añadir al Carrito
                            </a>
                        </div>
                    </div>
                </div>
            <?php endfor; ?>
        </div>
        <div class="mt-4">
            <a href="/EcommerceFloppet/views/catalogo.php" class="btn btn-warning btn-lg">
                Ver Todos los Productos
            </a>
        </div>
    </div>
</section>

<!-- BENEFICIOS -->
<section class="py-5">
    <div class="container">
        <div class="row text-center g-4">
            <div class="col-md-4">
                <i class="fas fa-truck fa-2x text-warning mb-2"></i>
                <h5>Envío Gratis</h5>
                <small class="text-muted">
                    En compras mayores a $50. Entrega rápida y segura.
                </small>
            </div>
            <div class="col-md-4">
                <i class="fas fa-shield-alt fa-2x text-success mb-2"></i>
                <h5>Garantía Total</h5>
                <small class="text-muted">
                    30 días de garantía en todos nuestros productos.
                </small>
            </div>
            <div class="col-md-4">
                <i class="fas fa-heart fa-2x text-info mb-2"></i>
                <h5>Amor por las Mascotas</h5>
                <small class="text-muted">
                    Productos seleccionados con cariño para tu mascota.
                </small>
            </div>
        </div>
    </div>
</section>

<?php 
require_once __DIR__ . '/includes/footer.php';
require_once __DIR__ . '/includes/scripts.php';
?>
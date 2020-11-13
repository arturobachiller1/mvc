<?php include('../views/parts/head.php'); ?>
<?php include('../views/parts/header.php'); ?>
<!-- Begin page content -->
<main role="main" class="container">    
    <h1>Detalle de Tipos de productos</h1>
    <div class="card">
        <div class="card-header">
            Número del tipo de producto <?= $producttype->id ?>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Nombre: <?= $producttype->name ?></li>
        </ul>
  </div>    
</main>

<?php include('../views/parts/footer.php'); ?>

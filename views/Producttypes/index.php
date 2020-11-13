<?php include('../views/parts/head.php'); ?>
<?php include('../views/parts/header.php'); ?>
<!-- Begin page content -->
<main role="main" class="container">
  <h1>Lista de Tipos de Productos   <a class="btn b0tn-primary float-right" href="/Producttype/create"> nuevo tipo de producto</a></h1>
  <table class="table table-striped">
        <thead>
            <tr>
            <th>Nombre del tipo de producto</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($producttypes as $producttype) {?>
                <tr>
                <td><?= $producttype->id?></td>
                <td><?= $producttype->name ?></td>
                <td><a href="/producttype/show/<?= $producttype->id ?>">  Ver </a></td>
                <td><a href="/producttype/edit/<?= $producttype->id ?>">  editar </a></td>
                <td><a href="/producttype/delete/<?= $producttype->id ?>">  Borrar </a></td>

                
                </tr>
            <?php } ?>            
        </tbody>
    </table>
</main>

<?php include('../views/parts/footer.php'); ?>
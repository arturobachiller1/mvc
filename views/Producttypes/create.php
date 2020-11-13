<?php include('../views/parts/head.php'); ?>
<?php include('../views/parts/header.php'); ?>
<!-- Begin page content -->
<main role="main" class="container">    
    <h1>Alta de tipos de productos</h1>

        <form action="/Producttype/store" method="POST">
        <label for="name">Nombre del tipo de producto:</label>
        <input type="text" name="name">

        <input type="submit" value="enviar">
   
</main>

<?php include('../views/parts/footer.php'); ?>
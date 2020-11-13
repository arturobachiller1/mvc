<?php include('../views/parts/head.php'); ?>
<?php include('../views/parts/header.php'); ?>
<!-- Begin page content -->
<main role="main" class="container">    
    <h1>Alta de usuario</h1>

        <form action="/user/store" method="POST">
        <label for="name">Nombre:</label>
        <input type="text" name="name">

        <label for="surname">Apellidos:</label>
        <input type="text" name="surname">

        <label for="email">Email:</label>
        <input type="text" name="email">

        <label for="birthdate">Fecha de nacimiento:</label>
        <input type="text" name="birthdate">

        <input type="submit" value="enviar">
   
</main>

<?php include('../views/parts/footer.php'); ?>

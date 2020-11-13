<?php include('../views/parts/head.php'); ?>
<?php include('../views/parts/header.php'); ?>
<!-- Begin page content -->
<main role="main" class="container">
  <h1>Lista de usuarios  <a class="btn btn-primary float-right" href="/user/create"> nuevo usuario</a>
    </h1>
  <table class="table table-striped">
        <thead>
            <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Email</th>
            <th>F. Nacimiento</th>
            
            </tr>
        </thead>
        <tbody>
            <?php foreach($users as $user) {?>
                <tr>
                <td><?= $user->name ?></td>
                <td><?= $user->surname ?></td>
                <td><?= $user->email ?></td>
                <td><?= $user->birthdate ?></td>
                <td><a href="/user/show/<?= $user->id ?>">  Ver </a></td>
                <td><a href="/user/edit/<?= $user->id ?>">  editar </a></td>
                <td><a href="/user/delete/<?= $user->id ?>">  Borrar </a></td>               
                </tr>
            <?php } ?>            
        </tbody>
    </table>
</main>

<?php include('../views/parts/footer.php'); ?>

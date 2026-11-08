<!-- CONEXION A BD -->
<?php

include("conexion.php");
$con = connection();

$sql = "SELECT * FROM users";
$query = mysqli_query($con,$sql);
?>

<!-- INSERTAR -->
<?php                    

        if($_SERVER["REQUEST_METHOD"]=="POST"){

            $id = null;
            $nombre = ($_POST['nombre']);
            $apellido = ($_POST['apellido']);
            $correo = ($_POST['correo']);
            $telefono = ($_POST['telefono']);
            $ciudad = ($_POST['ciudad']);

            $sql = "INSERT INTO users VALUES('$id','$nombre', '$apellido', '$correo', '$telefono', '$ciudad')";

            $query = mysqli_query($con,$sql);
            if($query){
                Header("Location: index.php");
            };
   
   ?>    

<?php }  ?>

<!-- -->
<!DOCTYPE html>
<html lang="es">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Usuarios</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

</head>
<body class="bg-light">

    <div class="container mt-5">
        <div class="card shadow">
        <div class="card-header bg-primary text-white">
            <h1>Formulario de Registro</h1>
        </div>
        <div class="card-body">
        <form action="" method="POST" class="form-card">
            <div class="mb-3">
                <label for="nombre" class="form-label fw-bold" >Nombre</label>
                <input type="text" id="nombre" name="nombre" class="input-custom"required>
            </div>
            <div class="mb-3">
                <label for="apellido" class="form-label fw-bold">Apellido</label>
                <input type="text" id="apellido" name="apellido" class="input-custom"required>
            </div>
            <div class="mb-3">
                <label for="correo" class="form-label fw-bold">Correo</label>
                <input type="email" id="correo" name="correo"required>
            </div>
            <div class="mb-3">
                <label for="telefono" class="form-label fw-bold">Teléfono</label>
                <input type="number" id="telefono" name="telefono" required>
            </div>
            <div class="mb-3">
                <label for="ciudad" class="form-label fw-bold">Ciudad</label>
                <input type="text" id="ciudad" name="ciudad" class="input-custom"required>
            </div >
            <div class="mb-3">
            <button type="submit" class="btn btn-warning">Enviar</button>
            </div>
        </form>
        </div>
        <div class="card-header bg-primary text-white" >
        <h5 lass="mb-0">Listado de Registros</h5>
        </div>



        <div class="card mt-4 shadow">
           <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Correo</th>
                    <th>Teléfono</th>
                    <th>Ciudad</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            </div>

            <tbody>
                <?php while($row = mysqli_fetch_array($query)): ?>
                    <td><?= $row ['nombre'] ?></td>
                    <td><?= $row ['apellido'] ?></td>
                    <td><?= $row ['correo'] ?></td>
                    <td><?= $row ['telefono'] ?></td>
                    <td><?= $row ['ciudad'] ?></td>
                    <td><a href="update.php?id=<?= $row['id'] ?>" class="btn btn-warning">Editar</a></td>
                    <td><a href="eliminar.php?id=<?= $row['id'] ?>" class="btn btn-danger">Eliminar</a></td>
                </tr>

                <?php endwhile; ?>
               
            </tbody>
        </table>
         </div>
    </div>
    </div>

</body>
</html> 
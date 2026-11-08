<!-- UPDATE - EDITAR -->
<?php 
include('conexion.php');
$con = connection();


$id=$_GET["id"];   

$sql = "SELECT * FROM users wHERE id='$id'";
$query = mysqli_query($con,$sql);
$row = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar registro</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body class="bg-light">
   
    <div class="card-body">
        <div class="container mt-5">
          <div class="card-header bg-primary text-white">
            <h1>Editar de Registro</h1>
        </div>
        <form action="editar.php" method="POST" class="form-card">
            <input type="hidden" name="id" value="<?= $row['id']?>">
            <div class="mb-3">
                <input type="hidden" id="id" value="<?= $row ['nombre'] ?>" class="input-custom">
            </div>
            <div class="mb-3">
                <label for="nombre" class="form-label fw-bold">Nombre</label>
                <input type="text" id="nombre" name="nombre" value="<?= $row ['nombre'] ?>">
            </div>

            <div class="mb-3">
                <label for="apellido" class="form-label fw-bold">Apellido</label>
                <input type="text" id="apellido" name="apellido" value="<?= $row ['apellido'] ?>">
            </div>

            <div class="mb-3">
                <label for="correo" class="form-label fw-bold">Correo</label>
                <input type="email" id="correo" name="correo" value="<?= $row ['correo'] ?>">
            </div>

            <div class="mb-3">
                <label for="telefono" class="form-label fw-bold">Teléfono</label>
                <input type="number" id="telefono" name="telefono" value="<?= $row ['telefono'] ?>">
            </div>

            <div class="mb-3">
                <label for="ciudad" class="form-label fw-bold">Ciudad</label>
                <input type="text" id="ciudad" name="ciudad" value="<?= $row ['ciudad'] ?>">
            </div >
            <div class="mb-3">
            <button type="submit" class="btn btn-outline-success">Actualizar</button>
            <a href="index.php" class="btn btn-outline-secondary">Cancelar</a>
            </div>
        </form> 
        </div>
        </div>
    
</body>
</html>
<!--  EDITAR -->
<?php 
include('conexion.php');
$con = connection();


             $id = $_POST['id'];
            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];
            $correo = $_POST['correo'];
            $telefono = $_POST['telefono'];
            $ciudad = $_POST['ciudad'];

            $sql = "UPDATE users SET nombre='$nombre', apellido='$apellido', telefono='$telefono', correo='$correo', ciudad='$ciudad' WHERE id='$id'";
            $query = mysqli_query($con,$sql);

            if($query){
                Header("Location: index.php");
            };
        
    

?>
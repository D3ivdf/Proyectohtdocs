<?php
include("db.php");
if(isset($_POST['guardar'])){
    $id =$_POST['id'];
    $nombre =$_POST['nombre'];
    $fechaN =$_POST['fechaN'];
    $papa =$_POST['papa'];

    $query = "INSERT INTO estudiante (id, nombre, FechaNacimiento, PAPA) VALUES ($id, '$nombre', '$fechaN', $papa)";
    $result = mysqli_query($conn,$query);
    if (!$result){
        $_SESSION['mensaje'] = "no se pudo Guardar";
        $_SESSION['tipo_mensaje'] = "danger";
    }
    else{
        $_SESSION['mensaje'] = "Guardado";
        $_SESSION['tipo_mensaje'] = "success";
    }
    header("Location: index.php");
}
    ?>
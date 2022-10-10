<?php 
include ("db.php");
if (isset($_POST['edit'])){
    $id=$_POST['id'];
    $query = "UPDATE estudiante SET id = '', nombre = '', FechaNacimiento = '', PAPA = '' WHERE id = '$id'";
    $result = mysqli_query($conn, $query);
    if (!$result){
        $_SESSION['mensaje'] = "no se pudo editar";
        $_SESSION['tipo_mensaje'] = "danger";
    }
    else{
        $_SESSION['mensaje'] = "Editado";
        $_SESSION['tipo_mensaje'] = "success";
    }
    header("Location: index.php");
}
$query = "SELECT * FROM estudiante ()";
?>
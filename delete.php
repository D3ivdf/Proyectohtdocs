<?php 
include ("db.php");
if (isset($_POST['delete'])){
    $id=$_POST['id'];
    $query = "DELETE FROM estudiante WHERE id = '$id'";
    $result = mysqli_query($conn, $query);
    if (!$result){
        $_SESSION['mensaje'] = "no se pudo eliminar";
        $_SESSION['tipo_mensaje'] = "danger";
    }
    else{
        $_SESSION['mensaje'] = "Eliminado";
        $_SESSION['tipo_mensaje'] = "success";
    }
    header("Location: index.php");
}
$query = "SELECT * FROM estudiante ()";
?>
<?php

session_start();
$conn = mysqli_connect(
    'localhost', //ubicacnion den equipo
    'root', // usuario BD
    '',// contraseña 
    'progra_wb' //nombre BD
);

if(isset($conn)){
    echo "BD conectada";
}
else{
    echo "No conectada";
}
?>
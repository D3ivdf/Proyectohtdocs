<?php include("db.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
    <nav class ="navbar navbar-dark bg-dark">
        <div class="container">
            <a href="index.php" class="navbar-brand"> CRUD con PHP</a>
        </div>
    </nav>
    <div class="container p-4">
        <div class="col-md-4">
            <?php if(isset($_SESSION['mensaje'])) {?>
                <div class="alert alert-<?= $_SESSION['tipo_mensaje'];?>
                alert-dismissible fade show" role="alert">
                <?php echo $_SESSION['mensaje'];?>
                <button type="button" class="btn-close"
                data-bs-dismiss="alert" arial-label="Close"></button>
            </div>
            <?php session_unset();}?>
            
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>
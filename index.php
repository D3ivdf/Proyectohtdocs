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
            <!--**-->
        <div class="card card-body">
            <form action="guardar.php" method="POST">
                <div class="mb-3">
                    <label for="id" class="form-label">Identificacion:</label>
                    <input type="number" id="id" name="id" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre completo:</label>
                    <input type="text" id="nomre" name="nombre" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="date" class="form-label">Fecha de nacimiento:</label>
                    <input type="date" id="fechaN" name="fechaN" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="papa" class="form-label">P.A.P.A</label>
                    <input type="number" id="papa" name="papa" class="form-control" onchange="verificar()" required >
                </div>
                <input type="submit" class="btn btn-success btm-block" name="guardar" value="Guradar" >
            </form>
        </div>
        <!--/m-->
        </div>
        <div class="col-md-8">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Indetificacion</th>
                        <th>Nombere completo</th>
                        <th>Fecha de Nacimiento</th>
                        <th>P.A.P.A</th>
                    <tr>
                </thead>
                <tbody>
                    <?php 
                    $query = "SELECT * FROM estudiantes";
                    $result = mysqli_query($conn, $query);
                    while($row = mysqli_fetc_array($result)){?>
                    <te>
                        
                    </tr>
                    }
                </tbody>
            </table>
        </div>
    </div>
    <div class="col-md-8">
    </div>
    <script src="validar.js"></script>
</body>
</html>
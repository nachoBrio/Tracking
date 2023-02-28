<?php

use Code_Snippets\Import;

use function PHPSTORM_META\sql_injection_subst;

session_start();

echo $_SESSION['miSesion'];

include 'conexion.php';
?>
<?php
//echo '<script language="javascript">alert("Solo esta permitido numeros");</script>';



if (isset($_POST['PalabraClave'])) {
    $mensaje = 0;
    $mensaje = $_POST['PalabraClave'];
}




$cantidad = 0;
//$query = "SELECT * FROM Clientes WHERE ClienteID='1'";

$query;
$query = "SELECT * FROM Envios WHERE EnvioID='$mensaje'";
$stmt = $conn->query($query);
$registros = $stmt->fetchAll(PDO::FETCH_OBJ);
//$result=$stmt;
$row = $stmt->fetchAll(PDO::FETCH_OBJ);

//$aKeyword = $_POST['PalabraClave']);

?>
<?php include 'conexion.php'; ?>

<!doctype html>

<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    <title>U</title>
    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="assets/css/sticky-footer-navbar.css" rel="stylesheet">
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.1/themes/base/jquery-ui.css" />

    <link rel="stylesheet" href="..\Buscador-PRUEBA\dist\css\style.css">
    <script defer src="..\Buscador-PRUEBA\assets\js\script.js"></script>

</head>

<body>

    <header>
        <!-- Fixed navbar -->
        <img src="images.jpg" alt="BRIO" class="img-brio">
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <a class="navbar-brand" href="index.php">BRIO - SISTEMAS</a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto">

                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Inicio <span class="sr-only">(current)</span></a>
                    </li>

                </ul>

            </div>
        </nav>
    </header>

    <!-- Begin page content -->

    <div class="container">
        <h4 class="mt-5">Buscador Cliente</h4>
        <hr>


        <!-- Contenido -->

        <div class="nomostre">
            <div class="row">
                <div class="col-lg-12">
                    <table id="registros" class="table table-border table-hover" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>Item</th>
                                <th>Nombres</th>
                                <th>DNI</th>
                                <th>Dirección</th>
                                <th>Fecha</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($registros as $fila) : ?>
                                <?php $cantidad = $cantidad + 1 ?>
                                <tr>
                                    <td><?php echo $cantidad; ?></td>
                                    <td><?php echo $fila->FECHA; ?></td>
                                    <td><?php echo $fila->Historia; ?></td>
                                    <td><?php echo $fila->Planta; ?></td>
                                    <td><?php echo $fila->Estado; ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>




        <ul class="list-group">
            <li class="list-group-item">
                <form method="post">
                    <div class="form-row align-items-center">
                        <div class="col-auto">
                            <label class="sr-only" for="inlineFormInput">Curso</label>
                            <input required name="PalabraClave" type="text" class="form-control mb-2" id="inlineFormInput" placeholder="Ingrese palabra clave">
                            
                        </div>

                        <div class="col-auto">
                            <button id='ocultar-or-mostrar' class="btn btn-primary mb-2">Buscar</button>
                        </div>
                    </div>
                </form>
            </li>

        </ul>





        <!-- Fin Contenido -->
    </div>
    </div><!-- Fin row -->
    </div><!-- Fin container -->
    <footer class="footer">
        <div class="container">

        </div>
    </footer>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>
        window.jQuery || document.write('<script src="assets/js/vendor/jquery-slim.min.js"><\/script>')
    </script>
    <script src="assets/js/vendor/popper.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
</body>

</html>
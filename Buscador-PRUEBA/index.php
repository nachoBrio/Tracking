<?php

use Code_Snippets\Import;

use function PHPSTORM_META\sql_injection_subst;




include 'conexion.php';
?>
<?php
//echo '<script language="javascript">alert("Solo esta permitido numeros");</script>';


if (isset($_POST['PalabraClave'])) {
  $mensaje = 0;
  $mensaje = $_POST['PalabraClave'];
}

session_start();
//Declarar mi session

$_SESSION['miSesion'] = $mensaje;

echo $_SESSION['miSesion'];



$cantidad = 0;
//$query = "SELECT * FROM Clientes WHERE ClienteID='1'";

$query;

$mensaje = 0;
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
  <!-- Alerta personalizada -->
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="assets/js/functions.js"></script>
  <link rel="icon" href="imagenes.jps">
  <title></title>
  <!-- Bootstrap core CSS -->
  <link href="dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="assets/css/sticky-footer-navbar.css" rel="stylesheet">
  <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.1/themes/base/jquery-ui.css" />
  <script type="text/javascript" src="http://code.jquery.com/jquery-1.8.0.min.js"></script>
  <link rel="stylesheet" href="..\Buscador-PRUEBA\dist\css\style.css">
  <script defer src="..\Buscador-PRUEBA\assets\js\script.js"></script>



</head>

<body>

  <header>
    <!-- Fixed navbar -->
    <!--<img src="images.jpg" alt="BRIO" class="img-brio">-->
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <a class="navbar-brand" href="index.php"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <ul class="navbar-nav mr-auto">

        <li class="nav-item active">
          <a class="nav-link" href="index.php">Inicio <span class="sr-only">(current)</span></a>
        </li>

      </ul>


    </nav>
  </header>


  <!-- Begin page content -->

  <div class="container">
    <h4 class="mt-5">Ingrese el numero del envio</h4>
    <hr>

    <div class="row">
      <div class="col-12 col-md-12">
        <!-- Contenido -->


        <!-- 
       <ul class="list-group"> 
          <li class="list-group-item">
            <form method="post">
              <div class="form-row align-items-center">
                <div class="col-auto">
                  <label class="sr-only" for="inlineFormInput">Curso</label>
                  <form action="seguimiento.php" method="post">
                  <select name="envio" id="">
                  <input required name="PalabraClave" type="number" class="form-control mb-2" id="inlineFormInput" placeholder="codigo de envio">
                  <input name="buscar" type="hidden" class="form-control mb-2" id="inlineFormInput" value="v"> 
                  </select>
                  </form> -->







        <ul class="list-group">
          <li class="list-group-item">
            <form action="seguimiento.php" method="post" id="formulario">
              <h1>Buscar envio</h1>
              <section name='envio' id="">
                <option value="Nose"> </option>


              </section>
              <label for="">Numero envio:</label>
              <input require type="number" name="nroenvios"  name="PalabraClave" type="number" class="form-control mb-2" id="inlineFormInput" placeholder="codigo de envio" maxlength="12" >
              <input type="submit" value="Consulta" class="form-control mb-2" id="csd">
            </form>
          </li>
        </ul>
        






        </form>
      </div>

      <div class="col-auto">

        <!-- <button id='ocultar-or-mostrar'>Cargar</button> -->
        <!-- <a href="seguimiento.php" class="btn btn-success" class="btn btn-primary mb-2" type="submit">Consultar</a> -->

        <!-- <button id='ocultar-mostrar' type="submit" class="btn btn-primary mb-2">Consultar</button> -->
        <!-- <form method="get" action="seguimiento.php"><button type="submit">Nose</button></form> -->

        <!-- <button type="submit">
          <img src="send.svg" alt="imagen" width="32" height="32" style="vertical-align: middle">
          Enviar
        </button> -->

      </div>
    </div>


    </form>
    </li>




    <div id='ocultar-y-mostrar' class="nomostre" style="display: none">
      <div>
        <div>
          <table cellspacing="0" width="100%">
            <thead>
              <tr>
                <th>Item</th>

                <th>Fecha</th>
                <th>Planta</th>
                <th>Historia</th>
                <th>Estado</th>
                <th>DomicioOrigen</th>
                <th>DomicilioDestino</th>
                <th>Estado de entrega</th>

              </tr>
            </thead>
            <tbody>
              <?php foreach ($registros as $fila) : ?>
                <?php $cantidad = $cantidad + 1 ?>
                <tr>
                  <td><?php echo $cantidad; ?></td>
                  <td><?php echo $fila->DomicilioOrigen; ?></td>
                  <td><?php echo $fila->DomicilioDestino; ?></td>
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



    <?php

    // if (!empty($_GET)) {
    //   $aKeyword = explode(" ", $_GET['PalabraClave']);
    //   //$query ="SELECT * FROM Clientes  '%" . $aKeyword[0] . "%' OR descripcion like '%" . $aKeyword[0] . "%'";
    //   //$query ="SELECT * FROM cursos WHERE lenguaje like '%" . $aKeyword[0] . "%' OR descripcion like '%" . $aKeyword[0] . "%'";
    //   //$query = "SELECT * FROM Clientes WHERE ClienteID='$PalabraClave'";



    //   for ($i = 1; $i < count($aKeyword); $i++) {
    //     if (!empty($aKeyword[$i])) {
    //       $query .= " OR descripcion like '%" . $aKeyword[$i] . "%'";
    //     }
    //   }

    //   $result = $conn->query($query);
    //echo "<br>Resultado al nuemero de envio:<b> " . $_POST['PalabraClave'] . "</b>";



    //  if(mysqli_num_rows($result) > 0) {
    //     $row_count=0;
    //     echo "<br><br>Resultados encontrados: ";
    //     echo "<br><table class='table table-striped'>";
    //     While($row = $result->fetchAll()) {   
    //         $row_count++;                         
    //         echo "<tr><td>".$row_count." </td><td>". $row['ClienteNombre'] . "</td><td>". $row['descripcion'] . "</td></tr>";
    //     }
    //     echo "</table>";

    // }
    // else {
    //     echo "<br>Resultados encontrados: Ninguno";


    // }
    //}

    ?>




    <!-- Fin Contenido -->
  </div>
  </div><!-- Fin row -->
  </div><!-- Fin container -->
  <footer class="footer">
    <div class="container">
      <span class="text-muted">
        <p><a href=target="_blank"></a></p>
      </span>
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


  <!-- <script>
    $(document).ready(function() {
      $('.ocul').DataTable({
        responsive: false
      });
    });
  </script> -->

  <script src="https://kit.fontawesome.com/bb89c5b270.js" crossorigin="anonymous">

  </script>

  <!-- <div class="container text-center py-5">
    <h1 id="titulo" class="display-3 py-5"> </h1>
    <button value="true" id="boton" onclick="ocultar()" class="btn btn-danger"> CLICK</button>
  </div> -->

  <script>
    //  function mostrar() {
    //    document.getElementById("envios").style.visibility = 'hidden';

    //  }

    //  function ocultar() {
    //    document.getElementById("envi").style.display = 'visible';
    //  }



    // $(document).ready(function () { 
    // consultas()
    //   });

    // function consultas() {        
    //   $(".ocul").toggle();      
    //  }


    //var clic = 1;

    // function divLogin() {

    //   if (clic == 1) {

    //     document.getElementById("envios").style.height = "100px";

    //     clic = clic + 1;

    //   } else {

    //     document.getElementById("envios").style.height = "0px";

    //     clic = 1;

    //   }

    // }

    //     function myFunction() {
    //     var x = document.getElementById("DIVIDI");
    //     if (x.style.display === "none") {
    //         x.style.display = "block"; 
    //     } else {
    //         x.style.display = "none";
    //     }
    // }
  </script>
  <script>
    //  window.addEventListener('load', init, false);
    //  function init() {
    //     let div = document.querySelector('#ocultar-y-mostrar');
    //      div.style.visibility = 'hidden';
    //      let boton = document.querySelector('#ocultar-mostrar');
    //      boton.addEventListener('click', function (e) {
    //          if(div.style.visibility === 'hidden'){
    //              div.style.visibility = 'visible';
    //          }else{
    //              div.style.visibility = 'visible';
    //          }
    //      }, false);
    // }
  </script>

  <!-- <button class="btn btn-success">¿Soy un botón o un enlace?</button>
<a href="seguimiento.php" class="btn btn-success">¿Soy un botón o un enlace?</a> -->

  <!-- 
<input id="mostrar_elementos" type="button" value="Mostrar mensaje"/>
<input id="ocultar_elemento" type="button" value="Ocultar mensaje">
<div class="ocultado">
  hola
</div> -->
  <!-- 
  <a href="recibe.php">
    <button>HOLA</button>
  </a> -->

  <script>
    const validar = (selector, num = 4 ) => {
      if (typeof selector !== "string")
        return false;

      let text = document.querySelector(selector);
      if (text === null)
        return false;

      if ((text.value.trim().length > num))
        return true;

      return false;
    };

    const formulario = document.querySelector("#formulario");
    formulario.onsubmit = e => {
      if (!validar("#inlineFormInput")) {
        e.preventDefault();
        alert("No cumple con las validaciones indicadas - sin el 9");
      }
      
    }

    
   


  const firstName = document.querySelector("#inlineFormInput");
  const button = document.querySelector("#csd");
  
  button.addEventListener('click',() => {
    if(firstName.value.length == 0 ){
      alert("El campo esta vacio....");
    }
      
    
  });
  

  </script>






</body>

</html>
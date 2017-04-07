<<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>iNICIO</title>

    <script src="http://code.jquery.com/jquery-2.1.4.min.js" type="text/javascript"></script>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
     <link rel="stylesheet" href="style.css">

      <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->

      <script type="text/javascript">
        $(document).ready(function () {
            (function ($) {
                $('#filtrar').keyup(function () {
                    var rex = new RegExp($(this).val(), 'i');
                    $('.buscar tr').hide();
                    $('.buscar tr').filter(function () {
                        return rex.test($(this).text());
                    }).show();
                })
            }(jQuery));
        });
      </script>    

  </head>
  <body>
  <header>
  <section class="wrapper">
        <nav>
            <ul> 
                 <li><img src ="./Imagenes/logo1.png"></img></li>
                <li><a href="index.php">INICIO</a></li>
                <li><a href="buesqued_productos.php">PRODUCTOS</a></li>
                <li><a href="#">SERVICIOS</a></li>
                <li><a href="#">BLOG</a></li>
                <li><a href="#">HISTORIA</a></li>
                <li><a href="Cal.php">COTIZACION</a></li>
                <li><a href="#">CONTACTO</a></li>

            </ul>
    </nav>
    </section>
</header>
<br/>
<br/><br/><br/>
    <div class="container">
      <h1>Lista de Productos</h1>
      <h2>Prochef Soluciones</h2>

      <div class="input-group"> <span class="input-group-addon">Buscar</span>
        <input id="filtrar" type="text" class="form-control" placeholder="Ingresa el código del producto que deseas Buscar...">
      </div>
      <br/>
      <table class="table table-hover">
        <thead>
          <tr>
            <th>Nombre</th>
            <th>Modelo</th>
            <th>Descripción</th>
            <th>Dimensiones</th>
            <th>Ver detalles</th>
          </tr>
        </thead>
        <tbody class="buscar">
          <tr><td>Alacena</td><td>Al-10040</td><td>Acero Inoxidable grado alimenticio</td><td>1.00X0.40X0..40 m</td><td><a target="_blank" alt="Till The Sky Falls Down - Vocal Mix" title="Till The Sky Falls Down - Vocal Mix" href=https://cdn.shopify.com/s/files/1/0810/4325/t/4/assets/logo.png?17016188950844505738 ><a target="_blank" alt="" title="" href ="./Imagenes/Alacena.pdf" id="logo">Ver detalles</a></td></tr>


          <tr><td>Anaquel liso acero inox.</td><td>AN-L4A8445</td><td>Fabricado en acero inoxidable</td><td>0.84X0.45X1.80 m</td><td>Ver detalles</a></td></tr>



          <tr><td>Anaquel liso de lamina galvanizada</td><td>AN-L4G8445</td><td>Fabricado en lamina galvanizada</td><td>0.84X0.45X1.80 m</td><td>Ver detalles</td> 

          <tr><td>Anaquel liso 5 entrepaños</td><td>AN-L4PA10045</td><td>Fabricado en acero inoxidable grado alimenticio</td><td>1.00X0.45X1.80 m</td><td>Ver detalles</td>

          <tr><td>Anaquel liso perforado</td><td>AN-L4PA10045</td><td>Fabricado en acero inoxidable grado alimenticio con 4 entrepaños perforados</td><td>1.00X0.45X1.80 m</td> <td>Ver detalles</td>

          <tr><td>Anaquel marimba 4 entrepaños</td><td>AN-M4A10045</td><td>Fabricado en acero inoxidable grado alimenticio con 4 entrepaños</td><td>1.00X0.45X1.80 m</td><td>Ver detalles</td>
          
          <tr><td>Anaquel marimba 3 entrepaños</td><td>AN-M3A12060</td><td>Fabricado en acero inoxidable grado alimenticio con 3 entrepaños</td><td>1.20X0.60X1.80 m</td><td>Ver detalles</td>

          <tr><td>Barra fría tipo gabinete</td><td>AN-BF-G11070</td><td>Fabricado en acero inoxidable grado alimenticio. Frio a base de hielo</td><td>1.20X0.60X1.80 m</td><td>Ver detalles</td>

          <tr><td>Barra fría tipo sanitario</td><td>BF-S11070</td><td>Fabricado en acero inoxidable grado alimenticio. Frio a base de hielo. Con falsos fondos.</td><td>1.10X0.70X0.90 m</td><td>Ver detalles</td>

          <tr><td>Baño maría tipo sanitario</td><td>BF-S11070</td><td>Fabricado en acero inoxidable grado alimenticio. Quemadores de aluminio baja presión</td><td>0.80X0.70X0.90 m</td><td>Ver detalles</td>

          <tr><td>Carro calentón</td><td>CA-CE60P10580</td><td>Fabricado en 
          acero inoxidable grado alimenticio. A base de alcohol solido o eléctrico</td><td>1.05X0.80X1.20 m</td><td>Ver detalles</td>

          <tr><td>Carro para azúcar y harina</td><td>CA-AH7548</td><td>Fabricado en acero inoxidable grado alimenticio. Con llantas locas de 4''</td><td>0.75X0.48X0.71 m</td><td>Ver detalles</td>

          <tr><td>Carro rack una columna 18 Charolas</td><td>CA-18C5268</td><td>Fabricado en acero inoxidable grado alimenticio. capacidad para 18 charolas. Con llantas locas de 4''</td><td>0.52X0.68X1.99 m</td><td>Ver detalles</td>

          <tr><td>Carro rack una columna 10 Charolas</td><td>CA-10C5544</td><td>Fabricado en acero inoxidable grado alimenticio. capacidad para 10 charolas. Con llantas locas de 4''</td><td>0.55X0.44X2.50 m</td><td>Ver detalles</td>

          <tr><td>Carro de servicio de dos charolas</td><td>CA-S2C10850</td><td>Fabricado en acero inoxidable grado alimenticio. Dos niveles. Con llantas locas de 4''</td><td>1.08X0.50X0.85 m</td><td>Ver detalles</td>




        </tbody>
      </table>

    </div>
  </body>
</html>
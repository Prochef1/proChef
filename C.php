<head>
    <title>Resultados</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <table class="table table-hover table-stripped table-responsive table-bordered">
  <header>
  <section class="wrapper">
        <nav>
            <ul> 
                <li><img src ="./Imagenes/logo1.png"></img></li>
                <li><a href="index.php">INICIO</a></li>
                <li><a href="busqued_productos.php">PRODUCTOS</a></li>
                <li><a href="#">SERVICIOS</a></li>
                <li><a href="#">BLOG</a></li>
                <li><a href="#">HISTORIA</a></li>
                <li><a href="Cal.php">COTIZACION</a></li>
                <li><a href="#">CONTACTO</a></li>

            </ul>
    </nav>
    </section>
  </body>  
        <tr> <br/><br/><br/><br/>
            <td>Producto</td>
            <td>Cant. Tarjas</td>
            <td>Tamaño</td>
            <td>Vano</td>
            <td>Entrepaño</td>
            <td><b>Total</b></td>
        </tr>
        <tr>
            <td>
                <?php echo $_POST['Producto']; ?>
            </td>
            <td>
                <?php echo $_POST['atributo1']; ?>
            </td>
            <td>
                <?php echo $_POST['atributo2'] ?>
            </td>
            <td>
                <?php echo $_POST['atributo3']; ?>
            </td>
            <td>
                <?php echo $_POST['atributo4']; ?>
            </td>
            <td>
            
            </td>
        </tr>
    </table>
</body>
</html>
<!DOCTYPE html>
<html lang="es">
<head>
    <title>Calculadora</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
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
</header>
<br/><br/><br/>
    <center>
        <h1>Cotizadora</h1>
        <br/>
        <form action="C.php" method="post">
            <div class="form-group">
                <label for="product">Producto:</label>
                <select name="Producto" id="product" class="form-control">
                    <option value1="MESA DE TRABAJO">Mesa de Trabajo</option>
                    <option value="FREGADERO">Fregadero</option>
                    <option value="MESA DE RECIBO DE LOZA SUCIA">Mesa de recibo de loza sucia</option>
                    <option value="MESA DE RECIBO DE LOZA LIMPIA">Mesa de recibo de loza limpia</option>
                </select>
            </div>
            <div class="form-group">
                <select name="atributo1" class="form-control">
                    <option value="UNA TARJA">Una Tarja</option>
                    <option value="DOS TARJAS">Dos Tarjas</option>
                    <option value="TRES TARJAS">Tres Tarjas</option>
                </select>
            </div>
            <div class="form-group">
                <select name="atributo2" class="form-control">
                    <option value="31X31X25">31X31X25</option>
                    <option value="46X46X30">46X46X30</option>
                    <option value="57X57X57">57X57X57</option>
                </select>
            </div>
            <div class="form-group">
                <select name="atributo3" class="form-control">
                    <option value="CON VANO">CON VANO</option>
                    <option value="SIN VANO">SIN VANO</option>
                </select>
            </div>
            <div class="form-group">
                <select name="atributo4" class="form-control">
                    <option value="CON ENTREPAÑO">CON ENTREPAÑO</option>
                    <option value="SIN ENTREPAÑO">SIN ENTREPAÑO</option>
                </select>
            </div>
            <input type="reset" value="LIMPIAR" class="btn btn-default">
            <input type="submit" value="COTIZAR" class="btn btn-primary">
        </form>
    </center>
</body>
</html>
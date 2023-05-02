<?php   
    $nombre = "sin nombre";
    $apellidos = "sin apellidos";
    $email = "sin email";
    $estado = "sin estado";
    $comentario = "sin comentario";
    if ( !empty($_POST['nombre']) && !empty($_POST['comentario']) ) { 
        $nombre = $_POST['nombre'];
        $apellidos = $_POST['apellidos'];
        $email = $_POST['email'];
        $estado = $_POST['estado'];
        $comentario = $_POST['comentario'];
        echo $nombre;
        echo $apellidos;
        echo $email;
        echo $estado;
        echo $comentario;

        $host = 'us-cdbr-east-06.cleardb.net';
        $user = 'b264e7f33d46d8';
        $pass = 'a4b22f42';
        $ddbb = 'heroku_63529e2d71924ab';

        $mysqli = new mysqli($host,$user,$pass);
        mysqli_select_db($mysqli,$ddbb);
        $sql = "INSERT INTO comentarios (nombre, apellidos, email, estado, comentario) VALUES ('$nombre', '$apellidos', '$email', '$estado', '$comentario')";
        $result = mysqli_query($mysqli,$sql);
    }
    /*
    CLEARDB_DATABASE_URL: mysql://b264e7f33d46d8:a4b22f42@us-cdbr-east-06.cleardb.net/heroku_63529e2d71924ab?reconnect=true
    */
    $host = 'us-cdbr-east-06.cleardb.net';
    $user = 'b264e7f33d46d8';
    $pass = 'a4b22f42';
    $ddbb = 'heroku_63529e2d71924ab';
    /*
    $host = '127.0.0.1';
    $user = 'root';
    $pass = '';
    $ddbb = 'dbs10743387';
    */
    $mysqli = new mysqli($host,$user,$pass);
    mysqli_select_db($mysqli,$ddbb);
    $result = mysqli_query($mysqli,"SELECT * FROM comentarios");
?>

<html>
    <head>
        <title>INDECORA</title>
        <meta charset="UTF-8"/>
        <meta name="description" content=""/>
        <meta name="author" content="karina guadalupe barragan jara"/>
        <link type="text/css" rel="stylesheet" href="estilo/estilos.css">

    </head>
    <body>
        <div id="cointener">

            <header>
                <p> 
                    <img src="imagenes/imagen3.png" width="50px" height="50px" HSPACE="0"  aling ="right" aling="justify">
                    BLOG
                    <img src="imagenes/imagen4.png" width="50px" height="40px" HSPACE="0"  aling ="right" aling="justify">CUENTA
                    <img src="imagenes/imagen5.png" width="60px" height="40px" HSPACE="0"  aling ="right" aling="justify">UBICACION
                    <img src="imagenes/imagen6.png" width="70px" height="40px" HSPACE="0"  aling ="right" aling="justify">33-24-93-09-55
                </p>       
                <div class="titulo">
                    <img src="imagenes/imagen1.png"width="300px" height="300px" />
                    <div class="titulo-texto">INDECORA</div>
                    <div class="titulo-texto1">UNA SOLUCION PARA TODOS</div>
                    <img src="imagenes/imagen2.png"width="200px"/>
                </div>
            </header>

            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>

            <menu>
                <li><a href="index.php">INICIO</a></li>
                <li><a href="COJINES.php">COJINES</a></li>
                <li><a href="FLOREROS.php">FLOREROS</a></li>
                <li><a href="LAMPARAS.php">LAMPARAS</a></li>
                <li><a href="TAPETES.php">TAPETES</a></li>
                <li><a href="CUADROS.php">CUADROS</a></li>
                <li><a href="ESCULTURAS.php">ESCULTURAS</a></li>
                <li><a href="REGALOS.php">REGALOS</a></li>
                <li><a href="OTROS.php">OTROS</a></li>
            </menu>

            <div class="contenedor">
                <img src="imagenes/imagen8.PNG"width="1480px" height="800px" />
                <div class="texto-encima">¿NECESITAS<br>DECORAR? ¡NUNCA HABÍA SIDO<br>TAN FÁCIL!</div>
                <div class="texto-encima"></div>
                <div class="centrado">Permítenos demostrarte lo que nuestro equipo<br>puede hacer por ti y tu hogar.</div>
            </div>

            <h2>SOLUCIONES A TU MEDIDA</h2>
            <h3>Sin importar cuál sea tu estilo, en nuestra tienda lo puedes conseguir</h3> 
            <br>

            <div id="contenedor_principal">
                <div class="contenedor_imagen_texto">
                    <div class="imagen"><img src="imagenes/imagen17.jpg" width="300px" height="300px"></div>
                    <div class="texto"> <img src="imagenes/imagen7.png" width="40px" height="40px">COJINES</div>
                </div> 
                <div class="contenedor_imagen_texto">
                    <div class="imagen"><img src="imagenes/imagen16.jpg" width="300px" height="300px"></div>
                    <div class="texto"> <img src="imagenes/imagen7.png" width="40px" height="40px">JARRONES</div>
                </div> 
                <div class="contenedor_imagen_texto">
                    <div class="imagen"><img src="imagenes/imagen13.jpg"width="300px" height="300px"></div>
                    <div class="texto"> <img src="imagenes/imagen7.png" width="40px" height="40px">ESCULTURAS</div>
                </div> 
            </div> 

            <br>
            <br>
            <br>
            <br>

            <iframe width="560" height="315" src="https://www.youtube.com/embed/jqeeavR-TeY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

            <br>
            <br>

            <form action="<?php $_PHP_SELF ?>" target="" method="POST" name="formComentario">
                <h3>Formulario de contacto y comentarios</h3>

                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" id="nombre" placeholder="Escribe tu nombre"/>
                <label for="apellidos">Apellidos</label>
                <input type="text" name="apellidos" id="apellidos" placeholder="Apellidos"/>
                <label for="email" />Email</label>
                <input type="email" name="email" id="email" placeholder="email"/>

                <br/>
                <label for="estado">De donde nos visitas: </label>
                <select id="estado" name="estado">
                    <option value="">Estado</option>
                    <option value="Aguascalientes">Aguascalientes</option>
                    <option value="Cancun">Cancun</option>
                    <option value="Sonora">Sonora</option>
                    <option value="Veracruz">Veracruz</option>
                    <option value="Mexico">Mexico</option>
                    <option value="Guadalajra">Guadalajra</option>
                </select>

                <br/>
                <label for="comentario">Comentario</label>
                <textarea name="comentario" id="comentario" placeholder="comenta brevemente en menos de 300 carácteres" maxlength="300"></textarea>

                <input type="submit" name="enviar" value="enviar datos"/>
            </form>
            <br>
            <br>

            <h3>Comentarios de algunos clientes</h3>

            <table>
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Apellidos</th>
                        <th>Email</th>
                        <th>Comentario</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($r = mysqli_fetch_array($result)) {
                        echo "<tr>";
                        echo "<td>".$r['nombre']."</td>";
                        echo "<td>".$r['apellidos']."</td>";
                        echo "<td>".$r['email']."</td>";
                        echo "<td>".$r['comentario']."</td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
            <br>
            <br>

            <div class="barra">
                <p><br>www.indecora.mx (33) 2493 0955<br><br></p>
            </div>

            <p>
            Nombre Materia: Conceptualización de servicios en la nube. <br> 
            Autor: Karina Guadalupe Barragán Jara <br> 
            Codigo: 304180712 <br>
            Correo: <a href="mailto:kbarragan725@gmail.com">kbarragan725@gmail.com</a>
            </p>

        </div>
    </body>
</html>

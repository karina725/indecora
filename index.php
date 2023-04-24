<html>
    <head>
        <title>INDECORA</title>
        <meta charset="UTF-8"/>
        <meta name="description" content=""/>
        <meta name="author" content="karina guadalupe barragan jara"/>
    </head>
    <body>
        <link type="text/css" rel="stylesheet" href="estilo/estilo1.css">
    <p> 
        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<img src="imagenes/imagen3.png" width="50px" height="50px" HSPACE="0"  aling ="right" aling= "justify">BLOG&nbsp&nbsp&nbsp
        <img src="imagenes/imagen4.png" width="50px" height="40px" HSPACE="0"  aling ="right" aling= "justify"  >CUENTA&nbsp&nbsp&nbsp&nbsp
        <img src="imagenes/imagen5.png" width="60px" height="40px" HSPACE="0"  aling ="right" aling= "justify">UBICACION&nbsp&nbsp&nbsp
        <img src="imagenes/imagen6.png" width="70px" height="40px" HSPACE="0"  aling ="right" aling= "justify">33-24-93-09-55
    </p>
            
    <div class="titulo">
        <img src="imagenes/imagen1.png"width="300px" height="300px" />
        <div class="titulo-texto">INDECORA</div>
        <div class="titulo-texto1">UNA SOLUCION PARA TODOS</div> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
        <img src="imagenes/imagen2.png"width="200px"/>
    </div>
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
        <li><a href="index.html">Inicio</a></li>
        <li><a href="COJINES.html">COJINES</a></li>
        <li><a href="FLOREROS.html">FLOREROS</a></li>
        <li><a href="LAMPARAS.html">LAMPARAS</a></li>
        <li><a href="TAPETES.html">TAPETES</a></li>
        <li><a href="CUADROS.html">CUADROS</a></li>
        <li><a href="ESCULTURAS.html">ESCULTURAS</a></li>
        <li><a href="REGALOS.html">REGALOS</a></li>
        <li><a href="OTROS.html">OTROS</a></li>
        <li><a href="FORMULARIO.php">FORMULARIO</a></li>
    </menu>

        <div class="contenedor">
            <img src="imagenes/imagen8.PNG"width="1480px" height="800px" />
            <div class="texto-encima">¿NECESITAS<br>DECORAR? ¡NUNCA HABÍA SIDO<br>TAN FÁCIL!</div>
            <div class="texto-encima"></div>
            <div class="centrado">Permítenos demostrarte lo que nuestro equipo<br>puede hacer por ti y tu hogar.</div>
        </div>
    <h2>
        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspSOLUCIONES A TU MEDIDA
    </h2>
    <h3>
        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspSin importar cuál sea tu estilo, en nuestra tienda lo puedes conseguir
    </h3> 
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
    <?php
            if( (isset($_POST["names"])) && (isset($_POST["ages"])) && (isset($_POST["estado"])) && (isset($_POST["surname"])) && (isset($_POST["opciones"]))) {
                echo "Bienvenido ". $_POST['names'] ; 
                echo " ". $_POST["surname"] ; 
                echo " Tu edad es ". $_POST["ages"]. " años.<br/><br/>";
                echo " Nos visitas de ". $_POST["estado"]. "<br/><br/>" ; 
                echo " Tus gustos son: ";
                foreach($_POST['opciones'] as $seleccion) {
                    echo "<p>".$seleccion ."</p>";
                }
            }
            
        ?>
    <form action="<?php $_PHP_SELF ?>" method="POST">
        <div Formulario:><br/>
                Nombres:
                <input type="text" name="names"/>
                <br/><br/>
                Apellido:
                <input type="text" name="surname"/>
                <br/><br/>
                Años:
                <input type="text" name="ages"/>
                <br/><br/>
        </div>
        <div class="dinamico">
            <label for="estado">De donde nos visitas </label>
            <select id="estado" name="estado" required>
                <option value="">Estado</option>
                <option value="Aguascalientes">Aguascalientes</option>
                <option value="Cancun">Cancun</option>
                <option value="Sonora">Sonora</option>
                <option value="Veracruz">Veracruz</option>
                <option value="Mexico">Mexico</option>
                <option value="Guadalajra">Guadalajra</option>
            </select>
            <br/><br/>
        </div>
        <div class="checkbox">
            <input type="checkbox" name="opciones[]" value="Cojines">Cojines <br/><br/> 
            <input type="checkbox" name="opciones[]" value="Lamparas">Lamparas <br/><br/>
            <input type="checkbox" name="opciones[]" value="Cuadros">Cuadros <br/><br/> 
            <input type="checkbox" name="opciones[]" value="Jarrones">Jarrones <br/><br/>
            <input type="checkbox" name="opciones[]" value="Esculturas">Esculturas <br/><br/>
            <input type="checkbox" name="opciones[]" value="Tapetes">Tapetes <br/><br/>
        </div>
        <input name="submit" type="submit"/>
    </form>     
    <div class="barra">
        <p>
        <br>
        www indecora.mx (33) 2493 0955
        <br>
        <br>
        </p>
    </div>   

    <p>
        Autor: Karina Guadalupe Barragán Jara <br> Correo: <a href="mailto:kbarragan725@gmail.com">kbarragan725@gmail.com</a>
    </p>
    </body>
</html>

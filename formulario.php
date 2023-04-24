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

<?php
// Inicializar un array para almacenar los registros
$registros = array();

// Función para agregar un registro al array
function agregarRegistro($nombre, $email, $telefono) {
    global $registros;
    $nuevoRegistro = array(
        'nombre' => $nombre,
        'email' => $email,
        'telefono' => $telefono
    );
    array_push($registros, $nuevoRegistro);
}

// Función para editar un registro del array
function editarRegistro($indice, $nombre, $email, $telefono) {
    global $registros;
    $registros[$indice]['nombre'] = $nombre;
    $registros[$indice]['email'] = $email;
    $registros[$indice]['telefono'] = $telefono;
}

// Función para eliminar un registro del array
function eliminarRegistro($indice) {
    global $registros;
    unset($registros[$indice]);
    $registros = array_values($registros);
}

// Procesar el formulario cuando se envíe
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $accion = $_POST["accion"];
    $indice = isset($_POST["indice"]) ? $_POST["indice"] : null;
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $telefono = $_POST["telefono"];

    // Realizar la acción correspondiente
    switch ($accion) {
        case 'agregar':
            agregarRegistro($nombre, $email, $telefono);
            break;
        case 'editar':
            if ($indice !== null) {
                editarRegistro($indice, $nombre, $email, $telefono);
            }
            break;
        case 'eliminar':
            if ($indice !== null) {
                eliminarRegistro($indice);
            }
            break;
        default:
            // Acción inválida
            break;
    }
}
?>

<!-- Formulario HTML -->
<form action="" method="post">
    <input type="hidden" name="accion" value="agregar">
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre"><br>
    <label for="email">Email:</label>
    <input type="email" name="email"><br>
    <label for="telefono">Teléfono:</label>
    <input type="text" name="telefono"><br>
    <input type="submit" value="Agregar">
</form>

<!-- Mostrar registros existentes -->
<?php if (!empty($registros)): ?>
    <h2>Registros</h2>
    <table>
        <tr>
            <th>Nombre</th>
            <th>Email</th>
            <th>Teléfono</th>
            <th>Acciones</th>
        </tr>
        <?php foreach ($registros as $indice => $registro): ?>
            <tr>
                <td><?php echo $registro['nombre']; ?></td>
                <td><?php echo $registro['email']; ?></td>
                <td><?php echo $registro['telefono']; ?></td>
                <td>
                    <form action="" method="post" style="display: inline;">
                        <input type="hidden" name="accion" value="editar">
                        <input type="hidden" name="indice" value="<?php echo $indice; ?>">
                        <input type="submit" value="Editar">
        </form>
        
    </body>
<html>

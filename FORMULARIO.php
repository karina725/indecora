<!DOCTYPE html>
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
            <li><a href="index.php">Inicio</a></li>
            <li><a href="COJINES.php">COJINES</a></li>
            <li><a href="FLOREROS.php">FLOREROS</a></li>
            <li><a href="LAMPARAS.php">LAMPARAS</a></li>
            <li><a href="TAPETES.php">TAPETES</a></li>
            <li><a href="CUADROS.php">CUADROS</a></li>
            <li><a href="ESCULTURAS.php">ESCULTURAS</a></li>
            <li><a href="REGALOS.php">REGALOS</a></li>
            <li><a href="OTROS.php">OTROS</a></li>
            <li><a href="FORMULARIO.php">FORMULARIO</a></li>
        </menu>
        <br>
        <br>
        <br>
        <br>
        <br>
        <h2>Registro de Usuarios</h2>
        <form action="procesar_registro.php" method="POST">
            <label>Nombre:</label><br>
            <input type="text" name="nombre"><br>
            <label>Apellido:</label><br>
            <input type="text" name="apellido"><br>
            <label>Correo electrónico:</label><br>
            <input type="email" name="email"><br><br>
            <input type="submit" value="Registrarse">
        </form>
    </body>
</html>

<?php
// Conectar a la base de datos
$servername = "us-cdbr-east-06.cleardb.net";
$username = "b264e7f33d46d8";
$password = "a4b22f42 ";
$dbname = "heroku_63529e2d71924ab";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
	die("Error de conexión: " . $conn->connect_error);
}

// Procesar los datos del formulario de registro
if (isset($_POST["nombre"]) && isset($_POST["apellido"]) && isset($_POST["email"])) {
	$nombre = $_POST["nombre"];
	$apellido = $_POST["apellido"];
	$email = $_POST["email"];

	// Insertar los datos en la base de datos
	$sql = "INSERT INTO usuarios (nombre, apellido, email) VALUES ('$nombre', '$apellido', '$email')";
	if ($conn->query($sql) === TRUE) {
		echo "Registro exitoso";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
}

// Mostrar los registros de la base de datos
$sql = "SELECT * FROM usuarios";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	// Mostrar los registros en una tabla
	echo "<table><tr><th>ID</th><th>Nombre</th><th>Apellido</th><th>Correo electrónico</th><th>Acciones</th></tr>";
	while($row = $result->fetch_assoc()) {
		echo "<tr><td>".$row["id"]."</td><td>".$row["nombre"]."</td><td>".$row["apellido"]."</td><td>".$row["email"]."</td><td><a href='modificar_registro.php?id=".$row["id"]."'>Modificar</a> | <a href='eliminar_registro.php?id=".$row["id"]."'>Eliminar</a></td></tr>";
	}
	echo "</table>";
} else {
	echo "No hay registros";
}

$conn->close();
?>

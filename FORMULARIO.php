<!DOCTYPE html>
<html>
    <head>
        <title>Formulario</title>
    </head>
    <body>

        <!-- Formulario para agregar registro -->
        <h2>Agregar registro</h2>
        <form method="post" action="">
            <label>Nombre:</label>
            <input type="text" name="nombre" required>
            <br>
            <label>Apellido:</label>
            <input type="text" name="apellido" required>
            <br>
            <label>Email:</label>
            <input type="email" name="email" required>
            <br>
            <input type="submit" name="submit" value="Agregar registro">
        </form>

        <!-- Formulario para editar registro -->
        <h2>Editar registro</h2>
        <form method="post" action="">
            <label>ID:</label>
            <input type="text" name="id" required>
            <br>
            <label>Nombre:</label>
            <input type="text" name="nombre" required>
            <br>
            <label>Apellido:</label>
            <input type="text" name="apellido" required>
            <br>
            <label>Email:</label>
            <input type="email" name="email" required>
            <br>
            <input type="submit" name="update" value="Actualizar registro">
        </form>

        <!-- Tabla con registros existentes -->
        <h2>Registros existentes</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Email</th>
                    <th>Acciones</th>
                </tr>
            </thead>
        </table>
    </body>
</html>


<?php
    // Conexión a la base de datos
    $servername = "localhost";
    $username = "b69e0e598b9ebb";
    $password = "45dff538";
    $dbname = "heroku_e819e804397f55a";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Comprobación de la conexión
        if (!$conn) {
        die("Conexión fallida: " . mysqli_connect_error());
        }

    // Agregar registro
    if (isset($_POST['submit'])) {
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $email = $_POST['email'];

        $sql = "INSERT INTO usuarios (nombre, apellido, email)
        VALUES ('$nombre', '$apellido', '$email')";

        if (mysqli_query($conn, $sql)) {
        echo "Registro agregado correctamente";
        } else {
        echo "Error al agregar registro: " . mysqli_error($conn);
        }
        }

    // Editar registro
    if (isset($_POST['update'])) {
        $id = $_POST['id'];
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $email = $_POST['email'];

        $sql = "UPDATE usuarios SET nombre='$nombre', apellido='$apellido', email='$email' WHERE id='$id'";

        if (mysqli_query($conn, $sql)) {
        echo "Registro actualizado correctamente";
        } else {
        echo "Error al actualizar registro: " . mysqli_error($conn);
        }
        }

    // Eliminar registro
    if (isset($_GET['delete'])) {
        $id = $_GET['delete'];

        $sql = "DELETE FROM usuarios WHERE id='$id'";

        if (mysqli_query($conn, $sql)) {
        echo "Registro eliminado correctamente";
        } else {
        echo "Error al eliminar registro: " . mysqli_error($conn);
        }
        }

?>


    

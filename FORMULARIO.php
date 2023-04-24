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
                    </form
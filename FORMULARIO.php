<html>
<head>
    <title>Formulario de ejemplo</title>
</head>
<body>
    <h1>Formulario de ejemplo</h1>
    <h2>Agregar registro</h2>
    <form method="post" action="agregar.php">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>
        <input type="submit" value="Agregar">
    </form>

    <h2>Editar registro</h2>
    <form method="post" action="editar.php">
        <label for="id">ID:</label>
        <input type="text" id="id" name="id" required><br><br>
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>
        <input type="submit" value="Editar">
    </form>

    <h2>Eliminar registro</h2>
    <form method="post" action="eliminar.php">
        <label for="id">ID:</label>
        <input type="text" id="id" name="id" required><br><br>
        <input type="submit" value="Eliminar">
    </form>
</body>
</html>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Reservación de Hotel</title>
</head>
<body>
    <h1>Reservación de Hotel</h1>
    <form action="index.php?action=procesar" method="post">
        <select name="hotel" required>
            <option value="">Seleccione un hotel</option>
            <option value="Hotel A">Hotel A</option>
            <option value="Hotel B">Hotel B</option>
            <option value="Hotel C">Hotel C</option>
            <option value="Hotel D">Hotel D</option>
            <option value="Hotel E">Hotel E</option>
        </select><br>
        <input type="text" name="nombre" placeholder="Nombre" required><br>
        <input type="text" name="apellido" placeholder="Apellido" required><br>
        <input type="tel" name="telefono" placeholder="Teléfono" required><br>
        <input type="date" name="fecha" required><br>
        <textarea name="observaciones" placeholder="Observaciones"></textarea><br>
        <input type="submit" value="Procesar Reserva">
    </form>
    <a href="index.php?action=mostrar">Ver Reservas</a>
</body>
</html>
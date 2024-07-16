<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Reservas Actuales</title>
</head>
<body>
    <h1>Reservas Actuales</h1>
    <table border="1">
        <tr>
            <th>Hotel</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Teléfono</th>
            <th>Fecha</th>
            <th>Observaciones</th>
        </tr>
        <?php foreach ($reservas as $reserva): ?>
        <tr>
            <?php foreach ($reserva as $dato): ?>
                <td><?php echo htmlspecialchars($dato); ?></td>
            <?php endforeach; ?>
        </tr>
        <?php endforeach; ?>
    </table>
    <br>
    <a href="index.php">Volver</a>
</body>
</html>
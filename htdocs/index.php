<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido a XAMPP con Docker</title>
</head>
<body>
    <h1>¡Bienvenido a XAMPP con Docker!</h1>
    <p>Este es un entorno LAMP (Linux, Apache, MySQL, PHP) corriendo en Docker.</p>

    <h2>Información de PHP</h2>
    <?php
    // Mostrar información de PHP
    phpinfo();
    ?>

    <h2>Probar conexión a MySQL</h2>
    <?php
    // Datos de conexión a MySQL
    $servername = "db";  // El servicio MySQL se llama "db" en el archivo docker-compose
    $username = "root";
    $password = "test1234";
    $dbname = "test_db";

    // Crear conexión
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verificar la conexión
    if ($conn->connect_error) {
        die("La conexión a MySQL falló: " . $conn->connect_error);
    }
    echo "<p>Conexión a MySQL exitosa.</p>";

    // Cerrar la conexión
    $conn->close();
    ?>
</body>
</html>
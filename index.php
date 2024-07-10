<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Usuario</title>
    <link rel="stylesheet" href="styles2.css">
</head>
<body>
    <div class="container">
        <div class="column">
            <h1>Agregar Usuario</h1>
            <form action="add_user.php" method="post">
                <label for="name">Nombre:</label>
                <input type="text" id="name" name="name" required>
                <br>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                <br>
                <button type="submit">Agregar</button>
            </form>
        </div>
        <div class="column">
            <h2>Lista de Usuarios</h2>
            <?php
            include 'db.php';

            $sql = "SELECT id, name, email FROM users";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                echo "<ul>";
                while($row = $result->fetch_assoc()) {
                    echo "<li>" . $row["name"]. " - " . $row["email"]. "</li>";
                }
                echo "</ul>";
            } else {
                echo "0 resultados";
            }

            $conn->close();
            ?>
        </div>
    </div>
</body>
</html>

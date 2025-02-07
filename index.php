<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style/estilo.css">
    <title>Compra de boletos</title>
</head>
<body>
    <h1>Compra de boletos</h1>
    <h2> Formulario de ventas</h2>
    <form class="boleto" action="guardar.php" method="POST">
    <label for="ticket">Ticket</label>
    <input type="number" id="ticket" name="ticket" maxlength="6" required><br><br>

    <label for="pelicula">Pelicula</label>
    <input type="text" id="pelicula" name="pelicula" maxlength="40" required><br><br>

    <button class="submit" type="submit">Enviar boletos</button>
</form>
</body>
</html>
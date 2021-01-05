<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <form action="<php echo htmlspecialchars($_SERVER['PHP_SELF']);?> method="POST"> -->
    <form action="recibe.php" method="POST">
    <input type="text" placeholder="Nombre" name="nombre">
    <br>
    <label for="hombre">Hombre</label>
    <input type="radio" name="sexo" value="hombre" id="hombre">
    <label for="mujer">Mujer</label>
    <input type="radio" name="sexo" value="mujer" id="hombre">
    <br>
    <label for="year">Año de nacimiento</label>
    <select name="year" id="year">
        <option value="2000">2000</option>
        <option value="2001">2001</option>
        <option value="2002">2002</option>
    </select>
    <br>
    <label for="terminos">Aceptas los terminos?</label>
    <input type="checkbox" name="terminos" id="terminos">
    <br>
    <input type="submit" value="Enviar">
    </form>
</body>
</html>
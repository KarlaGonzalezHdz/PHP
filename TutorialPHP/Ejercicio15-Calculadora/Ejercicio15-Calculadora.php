<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="Ejercicio15-Procesamiento.php" method="POST" name="cal">
        <label>Introduzca los valores </label> <br> <br>
        <input type="text" name="c1" /><br><br>
        <input type="text" name="c2" /><br><br>
        <input type="text" name="c3" /><br><br>
        <label>Selecciona la operacion </label>
        <select name="lista">
            <option value="sumar">Sumar</option>
            <option value="restar">Restar</option>
            <option value="multiplicar">Multiplicar</option>
            <option value="dividir">Dividir</option>
        </select>
        <input type="submit" value="ver resultados"/>
    </form>
</body>

</html>
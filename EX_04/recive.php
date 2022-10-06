<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
<form action="index.php" method="POST" name="formulario">
    <input type="text" placeholder="Nombre:" name="nombre">
    <input type="text" placeholder="Apellido:" name="apellido">
    <input type="password" placeholder="Contraseña:" name="contraseña">
    </br>
    </br>
    <label for="Alumno">Alumno </label>
    <input type="radio" name="tipo" value="Alumno" id="Alumno">
    <label for="Profesor">Profesor </label>
    <input type="radio" name="tipo" value="Profesor" id="Profesor">
    </br>
    </br>
    <input type="number" placeholder=q"edad:" id="edad" name="edad"
           min="1" max="100">
    </br>
    </br>
    <textarea placeholder="comentarios:" id="comentarios" name="comentarios" cols="60" rows="5">
Texto de prueba
    </textarea>
    </br>
    </br>
    <input type="file" name="foto" id="foto">
    </br>
    </br>
    <input type="hidden" value="myPrueba" name="hidden">

    <input type="submit" value="Enviar">
</form>
</body>
</html>
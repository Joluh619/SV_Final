<?php
 
require_once "config.php";
require_once "crearbd.php";
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <LINK REL=StyleSheet HREF="estilos.css" TYPE="text/css" MEDIA=screen>
</head>
<body>
    <form method="post" action="mainPage.php" name="form-loggin">
	<div class="elemento">
	    <label><h2>Tutorías</h2></label>
            <label>Nombre de usuario</label><br><br>
            <input type="text" name="usuario" class="field" required />
        </div>
        <div class="elemento">
            <br><label>Contraseña</label><br><br>
            <input type="password" name="pswd" class="field" required />
	</div>
	<br>
        <button type="submit" name="login" class="boton_personalizado" value="login">Ingresar</button>
    </form>
</body>
</html>

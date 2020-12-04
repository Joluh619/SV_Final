<?php
echo "<link rel=stylesheet href=estilos.css>";
    $usuario = $_POST['usuario'];
    $passwd = $_POST['pswd'];
    //echo $usuario;
    //echo $passwd;
    $conn = mysqli_connect("db","root","Upslp-16","virtualesFinal");
    $query = "SELECT * FROM usuarios WHERE usuario = '$usuario' and pass = '$passwd' ";
    $result = mysqli_query($conn,$query);

    $rows=mysqli_num_rows($result);

    if($rows != 0){
	echo "<html>";
	  echo "<div class='caja'>";
        echo "Bienvenido $usuario";
	echo "</div>";
	echo "</html>";
    }else{

	  echo "<html>";
	  echo "<div class='caja'>";
        echo "Error, usuario o contraseña incorrectos.<br>Vuelva a intentarlo<br><br>";
        echo "<a href='index.php' class='boton_personalizado'>Regresar</a>";
        //header("Location:index.php");
	
	echo "</div>";
	echo "</html>";
        
    }
    $conn->close();
?>

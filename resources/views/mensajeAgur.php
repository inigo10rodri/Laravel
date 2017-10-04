<h1>Agur</h1>
<?php


//Isset te devuelve si existe el elemento indicado en este caso si se ha enviado el POST con el nombre correo
if (isset($_POST["correo"]) && isset($_POST["nombre"])) {
	echo $_POST['correo'].'<br>';
    echo $_POST['nombre'];
}

?>


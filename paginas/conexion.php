<?php 
$user = "root";
$pass = "";
$db = "timerepair";
/*define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS','');
define('DB_NAME', 'timerepair');*/

//////////CONEXION//////////

$conexion=mysqli_connect('localhost', $user, $pass, $db);

if (!mysqli_set_charset($conexion, "utf8")) {
    printf("Error cargando el conjunto de caracteres utf8: %s\n", mysqli_error($conexion));
    exit();
} else {
    mysqli_character_set_name($conexion);
}

if (!$conexion){
	echo "error al conectarse: <br>";
	echo mysqli_connect_errno() . "<BR>";
	echo mysqli_connect_error();
	exit;
}

?>
<?php
/**
 * Created by validacionformularios.
 * User: chalosalvador
 * Date: 28/7/17
 * Time: 17:14
 */

$email = $_POST['email'];

// hacen la conexion a la BDD
// Preguntan si existe el correo o no

if( $email == "duplicado@email.com") {
	echo json_encode(false);
} else {
	echo json_encode(true);
}
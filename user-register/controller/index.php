<?php

$host = 'localhost';
$user = 'root';
$db = 'nex_development_workshop';

$conection = mysqli_connect($host, $user, null, $db);

function create_user($name, $email, $password){

    $success = mysqli_query(
        $GLOBALS['conection'],
        'INSERT INTO users(name, email, password) VALUES("'.$name.'","'.$email.'","'.$password.'")'
    );

    mysqli_close($GLOBALS['conection']);

    return $success;

};

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $success = create_user($name, $email, $password);

    if($success) {

        echo 'Usuario ' .$name .' registrado con exito!';

    } else {

        echo 'Error al registrar al usuario';

    }

}

?>
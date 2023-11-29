<?php

// $usernames = ["juan", "pedro", "anthony"];

// // Mientras ponga los mismos nombres se va a seguir ejecutando
// do {
//     $username = readline("Por favor ingresa tu nombre de usuario: ");
// } while ( in_array($username, $usernames) ); {
//     echo "nombre aceptado";
// };

// echo "\n";


//reto do while

$lista_usuarios = ["Kisho", "Mirangod"];
$usuario_nuevo = readline("Ingrese un usuario nuevo para registrarlo: \n");

while(in_array($usuario_nuevo, $lista_usuarios)){ //pedira la informacion hasta que el usuario nuevo sea diferente a los que ya estan registrados
    $usuario_nuevo = readline("Usuario ya registrado, porfavor ingrese otro nombre: \n");
}
array_push($lista_usuarios, $usuario_nuevo); //esto seria para agregar el usuario nuevo al arreglo

var_dump($lista_usuarios); //para verificar si se agrego


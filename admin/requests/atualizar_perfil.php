<?php

function connectDatabase(){
    $server = 'localhost';
    $user = 'root';
    $password = '';
    $database = 'banco_de_dados';

    $connection = mysqli_connect($server, $user, $password, $database);

    if(!$connection){
        die('Conexão falhou:' . mysqli_connect_error());
    }

    return $connection;

    }


$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$password_confirm = $_POST['password_confirm'];
$about = $_POST['about'];
$image = $row['image'];




$query = "UPDATE users SET ";
$changed = false;

if(!empty($_FILES['imagem']['name'])){
    
}


if($password !== $password_confirm){
    $_SESSION['message'] = 'As senhas são iguais.';
}

if($password == ""){
    $query = "UPDATE users  SET name = '$name', 'email' = 
        '$email', 'about' = '$about' WHERE id = '$user_id'";
}

if($name !== $row['name']){
    $query .= "name = '$name', ";
    $changed = true;
}

if($email !== $row['email']){
    $query .= "email = '$email', ";
    $changed = true;
}

if($password !== ""){
    $query .= "password = '$password', ";
    $changed = true;
}

if($about !== $row['about']){
    $query .= "about = '$about', ";
    $changed = true;
}

$result = mysqli_query($connection,$query);


?>
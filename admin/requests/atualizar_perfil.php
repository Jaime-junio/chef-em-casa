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


// Verifica se o arquivo foi enviado via POST
if(isset($_FILES['imagem']) && $_FILES['imagem']['size'] > 0){
    // Insere a lógica para atualizar a imagem aqui
}

// Verifica se a senha e a confirmação da senha são iguais
if($password !== $password_confirm){
    $_SESSION['message'] = 'As senhas são iguais.';
}

// Verifica se a senha está vazia
if($password == ""){
    $query = "UPDATE users SET name = '$name', email = '$email', about = '$about' WHERE id = '$user_id'";
}

// Prepara a query de atualização
$query = "UPDATE users SET ";
$changed = false;

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

// Remove a última vírgula da query e adiciona a cláusula WHERE
if($changed){
    $query = substr($query, 0, -1); // Remove a última vírgula
    $query .= " WHERE id = '$user_id'"; // Adiciona a cláusula WHERE
    $result = mysqli_query($connection,$query);
}

//$result = mysqli_query($connection,$query);


?>
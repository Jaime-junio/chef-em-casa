<?php
// conectar com o banco de dados 
function conectDatabase(){
    $server = 'localhost';
    $user = 'root';
    $password = '';
    $database = 'new_bank';

    $conection = mysqli_connect($server,$user,$password,$database);

    if(!$conection){
        die('Conexao falhou'. mysqli_connect_error());
    }
    return $conection;
}
//conectDatabase();

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    $conection = conectDatabase();

    $name = mysqli_real_escape_string($conection,$name);
    $email = mysqli_real_escape_string($conection,$email);
    $password = mysqli_real_escape_string($conection,$password);

    $password_hashed = password_hash($password, PASSWORD_DEFAULT);

    $query = "INSERT INTO users (name,email,password) VALUES ('$name','$email','$password_hashed')";

    if(mysqli_query($conection,$query)){
        echo "Usuario cadastrado com sucesso";
    }else{
        echo "Erro ao cadastrar usuario: ". mysqli_error($conection);
    }
}
?>
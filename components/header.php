
<?php
function isActivepage($currentPage,$pageName){
    if($currentPage == $pageName){
        return "active";
    }
    return '';
}

?>




<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/css/main.css">
    <title> 
        <?php  $currentPage == 'index' ? 'Chef em Casa - Pagina Inicial': 'false';?>
        <?php  $currentPage == 'about' ? 'Chef em Casa - Sobre': 'false';?>
        <?php  $currentPage == 'contact' ? 'Chef em Casa - Contatos': 'false';?>

    </title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
 <div class="container-fluid">
    <img src="./src/img/logo.jpg" alt="logo" width="100px" style="border-radius: 50%;">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item <?=  isActivepage($currentPage,'index')?>">
          <a class="nav-link" aria-current="page" href="./index.php">Pagina inicial</a>
        </li>
        <li class="nav-item <?=  isActivepage($currentPage,'about')?>">
          <a class="nav-link" href="./about.php">Sobre</a>
        </li>
        <li class="nav-item <?=  isActivepage($currentPage,'contact')?>">
          <a class="nav-link" href="./contact.php">Contato</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
      <a class="btn btn-color1 my-2 my-sm-0 text-light" href="register.php">
        Cadastre-se
      </a>
    </form>
    </div>
  </div>
</nav>
<!DOCTYPE html>
<html lang="pt-BR">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <link rel="shortcut icon" href="imgs/icon_logo.png" type="image/x-icon">
        <title>BuscaCNPJ-CEP</title>
    </head>

    <body>
        <header class="bg-secondary text-white text-center sticky-top">

            
            <img src="imgs/icon_logo.png" alt="logo" class="logo">
            
            <h1>Cadastros e Consultas</h1>

            <div>
            <em class=""><?= isset($_SESSION['nome'])? $_SESSION['nome'] : '' ?><a href="logout.php" class="btn btn-outline-light ml-3">Sair</a></em>
            </div>

        </header>

        <main class="shadow-lg py-5 px-md-5 mb-5 bg-white text-dark rounded border">


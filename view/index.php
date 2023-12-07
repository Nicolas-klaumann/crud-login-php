<?php require_once("../controller/ControllerListar.php");?>
<!DOCTYPE html>
<html lang="pt-br">

<?php include("head.php");?>

<head>
<link rel="stylesheet" href="css/estiloIndex.css">
</head>

<body >
   <?php include("menu.php"); ?>
<div id="table">
    <form method="post" action="" id="form" name="form">
        <select id="filtroCampo" name="filtroCampo">
            <option value="nome">Nome</option>
            <option value="sobrenome">Sobrenome</option>
            <option value="dataNascimento">Data de Nascimento</option>
            <option value="email">Email</option>
            <option value="endereco">Endereço</option>
        </select>
        <input type="text" id="filtroValor" name="filtroValor" placeholder="Valor">
        <button type="submit" class="btn btn-primary" style="background-color: #ff0048; border-color: #ff0048" id="btnPesquisar">Pesquisar</button>
    </form>

    
    <table class="table table-hover">
    <thead class="thead-dark">
            <tr>
                <th>Nome</th>
                <th>Sobrenome</th>
                <th>Data de Nascimento</th>
                <th>Email</th>
                <th>Endereço</th>
                <th>Opções</th>
            </tr>
        </thead>
        <tbody>
            <?php
                new listarController($_POST);
            ?>

        </tbody>
    </table>
</div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</body>
</html>

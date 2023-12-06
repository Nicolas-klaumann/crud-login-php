<!DOCTYPE HTML>
<html>
<?php include("head.php") ?>

<head>
<link rel="stylesheet" href="css/estiloCad.css">
</head>

<body>
    <?php
        include("menu.php");
    ?>
    <div class="row">
        <form method="post" action="../controller/ControllerCadastro.php" id="form" name="form" class="col-10">
            <div class="form-group">
                <input class="form-control" type="text" id="nome" name="nome" placeholder="Nome do Cliente" required autofocus>
                <input class="form-control" type="text" id="sobrenome" name="sobrenome" placeholder="Sobrenome do Cliente" required>
                <input class="form-control" type="date" id="dataNascimento" name="dataNascimento" placeholder="Data de Nascimento" required>
                <input class="form-control" type="text" id="endereco" name="endereco" placeholder="Endereço do Cliente" required>
                <input class="form-control" type="text" id="email" name="email" placeholder="Email do Cliente" required>
                <input class="form-control" type="hidden" id="idUsuario" name="idUsuario" placeholder="idUsuario" value="<?php echo isset($_SESSION['idUsuario']) ? $_SESSION['idUsuario'] : ''; ?>">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success" id="cadastrar">Salvar</button>
                <a href="index.php" class="btn btn-outline-primary cancelar">Cancelar</a>
            </div>
        </form>
    </div>
</body>

</html>

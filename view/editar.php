<!DOCTYPE HTML>
<html>
<?php include("head.php") ?>

<head>
<link rel="stylesheet" href="css/estiloCad.css">
</head>

<body>
    <?php include("menu.php") ?>
    <?php require_once("../controller/ControllerEditar.php");?>
    <div class="row">
        <form method="post" action="../controller/ControllerEditar.php" id="form" name="form" class="col-10">
            <div class="form-group">
                <input class="form-control" type="text" id="nome" name="nome" value="<?php echo $editar->getNome(); ?>" required autofocus>
                <input class="form-control" type="text" id="sobrenome" name="sobrenome" value="<?php echo $editar->getSobrenome(); ?>" required>
                <input class="form-control" type="date" id="dataNascimento" name="dataNascimento" value="<?php echo $editar->getDataNascimento(); ?>" required>
                <input class="form-control" type="text" id="endereco" name="endereco" value="<?php echo $editar->getEndereco(); ?>" required>
                <input class="form-control" type="text" id="email" name="email" value="<?php echo $editar->getEmail(); ?>" required>
                <input class="form-control" type="hidden" id="idUsuario" name="idUsuario" value="<?php echo $editar->getIdUsuario(); ?>" required>
            </div>
            <div class="form-group">
                <input type="hidden" name="codigo" value="<?php echo $editar->getCodigo();?>">
                <button type="submit" class="btn btn-success" id="editar" name="submit" value="editar">Editar</button>
                <a href="index.php" class="btn btn-outline-primary cancelar" id="">Cancelar</a>
            </div>
        </form>
    </div>
</body>

</html>

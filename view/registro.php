<?php require_once "header.login.inc.php";

require_once "../controller/ControllerRegistraUsuario.php"; 
?>
<body>
 
        <!-- /.login-logo -->
    <div id="corpo-form-Cad" class="login-box-body" style="align-items: center; text-align:center">
      <h1>Cadastrar</h1>
      <form method="post">
        <input type="text" placeholder="Nome" name="nome" required>
        <input type="texte" placeholder="Sobrenome" name="sobrenome" required>
            
        <input type="email" placeholder="Email" name="email" required>
            
        <input type="password" placeholder="Senha" name="senha" required>
        <input type="password" placeholder="Confirmar Senha" name="confirsenha" required>
                       
        <input type="submit" value="Cadastrar">   
        <a href="login.php" class="text-center">Já possui uma conta? <strong>Entre</strong> agora mesmo!</a>                     
      </form>
    </div>
    <?php
    if(isset($_POST['nome'])) {
      $reg = new Registra();
    } 
        
    ?>
</body>

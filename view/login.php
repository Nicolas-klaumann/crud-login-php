<?php 
require_once "header.login.inc.php";
require_once "../controller/ControllerLogin.php";
?>

<body>
    <!-- /.login-logo -->
    <div id="corpo-form" class="login-box-body">
      <h1 style="text-shadow: black 0.1em 0.1em 0.1em;">CRUD | LOGIN</h1>        
        <form method="post">
                <input type="email" placeholder="Email" name="email" required>
                <input type="password" placeholder="Senha" name="senha" required>

                <input type="submit" value="Entrar">
                <a href="registro.php" class="text-center"><strong>Cadastre-se</strong> agora mesmo!</a>
        </form>
        <label id="el"><strong>Campos obrigatórios faltando!</strong></label>
    </div>

    <script>
        function valida(){
            if (form1.senha.value == "" || form1.email.value == "")
            {
            document.getElementById('el').style.display = 'block';
            alert('Campos obrigatórios faltando');
            event.returnValue = false;
            return false;
            }
        }
    </script>
</body>
<?php
    if(isset($_POST['email']))
        {
            $loga = new Login();
        } 
?>
<!-- /.login-box -->
<?php require_once "footer.login.inc.php";?>

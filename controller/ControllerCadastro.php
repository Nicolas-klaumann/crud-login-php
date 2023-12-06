<?php
require_once("../model/cadastroCliente.php");
session_start();

class cadastroController{

    private $cadastro;

    public function __construct(){
        $this->cadastro = new CadastroCliente();
        $this->incluir();
    }

    private function incluir(){
        $this->cadastro->setNome($_POST['nome']);
        $this->cadastro->setSobrenome($_POST['sobrenome']);
        $this->cadastro->setDataNascimento(date('Y-m-d',strtotime($_POST['dataNascimento'])));
        $this->cadastro->setEndereco($_POST['endereco']);
        $this->cadastro->setEmail($_POST['email']);
        $this->cadastro->setIdUsuario($_POST['idUsuario']);
        $result = $this->cadastro->incluir();
        if($result >= 1){
            echo "<script>alert('Cliente incluído com sucesso!');document.location='../view/index.php'</script>";
        }else{
            echo "<script>alert('Erro ao gravar cliente!, verifique se o cliente não está duplicado');history.back()</script>";
        }
    }
}

new cadastroController ();

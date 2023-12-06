<?php
require_once("../model/banco.php");
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

class editarController {
    private $editar;
    private $codigo;
    private $nome;
    private $sobrenome;
    private $dataNascimento;
    private $endereco;
    private $email;
    private $idUsuario;

    public function __construct($codigo){
        $this->editar = new Banco();
        $this->criarFormulario($codigo);
    }

    private function criarFormulario($codigo){
        $row = $this->editar->pesquisaCliente($codigo, $_SESSION['idUsuario']);
        $this->nome = $row['nome'];
        $this->sobrenome = $row['sobrenome'];
        $this->dataNascimento = $row['dataNascimento'];
        $this->endereco = $row['endereco'];
        $this->email = $row['email'];
        $this->idUsuario = $row['idUsuario'];
        $this->codigo = $row['codigo'];
    }

    public function editarFormulario($codigo, $nome, $sobrenome, $dataNascimento, $endereco, $email, $idUsuario){
        if($this->editar->updateCliente($codigo, $nome ,$sobrenome, $dataNascimento, $endereco, $email, $idUsuario) == TRUE){
            echo "<script>alert('Registro incluído com sucesso!');document.location='../view/index.php'</script>";
        }else{
            echo "<script>alert('Erro ao gravar registro!');history.back()</script>";
        }
    }

    public function getNome(){
        return $this->nome;
    }
    public function getSobrenome(){
        return $this->sobrenome;
    }
    public function getDataNascimento(){
        return $this->dataNascimento;
    }
    public function getEndereco(){
        return $this->endereco;
    }
    public function getEmail(){
        return $this->email;
    }
    public function getIdUsuario(){
        return $this->idUsuario;
    }
    public function getCodigo(){
        return $this->codigo;
    }
}
$codigo = filter_input(INPUT_GET, 'codigo');
$editar = new editarController($codigo);
if(isset($_POST['submit'])){
    $editar->editarFormulario($_POST['codigo'], $_POST['nome'],$_POST['sobrenome'],$_POST['dataNascimento'],$_POST['endereco'],$_POST['email'],$_POST['idUsuario']);
}
?>

<?php

require_once("../init.php");
class Banco{

    protected $mysqli;

    public function __construct(){
        try {
            $this->conexao();
        } catch (Exception $e) {
            Echo "Erro:".$e->getMessage();
        }
        
    }

    private function conexao(){
        $this->mysqli = new mysqli(HOST, USER , PASS, BANCO);
    }

    public function login($email,$senha){
        $usuario = [];
        $buscaUsuario = $this->mysqli->query("SELECT * FROM usuario WHERE email='$email' and senha='$senha'");       
        while($row = $buscaUsuario->fetch_array(MYSQLI_ASSOC)){
            $usuario[] = $row;
        }

        if ($usuario) {
            return $usuario[0];
        } else {
            return false;
        }
           
    }
    

    public function setUsuario($nome,$sobrenome,$login,$senha,$admin){
        $stmt = $this->mysqli->prepare("INSERT INTO usuario (`nome`, `sobrenome`, `email`, `senha`, `admin`) VALUES (?,?,?,?,?)");
        $stmt->bind_param("sssss",$nome,$sobrenome,$login,$senha,$admin);
         if( $stmt->execute() == TRUE){
            return true ;
        }else{
            return false;
        }
    }

    // CLIENTE
    public function setCliente($nome, $sobrenome, $dataNascimento, $endereco, $email, $idUsuario) {
        $stmt = $this->mysqli->prepare("INSERT INTO clientes (`nome`, `sobrenome`, `dataNascimento`, `endereco`, `email`, `idUsuario`) VALUES (?,?,?,?,?,?)");
        $stmt->bind_param("ssssss",$nome, $sobrenome, $dataNascimento, $endereco, $email, $idUsuario);
         if( $stmt->execute() == TRUE){
            return true ;
        }else{
            return false;
        }
    }

    public function getCliente($filtro = null) {
        $array = array();
        if ($filtro) {
            $campo = $filtro['filtroCampo'];
            $valor = $filtro['filtroValor'];
            $result = $this->mysqli->query("SELECT * FROM clientes WHERE `$campo` LIKE '%$valor%'");
        } else {
            $result = $this->mysqli->query("SELECT * FROM clientes");
        }
        while($row = $result->fetch_array(MYSQLI_ASSOC)){
            $array[] = $row;
        }
        return $array;
    }

    public function deleteCliente($codigio, $idUsuario = null) {
        if (!$idUsuario) {
            $idUsuario = $_SESSION['idUsuario'];
        }

        if($this->mysqli->query("DELETE FROM clientes WHERE codigo='$codigio' AND idUsuario='$idUsuario';")){
            return true;
        }else{
            return false;
        }
    }

    public function pesquisaCliente($codigo, $idUsuario = null){
        if (!$idUsuario) {
            $idUsuario = $_SESSION['idUsuario'];
        }

        $result = $this->mysqli->query("SELECT * FROM clientes WHERE codigo='$codigo' AND idUsuario='$idUsuario'");
        return $result->fetch_array(MYSQLI_ASSOC);
    }

    public function updateCliente($codigo, $nome, $sobrenome, $dataNascimento, $endereco, $email, $idUsuario){
        $stmt = $this->mysqli->prepare("UPDATE `clientes` SET `nome` = ?, `sobrenome`=?, `dataNascimento`=?, `endereco`=?, `email`=? WHERE `codigo` = ? AND `idUsuario` = ?");
        $stmt->bind_param("sssssss", $nome, $sobrenome, $dataNascimento, $endereco, $email, $codigo, $idUsuario);
        if($stmt->execute()==TRUE){
            return true;
        }else{
            return false;
        }
    }
}
?>

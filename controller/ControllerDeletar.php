<?php
require_once("../model/banco.php");
session_start();
class deleta {
    private $deleta;

    public function __construct($codigo){
        $this->deleta = new Banco();
        if($this->deleta->deleteCliente($codigo, $_SESSION['idUsuario'])){
            echo "<script>alert('Registro deletado com sucesso!');document.location='../view/index.php'</script>";
        }else{
            echo "<script>alert('Erro ao deletar registro!');history.back()</script>";
        }
    }
}
new deleta($_GET['codigo']);
?>

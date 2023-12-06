<?php
require_once("../model/banco.php");
class listarController{

    private $lista;

    public function __construct(){
        $this->lista = new Banco();
        $this->criarTabela();

    }

    private function criarTabela(){
        $row = $this->lista->getCliente();
        foreach ($row as $value) {
                echo "<tr>";
                echo "<th>".$value['nome'] ."</th>";
                echo "<td>".$value['sobrenome'] ."</td>";
                echo "<td>".$value['dataNascimento'] ."</td>";
                echo "<td>".$value['email'] ."</td>";
                echo "<td>".$value['endereco'] ."</td>";
                echo "<td><a class='btn btn-warning' href='editar.php?codigo=".$value['codigo']."'>Editar</a><a class='btn btn-danger' href='../controller/ControllerDeletar.php?codigo=".$value['codigo']."'>Excluir</a></td>";
                echo "</tr>";
        }
    }
}

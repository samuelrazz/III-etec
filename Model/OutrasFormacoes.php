<?php

class OutrasFormacoes{

    private $idoutrasFormacoes;
    private $idusuario;
    private $inicio;
    private $fim;
    private $descricao;

    public function getIdOutrasFormacoes(){
        return $this->idoutrasFormacoes = $id;
    }

    public function setIdOutrasFormacoes($id){
        $this->idoutrasFormacoes = $id;
    }

    public function getIdUsuario(){
        return $this->idusuario = $idusuario;
    }

    public function setIdUsuario($idusuario){
        $this->idusuario = $idusuario;
    }

    public function getInicio(){
        return $this->inicio = $inicio;
    }

    public function setInicio($inicio){
        $this->inicio = $inicio;
    }

    public function getFim(){
        return $this->fim = $fim;
    }

    public function setFim($fim){
        $this->fim = $fim;
    }

    public function getDescricao(){
        return $this->descricao = $descricao;
    }

    public function setDescricao($descricao){
        $this->descricao = $descricao;
    }

    public function inserirBD(){

        require_once 'ConexaoBD.php';
        $con = new ConexaoBD();
        $conn = $con->conectar();
        
        if($conn->connect_error){
            die("Connection Failed: " .$conn->connect_error);
        }

        $sql = "insert into outrasFormacoes(idusuario, inicio, fim, descricao) values ('".$idusuario."','".$inicio."','".$fim."','".$descricao."')";

        if($conn->query($sql) === true){
            $this->id = mysqli_insert_id($conn);
            $conn->close();
            return true;
        }else{
            $conn->close();
            return false;
        }


    }

    public function excluirBD($id){
        require_once 'ConexaoBD.php';
        $con = new ConexaoBD();
        $conn = $con->conectar();
        if($conn->connect_error){
            die("Connection Failed: ".$conn->connect_error);
        }

        $sql = "delete from outrasFormacoes where idoutrasformacoes = '".$id."'; ";

        if($conn->query($sql) === true){
            $conn->close();
            return true;
        }else{
            $conn->close();
            return false;
        }


    }

    public function listaOutrasFormacoes($idusuario){

        require_once 'ConexaoBD.php';

        $con = new ConexaoBD();
        $conn = $con->conectar();

        if($conn->connect_error){
            die("Connection Failed: ".$conn->connect_error);
        }

        $sql = "select * from outrasFormacoes where idusuario = '".idusuario."'; ";

        $resp = $conn->query($sql);

        $conn->close();

        return $resp;
    }
}

?>
<?php

class FormacaoAcademica{

    private $id;
    private $idusuario;
    private $inicio;
    private $fim;
    private $descricao;

    public function getID(){
        return $this->id = $id;
    }

    public function setID($id){
        $this->id = $id;
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

        require_once 'ConexaBD.php';

        $con = new ConexaoBD();

        $conn = $con->conectar();
        if($conn->connect_error){
            die("Connection Failed: " . $conn->connect_error);
        }

        $sql = "insert into formacaoAcademica(idusuario, inicio, fim, descricao) values (
                                               '".this->idusuario."','".$this->inicio."','".$this->fim."','".$this->descricao."' )";


        if($conn -> query($sql)===true){
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

        $sql = "delete from formacaoAcademica where idFormacaoAcademica = '".$id."'; ";

        if($conn -> query($sql) === true){
            $conn->close();
            return true;
        } else {
            $conn->close();
            return false;
        }


    }

    public function listaFormacoes($idusuario){
        require_once 'ConexaoBD.php';

        $con = new ConexaoBD();
        $conn = $con->conectar();
        if($conn->connect_error){
            die("Connection Failed: " .$conn->connect_error);
        }

        $sql = "select * from formacaoAcademica where idusuario = '".$idusuario."' ";

        $re = $conn->query($sql);
        $conn -> close();
        return $re;

    }

    

}
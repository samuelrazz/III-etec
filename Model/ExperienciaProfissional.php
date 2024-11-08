<?php

class ExperienciaProfissional{
    private $idexperienciaProfissional;
    private $idusuario;
    private $inicio;
    private $fim;
    private $empresa;
    private $descricao;

    public function getIdExperienciaProfissional(){
        return $this->idexperienciaProfissional = $id;
    }

    public function setIdExperienciaProfissional($id){
        $this->idexperienciaProfissional = $id;
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
        $this->fim = $fim;
    }

    public function setFim($fim){
        $this->fim = $fim;
    }

    public function getEmpresa(){
        return $this->empresa = $empresa;
    }

    public function setEmpresa($empresa){
        $this->empresa = $empresa;
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

        $sql = "insert into experienciaProfissional(idusuario, inicio, fim, empresa, descricao) values ('".$this->idusuario."','".$this->inicio."','".$this->fim."','".$this->empresa."','".$this->descricao."')";

        if($conn->query($sql) === true){
            $this->id = mysqli_insert_id($conn);
            $conn->close();
            return true;
        } else {
            $conn->close();
            return false;
        }

    }

    public function excluirBD($id){
        require_once 'ConexaoBD.php';

        $con = new ConexaoBD();

        $conn = $con->conectar();

        if($conn->connect_error){
            die("Connection Failed: " .$conn->connect_error);
        }

        $sql = "delete from experienciaProfissional where idexperienciaProfissional = '".$id."'; ";

        if($conn->query($sql) === true){
            $conn->close();
            return true;
        } else {
            $conn->close();
            return false;
        }

    }

    public function listaExperiencias($idusuario){

        require_once 'ConexaoBD.php';
        $con = new ConexaoBD();
        $conn = $con->conectar();

        if($conn->connect_error){
            die("Connection Failed: " . $conn->connect_error);
        }

        $sql = "select * from experienciaProfissional where idusuario = '".$idusuario."' ";

        $resp = $conn->query($sql);

        $conn -> close();

        return $resp;

    }
}
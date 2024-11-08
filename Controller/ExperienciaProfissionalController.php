<?php
if (!isset($_SESSION)) {
    session_start();
}

class ExperienciaProfissionalController{

    public function inserir($inicio, $fim, $empresa, $descricao, $idusuario){
        require_once "../Model/ExperienciaProfissional.php";

        $experiencia = new ExperienciaProfissional();
        $experiencia -> setInicio($inicio);
        $experiencia -> setFim($fim);
        $experiencia -> setEmpresa($empresa);
        $experiencia -> setDescricao($descricao);
        $experiencia -> setIdUsuario($idusuario);

        $result = $experiencia -> inserirBD();

        return $result;
        
    }

    public function remover($id){
        require_once '../Model/ExperienciaProfssional.php';

        $experiencia = new ExperienciaProfissional();
       
        $result = $experiencia->excluir($id);

        return $result;
        
    }

    public function gerarLista($idusuario){
        require_once '../Model/ExperienciaProfissional.php';

        $experiencia = new ExperienciaProfissional();

        return $result = $experiencia -> listaExperiencias($idusuario);
    }
}
?>
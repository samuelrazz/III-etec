<?php
if (!isset($_SESSION)) {
    session_start();
}


class OutrasFormacoesController{

    public function inserir($inicio, $fim, $descricao, $idusuario){
        require_once '../Model/OutrasFormacoes.php';

        $oFormacao = new OutrasFormacoes();
        $oFormacao -> setInicio($inicio);
        $oFormacao -> setFim($fim);
        $oFormacao -> setDescricao($descricao);
        $oFormacao -> setIdUsuario($idusuario);

        $r = $oFormacao -> inserirBD();

        return $r;
    }

    public function remover($id){
        require_once '../Model/OutrasFormacoes.php';

        $oFormacao = new OutrasFormacoes();

        $r = $oFormacao -> excluir($id);

        return $r;
    }

    public function gerarLista($idusuario){

        require_once '../Model/OutrasFormacoes.php';

        $oFormacao = new OutrasFormacoes();

        $results = $oFormacao -> listaFormacoes($idusuario);
        
        return $results;
    }
}

?>
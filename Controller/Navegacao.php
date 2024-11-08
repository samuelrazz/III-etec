<?php

switch ($_POST) {
 
 // Caso a variavel seja nula mostrar tela de login
    case isset($_POST[null]):
        include_once "View/login.php";
        break;
    
 // Primeiro Acesso
    case isset($_POST['btnPrimeiroAcesso']):
        include_once "../View/primeiroAcesso.php";
        break;

 // Cadastra Usuario
    case isset($_POST["btnCadastrar"]):

        require_once "../Controller/UsuarioController.php";
        $uController = new UsuarioController();

        if(($uController -> inserirBD($_POST["txtNome"],$_POST["txtCPF"],$_POST["txtEmail"],$_POST["txtSenha"])) != false){
            include_once "../View/cadastroRealizado.php";
        } else {
            include_once "../View/cadastroNaoRealizado.php";
        }
        break;

 // Adiciona formação
    case isset($_POST["btnAddFormacao"]):
        require_once "../Controller/FormacaoAcadController.php";
        require_once "../Model/Usuario.php";

        $fController = new FormacaoAcadController();

        if (($fController -> inserir(date("Y-m-d", strtotime($_POST['txtInicioFA'])),
                                    date("Y-m-d", strtotime($_POST['txtFimFA'])),
                                    $_POST["txtDescFA"],
                                    unserialize($_SESSION["Usuario"])->getID())) != false) {
            include_once "../View/cadastroRealizado.php";
        } else {
            include_once "../View/cadastroNaoRealizado.php";
        }
        break;

 // Exclui Formação
    case isset($_POST["btnExluirFA"]):
        require_once "../Controller/FormacaoAcadController.php";
        include_once "../Model/Usuario.php";

        $fController = new FormacaoAcadController();

        if(($fController -> remover($_POS["id"])) == true){
            include_once "../View/informacaoExcluida.php";
        } else {
            include_once "../View/operacaoNaoRealizada.php";
        }
        break;

 
 // Add Exp Profissional
    case isset($_POST["btnAddEP"]):
        require_once "../Controller/ExperienciaProfissionalController.php";
        include_once "../Model/ExperienciaProfissional.php";

        $epController = new ExperienciaProfissionalController();

        if (($fController -> inserir(date("Y-m-d", strtotime($_POST['txtInicioEP'])),
                                    date("Y-m-d", strtotime($_POST['txtFimEP'])),
                                    $_POST["txtEmpEP"],
                                    $_POST["txtDescEP"],
                                    unserialize($_SESSION["Usuario"])->getID())) != false) {
            include_once "../View/cadastroRealizado.php";
        } else {
            include_once "../View/cadastroNaoRealizado.php";
        }
        break;

 // Remover Exp Profissional
    case isset($_POST["btnExcluirEP"]):
        require_once "../Controller/ExperienciaProfissionalController.php";
        include_once "../Model/ExperienciaProfissional.php";

        $epController = new ExperienciaProfissionalController();

        if(($epController -> remover($_POST["idEP"]))== true){
            include_once "../View/informacaoExcluida.php";
        } else {
            include_once "../View/operacaoNaoRealizada.php";
        }
        break;
 
        

}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .w3-sidebar{
            width:150px;
        }
        h1, h2, h3, h4, h5, h6{
            font-family: "Montserrat", sans-serif;
        }
    </style>
    <title>Enlatados Juarez</title>
</head>

<body class="w3-light-grey">

    <?php
        include_once '../Controller/FormacaoAcadController.php';
        include_once '../Controller/OutrasFormacoesController.php';
        include_once '../Controller/ExperienciaProfissionalController.php';
        include_once '../Controller/Usuario.php';

        if (!isset($_SESSION)) {
            session_start();
        }
    ?>
    <!-- sidebar -->
    <nav class="w3-sidebar w3-bar-block w3-center w3-blue">
        <a href="#home" class="w3-bar-item w3-button w3-block n w3-cell w3-hover-light-grey w3-hover-text-cyan w3-text-light-grey">
            <i class="fa fa-home w3-xxlarge"></i>
            <p>HOME</p>
        </a>

        <a href="#dPessoais" class="w3-bar-item w3-button w3-block n w3-cell w3-hover-light-grey w3-hover-text-cyan w3-text-light-grey">
            <i class="fa fa-address-book-o w3-xxlarge"></i>
            <p>DADOS PESSOAIS</p>
        </a>

        <a href="#formacao" class="w3-bar-item w3-button w3-block n w3-cell w3-hover-light-grey w3-hover-text-cyan w3-text-light-grey">
            <i class="fa fa-mortar-board w3-xxlarge"></i>
            <p>FORMAÇÃO</p>
        </a>

        <a href="#oformacao" class="w3-bar-item w3-button w3-block n w3-cell w3-hover-light-grey w3-hover-text-cyan w3-text-light-grey">
            <i class="fa fa-mortar-board w3-xxlarge"></i>
            <p>OUTRAS FORMAÇÕES</p>
        </a>

        <a href="#eProfissional" class="w3-bar-item w3-button w3-block n w3-cell w3-hover-light-grey w3-hover-text-cyan w3-text-light-grey">
            <i class="fa fa-building w3-xxlarge"></i>
            <p>EXPERIÊNCIA PROFISSIONAL</p>
        </a>
    </nav>
    <br>
    <!-- lOGO -->
    <div class="w3-padding-large" id="main">
        <header class="w3-container w3-padding-32 w3-center" id="home">
            <h1>
                <img src="../Img/Enlatados.png" alt="Logo" width="75%" class="w3-image">
                <br>
            </h1>
            <a href="http://www.freepik.com" class="w3-text-cyan">Designed by brgfx / Freepik</a>
            <br>
            <h1 class="w3-text-cyan" style="font-size: 75px;">SISTEMA DE CURRICULOS</h1>
        </header>
    </div>
    <br>
    <!-- Dados Pessoais -->
    <div class="w3-padding-128 w3-content w3-text-grey" id="dPessoais">
        <h2 class="w3-text-cyan">Dados Pessoais</h2>
        <form action="" class="w3-row w3-light-grey w3-text-blue w3-margin" style="width:70%;">
            <input type="hidden" name="txtID" class="w3-input w3-border w3-round-large" value="">

            <!-- Nome Completo -->
                <div class="w3-row w3-section">
                    <div class="w3-col" style="width: 11%;">
                        <i class="w3-xxlarge fa fa-user"></i>
                    </div>
                    <div class="w3-rest">
                        <input type="text" name="txtNome" placeholder="Nome Completo" value="" class="w3-input w3-border w3-round-large">
                    </div>
                </div>
            <!-- CPF -->
                <div class="w3-row w3-section">
                    <div class="w3-col" style="width: 11%;">
                        <i class="w3-xxlarge fa fa-address-card"></i>
                    </div>
                    <div class="w3-rest">
                        <input type="text" name="txtCPF" placeholder="CPF" value="" class="w3-input w3-border w3-round-large">
                    </div>
                </div>
            <!-- Data Nascimento -->
                <div class="w3-row w3-section">
                    <div class="w3-col" style="width: 11%;">
                        <i class="w3-xxlarge fa fa-calendar"></i>
                    </div>
                    <div class="w3-rest">
                        <input type="text" name="txtData" placeholder="Data de Nascimento" value="" class="w3-input w3-border w3-round-large">
                    </div>
                </div>
            <!-- Email -->
                <div class="w3-row w3-section">
                    <div class="w3-col" style="width: 11%;">
                        <i class="w3-xxlarge fa fa-envelope"></i>
                    </div>
                    <div class="w3-rest">
                        <input type="text" name="txtEmail" placeholder="E-mail" value="" class="w3-input w3-border w3-round-large">
                    </div>
                </div>
            <!-- Botao -->
                <div class="w3-row w3-section">

                    <div class="w3-center">
                        <button class="w3-button w3-block w3-margin w3-blue w3-cell w3-round-large" style="width: 100%;">Atualizar</button>
                    </div>
                </div>
        </form>
    </div>
    <br>
    <!-- Formação Acadêmica -->
    <div class="w3-padding-128 w3-content w3-text-grey" id="formacao">
        <h2 class="w3-text-cyan">Formação</h2>
        <!-- formulario -->
        <form action="/Controller/Navegacao.php" method="post" class="w3-row w3-light-grey w3-text-blue w3-margin" style="width: 70%;">
            <div class="w3-row w3-center">
                <div class="w3-col" style="width:50%;">
                    Data Inicial
                </div>
                <div class="w3-res" style="">
                    Data Final
                </div>
            </div>

            <div class="w3-row w3-section">

                <div class="w3-row w3-section w3-col" style="width:45%;">
                    <div class="w3-col" style="width:15%;">
                        <i class="w3-xxlarge fa fa-calendar"></i>
                    </div>
                    <div class="w3-rest">
                        <input type="date" name="txtInicioFA" placeholder="" class="w3-input w3-border w3-round-large">
                    </div>
                </div>

                <div class="w3-row w3-section w3-rest">
                    <div class="w3-col w3-margin-left" style="width:13%;">
                        <i class="w3-xxlarge fa fa-calendar"></i>
                    </div>
                    <div class="w3-rest">
                        <input type="date" name="txtFimFA" placeholder="" class="w3-input w3-border w3-round-large">
                    </div>
                </div>
            </div>
                
            <div class="w3-row w3-section">
                <div class="w3-col" style="width:7%;">
                    <i class="w3-xxlarge fa fa-align-justify"></i>
                </div>
                <div class="w3-rest">
                    <input type="text" name="txtDescFA" placeholder="Descrição: Ex.: Técnico em Desenvolvimento de Sistemas - Centro Paula Souza" class="w3-input w3-border w3-round-large">
                </div>
            </div>

            <div class="w3-row w3-section">
                <div class="w3-center" style="">
                    <button name="btnAddFormacao" class="w3-button w3-block w3-blue w3-cell w3-round-large" style="width: 20%;">
                        <i class="w3-xxlarge fa fa-user-plus"></i>
                    </button>
                </div>
            </div>
        </form>
        
        <!-- Tabela Exibição -->
        <div class="w3-container">
            <table class="w3-table-all w3-centered">
                <thead>
                    <tr class="w3-center w3-blue">
                        <th>Início</th>
                        <th>Fim</th>
                        <th>Descrição</th>
                        <th>Apagar</th>                        
                    </tr>
                </thead>
                
                
            </table>
        </div>
    </div>  
    <br>
    <!-- Outras Formações -->
    <div class="w3-padding-128 w3-content w3-text-grey" id="oformacao">
        <h2 class="w3-text-cyan">Outras Formações</h2>
        <!-- formulario -->
        <form action="/Controller/Navegacao.php" method="post" class="w3-row w3-light-grey w3-text-blue w3-margin" style="width: 70%;">
            <div class="w3-row w3-center">
                <div class="w3-col" style="width:50%;">
                    Data Inicial
                </div>
                <div class="w3-res" style="">
                    Data Final
                </div>
            </div>

            <div class="w3-row w3-section">

                <div class="w3-row w3-section w3-col" style="width:45%;">
                    <div class="w3-col" style="width:15%;">
                        <i class="w3-xxlarge fa fa-calendar"></i>
                    </div>
                    <div class="w3-rest">
                        <input type="date" name="txtInicioOF" placeholder="" class="w3-input w3-border w3-round-large">
                    </div>
                </div>

                <div class="w3-row w3-section w3-rest">
                    <div class="w3-col w3-margin-left" style="width:13%;">
                        <i class="w3-xxlarge fa fa-calendar"></i>
                    </div>
                    <div class="w3-rest">
                        <input type="date" name="txtFimOF" placeholder="" class="w3-input w3-border w3-round-large">
                    </div>
                </div>
            </div>
                
            <div class="w3-row w3-section">
                <div class="w3-col" style="width:7%;">
                    <i class="w3-xxlarge fa fa-align-justify"></i>
                </div>
                <div class="w3-rest">
                    <input type="text" name="txtDescOF" placeholder="Descrição: Ex.: Curso de Inglês - Wise up" class="w3-input w3-border w3-round-large">
                </div>
            </div>

            <div class="w3-row w3-section">
                <div class="w3-center" style="">
                    <button name="btnAddOF" class="w3-button w3-block w3-blue w3-cell w3-round-large" style="width: 20%;">
                        <i class="w3-xxlarge fa fa-user-plus"></i>
                    </button>
                </div>
            </div>
        </form>
        
        <!-- Tabela Exibição -->
        <div class="w3-container">
            <table class="w3-table-all w3-centered">
                <thead>
                    <tr class="w3-center w3-blue">
                        <th>Início</th>
                        <th>Fim</th>
                        <th>Descrição</th>
                        <th>Apagar</th>                        
                    </tr>
                </thead>
                <?php
                    $ePro = new OutrasFormacoesController();
                    $result = $ePro -> gerarLista(unserialize($_SESSION['Usuario'])-> getIdOutrasFormacoes());if($result !=null)

                    while ($row = $result->fetch_object()) {
                        echo '<tr>';
                        echo '<td style="width:10%;">'.$row->inicio.'</td>';
                        echo '<td style="width:10%;">'.$row->fim.'</td>';
                        echo '<td style="width:75%;">'.$row->descricao.'</td>';
                        echo '<td style="width:5%;"><form action="/Controller/Navegacao.php" method="post"><input type="hidden" name="idOF" value="'.$row->idoutrasFormacoes.'"><button name="" class=""><i class=""></i></button></td></form>';
                        echo '</tr>';
                    }
                    
                ?>
                
            </table>
        </div>
    </div>  
    <br>
    <!-- Experiência Profissional -->
    <div class="w3-padding-128 w3-content w3-text-grey" id="eProfissional">
        <h2 class="w3-text-cyan">Experiência Profissional</h2>
        <!-- formulario -->
        <form action="/Controller/Navegacao.php" method="post" class="w3-row w3-light-grey w3-text-blue w3-margin" style="width: 70%;">
            <div class="w3-row w3-center">
                <div class="w3-col" style="width:50%;">
                    Data Inicial
                </div>
                <div class="w3-res" style="">
                    Data Final
                </div>
            </div>

            <div class="w3-row w3-section">

                <div class="w3-row w3-section w3-col" style="width:45%;">
                    <div class="w3-col" style="width:15%;">
                        <i class="w3-xxlarge fa fa-calendar"></i>
                    </div>
                    <div class="w3-rest">
                        <input type="date" name="txtInicioEP" placeholder="" class="w3-input w3-border w3-round-large">
                    </div>
                </div>

                <div class="w3-row w3-section w3-rest">
                    <div class="w3-col w3-margin-left" style="width:13%;">
                        <i class="w3-xxlarge fa fa-calendar"></i>
                    </div>
                    <div class="w3-rest">
                        <input type="date" name="txtFimEP" placeholder="" class="w3-input w3-border w3-round-large">
                    </div>
                </div>
            </div>
                
            <div class="w3-row w3-section">
                <div class="w3-col" style="width:7%;">
                    <i class="w3-xxlarge fa fa-align-justify"></i>
                </div>
                <div class="w3-rest">
                    <input type="text" name="txtEmpEP" placeholder="Centro Paula Souza" class="w3-input w3-border w3-round-large">
                </div>
            </div>

            <div class="w3-row w3-section">
                <div class="w3-col" style="width:7%;">
                    <i class="w3-xxlarge fa fa-align-justify"></i>
                </div>
                <div class="w3-rest">
                    <input type="text" name="txtDescEP" placeholder="Descrição: Ex.: Técnico em Desenvolvimento de Sistemas - Desenvolvimento de Páginas WEB" class="w3-input w3-border w3-round-large">
                </div>
            </div>

            <div class="w3-row w3-section">
                <div class="w3-center" style="">
                    <button name="btnAddEP" class="w3-button w3-block w3-blue w3-cell w3-round-large" style="width: 20%;">
                        <i class="w3-xxlarge fa fa-user-plus"></i>
                    </button>
                </div>
            </div>
        </form>
        
        <!-- Tabela Exibição -->
        <div class="w3-container">
            <table class="w3-table-all w3-centered">
                <thead>
                    <tr class="w3-center w3-blue">
                        <th>Início</th>
                        <th>Fim</th>
                        <th>Empresa</th>
                        <th>Descrição</th>
                        <th>Apagar</th>                        
                    </tr>
                </thead>
                    <?php
                        $ePro = new ExperienciaProfissionalController();
                        $result = $ePro -> gerarLista(unserialize($_SESSION['Usuario'])-> getIdExperienciaProfissional());
                        if($result !=null)

                        while ($row = $result->fetch_object()) {
                            echo '<tr>';
                            echo '<td style="width:10%;">'.$row->inicio.'</td>';
                            echo '<td style="width:10%;">'.$row->fim.'</td>';
                            echo '<td style="width:10%;">'.$row->empresa.'</td>';
                            echo '<td style="width:65%;">'.$row->descricao.'</td>';
                            echo '<td style="width:5%;"><form action="/Controller/Navegacao.php" method="post"><input type="hidden" name="idEP" value="'.$row->idexperienciaprofissional.'"><button name="" class=""><i class=""></i></button></td></form>';
                            echo '</tr>';

                        }   
                    ?>              
            </table>
        </div>
    </div>  
    <br>

</body>
</html>
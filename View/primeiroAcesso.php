<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-wesome/4.7.0/css/font-awesome.min.css">
    <title>Primeiro Acesso</title>
</head>
<body style="background-color: grey;">
    <form action="/Controller/Navegacao.php" style="width:60%;" class="w3-container w3-card-4 w3-light-grey w3-text-blue w3-margin w3-display-middle">
        <h2 class="w3-center">Primeiro Acesso</h2>
        <div class="w3-row w3-section">
            <div class="w3-col" style="width: 11%;">
                <i class="w3-xxlarge fa fa-user"></i>
            </div>
            <div class="w3-rest">
                <input type="text" placeholder="Nome Completo" name="txtNome" class="w3-input w3-border w3-round-large">
            </div>
        </div>

        <div class="w3-row w3-section">
            <div class="w3-col" style="width: 11%;">
                <i class="w3-xxlarge fa fa-drivers-license"></i>
            </div>
            <div class="w3-rest">
                <input type="text" placeholder="CPF: 99999999999" name="txtCPF" class="w3-input w3-border w3-round-large">
            </div>
        </div>

        <div class="w3-row w3-section">
            <div class="w3-col" style="width: 11%;">
                <i class="w3-xxlarge fa fa-envelope-o"></i>
            </div>
            <div class="w3-rest">
                <input type="text" placeholder="Email" name="txtEmail" class="w3-input w3-border w3-round-large">
            </div>
        </div>

        <div class="w3-row w3-section">
            <div class="w3-col" style="width: 11%;">
                <i class="w3-xxlarge fa fa-lock"></i>
            </div>
            <div class="w3-rest">
                <input type="password" placeholder="Senha" name="txtSenha" class="w3-input w3-border w3-round-large">
            </div>
        </div>

        <div class="w3-row w3-section">
            <div class="w3-center">
                <button name="btnCadastrar" class="w3-button w3-block w3-margin w3-blue w3-cell w3-round-large" style="width: 90%;">Cadastrar</button>
            </div>
        </div>

    </form>
</body>
</html>
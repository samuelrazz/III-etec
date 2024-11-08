<?php
Class Usuario{
    private $idusuario;
    private $nome;
    private $cpf;
    private $dataNascimento;
    private $email;
    private $senha;

    // ID
    public function getID(){
        return $this->idusuario = $idusuario;
    }

    public function setID($id){
        $this->id = $id;
    }

    // nome
    public function getNome(){
        return $this->nome = $nome;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    // cpf
    public function getCPF(){
        return $this->cpf = $cpf;
    }

    public function setCPF($cpf){
        $this->cpf = $cpf;
    }

    // dataNascimento
    public function getDataNascimento(){
        return $this->dataNascimento = $dataNascimento;
    }

    public function setDataNascimento($dataNascimento){
        $this->dataNascimento = $dataNascimento;
    }

    // email
    public function getEmail(){
        return $this->email = $email;
    }

    public function setEmail($email){
        $this->email = $email;
    }

    // senha
    public function getSenha(){
        return $this->senha = $senha;
    }

    public function setSenha($senha){
        $this->senha = $senha;
    }

    public function inserirBD(){

        // injeção de dependencia
        require_once 'ConexaoBD.php';

        //criar uma variavel da dependencia
        $con = new ConexaoBD();

        // usar a variavel para conectar ao Banco de dados
        $conn = $con -> conectar();

        // se nao conectar a conexão falhou
        if ($conn -> connect_error) {
            die("Connection Failed: ".$conn -> connect_error);
        }

        // query de inserção de dados no banco
        $sql = "insert into usuario(nome, cpf, email, senha) values ('".$this->nome."','".$this->cpf."','".$this->email."','".$this->senha."')";

        // se a conexao receber a query
        if ($conn -> query($sql) === true) {
            //acrescenta o id e insere os dados
            $this->id = mysqli_insert_id($id);
            // fecha a conexao
            $conn->close();
            return true;
        } else {
            $conn -> close();
            return false;
        }
    }

    

    public function carregarUsuario($cpf){
        /**
         *  1. injetar a dependencia
         *  2. criar a variavel da dependencia
         *  3. verificar se tem conexao com BD
         *  4. criar a query
         *  5. verificar a query
         *  6. fechar conexao
         */

        require_once 'ConexaoBD()';

        $con = new ConexaoBD();

        $conn = $con->conectar();
        if($conn ->connect_error){
            die("Connection Failed: ". $conn->connect_error);
        }

        $sql = "select * from usuario where cpf = ".$cpf ;

        $resp = $conn->query($sql);

        $r = $resp->fetch_object();
         
        if($r != null){
            $this->id = $idusuario;
            $this->nome = $nome;
            $this->email = $email;
            $this->cpf = $cpf;
            $this->dataNascimento = $dataNascimento;
            $this->senha = $senha;
            
            $conn -> close();

            return true;
        } else {
            $conn -> close();
            return false;
        }
    }

    public function atualizarBD(){

        require_once 'ConexarBD()';

        $con = new ConexaoBD();

        $conn = $con->conetar();

        if($conn -> connect_error){
            die("Connection Failed: " . $conn->connect_error);
        }

        $sql = "update usuario set nome = '".$this->nome"',
                                    cpf = '".$this->cpf"',
                                    dataNascimento = '".$this->dataNascimento"',
                                    email = '".$this->email"'
                                where idusuario = '" .this->id. "'";
        
        if($conn->query($sql) === true){
            $conn -> close();
            return true;
        }else{
            $conn -> close();
            return false;
        }

    }
}
<?php



class Connection
{
   public $server = "localhost";  // Servidor do banco de dados (normalmente "localhost" para servidores locais)
   public $username = "root";     // Nome de usuário do banco de dados
   public $password =  "";         // Senha do banco de dados
   public $db = "financeiro" ;   // Nome do banco de dados que estamos usando

  public function __construct() {
  $server;
   $username;
  $password;
   $db;
}

public function connect()
{
    // Criar uma conexão com o banco de dados usando MySQLi
    $connection = mysqli_connect($this->server, $this->username, $this->password, $this->db);

    $arr= [ $this -> server, $this -> username, $this->password, $this->db];
    //var_dump($arr);
 
    // Verificar se a conexão foi bem-sucedida
    if (mysqli_connect_errno()) {
        die("Falha na conexão com o banco de dados: " . mysqli_connect_error());
    }

    // Configurar o conjunto de caracteres para UTF-8 (opcional, mas recomendado)
    mysqli_set_charset($connection, "utf8");

    echo "conectado";
    // Retornar a conexão para ser usada em outras partes do projeto
    return $connection;

}
}

$dbb = new Connection();

$db = $dbb->connect();

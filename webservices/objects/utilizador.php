<?php
class Utilizador
{
    //ligação bd
    private $conn;
    private $table_name="Utilizador";

    //propriedades do objeto
    public $id;
    public $nickname;
    public $password;
    public $nome;
    public $pais;
    public $idade;

    public function __construct($db)
    {
        $this->conn = $db;
    }

    //criar opcao de leitura da informacao na BD
    public function read()
    {
        //criar query
        $query="Select id, nickname, password, nome, pais, idade FROM ".$this->table_name.";";
        $stmt=$this->conn->prepare($query);
        $stmt->execute();
        //devolver todos os valores registados na BD
        return $stmt;
    }

    public function readUser($User)
    {
        //criar query
        $query="Select * FROM ".$this->table_name." WHERE nickname Like '".$User."';";
        $stmt=$this->conn->prepare($query);
        $stmt->execute();
        //devolver todos os valores registados na BD
        return $stmt;
    }

    public function readAt($User, $Pass)
    {
        //criar query
        $query="Select * FROM ".$this->table_name." WHERE nickname Like '".$User."' AND password Like '".$Pass."';";
        $stmt=$this->conn->prepare($query);
        $stmt->execute();
        //devolver todos os valores registados na BD
        return $stmt;
    }

    function create()
    {
        //query para inserir informacao
        $query="INSERT INTO ".$this->table_name." SET nickname=:nickname,password=:password,nome=:nome,pais=:pais,idade=:idade";
        //preparar a query
        $stmt=$this->conn->prepare($query);
        //inicializar valores
        $this->nickname=htmlspecialchars(strip_tags($this->nickname));
        $this->password=htmlspecialchars(strip_tags($this->password));
        $this->nome=htmlspecialchars(strip_tags($this->nome));
        $this->pais=htmlspecialchars(strip_tags($this->pais));
        $this->idade=htmlspecialchars(strip_tags($this->idade));
        
        //atribuir valores
        $stmt->bindParam(":nickname",$this->nickname);
        $stmt->bindParam(":password",$this->password);
        $stmt->bindParam(":nome",$this->nome);
        $stmt->bindParam(":pais",$this->pais);
        $stmt->bindParam(":idade",$this->idade);

        //executar query
        if ($stmt->execute())
        {
            return true;
        }
        else
        {
            echo "<pre>";
            print_r($stmt->errorInfo());
            echo "</pre>";
        }
    }
}
?>
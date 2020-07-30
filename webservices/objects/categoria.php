<?php
class Utilizador
{
    //ligação bd
    private $conn;
    private $table_name="Utilizador";

    //propriedades do objeto
    public $id;
    public $nome;

    public function __construct($db)
    {
        $this->conn = $db;
    }

    //criar opcao de leitura da informacao na BD
    public function read()
    {
        //criar query
        $query="Select id, nome FROM ".$this->table_name.";";
        $stmt=$this->conn->prepare($query);
        $stmt->execute();
        //devolver todos os valores registados na BD
        return $stmt;
    }
}
?>
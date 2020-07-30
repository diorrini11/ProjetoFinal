<?php
class Pontuacao
{
    //ligação bd
    private $conn;
    private $table_name="Pontuacao";

    //propriedades do objeto
    public $idUtilizador;
    public $idJogo;
    public $pontuacao;

    public function __construct($db)
    {
        $this->conn = $db;
    }

    //criar opcao de leitura da informacao na BD
    public function read()
    {
        //criar query
        $query="Select idUtilizador, idJogo, pontuacao FROM ".$this->table_name.";";
        $stmt=$this->conn->prepare($query);
        $stmt->execute();
        //devolver todos os valores registados na BD
        return $stmt;
    }
}
?>
<?php
class Jogo_Pergunta
{
    //ligação bd
    private $conn;
    private $table_name="Jogo_Pergunta";

    //propriedades do objeto
    public $id;
    public $idJogo;
    public $idPergunta;

    public function __construct($db)
    {
        $this->conn = $db;
    }

    //criar opcao de leitura da informacao na BD
    public function read()
    {
        //criar query
        $query="Select id, idJogo, idPergunta FROM ".$this->table_name.";";
        $stmt=$this->conn->prepare($query);
        $stmt->execute();
        //devolver todos os valores registados na BD
        return $stmt;
    }
}
?>
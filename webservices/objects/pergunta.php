<?php
class Pergunta
{
    //ligação bd
    private $conn;
    private $table_name="Pergunta";

    //propriedades do objeto
    public $id;
    public $pergunta;
    public $tipo;
    public $idCategoria;
    public $resposta1;
    public $resposta2;
    public $resposta3;
    public $resposta4;

    public function __construct($db)
    {
        $this->conn = $db;
    }

    //criar opcao de leitura da informacao na BD
    public function read()
    {
        //criar query
        $query="Select pergunta FROM ".$this->table_name.";";
        $stmt=$this->conn->prepare($query);
        $stmt->execute();
        //devolver todos os valores registados na BD
        return $stmt;
    }

    public function readPergunta($Pergunta)
    {
        //criar query
        $query="Select * FROM ".$this->table_name." WHERE pergunta Like '".$Pergunta."';";
        $stmt=$this->conn->prepare($query);
        $stmt->execute();
        //devolver todos os valores registados na BD
        return $stmt;
    }

    function create()
    {
        //query para inserir informacao
        $query="INSERT INTO ".$this->table_name." SET pergunta=:pergunta,tipo=:tipo,idCategoria=:idCategoria,resposta1=:resposta1,resposta2=:resposta2,resposta3=:resposta3,resposta4=:resposta4";
        //preparar a query
        $stmt=$this->conn->prepare($query);
        //inicializar valores
        $this->pergunta=htmlspecialchars(strip_tags($this->pergunta));
        $this->tipo=htmlspecialchars(strip_tags($this->tipo));
        $this->idCategoria=htmlspecialchars(strip_tags($this->idCategoria));
        $this->resposta1=htmlspecialchars(strip_tags($this->resposta1));
        $this->resposta2=htmlspecialchars(strip_tags($this->resposta2));
        $this->resposta3=htmlspecialchars(strip_tags($this->resposta3));
        $this->resposta4=htmlspecialchars(strip_tags($this->resposta4));
        
        //atribuir valores
        $stmt->bindParam(":pergunta",$this->pergunta);
        $stmt->bindParam(":tipo",$this->tipo);
        $stmt->bindParam(":idCategoria",$this->idCategoria);
        $stmt->bindParam(":resposta1",$this->resposta1);
        $stmt->bindParam(":resposta2",$this->resposta2);
        $stmt->bindParam(":resposta3",$this->resposta3);
        $stmt->bindParam(":resposta4",$this->resposta4);

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
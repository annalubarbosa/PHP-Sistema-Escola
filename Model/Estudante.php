<?php

    class Estudante{

        private $conn;
        private $table = "estudantes";

        public function __construct($db){
            $this ->conn = $db;
        }

        //Listar todos os estudantes (READ)
        public function buscarTodos(){
            $query = "SELECT * FROM" . $this->table.  "ORDER BY nome ASC";
            $stmt = $this->conn->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);

        }

        //SALVAR NOVO ESTUDANTE (create)

        public function salvar($dados){
            $query = "INSERT INTO" .$this->table. "(nome, email, matricula) VALUES (:nome, :email, :matricula)";
            //:  serve para a segurança do banco de dados
            $stmt = $this->conn->prepare($query);

            //Blindar SQL 
            $stmt -> bindParam(':nome', $dados['nome']);
            $stmt -> bindParam(':email', $dados['email']);
            $stmt -> bindParam(':matricula', $dados['matricula']);

            return $stmt->execute();

        }
    }
?>
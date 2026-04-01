<?php
require_once './Model/Estudante.php';
class EstudanteController {
    private $db;
    private $estudante;

    public function __construct(){
        //Preparar conexão com Banco de Dados
        $database = new Database();
        $this->db = $database->getConnection();

        //instaciar a Model Estudante
        $this->estudante = new Estudante($this->db);
    }
}
?>
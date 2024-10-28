<?php
class AtualizarController {
    public function index() {
        require '../TESTE/views/atualizar.php';
    }

    public function atualizar() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Recebendo os dados do formulário
            $nome = $_POST['nome'];
            $idade = $_POST['idade'];
            $telefone = $_POST['telefone'];
            $email = $_POST['email'];
            $apelido = $_POST['apelido'];

            // Simular salvamento em banco de dados
            echo "<script>alert('Informações atualizadas com sucesso!');</script>";
        }
        $this->index();
    }
}

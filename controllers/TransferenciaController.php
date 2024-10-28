<?php
class TransferenciaController {
    public function index() {
        require '../TESTE/views/transferencia.php';
    }

    public function transferir() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $filial = $_POST['filial'];
            echo "<script>alert('Solicitação para $filial enviada com sucesso!');</script>";
        }
        $this->index();
    }
}

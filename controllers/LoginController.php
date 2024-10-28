<?php
require '../models/Usuario.php';

class LoginController {
    public function index() {
        require '../views/login.php';
    }

    public function autenticar() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'];
            $password = $_POST['password'];

            $usuario = new Usuario($username, $password);

            if ($usuario->autenticar()) {
                header('Location: /TESTE/public/index.php'); // Redireciona para o menu principal
                exit();
            } else {
                echo "<script>alert('Usuário ou senha incorretos!');</script>";
                $this->index();
            }
        }
    }
}

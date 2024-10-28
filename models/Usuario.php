<?php
class Usuario {
    private $username;
    private $password;

    public function __construct($username, $password) {
        $this->username = $username;
        $this->password = $password;
    }

    public function autenticar() {
        // Simular autenticação: Username "admin" e senha "1234"
        return $this->username === 'admin' && $this->password === '1234';
    }
}

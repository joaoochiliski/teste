<?php
class Ferias {
    public $data;
    public $dias;

    public function __construct($data, $dias) {
        $this->data = $data;
        $this->dias = $dias;
    }

    public function salvar() {
        // Simula salvamento em banco de dados ou qualquer processamento
        return true;
    }
}

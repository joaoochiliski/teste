<?php

class FeriasController {
    public function solicitar() {
        $data = $_POST['data'] ?? '';
        $dias = $_POST['dias'] ?? 0;

        echo "<h1>Férias solicitadas com sucesso!</h1>";
        echo "<p>Data de início: $data</p>";
        echo "<p>Duração: $dias dias</p>";
        echo '<a href="/TESTE/public/index.php">Voltar ao menu principal</a>';
    }
}

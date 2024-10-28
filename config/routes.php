<?php
require __DIR__ . '/../controllers/FeriasController.php';
require __DIR__ . '/../controllers/AtualizarController.php';
require __DIR__ . '/../controllers/PagamentoController.php';
require __DIR__ . '/../controllers/TransferenciaController.php';
require __DIR__ . '/../controllers/LoginController.php';

$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$path = str_replace('/TESTE/public', '', $path);

switch ($path) {
    case '/ferias':
        $controller = new FeriasController();
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            var_dump('Método solicitar() chamado'); // Verificação
            $controller->solicitar();
        } else {
            require __DIR__ . '/../views/ferias.php';
        }
        break;
    

    case '/atualizar':
        $controller = new AtualizarController();
        $controller->index();
        break;

    case '/pagamento':
        $controller = new PagamentoController();
        $controller->index();
        break;

    case '/transferencia':
        $controller = new TransferenciaController();
        $controller->index();
        break;

    case '/login':
        $controller = new LoginController();
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $controller->autenticar();
        } else {
            $controller->index();
        }
        break;

    default:
        require __DIR__ . '/../views/index.php';
        break;
}

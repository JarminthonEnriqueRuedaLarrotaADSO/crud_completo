<?php
require_once('config.php');
require_once('controlador/index.php');
if (isset($_GET['m'])) {
    $metodo = $_GET['m'];
    if (method_exists('modeloController', $metodo)) {
        $controller = new modeloController();
        $controller->{$metodo}();
    }
} else {
    $controller = new modeloController();
    $controller->index();
}

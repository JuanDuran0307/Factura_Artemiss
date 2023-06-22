<?php

header("content-Type: application/json");

require_once("../config/conectar.php");
require_once("../models/categorias.php");

$categoria = new Categoria();
$body = json_decode(file_get_contents("php://input"), true);

switch ($_GET["op"]){

    case "GetAll":
        $datos = $categoria->get_categoria();
        echo json_encode($datos);

    break;
}
?>
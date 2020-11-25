<?php
require_once '../models/Categoria.php';
if(count($_POST)){
  $categoria = new Categoria($_POST);
  if($categoria->create()){
    http_response_code(201); return;
  }
  http_response_code(301); return;
}

header('Content-Type: application/json');

if(isset($_GET['id']) && !empty($_GET['id'])){
  echo json_encode(Categoria::show($_GET['id'])); return;
}

echo json_encode(Categoria::show()); return;
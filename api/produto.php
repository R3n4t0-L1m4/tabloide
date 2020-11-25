<?php
require_once '../models/Produto.php';
if(count($_POST)){
  $produto = new Produto($_POST);
  if($produto->create()){
    http_response_code(201); return;
  }
  http_response_code(301); return;
}

header('Content-Type: application/json');

if(isset($_GET['id']) && !empty($_GET['id'])){
  echo json_encode(Produto::show($_GET['id'])); return;
}

echo json_encode(Produto::show()); return;
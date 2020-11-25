<?php
if(count($_POST)){
  require_once '../models/Produto.php';
  $produto = new Produto($_POST);
  if($produto->edit()){
    http_response_code(201); return;
  }
  http_response_code(301); return;
}
http_response_code(400); return;
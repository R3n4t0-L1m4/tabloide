<?php
if(count($_POST)){
  require_once '../models/Categoria.php';
  $categoria = new Categoria($_POST);
  if($categoria->edit()){
    http_response_code(201); return;
  }
  http_response_code(301); return;
}
http_response_code(400); return;
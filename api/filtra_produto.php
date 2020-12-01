<?php
require_once '../models/Produto.php';


header('Content-Type: application/json');

if(isset($_GET['pesquisa']) && !empty($_GET['pesquisa'])){
  echo json_encode(Produto::pesquisa($_GET['pesquisa'])); return;
}

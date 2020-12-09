<?php
require_once '../models/Produto.php';


header('Content-Type: application/json');

if(isset($_GET['s']) && !empty($_GET['s'])){
  echo json_encode(Produto::pesquisa($_GET['s'])); return;
}

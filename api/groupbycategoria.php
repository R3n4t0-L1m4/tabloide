<?php
require_once '../models/Produto.php';
header('Content-Type: application;json');
echo json_encode(Produto::groupByCategoria());
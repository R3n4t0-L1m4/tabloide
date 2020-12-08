<?php
// var_dump($_FILES); return;
require_once '../models/Produto.php';
if(count($_POST)){
  if(isset($_FILES['img'])){

    if($_FILES['img']['error'] == 0 && $_FILES['img']['size'] > 0){
      $arquivo_tmp = $_FILES['img']['tmp_name'];
      $nome = $_FILES['img']['name'];
      $extensao = pathinfo ( $nome, PATHINFO_EXTENSION );
      $extensao = strtolower ( $extensao );
      if ( strstr ( '.jpg;.jpeg;.png;', $extensao ) ) {
        $novoNome = uniqid ( time () ) . '.' . $extensao;
        $destino = '/img/' . $novoNome;
        if ( @move_uploaded_file ( $arquivo_tmp, $destino ) ) {
          //$destino ok
          $arr = $_POST;
          $arr['img'] = $destino;
          $produto = new Produto($arr);
          if($produto->create()){
            http_response_code(201); return;
          }
          http_response_code(301); return;
        }
      }else{
        //erro extensão
        http_response_code(301); return;
      }
    }else{
      http_response_code(301); return;
    }
  }


}

header('Content-Type: application/json');

if(isset($_GET['id']) && !empty($_GET['id'])){
  echo json_encode(Produto::show($_GET['id'])); return;
}

echo json_encode(Produto::show()); return;
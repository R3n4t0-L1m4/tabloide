<?php
require_once '../database/Connection.class.php';
class Produto{

  public $id;
  public $titulo;
  public $id_categoria;
  public $img;
  public $perpreco;
  public $porpreco;

  public function __construct($arr){
    $this->id = $arr['id'] ?? false;
    $this->titulo = $arr['titulo'] ?? false;
    $this->img = $arr['img'] ?? false;
    $this->depreco = $arr['depreco'] ?? false;
    $this->porpreco = $arr['porpreco'] ?? false;
     $this->id_cateoria = $arr['id_categoria'] ?? false;
  }

  public function edit(){
    if($this->id && $this->titulo && $this->img && $this->depreco && $this->porpreco && $this->id_categoria){
      $sql = "UPDATE produto
      SET titulo = :titulo,
      img = :img,
      depreco = :depreco,
      porpreco = :porpreco
      id_categoria = :id_categoria
      WHERE id = :id";
      $stmt = Connection::prepare($sql);
      $stmt->bindParam(':id', $this->id);
      $stmt->bindParam(':titulo', $this->titulo);
      $stmt->bindParam(':img', $this->img);
      $stmt->bindParam(':depreco', $this->depreco);
      $stmt->bindParam(':porpreco', $this->porpreco);
      $stmt->bindParam(':id_categoria', $this->id_categoria);
      return $stmt->execute();
    }
    return false;
  }


  public function create(){
    if($this->titulo && $this->depreco && $this->porpreco && $this->id_categoria){
      $this->img = $this->img ?? '/img/default.png';
      $sql = "INSERT INTO produto (titulo, img, depreco, porpreco, id_categoria)
      VALUES (:t, :i, :der, :por, :id_cat)";
      $stmt = Connection::prepare($sql);
      $stmt->bindParam(':t', $this->titulo);
      $stmt->bindParam(':i', $this->img);
      $stmt->bindParam(':der', $this->depreco);
      $stmt->bindParam(':por', $this->porpreco);
      $stmt->bindParam(':id_cat', $this->id_categoria);
      return $stmt->execute();
    }
    return false;
  }

  public static function show($id = null){
    $sql = "SELECT * FROM produto";
    $stmt = Connection::prepare($sql);
    if($id){
      $sql .= " WHERE id = :id";
      $stmt->bindParam(':id', $id);
      $stmt->execute();
      return $stmt->fetch();
    }
    $stmt->execute();
    return $stmt->fetchAll();
  }

  public static function groupByCategoria(){
    $sql = "SELECT
     b.nome,
     group_concat(a.id) as produtos FROM produto a
      LEFT JOIN categoria b ON b.id = a.id_categoria GROUP BY b.nome ORDER BY b.id";
    $stmt = Connection::prepare($sql);
    $stmt->execute();
    $results = $stmt->fetchAll();
    foreach($results as $r){
      $r->produtos = Connection::query("SELECT * FROM produto WHERE id in ($r->produtos)")->fetchAll();
    }
    return $results;
  }

}
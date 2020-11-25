<?php
require_once '../database/Connection.class.php';
class Categora{

  public $id;
  public $nome;

  public function __construct($arr){
    $this->id = $arr['id'] ?? false;
    $this->nome = $arr['nome'] ?? false;

  }

  public function edit(){
    if($this->id && $this->nome){
      $sql = "UPDATE categoria SET nome = :nome
      WHERE id = :id";
      $stmt = Connection::prepare($sql);
      $stmt->bindParam(':id', $this->id);
      $stmt->bindParam(':nome', $this->nome);
      return $stmt->execute();
    }
    return false;
  }


  public function create(){
    if($this->nome){
      $sql = "INSERT INTO categoria (nome) VALUES (:n)";
      $stmt = Connection::prepare($sql);
      $stmt->bindParam(':n', $this->nome);
      return $stmt->execute();
    }
    return false;
  }

  public static function show($id = null){
    $sql = "SELECT * FROM categoria";
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

}
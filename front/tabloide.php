<?php
  $resultados = null;
  if(count($_GET)){
    require_once '../database/Connection.class.php';
    $sql = "SELECT * FROM from produto WHERE id IN (:ids)";
    $stmt = Connection::prepare($sql);
    $ids = $GET['ids'];
    $str_ids = implode(",", $ids);
    $stmt->bindParam(':ids', $str_ids);
    $stmt->execute();
    $resultados = $stmt->fetchAll();
  }
?>
<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>TABLOIDE</title>
  <link rel="stylesheet" href="assets/css/bootstrap.css">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/tabloide.css">
</head>
<body>
  <div class="container">
    <!-- LINHA -->
    <div class="row">
          <?php
            if($resultados){
              foreach($resultados as $resultado){
               //
              }
            }
          ?>
          <div class="col-sm" id="item" >
            <img src="../img/por.png" alt="" id="item2">
            <h6>Achocolatado Nestlé Nescau Top Mesmo</h6>
            <hr>
            <img src="../img/nescau.png" alt="" id="logo"  >
            <h4 id="por">R$ 4,50</h4>
          </div>

          <div class="col-sm" id="item" >
            <img src="../img/por.png" alt="" id="item2">
            <h6>Achocolatado Nestlé Nescau Top Mesmo</h6>
            <hr>
            <img src="../img/nescau.png" alt="" id="logo"  >
            <h4 id="por">R$ 4,50</h4>
          </div>

          <div class="col-sm" id="item" >
            <img src="../img/por.png" alt="" id="item2">
            <h6>Achocolatado Nestlé Nescau Top Mesmo</h6>
            <hr>
            <img src="../img/nescau.png" alt="" id="logo"  >
            <h4 id="por">R$ 4,50</h4>
          </div>

          <div class="col-sm" id="item" >
            <img src="../img/por.png" alt="" id="item2">
            <h6>Achocolatado Nestlé Nescau Top Mesmo</h6>
            <hr>
            <img src="../img/nescau.png" alt="" id="logo"  >
            <h4 id="por">R$ 4,50</h4>
          </div>

          <div class="col-sm" id="item" >
            <img src="../img/por.png" alt="" id="item2">
            <h6>Achocolatado Nestlé Nescau Top Mesmo</h6>
            <hr>
            <img src="../img/nescau.png" alt="" id="logo"  >
            <h4 id="por">R$ 4,50</h4>
          </div>

    </div>
    <!-- linha -->
    <div class="row">

          <div class="col-sm" id="item" >
            <img src="../img/por.png" alt="" id="item2">
            <h6>Achocolatado Nestlé Nescau Top Mesmo</h6>
            <hr>
            <img src="../img/nescau.png" alt="" id="logo"  >
            <h4 id="por">R$ 4,50</h4>
          </div>

          <div class="col-sm" id="item" >
            <img src="../img/por.png" alt="" id="item2">
            <h6>Achocolatado Nestlé Nescau Top Mesmo</h6>
            <hr>
            <img src="../img/nescau.png" alt="" id="logo"  >
            <h4 id="por">R$ 4,50</h4>
          </div>

          <div class="col-sm" id="item" >
            <img src="../img/por.png" alt="" id="item2">
            <h6>Achocolatado Nestlé Nescau Top Mesmo</h6>
            <hr>
            <img src="../img/nescau.png" alt="" id="logo"  >
            <h4 id="por">R$ 4,50</h4>
          </div>

          <div class="col-sm" id="item" >
            <img src="../img/por.png" alt="" id="item2">
            <h6>Achocolatado Nestlé Nescau Top Mesmo</h6>
            <hr>
            <img src="../img/nescau.png" alt="" id="logo"  >
            <h4 id="por">R$ 4,50</h4>
          </div>

          <div class="col-sm" id="item" >
            <img src="../img/por.png" alt="" id="item2">
            <h6>Achocolatado Nestlé Nescau Top Mesmo</h6>
            <hr>
            <img src="../img/nescau.png" alt="" id="logo"  >
            <h4 id="por">R$ 4,50</h4>
          </div>

    </div>
    <!-- LINHA -->
    <div class="row">

          <div class="col-sm" id="item" >
            <img src="../img/por.png" alt="" id="item2">
            <h6>Achocolatado Nestlé Nescau Top Mesmo</h6>
            <hr>
            <img src="../img/nescau.png" alt="" id="logo"  >
            <h4 id="por">R$ 4,50</h4>
          </div>

          <div class="col-sm" id="item" >
            <img src="../img/por.png" alt="" id="item2">
            <h6>Achocolatado Nestlé Nescau Top Mesmo</h6>
            <hr>
            <img src="../img/nescau.png" alt="" id="logo"  >
            <h4 id="por">R$ 4,50</h4>
          </div>

          <div class="col-sm" id="item" >
            <img src="../img/por.png" alt="" id="item2">
            <h6>Achocolatado Nestlé Nescau Top Mesmo</h6>
            <hr>
            <img src="../img/nescau.png" alt="" id="logo"  >
            <h4 id="por">R$ 4,50</h4>
          </div>

          <div class="col-sm" id="item" >
            <img src="../img/por.png" alt="" id="item2">
            <h6>Achocolatado Nestlé Nescau Top Mesmo</h6>
            <hr>
            <img src="../img/nescau.png" alt="" id="logo"  >
            <h4 id="por">R$ 4,50</h4>
          </div>

          <div class="col-sm" id="item" >
            <img src="../img/por.png" alt="" id="item2">
            <h6>Achocolatado Nestlé Nescau Top Mesmo</h6>
            <hr>
            <img src="../img/nescau.png" alt="" id="logo"  >
            <h4 id="por">R$ 4,50</h4>
          </div>

    </div>
    <!-- LINHA -->
    <div class="row">

          <div class="col-sm" id="item" >
            <img src="../img/por.png" alt="" id="item2">
            <h6>Achocolatado Nestlé Nescau Top Mesmo</h6>
            <hr>
            <img src="../img/nescau.png" alt="" id="logo"  >
            <h4 id="por">R$ 4,50</h4>
          </div>

          <div class="col-sm" id="item" >
            <img src="../img/por.png" alt="" id="item2">
            <h6>Achocolatado Nestlé Nescau Top Mesmo</h6>
            <hr>
            <img src="../img/nescau.png" alt="" id="logo"  >
            <h4 id="por">R$ 4,50</h4>
          </div>

          <div class="col-sm" id="item" >
            <img src="../img/por.png" alt="" id="item2">
            <h6>Achocolatado Nestlé Nescau Top Mesmo</h6>
            <hr>
            <img src="../img/nescau.png" alt="" id="logo"  >
            <h4 id="por">R$ 4,50</h4>
          </div>

          <div class="col-sm" id="item" >
            <img src="../img/por.png" alt="" id="item2">
            <h6>Achocolatado Nestlé Nescau Top Mesmo</h6>
            <hr>
            <img src="../img/nescau.png" alt="" id="logo"  >
            <h4 id="por">R$ 4,50</h4>
          </div>

          <div class="col-sm" id="item" >
            <img src="../img/por.png" alt="" id="item2">
            <h6>Achocolatado Nestlé Nescau Top Mesmo</h6>
            <hr>
            <img src="../img/nescau.png" alt="" id="logo"  >
            <h4 id="por">R$ 4,50</h4>
          </div>

    </div>
    <!-- LINHA -->
    <div class="row">

          <div class="col-sm" id="item" >
            <img src="../img/por.png" alt="" id="item2">
            <h6>Achocolatado Nestlé Nescau Top Mesmo</h6>
            <hr>
            <img src="../img/nescau.png" alt="" id="logo"  >
            <h4 id="por">R$ 4,50</h4>
          </div>

          <div class="col-sm" id="item" >
            <img src="../img/por.png" alt="" id="item2">
            <h6>Achocolatado Nestlé Nescau Top Mesmo</h6>
            <hr>
            <img src="../img/nescau.png" alt="" id="logo"  >
            <h4 id="por">R$ 4,50</h4>
          </div>

          <div class="col-sm" id="item" >
            <img src="../img/por.png" alt="" id="item2">
            <h6>Achocolatado Nestlé Nescau Top Mesmo</h6>
            <hr>
            <img src="../img/nescau.png" alt="" id="logo"  >
            <h4 id="por">R$ 4,50</h4>
          </div>

          <div class="col-sm" id="item" >
            <img src="../img/por.png" alt="" id="item2">
            <h6>Achocolatado Nestlé Nescau Top Mesmo</h6>
            <hr>
            <img src="../img/nescau.png" alt="" id="logo"  >
            <h4 id="por">R$ 4,50</h4>
          </div>

          <div class="col-sm" id="item" >
            <img src="../img/por.png" alt="" id="item2">
            <h6>Achocolatado Nestlé Nescau Top Mesmo</h6>
            <hr>
            <img src="../img/nescau.png" alt="" id="logo"  >
            <h4 id="por">R$ 4,50</h4>
          </div>

    </div>

  </div><!-- container -->

</body>
</html>

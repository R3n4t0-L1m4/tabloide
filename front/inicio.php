<?php
var_dump($_GET);




?>


<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="assets/css/bootstrap.css">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/inicio.css">
  <script src="assets/js/inicio.js" charset="utf-8"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <title>Tela Inicial</title>
</head>
<body>
  <div class="container">
    <div class="">
      <header>
        <h3><a id="a" href="inicio.php">SELEÇÃO DE PRODUTOS</a></h3>
        <hr>
      </header>
    </div>


    <form action="inicio.php">

      <h4 data-toggle="collapse" data-target="#01">Categoria 01 <i class="fa fa-plus"></i></h4>
      <hr>

      <div id="01" class="collapse">
        <div class="row">
          <div class="col-sm" id="item" >
            <img src="../img/por.png" alt="" id="item2">
            <h6 id="tp">Achocolatado Nestlé Nescau Top Mesmo</h6>
            <hr>
            <img src="../img/nescau.png" alt="" id="logo"  >
            <h4 id="por">R$ 4,50</h4>
            <input id="checkbox" type="checkbox" id="01" name="01" value="01">
          </div>

          <div class="col-sm" id="item" >
            <img src="../img/por.png" alt="" id="item2">
            <h6 id="tp">Achocolatado Nestlé Nescau Top Mesmo</h6>
            <hr>
            <img src="../img/nescau.png" alt="" id="logo"  >
            <h4 id="por">R$ 4,50</h4>
            <input id="checkbox" type="checkbox" id="02" name="02" value="02">
          </div>

          <div class="col-sm" id="item" >
            <img src="../img/por.png" alt="" id="item2">
            <h6 id="tp">Achocolatado Nestlé Nescau Top Mesmo</h6>
            <hr>
            <img src="../img/nescau.png" alt="" id="logo"  >
            <h4 id="por">R$ 4,50</h4>
            <input id="checkbox" type="checkbox" id="03" name="03" value="03">
          </div>

          <div class="col-sm" id="item" >
            <img src="../img/por.png" alt="" id="item2">
            <h6 id="tp">Achocolatado Nestlé Nescau Top Mesmo</h6>
            <hr>
            <img src="../img/nescau.png" alt="" id="logo"  >
            <h4 id="por">R$ 4,50</h4>
            <input id="checkbox" type="checkbox" id="04" name="04" value="04">
          </div>

          <div class="col-sm" id="item" >
            <img src="../img/por.png" alt="" id="item2">
            <h6 id="tp">Achocolatado Nestlé Nescau Top Mesmo</h6>
            <hr>
            <img src="../img/nescau.png" alt="" id="logo"  >
            <h4 id="por">R$ 24,50</h4>
            <input id="checkbox" type="checkbox" id="05" name="05" value="05">
          </div>

        </div>
      </div>
      <!-- Linha -->
      <h4 data-toggle="collapse" data-target="#02">Categoria 02 <i class="fa fa-plus"></i></h4>
      <hr>

      <div id="02" class="collapse">
        <div class="row">
          <div class="col-sm" id="item" >
            <img src="../img/por.png" alt="" id="item2">
            <h6 id="tp">Achocolatado Nestlé Nescau Top Mesmo</h6>
            <hr>
            <img src="../img/nescau.png" alt="" id="logo"  >
            <h4 id="por">R$ 4,50</h4>
            <input id="checkbox" type="checkbox" id="01" name="01" value="06">
          </div>

          <div class="col-sm" id="item" >
            <img src="../img/por.png" alt="" id="item2">
            <h6 id="tp">Achocolatado Nestlé Nescau Top Mesmo</h6>
            <hr>
            <img src="../img/nescau.png" alt="" id="logo"  >
            <h4 id="por">R$ 4,50</h4>
            <input id="checkbox" type="checkbox" id="02" name="02" value="07">
          </div>

          <div class="col-sm" id="item" >
            <img src="../img/por.png" alt="" id="item2">
            <h6 id="tp">Achocolatado Nestlé Nescau Top Mesmo</h6>
            <hr>
            <img src="../img/nescau.png" alt="" id="logo"  >
            <h4 id="por">R$ 4,50</h4>
            <input id="checkbox" type="checkbox" id="03" name="03" value="08">
          </div>

          <div class="col-sm" id="item" >
            <img src="../img/por.png" alt="" id="item2">
            <h6 id="tp">Achocolatado Nestlé Nescau Top Mesmo</h6>
            <hr>
            <img src="../img/nescau.png" alt="" id="logo"  >
            <h4 id="por">R$ 4,50</h4>
            <input id="checkbox" type="checkbox" id="04" name="04" value="09">
          </div>

          <div class="col-sm" id="item" >
            <img src="../img/por.png" alt="" id="item2">
            <h6 id="tp">Achocolatado Nestlé Nescau Top Mesmo</h6>
            <hr>
            <img src="../img/nescau.png" alt="" id="logo"  >
            <h4 id="por">R$ 24,50</h4>
            <input id="checkbox" type="checkbox" id="05" name="05" value="10">
          </div>

        </div>
      </div>
      <!-- Linha -->
      <input  style="margin-top:10px"   type="submit" value="Finalizar" class="btn btn-primary">
      <input id="ct" style="margin-top:10px" value="0" type="button" class="btn btn-outline-primary">

    </form>


  </div>

</body>
</html>

<script type="text/javascript">
$('input[type=checkbox]').on('change', function () {
    document.getElementById('ct').value = $('input[type=checkbox]:checked').length;
    // arte
});

</script>

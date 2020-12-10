<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <?php include('../layouts/css.php'); ?>

  <title>:)</title>
</head>

<body>
  <?php include('../layouts/navbar.php'); ?>


<div class="container">
  <div class="col-md-6">
    <div class="form-group">
      <label for="nome_categoria">Nome da Categoria</label>
      <input type="text" class="form-control" id="nome_categoria">
    </div>

    <div class="form-group py-5">
      <button type="button" class="btn btn-primary">Cadastrar</button>
    </div>



    </div>
</div>

  <div class="container" id="content"></div>
  <script src="/front/assets/js/jquery-3.4.1.min.js"></script>
  <?php include('../layouts/scripts.php'); ?>



</body>

</html>
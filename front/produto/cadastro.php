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
  <form id="form" enctype="multipart/form-data" action="/api/produto.php" method="POST">
    <div class="form-group py-5">
      <label for="titulo">Título</label>
      <input type="text" class="form-control" id="titulo" name="titulo">
    </div>
    <div class="form-group">
      <label for="id_categoria">Categoria</label>
      <select class="form-control" id="id_categoria" name="id_categoria">
        <option>Selecione</option>
      </select>
    </div>

    <div class="form-group">
      <label for="depreco">Depreço</label>
      <input type="number" class="form-control" id="depreco" name="depreco">
    </div>

    <div class="form-group">
      <label for="perpreco">Perpreço</label>
      <input type="number" class="form-control" id="perpreco" name="perpreco">
    </div>

    <div class="form-group">
      <label for="img">Imagem do Produto (Formato - PNG)</label>
      <input type="file" class="form-control-file" id="img" name="img">
    </div>

    <button type="submit" class="btn btn-primary" id="submit">Cadastrar</button>


  </form>
</div>

  <div class="container" id="content"></div>
  <script src="/front/assets/js/jquery-3.4.1.min.js"></script>
  <?php include('../layouts/scripts.php'); ?>
</body>

</html>
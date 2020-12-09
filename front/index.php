<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php include('layouts/css.php'); ?>

  <title>:)</title>
</head>
<body>
  <?php include('layouts/navbar.php'); ?>


  <div class="container">
    <div class="row">
      <h3>topo - Informações sobre a empresa</h3>
    </div>
    <div class="row" id="content"></div>
    <div class="row"><h3>rodapé - outras Informações</h3></div>

  </div>
  <?php include('layouts/scripts.php'); ?>

  <script>
    function getItems(){
      $('#content').html('');
      $.get('/api/produto.php', produtos => {
        $.each(produtos, (chave, produto) => {
          let quadro = $(`
            <div class="col-sm">

              <h6 id="tp">${produto.titulo}</h6>
              <hr>
              <img src="${produto.img}" alt="">
              <h4 id="por">R$ ${produto.depreco}</h4>
            </div>
          `);
          $('#content').append(quadro);
        });
      });
    }

    $(document).ready(()=>{
      getItems();
    });
  </script>


</body>
</html>

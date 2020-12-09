<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

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

  <script src="front/assets/js/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"
    integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js"
    integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>

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

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
  <h3>Listagem</h3>
</div>

  <div class="container" id="content">
    <input list="produtos" id="pdi" autocomplete="off">
    <datalist id="produtos"></datalist>
  </div>

  <?php include('../layouts/scripts.php'); ?>
  <script>
    function getItems(s=null){
      if(s){
        $.get('/api/filtra_produto.php', s, resultados => {
          console.log(resultados);
          $('#produtos').html('');
          $.each(resultados, (k,v)=>{
            $('#produtos').append($(`
              <option value="${v.titulo}">
            `));
          });
        });
      }
    }
    $(document).ready(()=>{
      $('#pdi').on('keyup', e => {
        e.preventDefault();
        getItems({s: $('#pdi').val()});
      });
    });
  </script>
</body>

</html>
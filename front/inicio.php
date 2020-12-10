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

    <div class="container" id="alvo"></div>
  <input  style="margin-top:10px"   type="submit" value="Finalizar" class="btn btn-primary">
      <input id="count" style="margin-top:10px" value="0" type="button" class="btn btn-outline-primary">




  </div>

</body>
</html>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="assets/js/inicio.js" charset="utf-8"></script>

<script type="text/javascript">
function getItemsByCategoria(){
  $.get('/api/groupbycategoria.php', data => {
    console.log(data);
    $.each(data, (k,v)=>{
      let title_categoria = $(`<div class="row"><h4 data-toggle="collapse" data-target="#${v.id_categoria}">${v.nome} <i class="fa fa-plus"></i></h4>
      <hr></div>`);
      let row_categoria = $(`<div class="row" id="${v.id_categoria}" class="collapse"></div>`);
      $.each(v.produtos, (a,b)=>{
        $(row_categoria).append($(
          `<div class="col-sm-2 col-md-2 item" >
            <img src="../img/por.png" alt="" id="" class="item2">
            <h6 id="tp">${b.titulo}</h6>
            <hr>
            <img src="${b.img}" alt="" id="logo"  >
            <h4 id="por">R$ ${b.porpreco}</h4>
            <input id="checkbox" type="checkbox" id="${b.id}" name="${b.id}" value="${b.id}">
          </div>`
        ));
      });
      $('#alvo').append(title_categoria);
      $('#alvo').append(row_categoria);
    });
  });
  $('input[type=checkbox]').on('change', function () {
    document.getElementById('ct').value = $('input[type=checkbox]:checked').length;
});
}

$(document).ready(()=>{
  getItemsByCategoria();
  /*
    {produtos: [1,2,3,4]}
  */
})


</script>

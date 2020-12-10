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
  <table id="example" class="table table-striped table-bordered" style="width:100%">
  <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>

        </tr>
    </thead>
  </table>
</div>

  <div class="container" id="content">

  </div>

  <?php include('../layouts/scripts.php'); ?>
  <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>

  <script>
    $(document).ready(function() {
    $('#example').DataTable( {
        "processing": true,
        "serverSide": true,
        "ajax": "/api/categoria_processing.php"
    } );
} );
  </script>
</body>

</html>
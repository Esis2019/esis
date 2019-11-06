<?php
    require_once "../../models/enlaces.php";
    require_once "../../controllers/controller.php";
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>RSU | ADMIN</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php include "model_admin/include_css.php"; ?>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
<?php include "model_admin/navbar.php"; ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->

  <?php include "model_admin/menu_container.php";
        $pagina = new MvcController;
        $pagina -> enlacesPaginasController();
    ?>


  <!-- /.content-wrapper -->
  <?php include "model_admin/footer.php"; ?>
  <!-- /.control-sidebar -->

</div>
<!-- ./wrapper -->

<?php include "model_admin/include_js.php"; ?>

</body>
</html>

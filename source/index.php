
<?php
  require_once 'model.php';
  require_once 'view.php';
  require_once 'controller.php';

  $model = new Model();
  $controller = new Controller($model);
  $view = new View($model);
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Hello, MVC!</title>
  </head>
  <body>
    <?php echo $data; ?>
  </body>
</html>

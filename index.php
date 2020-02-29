<?php
  include_once 'includes/autoload.php';
?>
<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <title>PDO</title>
  </head>

  <body>
    <h2>Database Connection</h2>
    <?php
      $dbh = new Dbh('localhost:33067', 'drupal', '123456', 'oop', 'utf8');
      $dbh->connect();
    ?>
  </body>

</html>
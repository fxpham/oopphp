<?php
  session_start();
?>
<!DOCTYPE html>
<html>
  <body>

    <?php
    // Show all session variable values
    // print_r($_SESSION);
    if (isset($_SESSION['gio_hang'])) {
      foreach ($_SESSION['gio_hang'] as $masp => $sp) {
        echo $sp['ten'] . ' --- ' . $sp['so_luong'] . ' --- ' . $sp['so_luong'] * 1000 .'<br>';
      }
    }
    else {
      echo "Khong co san pham";
    }
    ?>

  </body>
</html>
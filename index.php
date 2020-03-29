<?php
  // Start the session
  session_start();
?>
<!DOCTYPE html>
<html>
  <body>

  <?php
    // Set session variables
    $_SESSION['gio_hang'] = [
      '1' => [
        'ten' => "Hoa",
        'so_luong' => 3,
      ],
      '2' => [
        'ten' => "Ao",
        'so_luong' => 1,
      ],
    ];
    // $_SESSION["favcolor"] = "green";
    // $_SESSION["favanimal"] = "cat";
    echo "Session variables are set.<br>";
    // Xem các giá trị được lưu trong session.
    // print_r($_SESSION);
  ?>

  </body>
</html>
<?php
  session_start();
?>
<!DOCTYPE html>
<html>
  <body>

    <?php
    // Show all session variable values
    // print_r($_SESSION);

    // Echo session variables that were set on previous page
    // echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";
    // echo "Favorite animal is " . $_SESSION["favanimal"] . ".";

    // remove all session variables
    session_unset();

    // destroy the session
    // session_destroy();
    ?>

  </body>
</html>
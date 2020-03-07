<?php
spl_autoload_register('autoLoader');

function autoLoader ($className) {
  $path = '../Classes/';
  $extension = '.class.php';
  require_once $path . $className . $extension;
}
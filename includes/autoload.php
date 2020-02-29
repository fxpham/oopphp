<?php
spl_autoload_register('autoLoader');

function autoLoader($className) {
  $path = './classes/';
  $extension = '.class.php';
  require_once $path . $className . $extension;
}
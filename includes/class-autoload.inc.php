<?php
spl_autoload_register('myAutoLoader');

function myAutoLoader ($className) {
  $path = '../classes/';
  $extension = '.class.php';
  require_once $path . $className . $extension;
}
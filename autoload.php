<?php
spl_autoload_register('autoLoader');

function autoLoader ($className) {
  $path = './Model/';
  $extension = '.php';
  require_once $path . $className . $extension;
}
<?php

function __autoload($class_name) {
  $file = ABSPATH . '/classes/class-' . $class_name . '.php';

  if ( ! file_exists( $file ) ) {
    require_once ABSPATH . '/includes/404.php';
    return;
  }

  ?>

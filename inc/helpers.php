<?php

function redirect_to( $path ) {
  header('Location: ' . SITE_URL . '/' . $path);
  die();
}

function generate_hash($action){
  return md5($action);
}

function check_hash($action, $hash) {
  if (generate_hash($action) === $hash) {
    return true;
  }
  return false;
}

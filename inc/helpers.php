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

function is_logged_in() {
  return isset($_SESSION['user']) && $_SESSION['user'] === ADMIN_USER;
}

function login($username, $password) {
  if($_POST['username'] === ADMIN_USER && $_POST['password'] === ADMIN_PASS) {
    $_SESSION['user'] = ADMIN_USER;
    return true;
  }
  return false;
}

function logout() {
  unset($_SESSION['user'] );
  session_destroy();
  redirect_to('index.php');
}

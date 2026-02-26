<?php

function redirect_to( $path ) {
  header('Location: ' . SITE_URL . '/' . $path);
  die();
}

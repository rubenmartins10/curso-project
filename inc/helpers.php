<?php

function redirect_to( $path ) {
  header('Localtion:' . SITE_URL . '/' . $path);
  die();
}

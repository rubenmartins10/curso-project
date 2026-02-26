<?php

error_reporting( E_ALL );
ini_set( 'display_errors', 1 );

setlocale(LC_TIME, 'pt_PT', 'pt_PT.utf-8', 'pt_PT.utf-8', 'portuguese');
date_default_timezone_set('Europe/Lisbon');

require('inc/posts.php');

//Connection to database
$host = '127.0.0.1';
$user = 'root';
$password = '';
$database = 'microcms';
$port = '3307';


$app_db = mysqli_connect( $host, $user, $password, $database, $port);
if ( $app_db === false) {
  die('Error connecting to database');
}

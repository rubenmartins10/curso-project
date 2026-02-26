<?php

function get_all_posts() {
	global $app_db;
	$result = mysqli_query($app_db, "SELECT * FROM posts");
	if ( ! $result ) {
		die(mysqli_error( $app_db ) );
	}
	return $all_posts = mysqli_fetch_all( $result, MYSQLI_ASSOC);
}

function insert_post( $title, $excerpt, $content ) {
	global $app_db;

	$published_on = date('Y-m-d H:i:s');

	$safe_title = mysqli_real_escape_string($app_db, $title);
	$safe_excerpt = mysqli_real_escape_string($app_db, $excerpt);
	$safe_content = mysqli_real_escape_string($app_db, $content);

	$query = "INSERT INTO posts
	 ( title, excerpt, content, published_on)
		VALUES ( '$safe_title', '$safe_excerpt', '$safe_content', '$published_on' )";

	$result = mysqli_query( $app_db, $query);
	if ( ! $result ) {
		die(mysqli_error( $app_db ) );
	}
}


function get_post ( $post_id) {
	global $app_db;
	$query = "SELECT * FROM posts WHERE id = " . $_GET['view'];
	$result = mysqli_query( $app_db, $query);
	if ( ! $result ) {
		die(mysqli_error( $app_db ) );
	}
	return mysqli_fetch_assoc( $result );
}

function delete_post($id) {
	global $app_db;

	$result = mysqli_query($app_db, "DELETE FROM posts WHERE id=$id");
	if ( ! $result ) {
		die(mysqli_error( $app_db ));
	}
}

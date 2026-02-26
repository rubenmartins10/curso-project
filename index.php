<?php require('init.php'); ?>
<?php

if ( isset( $_GET['delete-post'])) {
	$id = $_GET['delete-post'];
	delete_post($id);
	redirect_to('index.php');
	die();
}
$all_posts = get_all_posts();

$post_found = false;
if ( isset( $_GET['view'])) {
	$post_found = get_post($_GET['view']);
	if ( $post_found ) {
		$all_posts = [ $post_found ];
	}
}

function get_post_1_title() {
	$post_1_title = 'Lorem ipsum dolor sit amet';
	return $post_1_title;
}

function get_post_1_content() {
	$post_1_content = 'Mauris lobortis, turpis sit amet pulvinar hendrerit, elit ligula accumsan ligula, ut interdum ipsum ex in sapien. Morbi et ullamcorper orci, in egestas risus. Sed rhoncus a odio quis fringilla. Nunc sodales risus at turpis venenatis, ac accumsan ex porttitor. Fusce porttitor metus sit amet mi aliquet, quis interdum purus feugiat. ';
	return $post_1_content;
}

function get_post_2_title() {
	$post_2_title = 'Mauris lobortis, turpis sit amet pulvinar hendrerit';
	return $post_2_title;
}

function get_post_2_content() {
	$post_2_content = 'Maecenas malesuada malesuada eleifend. Nam lobortis risus in est sollicitudin, ut egestas nibh ultricies. Morbi tincidunt rhoncus velit, ac aliquet lectus rhoncus vel. Aenean hendrerit sapien consectetur tempus sagittis. ';
	return $post_2_content;
}
?>
<?php require('templates/header.php'); ?>
<?php if(isset($_GET['success'])): ?>
	<div class="success">
		Post has been created with sucess!
	</div>
<?php endif; ?>
<div id="content" >
	<div class="posts">
    <?php foreach($all_posts as $post): ?>
      <article class="post">
        <header>
          <h2 class="post-title">
            <a href="?view=<?php echo $post['id']; ?>"><?php echo $post['title']; ?></a>
          </h2>
        </header>
        <div class="post-content">
          <?php if($post_found): ?>
            <?php echo $post['content']; ?>
          <?php else: ?>
            <?php echo $post['excerpt']; ?>
          <?php endif; ?>
        </div>
        <footer>
          <span class="post-date">
            Published on:
            <?php
            $timestamp = strtotime($post['published_on']);
            $formatter = new IntlDateFormatter('pt_PT', IntlDateFormatter::NONE, IntlDateFormatter::NONE, null, null, 'dd MMM yyyy');
            echo $formatter->format($timestamp);
            ?>
          </span>
					<div class="delete-post">
						<a href="?delete-post=<?php echo $post['id']; ?>">Delete post.</a>
					</div>
        </footer>
      </article>
    <?php endforeach; ?>
	</div>
<?php require('templates/footer.php'); ?>

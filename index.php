<?php require('init.php'); ?>
<?php
$all_posts = [
	[
		'id' => 1,
		'title' => 'Lorem ipsum dolor sit amet',
		'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vitae pulvinar turpis',
		'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vitae pulvinar turpis. Nam ut arcu tellus. Morbi sit amet elit lacinia, tincidunt leo a, posuere mi. Mauris nec odio at quam lacinia consequat. Fusce mattis orci ex, eget accumsan neque vehicula et. Vivamus consectetur tempor lacus, in tincidunt massa rutrum ut. Pellentesque augue felis, iaculis eu interdum et, semper eu purus. Vestibulum a viverra justo.',
		'published_on' => '2018-01-11 10:15:00',
	],
	[
		'id' => 2,
		'title' => 'Nunc eget enim vulputate',
		'excerpt' => 'Integer placerat hendrerit pharetra. Nunc eget enim vulputate, efficitur dolor pretium',
		'content' => 'Integer placerat hendrerit pharetra. Nunc eget enim vulputate, efficitur dolor pretium, pharetra nulla. Proin mattis aliquam sem. Morbi vel mi ac magna consequat tempus vitae eget diam. Aliquam ac sapien a tortor rutrum faucibus nec nec urna. Ut et nisl magna. Vivamus elit risus, rhoncus vitae elit suscipit, porta pulvinar justo. Aliquam sodales urna eu scelerisque ultrices. Fusce et neque id risus gravida vestibulum a et urna. Curabitur aliquam accumsan leo, pharetra tempus velit condimentum et. Donec dapibus faucibus lorem a tincidunt. Donec ultricies id metus et aliquam. Vestibulum dapibus magna nec elit ultrices, ornare pretium nisi dictum.',
		'published_on' => '2018-01-11 10:15:00',
	],
];

$post_found = false;
if ( isset( $_GET['view'])) {
  foreach ( $all_posts as $post) {
    if ($post['id'] == $_GET['view']){
      $post_found = true;
      $all_posts = [ $post];
    }
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
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Micro CMS</title>
	<link rel="stylesheet" href="assets/style.css"></head>
<body>

<nav id="site-navigation" role="navigation" class="row row-center">
	<div class="column">
		<h1>
			<a href="index.php">Micro CMS</a>
		</h1>
		<ul class="main-menu column clearfix">
    <li><a href="index.php">Blog</a></li>
    <li><a href="new-post.php">New Post</a></li>
		</ul>
	</div>
</nav>

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
        </footer>
      </article>
    <?php endforeach; ?>
	</div>
</div>

<footer id="footer">
	<div id="inner-footer">
	   Introduction Course to PHP
	</div>
</footer>
</body>
</html>

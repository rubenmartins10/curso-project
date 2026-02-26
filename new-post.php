<?php require('init.php'); ?>
<?php
//Do the forms has been submited?
  //YES: Check if everything is ok and save the post_1_title
  //NO: Keep with executation

$error = false;
$title = '';
$excerpt = '';
$content = '';

if ( isset($_POST['submit-new-post'] ) ) {
  //If forms has been sent
  $title = filter_input(INPUT_POST, 'title', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  $excerpt = filter_input(INPUT_POST, 'excerpt', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  $content = strip_tags($_POST['content'], '<br><p><a><img><div>');

  if ( empty ( $title ) || empty ( $content ) ) {
    $error = true;
  }
  else {
    insert_post( $title, $excerpt, $content );
    //Redirect to blog
    redirect_to( 'index.php?success=true');
  }
}
 ?>
 <?php require('templates/header.php'); ?>
<h2>Create new post</h2>

<?php if ($error): ?>
  <div class="error">
    Error in the form.
  </div>
<?php endif; ?>
<form action="" method="post">
  <label for ="title">Title (required)</label>
  <input type="text" name="title" id="excerpt" value="<?php echo htmlspecialchars($title, ENT_QUOTES); ?>">

  <label for="excerpt">Extract</label>
  <input type="text" name="excerpt" id="excerpt" value="<?php echo htmlspecialchars($excerpt, ENT_QUOTES); ?>">

  <label for="content">Content (required)</label>
  <textarea name="content" id="content" cols="30" rows="30"><?php echo htmlspecialchars($content, ENT_QUOTES); ?></textarea>

  <p>
    <input type="submit" name="submit-new-post" value="New Post">
  </p>
</form>

<?php require('templates/footer.php');

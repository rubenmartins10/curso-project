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
  $title = $_POST['title'];
  $excerpt = $_POST['excerpt'];
  $content = $_POST['content'];

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
  <input type="text" name="title" id="excerpt" value="<?php echo $title; ?>">

  <label for="excerpt">Extract</label>
  <input type="text" name="excerpt" id="excerpt" value="<?php echo $excerpt; ?>">

  <label for="content">Content (required)</label>
  <textarea name="content" id="content" cols="30" rows="30"><?php echo $content; ?></textarea>

  <p>
    <input type="submit" name="submit-new-post" value="New Post">
  </p>
</form>

<?php require('templates/footer.php');

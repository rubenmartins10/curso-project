<?php require('init.php'); ?>
<?php require('templates/header.php'); ?>
<form action="" method="post">
  <label for ="title">Title (required)</label>
  <input type="text" name="title" id="excerpt" value="">

  <label for="excerpt">Extract</label>
  <input type="text" name="excerpt" id="excerpt" value="">

  <label for="content">Content (required)</label>
  <textarea name="content" id="content" cols="30" rows="30"></textarea>

  <p>
    <input type="submit" name="submit-new-post" value="New Post">
  </p>
</form>

<?php require('templates/footer.php');

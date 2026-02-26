<?php require __DIR__ . '/../templates/header.php' ?>
  <h2>Create New Post</h2>

<?php if($error): ?>
  <div class="error">
    Error in form!
  </div>
<?php endif; ?>

  <form action="" method="post">
    <label for="title">Title (required)</label>
    <input type="text" name="title" id="title" value="<?php echo htmlspecialchars($title, ENT_QUOTES); ?>"

    <label for="title">Excerpt</label>
    <input type="text" name="excerpt" id="excerpt" value="<?php echo htmlspecialchars($excerpt, ENT_QUOTES); ?>"

    <label for="title">Content (required)</label>
    <textarea name="content" id="content" cols="30" rows="30"><?php echo htmlspecialchars($content, ENT_QUOTES); ?></textarea>

    <p>
      <input type="submit" name="submit-new-post" value="New Post">
    </p>
  </form>
<?php require __DIR__ . '/../templates/footer.php'; ?>

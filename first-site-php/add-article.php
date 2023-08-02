<?php
if(!isset($_COOKIE['login'])) {
  header('Location: /register.php');
  exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
<?php 
    $websiteTitle = 'Add article';
    require "./blocks/head.php"
    ?>
</head>

<body>

  <?php require "./blocks/header.php" ?>

  <main>
    <h1>Add article</h1>
    <form>
      <label for="title">Name article</label>
      <input type="text" name="title" id="title">
       
      <label for="anons">Time article</label>
      <textarea name="anons" id="anons"></textarea>

      <label for="full_text">Basic text</label>
      <textarea name="full_text" id="full_text"></textarea>

      <div class="error_msg" id="error_block"></div>

      <button type="button" id="add_article">Add</button>
    </form>
  </main>

  <?php require "./blocks/aside.php" ?>

  <?php require "./blocks/footer.php" ?>

  <script>
    $('#add_article').click(function(){
      let title = $('#title').val();
      let anons = $('#anons').val();
      let full_text = $('#full_text').val();

      $.ajax({
        url: 'ajax/add_article.php',
        type: 'POST',
        cache: false,
        data: {
          'title':title,
          'anons':anons,
          'full_text':full_text,
        },
        dataType: 'html',
        success: function(data) {
          if (data === 'Done') {
            $('#add_article').text('Sended');
            $('#error_block').hide();
            $('#title').val("");
            $('#anons').val("");
            $('#full_text').val("");
          } else {
            $('#error_block').show();
            $('#error_block').text(data);
          }
        }
      })
    });
  </script>

</body>

</html>
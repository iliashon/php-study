<!DOCTYPE html>
<html lang="en">

<head>
<?php 
    $websiteTitle = 'Contscts';
    require "./blocks/head.php"
    ?>
</head>

<body>

  <?php require "./blocks/header.php" ?>

  <main>
    <h1>Contacts</h1>
    <form>
      <label for="username">Name</label>
      <input type="text" name="username" id="username">

      <label for="email">Email</label>
      <input type="email" name="email" id="email">
       
      <label for="mexx">Message</label>
      <textarea name="mess" id="mess"></textarea>

      <div class="error_msg" id="error_block"></div>

      <button type="button" id="add_article">Send</button>
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
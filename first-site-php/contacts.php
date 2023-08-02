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

      <button type="button" id="mess_send">Send</button>
    </form>
  </main>

  <?php require "./blocks/aside.php" ?>

  <?php require "./blocks/footer.php" ?>

  <script>
    $('#mess_send').click(function(){
      let name = $('#title').val();
      let enail = $('#email').val();
      let mess = $('#mess').val();

      $.ajax({
        url: 'ajax/mail.php',
        type: 'POST',
        cache: false,
        data: {
          'name':name,
          'email':email,
          'mess':mess,
        },
        dataType: 'html',
        success: function(data) {
          if (data === 'Done') {
            $('#add_article').text('Sended');
            $('#error_block').hide();
            $('#username').val("");
            $('#email').val("");
            $('#mess').val("");
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
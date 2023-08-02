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
    $websiteTitle = 'General chat';
    require "./blocks/head.php"
    ?>
</head>

<body>

  <?php require "./blocks/header.php" ?>

  <main>
    <h1>General chat</h1>
    <div class="messages">
      
    </div>
    <form>
      <label for="mess">Message</label>
      <textarea type="text" id="mess"></textarea>

      <div class="error_msg" id="error_block"></div>

      <button type="button" id="mess_send">Send</button>
    </form>
  </main>

  <?php require "./blocks/aside.php" ?>

  <?php require "./blocks/footer.php" ?>

  <script>
    setInterval(function() {
      $.ajax({
        url: 'ajax/chat_query_mess.php',
        type: 'POST',
        cache: false,
        success: function(data) {
          $('.messages').html(data);
        }
      })
    }, 2000);

    $('#mess_send').click(function(){
      let name = '<?= $_COOKIE['login'] ?>';
      let mess = $('#mess').val();

      $.ajax({
        url: 'ajax/chat_add_mess.php',
        type: 'POST',
        cache: false,
        data: {
          'username':name,
          'mess':mess,
        },
        dataType: 'html',
        success: function(data) {
          if (data === 'Done') {
            $('.messages').append(`<div class='mess-user'>
          <h4> ${name} </h4>
          <p> ${mess} </p>
          </div>`);
            $('#mess_send').text('Sended');
            setTimeout(function() {
              $('#mess_send').text('Send');
            }, 500);
            $('#error_block').hide();
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
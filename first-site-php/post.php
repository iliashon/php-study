<!DOCTYPE html>
<html lang="en">

<head>
    <?php 
    require_once "lib/MySQL.php";
    $sql = 'SELECT * FROM articles WHERE `id` = ?';
    $query = $pdo->prepare($sql);
    $query->execute([$_GET['id']]);

    $article = $query->fetch(PDO::FETCH_OBJ);

    $websiteTitle = $article->title;
    require "./blocks/head.php" 
    ?>
</head>

<body>

    <?php require "./blocks/header.php" ?>

    <main>
      <div class='post'> 
          <h2> <?= $article->title ?> </h2>
          <p> <?= $article->anons ?> </p><br>
          <p> <?= $article->full_text ?> </p>
          <p class='author'> Author: <span><?= $article->author ?></span> </p><br>
          <p><b>Post date:</b> <?= date("m.d - H:i:s", $article->date) ?></p>
      </div>
      <h3>Comments</h3>
      <form>
        <label for="username">Name</label>
        <?php if(isset($_COOKIE['login'])): ?>
            <input type="text" name="username" id="username" value="<?= $_COOKIE['login'] ?>">
        <?php else: ?>
            <input type="text" name="username" id="username">
        <?php endif; ?>
        
        <label for="mess">Message</label>
        <textarea type="mess" id="mess"></textarea>

        <div class="error_msg" id="error_block"></div>

        <button type="button" id="mess_send">Send</button>
      </form>

      <div class="comments"></div>
      <?php 
        $sql = 'SELECT * FROM comments WHERE `article_id` = ? ORDER BY id DESC';
        $query = $pdo->prepare($sql);
        $query->execute([$_GET['id']]);

        $comments = $query->fetchAll(PDO::FETCH_OBJ);
        foreach($comments as $el) {
          echo "<div class='comment'>
          <h2>". $el->name ."</h2>
          <p>". $el->mess ."</p>
          </div>";
        }
      ?>
    </main>

    <?php require "./blocks/aside.php" ?>

    <?php require "./blocks/footer.php" ?>

    <script>
    $('#mess_send').click(function(){
      let name = $('#username').val();
      let mess = $('#mess').val();

      $.ajax({
        url: 'ajax/comment_add.php',
        type: 'POST',
        cache: false,
        data: {
          'username':name,
          'mess':mess,
          'id': '<?= $_GET['id'] ?>',
        },
        dataType: 'html',
        success: function(data) {
          if (data === 'Done') {
            $('.comments').prepend(`<div class='comment'>
          <h2> ${name} </h2>
          <p> ${mess} </p>
          </div>`);
            $('#mess_send').text('Sended');
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
<header>
  <span class="logo">Blog</span>
  <nav>
    <a href="/first-site-php/index.php">Home</a>
    <?php if(isset($_COOKIE['login'])): ?>
      <a href="/first-site-php/add-article.php" class="btn">Add article</a>
      <a href="/first-site-php/users_list.php" class="btn">Users List</a>
      <a href="/first-site-php/login.php" class="btn">Cabinet</a>
    <?php else: ?>
      <a href="/first-site-php/login.php" class="btn">Sign in</a>
      <a href="/first-site-php/register.php" class="btn">Registration</a>
    <?php endif; ?>  
  </nav>
</header>
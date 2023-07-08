<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="./style.css">
  <title>Form</title>
</head>

<body>
  <section class="section">
    <h1>Form</h1>
    <form action="./register.php" class="form" method="post">
      <input type="text" placeholder="Name" name="name">
      <input type="email" placeholder="Email" name="email">
      <input type="tel" placeholder="Phone number" name="phone">
      <label for="cars">Select favorite cars</label>
      <select multiple name="cars[]" id="cars">
        <option value="bmw">BMW</option>
        <option value="mercedes">Mercedes</option>
        <option value="honda">Honda</option>
        <option value="tesla">Tesla</option>
      </select>
      <label for="films">Enter the titles of at least two favorite movies</label>
      <input type="text" id="films" placeholder="Films" name="films">
      <button type="submit">Send</button>
    </form>
  </section>

</body>

</html>
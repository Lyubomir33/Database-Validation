<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../CSS/reset.css">
  <link rel="stylesheet" href="../CSS/style.css">
  <link rel="stylesheet" href="../JavaScript/index.js">
  <link rel="stylesheet" href="../HTML/index.html">
  <title>Document</title>
</head>

<body>

  <?php require "index.php" ?>
  <?php require "../PHP/database/connection.php" ?>
 
  


  <h1 id="heading">Моля попълнете формата и ние ще се свържем с вас!</h1>

  <div class="container">
    <form action="" class="form" method="post">

      <div class="div-space">
        <label for="firstName">Първо име</label><br>
        <input autocomplete="firstName" class="input-space" type="text" id="firstName" name="firstName"><br>
        <span class="error"><?php echo $first_name_error; ?></span>
      </div>

      <div class="div-space">
        <label for="lastName">Фамилия</label><br>
        <input autocomplete="lastName" class="input-space" type="text" name="lastName" id="lastName"><br>
        <span class="error"><?php echo $last_name_error;  ?></span>

      </div>


      <div class="div-space">
        <label for="email">Имейл</label><br>
        <input autocomplete="email" class="input-space" type="text" name="email" id="email"><br>
        <span class="error"><?php echo $email_error; ?></span>
      </div>

      <div class="div-space">
        <label for="phoneNumber">Телефон</label><br>
        <input autocomplete="phoneNumber" class="input-space" type="text" id="phoneNumber" name="phoneNumber"><br>
        <span class="last-error"><?php echo $phone_error; ?></span>
      </div>



      <div>
        <input name="submit" type='submit' id="btn" value="Регистрация">
      </div>


    </form>
  </div>


  <!-- <script src="../JavaScript/index.js"> </script> -->



</body>

</html>
<?php

session_start();


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Home</title>
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="form.css" />
  </head>
  <style>
    body {
      background-color: white;
    }
  </style>
  <body>
    <div class="cons">
    <h1>Home</h1>
    <?php  if (isset($_SESSION["user_id"])):?>
    <p><a href="logout.php">Log out</a></p>
    </div>
    <?php else: ?>
    <p><a href="login.php">Login</a> or <a href="register.php">register</a></p>

    <?php endif; ?>
  </body>
</html>

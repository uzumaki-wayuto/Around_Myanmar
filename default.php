<?php include('server.php'); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Sign Up Success! - Around Myanmar</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
    <div class = "header">
      <h2>Sign up Success!</h2>
    </div>

      <div class="content">
        <?php if(isset($_SESSION['success'])): ?>
          <div class="error success">
            <h3>
              <?php
                echo $_SESSION['success'];
                unset($_SESSION['success']);
              ?>
             </h3>
          </div>
        <?php endif ?>

        <?php if(isset($_SESSION["email"])): ?>
          <p> Welcome, <strong> <?php echo $_SESSION["fname"]; ?><i> </i><?php echo $_SESSION["lname"]; ?></strong></p>
          <p class="logout"><a href="login.php">&lt&ltLog out</a></p>
          <p class="next"><a href="index.php">Home&gt&gt</a></p>
        <?php endif ?>
      </div>

  </body>
</html>

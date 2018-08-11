<?php include('server.php'); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Register - Around Myanmar </title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
    <div class = "header">
      <h2>Register</h2>
    </div>
    <form method="post" action="register.php">
      <?php include('errors.php'); ?>
      <div class="input-group">
        <label>First Name</label>
        <input type="text" placeholder="John" name="fname" value="<?php echo $fname; ?>">
      </div>
      <div class="input-group">
        <label>Last Name</label>
        <input type="text" placeholder="Dane" name="lname" value="<?php echo $lname; ?>">
      </div>
      <div class="input-group">
        <label>Email</label>
        <input type="email" placeholder="someone@example.com" name="email" value="<?php echo $email; ?>">
      </div>
      <div class="input-group">
        <label>Password</label>
        <input type="password" placeholder="********" name="password_1">
      </div>
      <div class="input-group">
        <label>Confirm Password</label>
        <input type="password" placeholder="********" name="password_2">
      </div>

      <div class="input-group">
        <button type="submit" name="register" class="btn">Sign up</button>
      </div>
        <p class="faq">Already a member? <a href="login.php">Login</a> </p>
    </form>

  </body>
</html>

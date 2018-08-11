<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Log In - Around Myanmar</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
    <div class = "header">
      <h2>Login</h2>
    </div>

    <form method="post" action="login.php">
      <div class="input-group">
        <label>Email</label>
        <input type="email" placeholder="someone@example.com" name="email">
      </div>
      <div class="input-group">
        <label>Password</label>
        <input type="password" placeholder="********" name="password">
      </div>

      <div class="input-group">
        <button type="submit" name="login" class="btn">Log In</button>
      </div>
        <p class="faq">Not yet a member? <a href="register.php">Sign up</a> </p>
    </form>

  </body>
</html>

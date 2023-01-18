<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
  
    <link rel="stylesheet" href="kayitol.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
<form action="action_page.php">
  <div class="container">
    <h1>Kayıt Ol</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" id="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Şifrenizi Girin" name="psw" id="psw" required>

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Şifreyi Tekrar Gir" name="psw-repeat" id="psw-repeat" required>
    <hr>

 
    <button type="submit" class="registerbtn">Kayıt Ol</button>
  </div>

  <div class="container signin">
    <p>Hazır Hesabınız Yokmu <a href="login.php">Giriş Yap</a>.</p>
  </div>
</form>

</body>
</html>

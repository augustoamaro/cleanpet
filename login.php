<!DOCTYPE HTML>
<html lang="pt-br">

<link rel="stylesheet" href="./static/css/loginbox.css">

<body>
  <div class="loginbox">
      <form action="autentica.php" method="POST">
        <div class="form-group">
          <label for="login">Login</label>
          <input id="login" name="login" type="text" class="form-control" placeholder="Login" />
        </div>
        <div class="form-group">
          <label for="password">Senha</label>
          <input id="password" name="password" type="password" class="form-control" placeholder="Password">
        </div>
        <button type="submit" class="btn btn-primary">Entrar</button>
      </form>
    </div>
  </div>
  </body>

</html>
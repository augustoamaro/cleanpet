<link rel="stylesheet" href="./static/css/login.css">

<body>
  <div class="loginbox">
    <div class="card-body">
      <h4 class="card-title">Login</h4>
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

<script>
    var $form = $('.card__form');

$form.submit(function (event) {
  event.preventDefault();

  $form.addClass('form-submitted');

  setTimeout(function () {
    $form.addClass('form-done');

    setTimeout(function () {
      $form.
      removeClass('form-submitted').
      removeClass('form-done');
    }, 250);
  }, 2650);
});
</script>
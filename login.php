<?php
	require 'config.php';

	if(isset($_POST['login'])) {
		$errMsg = '';

		
		$usuario = $_POST['usuario'];
		$senha = $_POST['senha'];

		if($usuario == '')
			$errMsg = 'Digite seu usuário';
		if($senha == '')
			$errMsg = 'Dgite sua senha';

		if($errMsg == '') {
			try {
				$stmt = $connect->prepare('SELECT id, nome, usuario, senha FROM usuarios WHERE usuario = :usuario');
				$stmt->execute(array(
					':usuario' => $usuario
					));
				$data = $stmt->fetch(PDO::FETCH_ASSOC);

				if($data == false){
					$errMsg = "Usuário $usuario não encontrado.";
				}
				else {
					if($senha == $data['senha']) {
						$_SESSION['nome'] = $data['nome'];
						$_SESSION['usuario'] = $data['usuario'];
						$_SESSION['senha'] = $data['senha'];
						

						header('Location: dashboard.php');
						exit;
					}
					else
						$errMsg = 'Senha inválida.';
				}
			}
			catch(PDOException $e) {
				$errMsg = $e->getMessage();
			}
		}
	}
?>

<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" href="./static/css/loginbox.css">
</head>
<body>
		<div class="login-card">
			<?php
				if(isset($errMsg)){
					echo '<div style="color:#FF0000;text-align:center;font-size:17px;">'.$errMsg.'</div>';
				}
			?>
			<div style="background-color:#006D9C; color:#FFFFFF; padding:10px;"><b>Login</b></div>
			<div style="margin: 15px">
				<form action="" method="post">
					<input type="text" name="usuario" placeholder="Nome" value="<?php if(isset($_POST['usuario'])) echo $_POST['usuario'] ?>" autocomplete="off" class="box"/><br /><br />
					<input type="password" name="senha" placeholder="Senha" value="<?php if(isset($_POST['senha'])) echo $_POST['senha'] ?>" autocomplete="off" class="box" /><br/><br />
					<input type="submit" name='login' value="Login" class='submit'/><br />
				</form>
			</div>
		</div>
	</div>
</body>
</html>


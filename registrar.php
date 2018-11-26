<?php
	require 'config.php';

	if(isset($_POST['registrar'])) {
		$errMsg = '';

		
		$nome = $_POST['nome'];
		$usuario = $_POST['usuario'];
		$senha = $_POST['senha'];
		

		if($nome == '')
			$errMsg = 'Digite seu nome';
		if($usuario == '')
			$errMsg = 'Digite seu usuario';
		if($senha == '')
			$errMsg = 'Digite sua senha';
		
		if($errMsg == ''){
			try {
				$stmt = $connect->prepare('INSERT INTO usuarios (nome, usuario, senha) VALUES (:nome, :usuario, :senha)');
				$stmt->execute(array(
					':nome' => $nome,
					':usuario' => $usuario,
					':senha' => $senha
					
					));
				header('Location: registrar.php?action=joined');
				exit;
			}
			catch(PDOException $e) {
				echo $e->getMessage();
			}
		}
	}

	if(isset($_GET['action']) && $_GET['action'] == 'joined') {
		$errMsg = 'Registrado com Sucesso. <a href="index2.php">Logar</a>';
	}
?>

<html>
<head><title>Cadastro de Usuário</title></head>
	<style>
	html, body {
		margin: 1px;
		border: 0;
	}
	</style>
<body>
	<div align="center">
		<div style=" border: solid 1px #006D9C; " align="left">
			<?php
				if(isset($errMsg)){
					echo '<div style="color:#FF0000;text-align:center;font-size:17px;">'.$errMsg.'</div>';
				}
			?>
			<div style="background-color:#006D9C; color:#FFFFFF; padding:10px;"><b>Cadastro de Usuário</b></div>
			<div style="margin: 15px">
				<form action="" method="post">
					<input type="text" name="nome" placeholder="Nome" value="<?php if(isset($_POST['nome'])) echo $_POST['nome'] ?>" autocomplete="off" class="box"/><br /><br />
					<input type="text" name="usuario" placeholder="Usuário" value="<?php if(isset($_POST['usuario'])) echo $_POST['usuario'] ?>" autocomplete="off" class="box"/><br /><br />
					<input type="password" name="senha" placeholder="Senha" value="<?php if(isset($_POST['senha'])) echo $_POST['senha'] ?>" class="box" /><br/><br />
					
					<input type="submit" name='registrar' value="Registrar" class='submit'/><br />
				</form>
			</div>
		</div>
	</div>
</body>
</html>
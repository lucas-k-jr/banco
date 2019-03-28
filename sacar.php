<!DOCTYPE html>
<?php
	include("ContaCorrente.php");
	session_start();
?>
	<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<title>Sacar</title>
	</head>
	<body>
		<h1>Saque</h1>
	<?php
		if(empty($_POST)){
			$id = $_GET["id"];
			$cc = $_SESSION["cc"][$id];

			echo '
			<form action="sacar.php" method="POST">
				Correntista: '.$cc->get_nome().'
				<br/>
				CC: ('.$cc->get_numero().')
				<br/>
				Saldo: '.$cc->get_saldo().'
					<input type="number" name="valor" placeholder="Valor do saque..." />
					<input type="hidden" name="id" value="'.$id.'"/>
				<button>SACAR</button>
			</form>';
		}else{

			$id = $_POST["id"];
			$valor = $_POST["valor"];

			if($_SESSION["cc"][$id]->verificar_saque($valor)){

				$_SESSION["cc"][$id]->sacar($valor);
				header("Location: listar_conta.php");
			}else{
				echo '
					<h2> Não há saldo suficiente. </h2>
					<br/>
					<h3><a href="listar_conta.php"> Listar contas </a></h3>';
			}
		}
	?>
	</body>	
</html>
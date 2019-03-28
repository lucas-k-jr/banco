<!DOCTYPE html>
<?php
	include("ContaCorrente.php");
	session_start();
?>
	<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<title> Depositar </title>
	</head>
	<body>
		<h1>Deposito </h1>
	<?php
		if(empty($_POST)){
			$id = $_GET["id"];
			$cc = $_SESSION["cc"][$id];

			echo '
			<form action="depositar.php" method="POST">
				Correntista: '.$cc->get_nome().'
				<br/>
				CC: ('.$cc->get_numero().')
				<br/>
				Saldo: '.$cc->get_saldo().'
					<input type="number" name="valor" step="0.11" placeholder="Valor do deposito..." />
					<input type="hidden" name="id" value="'.$id.'"/>
				<button>DEPOSITAR</button>
			</form>';
		}else{
			$id = $_POST["id"];
			$valor = $_POST["valor"];
			
			$_SESSION["cc"][$id]->depositar($valor);

			header("Location: listar_conta.php");
		}
	?>
	</body>	
</html>
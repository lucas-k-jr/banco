<?php
	include("ContaCorrente.php");
	session_start();

	$cliente 	= $_POST["cliente"];
	$nmrConta 	= $_POST["numConta"];
	$data 		= $_POST["dataAbertura"];
	$saldo 		= $_POST["saldoInicial"];
	$tipoConta  = $_POST["conta"];

	if($tipoConta == "corrente"){
		$tm = $_POST["taxaManutencao"];
		$to = $_POST["taxaOperacao"];

		$cc = new ContaCorrente($cliente, $nmrConta, $data, $saldo, $tm, $to);

		$_SESSION["cc"][] = $cc;

	}else{
		$tr = $_POST["taxaRendimento"];

		$cp = new ContaPopanca($cliente, $nmrConta, $data, $saldo, $tr);

	}

	echo '<b> Conta '.$tipoConta.' cadastrada com sucesso! </b>
		  <br/><br/>
		  <a href="listar_conta.php"> Listar contas </a> 
		  <span>  ||  </span>
		  <a href="Cadastro.php"> Cadastrar uma nova conta </a>';
?>
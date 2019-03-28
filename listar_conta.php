<?php
	include_once("ContaCorrente.php");
	session_start();

	echo '<table border="1">
			<tr>  
				<th>Numero</th>
				<th>Nome</th>
				<th>Data Abertura</th>
				<th>Saldo</th>
				<th>Taxa Manutencao</th>
				<th>Taxa Operacao</th>
				<th>Acao</th>
			</tr>';

			foreach ($_SESSION["cc"] as $i => $c){
				$c->exibeDados($i);
			}
	echo '</table>';
?>
	
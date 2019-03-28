<?php
	include_once("conta.php");
	
	class ContaCorrente extends Conta{
		private $taxaManutencao;
		private $taxaOperacao;

		public function __construct($nome, $nro, $data, $saldo, $taxaManutencao, $taxaOperacao){
			parent::__construct($nome, $nro, $data, $saldo);

			$this->taxaManutencao = $taxaManutencao;
			$this->taxaOperacao = $taxaOperacao;
		}

		public function sacar($valorSaque){
			$this->saldo = $this->saldo - $valorSaque - ($valorSaque * ($this->taxaOperacao/100));
		}

		public function depositar($valorDeposito){
			$this->saldo = $this->saldo + $valorDeposito - $valorDeposito * ($this->taxaOperacao/100);
		}

		public function verificar_saque($valorSaque){
			if($this->saldo - $valorSaque - $valorSaque * ($this->taxaOperacao/100) >= 0){
				return(true);
			}
			else{
				return(false);
			}
		}

		public function exibeDados($id){
			echo "
				<tr>
					<td>".$this->get_numero()."</td>
					<td>".$this->get_nome()."</td>
					<td>".$this->get_dataAbertura()."</td>
					<td>".$this->saldo."</td>
					<td>".$this->taxaManutencao."</td>
					<td>".$this->taxaOperacao."</td>
					<td>
						<a href='sacar.php?id=$id'> Sacar </a> |
						<a href='depositar.php?id=$id'> Depositar </a>
					</td>
				</tr>";
		}
	}
?>




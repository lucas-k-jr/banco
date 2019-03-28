<?php
	class Conta{
		private $cliente;
		private $numero;
		private $dataAbertura;
		protected $saldo;

		protected function __construct($cliente, $numero, $dataAbertura, $saldo){

			$this->cliente 		= $cliente;
			$this->numero 		= $numero;
			$this->dataAbertura = $dataAbertura;
			$this->saldo 		= $saldo;
		}

		public function get_nome(){
			return($this->cliente);
		}

		public function get_numero(){
			return($this->numero);
		}

		public function get_dataAbertura(){
			return($this->dataAbertura);
		}

		public function get_saldo(){
			return($this->saldo);
		}
	}
?>
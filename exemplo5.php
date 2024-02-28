<?php

	/**
	 * 
	 */
	class Funcionario
	{
		public $nome;
		public $salario;
		public $previdencia;
		public $desconto;
		public $tipoFuncionario;
		
		function __construct($nome, $salario, $previdencia)
		{
			$this->$nome = $nome;
			$this->salario = $salario;
			$this->previdencia = $previdencia;
			$this->desconto = $this->calcularDesconto();

			if ($this->salario <= 1000 && $this->salario <2000) {
				$this->tipoFuncionario = "Junior";

			}
			else if ($this->salario >=2000 && $this->salario <3000) {
				$this->tipoFuncionario = "Pleno";
			}
			else if ($this->salario >=3000) {
				$this->tipoFuncionario = "Senior";

			}

		}

		function calcularDesconto(){
			return round($this->salario *0.275 + $this->previdencia,2);
		}
	}

		$funcionarios = array();
		$funcionarios[0] = new funcionario("joão Filho", 1000, 100);
		$funcionarios[1] = new funcionario ("Maria Filho", 2000, 200);
		$funcionarios[2] = new funcionario("Jose Filho", 3000, 300);

		for ($i=0; $i < count($funcionarios); $i++) { 
			$func = $funcionarios[$i];

			echo "O valor do desconto de $func->nome é $func->desconto <br>";
		}

?>
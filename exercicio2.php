<?php

class Produto {
    // Atributo estático para contar o número de instâncias
    private static $contador = 0;
    
    // Atributo de instância para armazenar o nome do produto
    private $nome;

    // Construtor que incrementa o contador e atribui o nome do produto
    public function __construct($nome) {
        self::$contador++;
        $this->nome = $nome;
    }

    // Método estático para obter o valor atual do contador
    public static function getContador() {
        return self::$contador;
    }

    // Método de instância para obter o nome do produto
    public function getNome() {
        return $this->nome;
    }
}

// Criando duas instâncias da classe Produto
$produto1 = new Produto("Produto A");
$produto2 = new Produto("Produto B");

// Exibindo o número total de instâncias criadas
echo "Número total de instâncias: " . Produto::getContador() . "\n";

// Exibindo o nome dos produtos
echo "Nome do Produto 1: " . $produto1->getNome() . "\n";
echo "Nome do Produto 2: " . $produto2->getNome() . "\n";

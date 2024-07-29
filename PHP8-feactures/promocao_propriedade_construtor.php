<?php
    /*
    class Produto {
        public string $nome = "";
        public float $valor = 0;

        public function __construct($nome, $valor) {
            $this->nome = $nome;
            $this->valor = $valor;
        }
    }
        */

    class Produto {
        public function __construct(
            public string $nome = "",
            public float $valor = 0
        ){}
    }

    $produto = new Produto('Smartphone', 1500);

    echo "Produto: ".$produto->nome;
    echo "<br>";
    echo "Valor: " .$produto->valor;

    echo "<hr>";

    $produto2 = new Produto('Geladeira', 2500);

    echo "Produto: ".$produto2->nome;
    echo "<br>";
    echo "Valor: " .$produto2->valor;

?>
<?php
    /*
    $objeto = null;

    $objeto?->total();
    */

    class Funcionario {
        public function __construct(
            private string $nome = "",
            private float $salario = 0
        ){}

        public function info() {
            return "Nome: $this->nome - Salário: $this->salario";
        }
    }

    class FolhaPagamento {

        private $funcionarios = null;

        public function __construct() {
            $this->funcionarios = [
                new Funcionario('Kelly', 10000),
                new Funcionario('Lucas', 8000),
                new Funcionario('Josmar', 10000),
                new Funcionario('Sergio', 11000),
            ];
        }

        public function getTotalFuncionarios() {
            return count($this->funcionarios);
        }

        public function getFuncionario() {
            return $this->funcionarios[1]; //null
        }
    }
        $folhaPagamento = new FolhaPagamento();
        //$folhaPagamento = null;

        echo $folhaPagamento?->getTotalFuncionarios();
        echo "<br>";
        print_r ($folhaPagamento?->getFuncionario()?->info());
    
?>
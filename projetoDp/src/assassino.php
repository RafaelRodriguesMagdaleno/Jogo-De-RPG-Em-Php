<?php
    namespace Rpg;
    class Assassino extends Personagem {
        public function __construct(string $nome) {
            parent::__construct($nome, 60, 100, 10);
        }
    
        public function atacar(): int {
            $rolagem = rand(1, 20);
            $dano = $this->forca + $rolagem;
            echo "{$this->nome} usou adagas envenenadas com o poder {$dano}\n";
            return $dano;
        }
    }
?>
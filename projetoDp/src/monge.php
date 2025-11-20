<?php
    namespace Rpg;
    class Monge extends Personagem {
        public function __construct(string $nome) {
            parent::__construct($nome, 120, 45, 20);
        }
    
        public function atacar(): int {
            $rolagem = rand(1, 20);
            $dano = $this->forca + $rolagem;
            echo "{$this->nome} usou mão divina com o poder {$dano}\n";
            return $dano;
        }
    }
?>
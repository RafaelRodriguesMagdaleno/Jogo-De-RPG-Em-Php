<?php
    namespace Rpg;
    class Mago extends Personagem {
        public function __construct(string $nome) {
            parent::__construct($nome, 80, 20, 50);
        }
    
        public function atacar(): int {
            $rolagem = rand(1, 20);
            $dano = $this->forca + $rolagem;
            echo "{$this->nome} lançou um feitiço congelante com poder {$dano}\n";
            return $dano;
        }
    }
?>
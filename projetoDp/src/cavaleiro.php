<?php
    namespace Rpg;
    class Cavaleiro extends Personagem {
        public function __construct(string $nome) {
            parent::__construct($nome, 100, 50, 40);
        }
    
        public function atacar(): int {
            $rolagem = rand(1, 20);
            $dano = $this->forca + $rolagem;
            echo "{$this->nome} usou o ataque lança de trovão com poder {$dano}\n";
            return $dano;
        }
    }
?>

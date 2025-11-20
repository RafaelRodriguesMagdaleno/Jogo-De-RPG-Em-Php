<?php
    namespace Rpg;
    class Necromante extends Personagem {
        public function __construct(string $nome) {
            parent::__construct($nome, 100, 44, 30);
        }
        public function atacar(): int {
            $rolagem = rand(1, 20);
            $dano = $this->forca + $rolagem;
            echo "{$this->nome} usou mortos infernais com o poder {$dano}\n";
            return $dano;
        }
    }
?>
<?php
    namespace Rpg;
    abstract class Personagem {
    
        protected string $nome;
        protected int $vida;
        protected int $forca;
        protected int $defesa;
    
        public function __construct(string $nome, int $vida, int $forca, int $defesa) {
            $this->nome = $nome;
            $this->vida = $vida;
            $this->forca = $forca;
            $this->defesa = $defesa;
        }
    
        public function atacar(): int {
            $rolagem = rand(1, 20);
            return $this->forca + $rolagem;
        }
    
        public function defender(int $danoRecebido): void {
            $danoFinal = max($danoRecebido - $this->defesa, 0);
            $this->vida -= $danoFinal;
            if ($this->vida < 0) $this->vida = 0;
        
            echo "{$this->nome} perdeu {$danoFinal} de vida. Vida restante: {$this->vida}\n";
        }
    
        public function estaVivo(): bool {
            return $this->vida > 0;
        }
    
        public function getNome(): string { return $this->nome; }
        public function getVida(): int { return $this->vida; }
        public function getForca(): int { return $this->forca; }
        public function getDefesa(): int { return $this->defesa; }
    
        public function setNome(string $nome): void { $this->nome = $nome; }
        public function setVida(int $vida): void { $this->vida = $vida; }
        public function setForca(int $forca): void { $this->forca = $forca; }
        public function setDefesa(int $defesa): void { $this->defesa = $defesa; }
    }
?>
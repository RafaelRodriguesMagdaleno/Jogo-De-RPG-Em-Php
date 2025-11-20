<?php
    namespace Rpg;
    class Ranking {
        private array $vitorias = [];
    
        public function registrarVitoria(Personagem $vencedor): void {
            $nome = $vencedor->getNome();
            if (!isset($this->vitorias[$nome])) {
                $this->vitorias[$nome] = new Vitoria($nome);
            }
            $this->vitorias[$nome]->adicionarVitoria();
        }
    
        public function mostrarRanking(): void {
            echo "\n=====  RANKING FINAL  =====\n";
            foreach ($this->vitorias as $v) {
                echo "{$v->getNome()} - Vitórias: {$v->getQuantidade()}\n";
            }
        }
    }
?>
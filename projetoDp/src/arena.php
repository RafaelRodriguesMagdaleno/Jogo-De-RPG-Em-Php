<?php
    namespace Rpg;
    class Arena {
        private Ranking $ranking;
    
        public function __construct(Ranking $ranking) {
            $this->ranking = $ranking;
        }
    
        public function realizarBatalha(Personagem $p1, Personagem $p2): void {
            $batalha = new Batalha();
            $vencedor = $batalha->iniciar($p1, $p2);
            $this->ranking->registrarVitoria($vencedor);
        }
    }
?>

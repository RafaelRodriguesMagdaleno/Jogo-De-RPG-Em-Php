<?php
    namespace Rpg;
    
    class Batalha {
        public function iniciar(Personagem $p1, Personagem $p2): Personagem {
            echo "\nIniciando batalha entre {$p1->getNome()} e {$p2->getNome()}\n";
            echo "-----------------------------------\n";
        
            while ($p1->estaVivo() && $p2->estaVivo()) {
                $danoP1 = $p1->atacar();
                $p2->defender($danoP1);
                if (!$p2->estaVivo()) break;
            
                $danoP2 = $p2->atacar();
                $p1->defender($danoP2);
            
                echo "---- Próximo turno ----\n";
            }
        
            $vencedor = $p1->estaVivo() ? $p1 : $p2;
            echo "\n{$vencedor->getNome()} venceu a batalha!\n";
            return $vencedor;
        }
    }
        ?>
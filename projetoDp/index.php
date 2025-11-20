<?php
    require __DIR__ . '/vendor/autoload.php';
    
    use Rpg\Arena;
    use Rpg\Ranking;
    use Rpg\Cavaleiro;
    use Rpg\Monge;
    use Rpg\Mago;
    use Rpg\Assassino;
    use Rpg\Necromante;
    use Rpg\Batalha;
    use Rpg\Personagem;
    use Rpg\Vitoria;
    
    $personagens = [];
    $ranking = new Ranking();
    $arena = new Arena($ranking);
    
    while (true) {
        echo "\n===== MENU RPG =====\n";
        echo "1 - Cadastrar personagem\n";
        echo "2 - Editar personagem\n";
        echo "3 - Excluir personagem\n";
        echo "4 - Listar personagens\n";
        echo "5 - Realizar batalha\n";
        echo "6 - Mostrar ranking\n";   // <<< NOVA OPÇÃO
        echo "0 - Sair\n";
    
        $opcao = (int) readline("Escolha uma opção: ");
    
        switch ($opcao) {
            case 1: // CADASTRAR
                $nome = readline("Nome do personagem: ");
                echo "Classe (1-Cavaleiro, 2-Monge, 3-Mago, 4-Assassino, 5-Necromante): ";
                $classe = (int) readline();
            
                switch ($classe) {
                    case 1: 
                        $personagens[] = new Cavaleiro($nome); 
                        echo "Cavaleiro $nome cadastrado!\n"; 
                        break;
                    case 2: 
                        $personagens[] = new Monge($nome); 
                        echo "Monge $nome cadastrado!\n"; 
                        break;
                    case 3: 
                        $personagens[] = new Mago($nome); 
                        echo "Mago $nome cadastrado!\n"; 
                        break;
                    case 4: 
                        $personagens[] = new Assassino($nome); 
                        echo "Assassino $nome cadastrado!\n"; 
                        break;
                    case 5: 
                        $personagens[] = new Necromante($nome); 
                        echo "Necromante $nome cadastrado!\n"; 
                        break;
                    default: 
                        echo "Classe inválida!\n"; 
                        break;
                }
                break;
            
            case 2: // EDITAR
                if (empty($personagens)) { echo "Nenhum personagem cadastrado.\n"; break; }
                foreach ($personagens as $i => $p) {
                    echo "$i - " . $p->getNome() . " (" . get_class($p) . ")\n";
                }
                $id = (int) readline("Escolha o índice para editar: ");
                if (isset($personagens[$id])) {
                    $novoNome = readline("Novo nome: ");
                    $novaVida = (int) readline("Nova vida: ");
                    $novaForca = (int) readline("Nova força: ");
                    $novaDefesa = (int) readline("Nova defesa: ");
                
                    $personagens[$id]->setNome($novoNome);
                    $personagens[$id]->setVida($novaVida);
                    $personagens[$id]->setForca($novaForca);
                    $personagens[$id]->setDefesa($novaDefesa);
                
                    echo "Personagem atualizado!\n";
                } else {
                    echo "Índice inválido!\n";
                }
                break;
            
            case 3: // EXCLUIR
                if (empty($personagens)) { echo "Nenhum personagem cadastrado.\n"; break; }
                foreach ($personagens as $i => $p) {
                    echo "$i - " . $p->getNome() . " (" . get_class($p) . ")\n";
                }
                $id = (int) readline("Escolha o índice para excluir: ");
                if (isset($personagens[$id])) {
                    unset($personagens[$id]);
                    $personagens = array_values($personagens); // reorganiza índices
                    echo "Personagem excluído!\n";
                } else {
                    echo "Índice inválido!\n";
                }
                break;
            
            case 4: // LISTAR
                if (empty($personagens)) {
                    echo "Nenhum personagem cadastrado.\n";
                } else {
                    foreach ($personagens as $i => $p) {
                        echo "$i - " . $p->getNome() . " (" . get_class($p) . ") Vida: "
                        . $p->getVida() . " Força: " . $p->getForca() . " Defesa: " . $p->getDefesa() . "\n";
                    }
                }
                break;
            
            case 5: // BATALHA
                if (count($personagens) < 2) { echo "Cadastre pelo menos 2 personagens.\n"; break; }
                foreach ($personagens as $i => $p) {
                    echo "$i - " . $p->getNome() . " (" . get_class($p) . ")\n";
                }
                $id1 = (int) readline("Escolha o índice do primeiro personagem: ");
                $id2 = (int) readline("Escolha o índice do segundo personagem: ");
                if (isset($personagens[$id1]) && isset($personagens[$id2])) {
                    $arena->realizarBatalha($personagens[$id1], $personagens[$id2]);
                } else {
                    echo "Índices inválidos!\n";
                }
                break;
            
            case 6: // MOSTRAR RANKING
                $ranking->mostrarRanking();
                break;
            
            case 0:
                // Mostra ranking antes de sair
                $ranking->mostrarRanking();
                exit("Saindo...\n");
            
            default:
                echo "Opção inválida!\n";
        }
    }
?>
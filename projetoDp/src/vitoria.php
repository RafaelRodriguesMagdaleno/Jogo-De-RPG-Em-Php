<?php
    namespace Rpg;
    class Vitoria {
    private string $nome;
    private int $quantidade;
        
    public function __construct(string $nome) {
        $this->nome = $nome;
        $this->quantidade = 0;
    }

    public function adicionarVitoria(): void {
        $this->quantidade++;
    }

    public function getNome(): string {
        return $this->nome;
    }

    public function getQuantidade(): int {
        return $this->quantidade;
    }
}
?>

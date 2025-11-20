Jogo-De-RPG-Em-Php

Usando a linguagem de PHP para refazer o jogo que foi feito em c#,  e incrementando outra ferramenta chamada composter  que é um gerenciador de dependências para PHP. Ele permite carregar automaticamente classes com autoload PSR-4, organizar o projeto em módulos reutilizáveis e facilitar a manutenção e escalabilidade do códigoé um gerenciador de dependências para PHP. Neste projeto, usamos o Composer para carregar todas as classes da pasta src/ sem precisar de require_once

1. Pré-requisitos :
PHP instalado
Composer instalado

Como instalar e configurar o Composer:
Acesse o site oficial: [https://getcomposer.org](https://getcomposer.org)

Verifique se está instalado:
composer --version

Como gerar e configurar o composer.json

na pasta onde está o projeto, use o comando composer init

Isso abrirá um assistente interativo para criar o composer.json. Você pode pressionar Enter para aceitar os padrões.

Após gerar o arquivo, configure o autoload PSR-4 adicionando esta seção ao composer.json:
{
  "autoload": {
    "psr-4": {
      "Rpg\\": "src/"
    }
  }
}

Em seguida execute o comando:
composer dump-autoload
Isso criará a pasta vendor/ com os arquivos de autoload necessários.

Como o projeto funciona
O jogo roda no terminal (CLI), exibindo um menu interativo.

O jogador pode:

Cadastrar personagens de diferentes classes

Editar atributos dos personagens

Excluir personagens

Listar todos os personagens

Realizar batalhas entre dois personagens

Ver o ranking de vitórias acumuladas

Classes disponíveis:

Cavaleiro

Monge

Mago

Assassino

Necromante

Cada classe tem atributos únicos de vida, força e defesa, além de um ataque especial com mensagem personalizada.

Estrutura do projeto : 

projetoDp/
├── composer.json
├── index.php
├── vendor/
└── src/
    ├── Arena.php
    ├── Assassino.php
    ├── Batalha.php
    ├── Cavaleiro.php
    ├── Mago.php
    ├── Monge.php
    ├── Necromante.php
    ├── Personagem.php
    ├── Ranking.php
    └── Vitoria.php

Para executar o jogo, vá dentro da pasta onde está o projeto abra o terminal e execute o comando :

php index.php

pode ser usado tbm o seguinte comando :

C:\xampp\php\php.exe index.php

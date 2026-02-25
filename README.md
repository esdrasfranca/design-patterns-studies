# Estudo de Padrões de Projeto em PHP

Este projeto foi criado com o objetivo de solidificar meu entendimento sobre Padrões de Projeto (Design Patterns) através da implementação prática em PHP.

## Padrões Implementados

Atualmente, o projeto inclui exemplos dos seguintes padrões:

### Padrões Criacionais

*   **Abstract Factory**:
    *   `src/AbstractFactory`: Demonstra uma fábrica para criar famílias de objetos relacionados (writers de CSV, JSON e XML) sem especificar suas classes concretas, com implementações para um sistema "Windows".
    *   `src/UIAbstractFactory`: Um segundo exemplo de Abstract Factory, focado na criação de famílias de componentes de interface de usuário (botões, inputs) para diferentes temas (Dark e Light).

## Como Executar

1.  **Pré-requisitos**:
    *   PHP
    *   Composer
    *   Um servidor web local (como WampServer, XAMPP, ou o servidor embutido do PHP).

2.  **Instalação**:
    *   Clone o repositório.
    *   Navegue até o diretório do projeto e execute `composer install` para configurar o autoload.

3.  **Execução dos Exemplos**:
    *   Inicie seu servidor web e aponte para o diretório do projeto.
    *   Acesse os arquivos `index.php` pelo navegador para ver os padrões em ação.

## Estrutura do Projeto

*   `src/`: Contém o código-fonte dos padrões de projeto, organizados em namespaces.
*   `vendor/`: Dependências gerenciadas pelo Composer.
*   `index.php`: Ponto de entrada para o exemplo do `AbstractFactory` de writers.
*   `index-ui.php`: Ponto de entrada para o exemplo do `UIAbstractFactory` de componentes de UI.
*   `composer.json`: Define as configurações do projeto e dependências.

# Estudo de Padrões de Projeto em PHP

Este projeto foi criado com o objetivo de solidificar meu entendimento sobre Padrões de Projeto (Design Patterns) através da implementação prática em PHP.

## Padrões Implementados

Atualmente, o projeto inclui exemplos dos seguintes padrões:

### Padrões Criacionais

*   **Abstract Factory**:
    *   `src/AbstractFactoryPushNotification`: Abstrai o envio de notificações (E-mail, Push e SMS) para diferentes plataformas (Web e Mobile).
    *   `src/UIAbstractFactory`: Um segundo exemplo de Abstract Factory, focado na criação de famílias de componentes de interface de usuário (botões, inputs) para diferentes temas (Dark e Light).
    *   `src/AbstractFactoryConnectorCloud`: Um terceiro exemplo que abstrai a criação de conectores para serviços em nuvem (AWS, Azure), como armazenamento (Storage) e mensageria (Messenger).

## Como Executar

1.  **Pré-requisitos**:
    *   PHP
    *   Composer
    *   Um servidor web local (como WampServer, XAMPP, ou o servidor embutido do PHP).

2.  **Instalação**:
    *   Clone o repositório.
    *   Navegue até o diretório do projeto e execute `composer install` para configurar o autoload.
    *   Configure as variáveis de ambiente em um arquivo `.env` na raiz do projeto. Você pode usar o `.env.example` como base.

3.  **Execução dos Exemplos**:
    *   Inicie seu servidor web e aponte para o diretório do projeto.
    *   Acesse os arquivos `index-notification.php`, `index-ui.php` e `index-cloud.php` pelo navegador para ver os padrões em ação.

## Estrutura do Projeto

*   `src/`: Contém o código-fonte dos padrões de projeto, organizados em namespaces.
*   `vendor/`: Dependências gerenciadas pelo Composer.
*   `index-notification.php`: Ponto de entrada para o exemplo do `AbstractFactoryPushNotification`.
*   `index-ui.php`: Ponto de entrada para o exemplo do `UIAbstractFactory` de componentes de UI.
*   `index-cloud.php`: Ponto de entrada para o exemplo do `AbstractFactoryConnectorCloud`.
*   `composer.json`: Define as configurações do projeto e dependências.

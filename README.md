# JellyBots: Uma Iniciativa da WaveX Company

https://github.com/artur-duart/jellybots/assets/79976674/043972ab-0683-4edd-a333-e31c9d74c96d

<p align="center">
  <img alt="GitHub top language" src="https://img.shields.io/github/languages/top/artur-duart/jellybots">
  <img alt="GitHub repo size" src="https://img.shields.io/github/repo-size/artur-duart/jellybots">
  <img alt="License" src="https://img.shields.io/badge/license-MIT-%2304D361">
</p>

## 🚀 Sobre o Projeto

Bem-vindo ao repositório do **JellyBots**, nossa solução inovadora para o desafio Global Solution 2024/1 - Blue Future, uma iniciativa da FIAP.

A campanha "JellyBots: a WaveX Company Initiative" está focada no segmento da Economia Azul e sustentabilidade marinha, promovendo a preservação dos oceanos e a gestão sustentável dos recursos marinhos. Este segmento engloba empresas de manufatura e indústrias, organizações ambientais e ONGs, e empresas de tecnologia, unindo esforços para enfrentar os desafios relacionados à poluição dos rios e oceanos.

A inovação tecnológica desempenha um papel central nesta campanha, com o desenvolvimento dos JellyBots - drones submarinos autônomos que monitoram e rastreiam resíduos plásticos, além de coletar dados sobre a saúde dos ecossistemas marinhos.

Nosso objetivo é oferecer uma solução integrada que conecte empresas de diferentes setores para reduzir a poluição dos rios e oceanos, promover o uso eficiente de matérias-primas e apoiar a conservação dos habitats marinhos.

Convidamos você a explorar nosso projeto e juntar-se a nós na jornada para um futuro azul mais saudável.

## 👥 Equipe

| Nome                     | RM     |
| ------------------------ | ------ |
| Artur Duarte de Moraes   | 99507  |
| Lucas Santana Santos     | 99740  |
| Martin Merçon Myczkowski | 551584 |

## 🛠️ Tecnologias Utilizadas

-   PHP
-   Laravel
-   HTML
-   CSS
-   JavaScript
-   Bootstrap
-   MySQL

## 🔒 Testes de Qualidade de Código e Segurança

Os testes de qualidade de código foram executados com o SonarQube, enquanto os testes de segurança da aplicação foram executados com o OWASP ZAP.

Os testes foram documentados neste [documento](TESTES.md).

## ⚙️ Instalação e Uso

Para instalar e utilizar este projeto, siga cuidadosamente estes passos:

1. **Instalação do PHP**

    - Siga atentamente este tutorial no [YouTube](https://www.youtube.com/watch?app=desktop&v=iGeltIgCp18) para a correta instalação do PHP.

2. **Configuração do arquivo php.ini**

    - Navegue até a pasta principal do PHP.
    - Localize o arquivo `php.ini-development`.
    - Faça uma cópia deste arquivo.
    - Renomeie a cópia para `php.ini`.

3. **Edição do arquivo php.ini**

    - Remova o ponto e vírgula no início das linhas para descomentar as extensões `extension=pdo_mysql`, `extension=openssl`, `extension=fileinfo`, `extension=zip`.

4. **Instalação do Composer**

    - Baixe e instale o Composer a partir do [site oficial](https://getcomposer.org/download/).

5. **Clone do Repositório Git**

    - Abra seu terminal ou prompt de comando.
    - Utilize o comando `git clone` para clonar o repositório.
        ```bash
        git clone https://github.com/artur-duart/jellybots
        ```

6. **Navegação até a pasta principal do projeto**

   - Navegue até a pasta principal do projeto.
   ```bash
   cd jellybots
   ```

7. **Instalação das Dependências do Composer**

    - O Laravel utiliza o Composer para o gerenciamento de suas dependências PHP.
    - Execute `composer install` no terminal para instalar as dependências PHP.
        ```bash
        composer install
        ```

8. **Configuração do arquivo .env**

-   Abra o arquivo `.env` e insira as informações de conexão do banco de dados.
    ```bash
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=LaravelDB
    DB_USERNAME=root
    DB_PASSWORD=senha_do_seu_banco_de_dados
    ```

9. **Criação do banco de dados**

-   Utilize o phpMyAdmin ou MySQL Workbench para criar um banco de dados chamado LaravelDB.
    ```bash
    CREATE DATABASE LaravelDB;
    ```

10.  **Migração do Banco de Dados**

-   Execute no terminal o comando para realizar as migrações do banco de dados e criar as tabelas.
    ```bash
    php artisan migrate
    ```

11. **Instalação das Dependências do Node.js**

-   Instale as dependências do Node.js.
    ```bash
    npm install
    ```

12. **Compilação dos Ativos**

-   Compile os ativos de JavaScript e CSS.
    ```bash
    npm run dev
    ```

13. **Inicialização do Servidor de Desenvolvimento**

-   Utilize o Artisan ou o XAMPP para iniciar o servidor de desenvolvimento do Laravel. Execute o comando abaixo no terminal.
    ```bash
    php artisan serve
    ```

Agora você pode acessar o projeto Laravel em seu navegador através de `http://localhost:8000`.

## 📝 Licença

Este projeto está licenciado sob a Licença MIT. Veja o arquivo [LICENSE](LICENSE) para mais detalhes.

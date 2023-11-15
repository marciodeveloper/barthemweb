# Barthem Web Website

Esse projeto está baseado em wordpress rodando com docker e usando redis.

## Configuração do Ambiente

Antes de começar, certifique-se de ter o Docker e o Docker Compose instalados em seu sistema.

## Instalação

1. Clone o repositório:

   ```bash
   git clone https://github.com/marciodeveloper/barthemweb.git
   cd barthemweb

2. Crie o arquivo de configuração do ambiente:

    ```bash
    cp .env.example .env

    Edite o arquivo .env e insira as configurações específicas do seu ambiente.

3. Inicie os serviços usando Docker Compose:

    ```bash
    docker-compose up -d

4. Acesse o Wordpress

    Abra um navegador e acesse http://localhost:8080. Siga as etapas para configurar o WordPress.

## Estrutura do Projeto

A estrutura do projeto segue a seguinte organização de diretórios:

meu-projeto/
|-- docker-compose.yml
|-- Dockerfile
|-- wp-config.php
|-- redis/
| |-- redis.conf
|-- wordpress/
|-- (arquivos do WordPress aqui)


- **`docker-compose.yml`:** Arquivo de configuração do Docker Compose que define os serviços, redes e volumes utilizados pelo projeto.

- **`Dockerfile`:** Arquivo de configuração do Docker para a construção da imagem do WordPress.

- **`wp-config.php`:** Arquivo de configuração do WordPress que contém as definições principais, incluindo configurações de banco de dados.

- **`redis/`:** Diretório que contém o arquivo de configuração do Redis.

  - **`redis.conf`:** Arquivo de configuração do Redis com as configurações específicas do servidor.

- **`wordpress/`:** Diretório que deve conter todos os arquivos do seu projeto WordPress.

  - *Adicione ou remova arquivos conforme necessário para o seu projeto WordPress.*

Certifique-se de revisar e adaptar esta seção conforme a evolução do seu projeto, adicionando detalhes adicionais conforme necessário.

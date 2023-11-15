<?php
// Load the environment variables
require_once __DIR__ . '/vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

// Configurações do Banco de Dados
define('DB_NAME', $_ENV['DB_NAME']);
define('DB_USER', $_ENV['DB_USER']);
define('DB_PASSWORD', $_ENV['DB_PASSWORD']);
define('DB_HOST', $_ENV['DB_HOST']);
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');

// Chaves de Autenticação e Sal
define('AUTH_KEY',         'coloque_aqui_sua_chave');
define('SECURE_AUTH_KEY',  'coloque_aqui_sua_chave');
define('LOGGED_IN_KEY',    'coloque_aqui_sua_chave');
define('NONCE_KEY',        'coloque_aqui_sua_chave');
define('AUTH_SALT',        'coloque_aqui_sua_chave');
define('SECURE_AUTH_SALT', 'coloque_aqui_sua_chave');
define('LOGGED_IN_SALT',   'coloque_aqui_sua_chave');
define('NONCE_SALT',       'coloque_aqui_sua_chave');

// Prefixo da Tabela
$table_prefix  = 'wp_';

// Habilitar Debug (não use em produção)
define('WP_DEBUG', false);

// URL do WordPress
define('WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST']);
define('WP_HOME', 'http://' . $_SERVER['HTTP_HOST']);

// Desativar Edição de Arquivos pelo Admin
define('DISALLOW_FILE_EDIT', true);

// Configuração de Memória
define('WP_MEMORY_LIMIT', '256M');

// SSL para Administração
define('FORCE_SSL_ADMIN', true);

// Forçar SSL para Login
define('FORCE_SSL_LOGIN', true);

// Limite de Revisões
define('WP_POST_REVISIONS', 5);

// Linguagem do WordPress
define('WPLANG', '');

/* Isso é tudo, pode parar de editar! */

/** Caminho Absoluto para o Diretório do WordPress. */
if ( !defined('ABSPATH') )
    define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as Variáveis e Inclui os Arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');

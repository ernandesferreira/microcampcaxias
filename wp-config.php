<?php
/** 
 * As configurações básicas do WordPress.
 *
 * Esse arquivo contém as seguintes configurações: configurações de MySQL, Prefixo de Tabelas,
 * Chaves secretas, Idioma do WordPress, e ABSPATH. Você pode encontrar mais informações
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. Você pode obter as configurações de MySQL de seu servidor de hospedagem.
 *
 * Esse arquivo é usado pelo script ed criação wp-config.php durante a
 * instalação. Você não precisa usar o site, você pode apenas salvar esse arquivo
 * como "wp-config.php" e preencher os valores.
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar essas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'microcampcaxias.local.com.br');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8');

/** O tipo de collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer cookies existentes. Isto irá forçar todos os usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'I#RColE$}#wa-?O)#Z1=uZ!Y]A#e2ST=~nm>P:1TEzjKsY[w@q#Z*-d!eTMl/Y-C');
define('SECURE_AUTH_KEY',  'DA`7WlU]O0XduF+)GkHYq6u3`I~m(q3*hLLYPoAf%sGW<64t|2*m4CzSj6E$`[S3');
define('LOGGED_IN_KEY',    'K*&BtphhtHM^qHC)Q^:k90cGdOGPP.-o]|IZL=T7uE;Tj{H:o <R7Kff7[+VRw9)');
define('NONCE_KEY',        'laM(X[;Un%edp0i|qI^mOn&M&]Z8(1 y!sc/;;G=m+__%|:,t%t*m$gC6)T]B[5K');
define('AUTH_SALT',        '*NCjSIOQwE.A?!M!_VQV:fV2<2%3gXR@@`jCY8V;CMKd]b6c6v(+TaPQjg}@AM`j');
define('SECURE_AUTH_SALT', 'yMzKajb3lvT(X^iFyJdDv)qobHcU%_l]).o+Y#2mDJ|N>L&]bc/VKd$Mv>?N+%0c');
define('LOGGED_IN_SALT',   'Wo~jWwac6;d<Qv_!QpJ[hE Ex:v5NkP&n,nUf4[Oe^Rb(PF*4Mbw%1DI3At^r D1');
define('NONCE_SALT',       '&=%eZzNU>]z:+9b|_roNsvAg0ot>Mok(>S0qj.D|!$q!I`V02p2;ge=[%},YaP=e');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';


/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * altere isto para true para ativar a exibição de avisos durante o desenvolvimento.
 * é altamente recomendável que os desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** Configura as variáveis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');

<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações
// com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'db_joannas');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'c.XJ(a8wd&M*w[Y!^TYW3kmI9x:{xGXWL{K,FE23*;m5N|!*sHFysy}Y7IN0FqK^');
define('SECURE_AUTH_KEY',  'U(`;vbW5Cu%@9DO*:oeN>1wh-c wL@-AF++o&|IPo&M!i#gM{$ <>el8T3fl((yG');
define('LOGGED_IN_KEY',    '2Fma`[6iiGmgV`qD.T>nyUsJu%HY25Yc3i=GL=l7Y1U]1yQ]^bbLyce%=uE0&W6^');
define('NONCE_KEY',        'J|sgY8Y>1@|?d@(bo]Uo< AFR N~aO~%p4o$nE:+Hap*iRzR84]%47(>.dMZ7Bo,');
define('AUTH_SALT',        '_WGW_#t*SA@k{{?a9mw-,R)#K 0b3Rg|ilLR):eQKFcbOq.&MWB3ZE`v~p}>f.m?');
define('SECURE_AUTH_SALT', 'txSdBAl]iTctwQ{%?c{NyUo8cS0]I[UFgp2|Q%P<4s4i+f@32b/(kJlFS}<sOJ,n');
define('LOGGED_IN_SALT',   ';.-K;jw9rxR3(,39j~YV$!FE:Elx4yA Z-sH_zmEm[H 9%m+2UhO-wj:8i{r,^ka');
define('NONCE_SALT',       '_o>Y>}WNL!AqI]Onglyhqg}^dVl@L8d(nb(Ieg-z;a?F.xFysv_m.ECfXT3wPM-P');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');

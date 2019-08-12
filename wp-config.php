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

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'son_wordpress' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '<jpl@xSSt0^O-E-XxUh f_-J5wP8*m*u4!>hX*ihd)~2Avc?4 $ExxuSAY@;y+k;' );
define( 'SECURE_AUTH_KEY',  '@4-}:H`XY%NaN<bUV:og+b_C6GpzZN{/%S)_VH$}@AV}Qa=N!xH:o^>is.B;%hQC' );
define( 'LOGGED_IN_KEY',    'Q,I<Tdzj r~{O%52fHCx]j!TNb> KKVqmtGr@aixhC_w`wqf&f[P[+F-H0NBH=)U' );
define( 'NONCE_KEY',        'WG: 1?7Vt|HxW^+WgurHX:Vy6z0e8_xQy,)e|.9rZe2[u%Z<!MLCskuZ9E1E)7(M' );
define( 'AUTH_SALT',        'BEknV&|_5/o@oy?e]_HXimi^ZQ/MTqQy&*=An#ar2rs3)IWJ*EsV[)3HXG g@:](' );
define( 'SECURE_AUTH_SALT', '[nLJyI,A1%~nwhWLq:T|OeRlA1Za 6$[1jxfOdKHK!:<ey5ni&w&;}1ch5ppIdL#' );
define( 'LOGGED_IN_SALT',   'V5D/_-q?2*w6?2D=F/KeMV^gA=}?V){Li$,kXS;.;u3Pu.<UXa*$F?iZ ;sVG}[&' );
define( 'NONCE_SALT',       '%D8E4/KqOJ7Sku5Y/g2X7xSXOq$UJz?p>x,^F},k$PQw<Kxw!*.RmE @,Aj)t>_~' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

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
define('WP_DEBUG', true);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');

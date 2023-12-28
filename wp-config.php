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
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'portadeentrada' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         'P).9%8FuyBNyjq$fT2_s2@%^-(L41<$e3W{;l:*x5SreW2{S7IM! 1o>PD6ZnBxd' );
define( 'SECURE_AUTH_KEY',  ')~+!2N#*:T/^6#:1kTBA#`k%}c}B]6SG >z62ojLfz0!2h)h[&fRDp^[D,,w),T[' );
define( 'LOGGED_IN_KEY',    '?^5W*M>2?j@T9QmLER[Zpu/).*8KM{|exY?il*ln&F#%:p)7sDY;e}1bIS~jbca2' );
define( 'NONCE_KEY',        '5:1n)*<gE%#EfN(57uq*X}`/68.f>p;fd+}Lp8k9)E?/!cFH^V*le5q_%|!YQ kb' );
define( 'AUTH_SALT',        'N]A>;rOf4-qcl~@~?_`T:.mex25lF^8vr@C:0CW;FQ_3Yw)ixMKL/IL*65vplqLy' );
define( 'SECURE_AUTH_SALT', 'f[SM.)[hH3@ndSW/>UEzVqWSMsJ+6{4>w:Tr^zkv3 |EZfb408I~b@}G3FxBSKF$' );
define( 'LOGGED_IN_SALT',   'Pt^ZB/g)Q`q(zKAb=X3cYI&%T`WN$(.jQ_*lP4Rcd6kL-y$l-plLUi+Qr6%,@o%b' );
define( 'NONCE_SALT',       '$GY?qrzd3R)hp#3l(NOTsaabP5F|q1Oz:V^H<WLR[Pe~K$9!1+KK{lv;l{T`zeoK' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */




/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';

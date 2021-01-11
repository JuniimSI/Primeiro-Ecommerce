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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'bd_wp_ec' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'juniimsi' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', 'juno4848' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost:8889' );

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
define( 'AUTH_KEY',         'bS0rgsg%{Uo#qvJ;8BWauoj8..V4JeHY:}_`WV1l{&/$N.Boq+iE)XU8c[]q%F:k' );
define( 'SECURE_AUTH_KEY',  'R32$ApQ(G@JD5Xb`h=dZI*`@]%qxQ[t{ZPZ-X4`ab0*GHg+loWos[B|4gh7ILHq]' );
define( 'LOGGED_IN_KEY',    'hh^AE[@xL[GCa-niG#M<X8p&uebWZ*o1^IK-OE+>jW~Khu;/=U+~5qWm7Dp9|(v8' );
define( 'NONCE_KEY',        'Xn%5`2VU<+]{HQ4.&<{bi9$BSRZA`v Kw!1;p8DG}WZN8jHnB/mBQp 5ZNqD@JWz' );
define( 'AUTH_SALT',        ' K<ri@H:]v.nFgk7, _6Yux;0d~RUDCg.7NSyA~tWHZ;+aA:G,2*1%:Vo`gD($B^' );
define( 'SECURE_AUTH_SALT', 'rPvo8R6^1vVO3ixiyAK:*/M-1sH4Z%tLY*.+WhYTKU3dOz4ac4fg;&3nBOn5HL3n' );
define( 'LOGGED_IN_SALT',   'IK#9siQ$CpOJ~9TE`-|!`q<b?[f]p]+9tj.S5z%dYL`i&[A2:G^]0A<VJf$<Y+{i' );
define( 'NONCE_SALT',       '|.X8>?*qb!~myAHPA@!K8*,zE8:jqNNsd=`ZGMd9Ngt^9]OWbMPwyD|LdE1op**[' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'ec';

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

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';

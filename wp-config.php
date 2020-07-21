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
define( 'DB_NAME', 'primeirotema' );

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
define( 'AUTH_KEY',         'OLJV-4CL;f]rJ/mvqQ4C{hr4th]/OAHqe4EZFG7G6gq*f[nxoXguhx[jp,ugD>%5' );
define( 'SECURE_AUTH_KEY',  'PkNgl|;P=~vx_H02GX^JwWh*%lJ8>Bz=3+t5m36[I#RMe4{9KQX=y_V5)1PMwm-3' );
define( 'LOGGED_IN_KEY',    'R6^g`,<G+4E}nFa/v%I;]8CmYJISP ^lw!%+k$edzH>A3&<(|*E[x[Nfi]FEj%JP' );
define( 'NONCE_KEY',        'A/LP,SG%`-+{+4B_D$y`;:|k/-ia#,AJ^@hnK=rssocZc!3~R9i^r]L_R_`$mbr[' );
define( 'AUTH_SALT',        ']KPBf/85*DJo_L9M0e>!/2VCy*Dh<(9v1,Ma&b-9iM6F.LDd+g<)yf@*3]<rRAMB' );
define( 'SECURE_AUTH_SALT', ',_4vt<n)6ly?_)C!d1>QYEEhm{x]?G0<-PS>]Xd2c<jDX~o4@4PB wLt.]+Mr#m:' );
define( 'LOGGED_IN_SALT',   '(Q+bi%@B6D_JvP@w`-C=bXabU>%E8sQ1Y5#Pf5p.)q`hsn@k{T16p.b-AT$L8i%8' );
define( 'NONCE_SALT',       'P6d#^]-w}vp*K^#{.R&8Kf[9NxFEvj9}4TNP#wNw5e:Y~{?V>G2en2acfpNZGGJ:' );

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

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';

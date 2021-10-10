<?php
/** Enable W3 Total Cache */

/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'chaletsetcaviar' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Yfh=T?;9.u(-ea;8dySHi#p6z|%3Jo!k?&_jv47#|Jg]BNl/JJWI@2~u ZkuF#RM' );
define( 'SECURE_AUTH_KEY',  '<YZW1*+)*T#dyhLaQxG~FKDY33.#7R|n)t:7 d L?BYj2[N4`rH8n*!t)h29)=?.' );
define( 'LOGGED_IN_KEY',    '41C{s/ZLhJAALN$OG74LNIO!@7;C9*h-?~bZ&Wo* O>2TC-adFFV~nTbY}pRQ= @' );
define( 'NONCE_KEY',        'z!5beay:7KqyzE_U]q*U?!]4o.4+/)#}ehC;XA!.ACFUpQuq[SA+).O +ib^U&;U' );
define( 'AUTH_SALT',        '<y>5mr[=%J!}7|p 8{0-ms:Ml6A.]rp&E#Mv!+>CF4?6dD(Sba0^mR,V<RjpsiGs' );
define( 'SECURE_AUTH_SALT', ':h8~4K3G}HME9MFvMN+-G?<6HO!O>d3[e((JTo|9JZSI(Y&& ZKx3~?hQ9DOq:|m' );
define( 'LOGGED_IN_SALT',   ',/Wm0VB;nZ.LHC2 .^wcEuckk j=f+THDH(mSE?`>pn<g}YxHQ@2Z@SU#P2fa0(]' );
define( 'NONCE_SALT',       'Uv<bob D=aW> `InHSHsovWMg)O2t>~3b*beSeiaw`GbUay|!F`9B!&a32.!3^c_' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );

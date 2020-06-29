<?php
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
define( 'DB_NAME', 'Wordpress' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'qJMkf54q7ni0oAlnK&iu1[?5kf%xa^;-Suh(FbC:co_*2&L{rrkL7$=8B*ad/#2A' );
define( 'SECURE_AUTH_KEY',  '#?F}ZcMgS!X}09~PKNIq<0A@]ct RzT&%oCK5zVCnSo$XQDaAMiRvFNNzqP<4W#7' );
define( 'LOGGED_IN_KEY',    ';E~yBY9GLxov]dtkH]k/)#;J~M>D7er&,VU&C>&J5`h>k3q5f:7sX5Mu4U!u=iGs' );
define( 'NONCE_KEY',        '6qBD?*M24=RXX*gEqAq>gP7o(NOLPP%lSP(e^_f#kJN6<H7(5^F|(t%/bidZz1iB' );
define( 'AUTH_SALT',        'K+f#D45q9ER5]r9f$D4@UB+DxlKa^L*BiPk+]*&;:D-1q#!,/0*!}8epsBs!*-dL' );
define( 'SECURE_AUTH_SALT', ',MKfl;n]@:og41:ci_l]V1R};1jZXFytPs}=d_`Rv?QuSl<(f-];b}h=V<4N21lG' );
define( 'LOGGED_IN_SALT',   '2Mm3P{Z*V(YP5?u^1.PsznYJg!ib}/[~Jr0kt2=eR:9kTb49J>ljR~;~Ty #G<r3' );
define( 'NONCE_SALT',       'L+b71ag%8HL>,:_H~WZ9TI<+``VZ^I)Eq1H8$cxVpV`,kwh.zZ;Ijln<@,IvryqL' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'jfoncjiqnuci';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
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

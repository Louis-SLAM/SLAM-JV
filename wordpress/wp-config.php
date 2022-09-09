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
define( 'DB_NAME', 'SLAMJV' );

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
define( 'AUTH_KEY',         '(U;jX,q--]mw<^_?P+y{W0U5O5Uue<%7q#>7BMnh2:#A:H#[j%uM1Jm~].Stuyw^' );
define( 'SECURE_AUTH_KEY',  '1wkZVSD7+ZD0[O@K&i#^7{p-aE=GhqJlkm:ltUiGm5EU+8wd0KLo#((RG;TShcHr' );
define( 'LOGGED_IN_KEY',    '$3xA7cyu:otUlTEcfpHvBx0l5Z7i-rnxJ^3WY D e2%*/TX*[sX;RkZLR0UU40CP' );
define( 'NONCE_KEY',        'Q[<q6=ER_&CGt,7ha:e~(5_F<5aaK%{,2_bTE8<tcQ/7_[;QI[DcECny?b;&(cIP' );
define( 'AUTH_SALT',        ' xIg80x95p7T1v|,Qm.FXeTex{TP/^)7?}^f1*fvc6,12zsFZ:tZAFgio2XOx!y?' );
define( 'SECURE_AUTH_SALT', '2N*C8hbRjcA);I4mX&kA}Y<x6d&x)8.m_y]!YALM}nT>uN94|T62|!D,o(}#C}A$' );
define( 'LOGGED_IN_SALT',   'nLm-mb;I`fp~;l)T)MKnn]}]U c%y?;3Bw=aj%?aLOQ_/p{b oHf@tYQ_T_L;9gw' );
define( 'NONCE_SALT',       ')Y}wybM8mIy@}wy2($Sld.sE h1]KAVp.^cS7Bsp$kG<:C#akeE$?BGos1/)fgK4' );
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

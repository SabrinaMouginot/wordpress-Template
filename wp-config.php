<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'wordpress-template' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'Sab' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '6n_9Jr3wdx2@lXnn' );

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
define( 'AUTH_KEY',         'W24!n[|z_JbzOt(>&@l<88W, =R^mo<J+O?yI/.-O[*eD@9D.B{NrC3KiJinl=_@' );
define( 'SECURE_AUTH_KEY',  '3vS;v|bcq$RBx+e?>GKqYf[ebaNv]Gv>t?}A.pn^^mxuQcc]jGOE:zcHrz_/aOMi' );
define( 'LOGGED_IN_KEY',    'Zmrz~=Rb.]Q>Kd,{U;MGgiPx>_|75XK9aVb!}l}lqC#vF/1vVJOpxO86j;]NxpCP' );
define( 'NONCE_KEY',        'khRJ:z#3P_uXvo>q8=ki`G?QsoX37)UsDX,813mviRge2>XQZ0Tc_dPT<Mn:BK_,' );
define( 'AUTH_SALT',        ';Cxws70Y:ph.K6g:[o}.b-1U>y&w5vBfMRb.|rG8940jmM<DM)_YI`(_hJeHp<*^' );
define( 'SECURE_AUTH_SALT', '8>Gxz:B <K!K1lF]ghn3E.;$`0(OqeQ(lTX.or%v,HVvHlFw~Oe9LMkM3+1./2pf' );
define( 'LOGGED_IN_SALT',   'ku/lF~X()}ROWpK;GzR{kHLIyK_g+oXB~NB3QYnF5!T{)s)$EAfT[wffY5duPGXb' );
define( 'NONCE_SALT',       'H6]#Ag613GQrg.`UNl|D~dq,EKgQl9_0VeFmw6ZZiK]cgV2Y_0G0;1$m;w%]o@Mh' );
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

<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'wordpress');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'u>J{A6>TqxYCsnd/.B68R15s}:tw _[hu_J!nYM{=Q<BZtkM?T;w}7Be46!Iw/, ');
define('SECURE_AUTH_KEY',  'b_&%v%SggoEM>w,MUq? AmdD]/Z0Jp919BGf3H9r4b]RX{n~34[xjdmHa1M[FWYe');
define('LOGGED_IN_KEY',    '~P?pLv8g$v+AU $)3UP,s:[i*>#luzWm06=`7eD_<opT6L8!09I2A5R)sZ,e^g}A');
define('NONCE_KEY',        '@7 i-X9p3iDE6<;I3fGUq_KDewro@Ku9d-MCF7Z$`ypmRm|8P{GhCtgf1mcgef!|');
define('AUTH_SALT',        '$[8gLZ=SO`OEmq(FQ;L}|2s%W@y8i`I$r0%J5c@0da^rq:u;qvQV7oe_<WG!@2Kq');
define('SECURE_AUTH_SALT', 'rC&}v;6 ye77{)^{)Br_@8]VVFPL-gkd=pD>A){rqQ9;1^.k7~`F`7xq58F6LcO[');
define('LOGGED_IN_SALT',   'za<Z%(v0!D$QeI4K[!BrrLH0iv-Xo1;|8 DS?iUvN%0nc~$H5{.1Eje_s5U<voY>');
define('NONCE_SALT',       '>QG4Ks%nU(Y!=tPDHXQo%qnT]#-#.td+.C}#q8~Eg6Zy~7`{gJ]VgW-_$Bfe%XYm');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_';

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
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
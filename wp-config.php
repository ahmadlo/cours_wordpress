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
define('DB_NAME', 'cours_wordpress');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'Passer@1');

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
define('AUTH_KEY',         '~!hMRF%fpH8gcIi5UU^f`DZGPvVJ9GSl[~o=nJ%5m9R+)c$)|uPg0u5~:xOltdUG');
define('SECURE_AUTH_KEY',  'z(z& SIgBal]wJ0bX#ZA;vAu5o1gKn*hM 20B8^7RG?t!d,qIVIVmlMspt!0jqZZ');
define('LOGGED_IN_KEY',    '#jjHg*9/hR~x.O|{_[-s6#zU5Tb*ekO-L:KoT%l1N{jsJuGuvW^djmY`8_w?*$bS');
define('NONCE_KEY',        '.9N_8V,v,]4KK>f.y~mrJ<L~/n;<#)x;:um2J6~#Y;CjF7}}}pV>K&rJdx&_bq`+');
define('AUTH_SALT',        'aL2KDUHctX<L,ovU5&8^>:k[|K7)B9f_j:92Ro2T4u>*@C_lu-8e 1~g-NBkYmw1');
define('SECURE_AUTH_SALT', '!MivzGq#W#a=M,kD.,qMq:7RXP07UE1.MWSZTwyM2~kqY+PfwL48--VG?!nKHN{H');
define('LOGGED_IN_SALT',   '|Q)[4jk#:s ?|VBFk{rR~pWmUsNh*1Z:%o5E?W@-qC5BW[-y7EWfm/CC56ei9im1');
define('NONCE_SALT',       'l:C4f ,6!p#sBJ7^8=H3bLavBHdOGY*pL+hh;G#%rRR]<g#ZkCyEXg>XMoWHu>9T');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'cpw_';

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
define('WP_DEBUG', true);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
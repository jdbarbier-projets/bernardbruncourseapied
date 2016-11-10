<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur 
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C'est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d'installation. Vous n'avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'db515438179');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'dbo515438179');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '63xDKrBj');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'db515438179.db.1and1.com');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8');

/** Type de collation de la base de données. 
  * N'y touchez que si vous savez ce que vous faites. 
  */
define('DB_COLLATE', '');

/**#@+
 * Clefs uniques d'authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant 
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n'importe quel moment, afin d'invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'y%kn$Fpi.dySSx|5csD;fN_L4?vW|[_P}h97(AWoR*J46HjgD)R k>*ZAY@l@4}_');
define('SECURE_AUTH_KEY',  '5wQ^TwAKy+3ce4T)(va+O{45k!R+bP%7HHY^qQT|P`K1$5E&/0M(,$?ryU_FBWUU');
define('LOGGED_IN_KEY',    '|D4,Z+s</i2ic|,XDlAbc= XU)8vt+*/FHdS=*X.6%ej/N:}11,Z2FkiYmnAh@8&');
define('NONCE_KEY',        '4*.J(A2-Bx)|SnZH?{<5>7`xh6o=wNtXYt|d5a#,bc+)-YryNT;Rn?[Wy&F@y,&|');
define('AUTH_SALT',        'RvTIrK^TaXvcwwq3kjmks>Y 63+Q)>{xB:C~:P,c{Og:E/L$N57,LY(nK}w;6!{D');
define('SECURE_AUTH_SALT', ' sOQTXsdYh2{%]46?n`1-[,0%KI<D`;#[J~Wi 3HVU>=UYvLUCv>J=SxUbc0hzbB');
define('LOGGED_IN_SALT',   'Fref{c2?`*Wn5(/R[WM9Fnd)coWE?@ 9E5.Gbtc/RG`0,Q4-W6X}7}!2M-uSOrz&');
define('NONCE_SALT',       '|{:nb-e/. 3&-]VpAXlER`iPc*oR{bHrL#zyDzV$;]Mh`JKj^B2B7fdl}1h+J}sY');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique. 
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'wp_';

/**
 * Langue de localisation de WordPress, par défaut en Anglais.
 *
 * Modifiez cette valeur pour localiser WordPress. Un fichier MO correspondant
 * au langage choisi doit être installé dans le dossier wp-content/languages.
 * Par exemple, pour mettre en place une traduction française, mettez le fichier
 * fr_FR.mo dans wp-content/languages, et réglez l'option ci-dessous à "fr_FR".
 */
define('WPLANG', 'fr_FR');

/** 
 * Pour les développeurs : le mode deboguage de WordPress.
 * 
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant votre essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de 
 * développement.
 */ 
define('WP_DEBUG', false); 

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');

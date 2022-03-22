<?php

// functions.php permet de:
// - intégrer des packages installés avec composer
// - ajouter des paramètres de sécurité
// - ajouter des paramètres de localisation
// - contrôler les fichiers CSS et les fichiers JS que le thème va charger
// - déclarer des fonctionnalités spéciales dans le thème

/**
 * composer
 */

// chargement de l'autoloading de composer
// require get_template_directory() . '/vendor/autoload.php';

/**
 * sécurité
 */

// désactive l'édition de fichier dans l'admin
define('DISALLOW_FILE_EDIT', true);

/**
 * localisation
 */

// choix du fuseau horaire
date_default_timezone_set('Europe/Paris');
// choix du réglage régional
setlocale(LC_ALL, 'fr', 'fr_FR', 'fr_FR.utf8', 'fr_FR.ISO_8859-1');


/**
 * CSS
 */

// cette fonction se charge d'intégrer les feuilles de style du thème
function my_theme_enqueue_styles()
{
    // chargement d'un fichier CSS
    wp_enqueue_style('style', get_stylesheet_uri() , []);
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');



/**
 * JS
 */

// cette fonction se charge d'intégrer les scripts JS du thème
function my_theme_enqueue_script()
{
    // chargement d'un fichier JS
    wp_enqueue_script('my-theme-main', get_stylesheet_directory_uri() . '/js/main.js', []);
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_script');

/**
 * fonctionnalités du thème
 */

// activation de la fonctionnalité des balises HTML5
add_theme_support('html5');
// activation de la fonctionnalité du titre du site
add_theme_support('title-tag');
// activation de la fonctionnalité des vignettes
add_theme_support('post-thumbnails');

<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fleurs_d\'oranger_&_Chats_errants
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'foce' ); ?></a>

	<header id="masthead" class="site-header">
   <!-- Modifications du menu à partir d'ici : la nav est remplacée par une div et on épure le contenu pour ne laisser que le titre et le menu burger-->
		<div id="site-navigation" class="main-navigation">
            
        <div class="menu">
          <a class="site-title " href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a>
          <div class="burger">
            <span></span> <!-- span vide pour créa en css du menu burger -->
          </div>
        </div>

        </div>
        <!-- fin des modifications du menu -->
    </header>
    <!-- Et ajout du fichier menu.php contenant le nouveau menu en full screen : -->
    <?php include_once('template-parts/menu.php'); ?>

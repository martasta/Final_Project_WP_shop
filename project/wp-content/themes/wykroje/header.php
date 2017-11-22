<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width">
    <title><?php echo get_bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>
<body>
<div class="main-menu">
<nav class="main">
<?php wp_nav_menu([ 'menu' => 'main' ]) ?>
</div>

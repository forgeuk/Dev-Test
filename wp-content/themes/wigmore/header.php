<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title(); ?></title>

    <!-- Adobe Typekit Fonts -->
    <script src="https://use.typekit.net/ucx0dgc.js"></script>
    <script>try{Typekit.load({ async: true });}catch(e){}</script>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php $defaults = array(
	'container' => 'nav',
	'theme_location' => 'primary-menu',
	'menu_class' => 'nav-collapse'
); ?>

<header class="header">

    <div class="container container--header">
        <div class="logo">
            <a href="<?php echo get_site_url(); ?>">
                <img style="width: 45%; height: auto;" src="<?php echo get_template_directory_uri() . '/images/wp-logo.png'; ?>" alt="<?php echo wp_title(); ?>" />
            </a>
        </div>

		<?php wp_nav_menu($defaults); ?>
    </div>

</header>

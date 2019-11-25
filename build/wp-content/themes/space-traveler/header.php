<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="apple-touch-icon" sizes="180x180" href="<?=get_site_url();?>/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?=get_site_url();?>/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?=get_site_url();?>/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?=get_site_url();?>/favicon/site.webmanifest">
    <link rel="mask-icon" href="<?=get_site_url();?>/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <link href="https://fonts.googleapis.com/css?family=Lato|Bungee+Shade|Titillium+Web&display=swap" rel="stylesheet">

    <?php 
    wp_head(); 
    $parentTitle = strtolower(get_the_title(wp_get_post_parent_id(get_the_ID())));
    ?>
</head>

<body>
    <!--[if lte IE 9]>
	  <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
	<![endif]-->
    <p class="browserupgrade ie10">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    
    <!-- Preloader -->
	<div id="preloader" style="position: fixed; top: 0; left: 0; right: 0; bottom: 0; background-color: #fff; z-index: 1090;">
		<?php if ( is_front_page() ) : ?>
	  		<div id="status" style="width: 100px; height: 100px; position: absolute; left: 50%; top: 50%; background-image: url('<?=get_template_directory_uri();?>/css/svg/preloader.svg'); background-repeat: no-repeat; background-position: center; margin: -50px 0 0 -50px;">&nbsp;</div>
	  	<?php endif; ?>
    </div>
    <!-- /Preloader -->
    <header class="header">
        <div class="container">
        <nav class="utility">
            <?php
                wp_nav_menu( array(
                    'menu'            => 'utility',
                    'theme_location' => 'utility',
                    'container'       => 'ul',
                    'menu_class'     => 'utility__items',
                    'menu_id'         => false,
                    'depth'          => 1,
                    'fallback_cb'     => 'bs4navwalker::fallback',
                    'walker'          => new bs4navwalker()
                ) );
            ?>
            </nav>
            <div class="nav-bar">
                <div class="header__logo-container">
                    <?php the_custom_logo(); ?>
                    <a href="<?php echo home_url() ?>" class="header__link">
                        <div class="header__logo-text">
                            <p>Starship</p><p>Trooper</p>
                        </div>
                    </a>
                </div>
                <button type="button" class="mobile-nav-toggle" aria-label="Toggle navigation">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <nav class="nav">
                    <?php
						wp_nav_menu( array(
							'menu'            => 'primary',
							'theme_location' => 'primary',
							'container'       => 'ul',
							'menu_class'     => 'nav__items',
							'menu_id'         => false,
							'depth'          => 2,
							'fallback_cb'     => 'bs4navwalker::fallback',
							'walker'          => new bs4navwalker()
						) );
					?>
                </nav>
                
            </div>
            
        </div>
    </header>
        
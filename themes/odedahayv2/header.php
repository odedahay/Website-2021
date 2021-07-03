<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="shortcut icon" type="img/png" href="<?php echo get_theme_file_uri('images/favicon.png') ?>">
        <?php wp_head(); ?>

    </head>
    <body <?php body_class(); ?>>
        <header class="header">
            <div class="logo">
                <a href="<?php echo site_url() ?>">
                    <img src="<?php echo get_theme_file_uri('images/odedahay.svg') ?>" 
                    alt="Ode Dahay"
                    class="logostyle" />
                </a>
            </div>

            <div id="menu-bar" class="menu-bar">
                <div id="menu" onclick="onClickMenu()">
                    <div id="bar1" class="bar"></div>
                    <div id="bar2" class="bar"></div>
                    <div id="bar3" class="bar"></div>
                </div>
              
                <ul class="nav" id="nav">
                    <li><a href="<?php echo site_url() ?>" >Home</a></li>
                    <li><a href="<?php echo site_url('/about-me'); ?>" <?php if(is_page('about-me') or wp_get_post_parent_id(0) == 9) echo 'class="active"' ?>>About Me</a></li>
                    <li><a href="<?php echo site_url('/works');?>" <?php if(get_post_type() == 'post') echo 'class="active"' ?> class=" dropbtn" >Works</a></li>
                    <li><a href="<?php echo site_url('/contact');?>" id="open">Contact</a></li>
                </ul>
            </div>


        </header>

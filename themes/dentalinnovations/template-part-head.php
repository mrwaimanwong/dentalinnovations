<?php global $dm_settings; ?>

<div class="container dmbs-container">

<?php if ($dm_settings['show_header'] != 0) : ?>

    <div class="row dmbs-header">
        <div class="dmbs-header-inner">
        <?php if ( get_header_image() != '' || get_header_textcolor() != 'blank') : ?>

        <?php if ( get_header_image() != '' ) : ?>
            <div class="col-md-4 dmbs-header-img text-center">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" /></a>
            </div>
        <?php endif; ?>

        <div class="col-md-8 dmbs-header-text">
            <?php if ( get_header_textcolor() != 'blank' ) : ?>
                <h1><a class="custom-header-text-color" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
                <h4 class="custom-header-text-color"><?php bloginfo( 'description' ); ?></h4>
            <?php endif; ?>
            <?php else : ?>
                <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
                <h4><?php bloginfo( 'description' ); ?></h4>
            <?php endif; ?>
        </div>

        <?php if ( has_nav_menu( 'main_menu' ) ) : ?>

        <div class="row dmbs-top-menu">
            <nav class="navbar navbar-inverse" role="navigation">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-1-collapse">
                            <span class="sr-only"><?php _e('Toggle navigation','devdmbootstrap3'); ?></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>

                    <?php
                    wp_nav_menu( array(
                            'theme_location'    => 'main_menu',
                            'depth'             => 2,
                            'container'         => 'div',
                            'container_class'   => 'collapse navbar-collapse navbar-1-collapse',
                            'menu_class'        => 'nav navbar-nav',
                            'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                            'walker'            => new wp_bootstrap_navwalker())
                    );
                    ?>
                </div>
            </nav>
        </div>
        </div>

    <?php endif; ?>
    
    </div>

<?php endif; ?>
<?php foreach( get_cfc_meta( 'banner_content' ) as $key => $value ){ ?>
        <div class="detail-banners">    
            <div class="banner-image">
                <img src="<?php the_cfc_field( 'banner_content','banner-image', false, $key ); ?>" />
            </div>
            <?php }  ?>

            <?php foreach( get_cfc_meta( 'banner_content' ) as $key => $value ){ ?>
            <div class="banner-content">
                <div class="banner-content-inner">
                    <div class="banner-heading">
                    <?php the_cfc_field( 'banner_content','banner-heading', false, $key ); ?>
                    </div>
                    <div class="banner-subtext">
                    <?php the_cfc_field( 'banner_content','banner-subtext', false, $key ); ?>
                    </div>
                    <div class="banner-button">
                    <?php the_cfc_field( 'banner_content','banner-button', false, $key ); ?>
                    </div>
                </div>
            </div>
        </div>
    <?php }  ?>
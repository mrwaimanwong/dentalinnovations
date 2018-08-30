    <div class="dmbs-footer">
    <div class="dmbs-footer-inner">
        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Section') ) : ?>
        <?php endif; ?>

            <?php
                global $dm_settings;
                if ($dm_settings['author_credits'] != 0) : ?>
                    <div class="row dmbs-author-credits">
                        <p class="text-center"><a href="<?php global $developer_uri; echo esc_url($developer_uri); ?>">DevDmBootstrap3 <?php _e('created by','devdmbootstrap3') ?> Danny Machal</a></p>
                    </div>
            <?php endif; ?>

            <?php get_template_part('template-part', 'footernav'); ?><br>
			<!--start social lgos-->

			<div class="footer-social-logos">
				<a class="" href="https://www.facebook.com/dentalinnovationsinc" target="_blank"><img class="" src="../wp-content/uploads/2018/06/facebook-32px.png" alt="" width="32" height="32" /></a> 
				<a class="padding-left-10px" href="https://twitter.com/Dental_Innovate?lang=en" target="_blank"><img class="" src="../wp-content/uploads/2018/06/instagram-32px.png" alt="" width="32" height="32" /></a> 
				<a class="padding-left-10px" href="https://www.instagram.com/dental_innovations_inc/" target="_blank"><img class="" src="../wp-content/uploads/2018/06/twitter-32px.png" alt="" width="32" height="32" /></a>
			</div>
			<!--end social logos-->
        </div>
    </div>
</div>

<!-- <script type="text/javascript" src="http://www.dentalinnovationinc.com/scripts/infsoft-javascript.js"></script> -->

<!-- end main container -->

<?php wp_footer(); ?>
</body>
</html>

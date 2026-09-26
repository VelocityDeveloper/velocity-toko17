<div class="header-top bg-theme">
    <div class="container p-0 text-center text-md-start d-md-flex align-items-center justify-content-between">
        <?php $sitelogo = get_theme_mod('custom_logo'); ?>
        <div class="logo-header">
            <?php if ($sitelogo) : ?>
                <a href="<?php echo esc_url(home_url('/')); ?>">
                    <img class="img-fluid" src="<?php echo esc_url(wp_get_attachment_image_url($sitelogo, 'full')); ?>" alt="<?php echo esc_attr(get_bloginfo('name')); ?>" loading="lazy">
                </a>
            <?php endif;  ?>
        </div>
        <div class="profile-icons px-2">
            <div class="d-flex justify-content-center justify-content-md-end align-items-center">
                <div class="p-2"><?php echo velocity_toko17_profil(); ?></div>
                <div class="p-2"><?php echo do_shortcode('[wp_store_cart size="16"]'); ?></div>
            </div>
        </div>
    </div>
</div>
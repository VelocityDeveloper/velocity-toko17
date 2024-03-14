<div class="header-top bg-theme">
    <div class="container p-0 text-center text-md-start d-md-flex align-items-center justify-content-between">
        <?php $sitelogo = velocitytheme_option('custom_logo'); ?>
        <div class="logo-header">
            <?php if ($sitelogo) : ?>
                <a href="<?php echo get_home_url(); ?>">
                    <img src="<?php echo wp_get_attachment_image_url($sitelogo, 'full'); ?>" alt="Site Logo" loading="lazy">
                </a>
            <?php endif;  ?>
        </div>
        <div class="profile-icons px-2">
            <div class="d-flex justify-content-center justify-content-md-end align-items-center">
                <div class="p-2"><?php echo do_shortcode('[profile]'); ?></div>
                <div class="p-2"><?php echo do_shortcode('[cart]'); ?></div>
            </div>
        </div>
    </div>
</div>
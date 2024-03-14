<footer class="site-footer p-0 bg-gray" id="colophon">
    <div class="footer-sidebar container p-md-0">
        <div class="row py-4 mx-0">
            <?php
            for ($x = 1; $x <= 4; $x++) :
                if (is_active_sidebar('footer-widget-' . $x)) {
                    echo '<div class="col-md-3">';
                    dynamic_sidebar('footer-widget-' . $x);
                    echo '</div>';
                }
            endfor;
            ?>
        </div>
    </div>

    <div class="site-info text-white text-center bg-theme py-3">
        <div class="container p-0">
            <small>
                © <?php echo date("Y"); ?> <?php echo get_bloginfo('name'); ?>. All Rights Reserved.
                <br>
                Design by <a class="opacity-50 text-white" href="https://velocitydeveloper.com" target="_blank" rel="noopener noreferrer"> Velocity Developer </a>
            </small>
        </div>
    </div>
    <!-- .site-info -->

</footer>
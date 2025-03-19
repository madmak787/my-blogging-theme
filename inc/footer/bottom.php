<div class="footer-bottom fl-wrap">
    <div class="container">
        <div class="copyright">
            <?= !empty($mmb['copyright']) ? $mmb['copyright'] : '<span>&#169; MADMAK787 '.date('Y').'</span> . All rights reserved.' ?>
        </div>
        <div class="to-top"> <i class="fas fa-caret-up"></i></div>
        <div class="subfooter-nav">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'privacy',
                'container'      => false,
                'menu_class'     => '',
            ));
            ?>
        </div>
    </div>
</div>
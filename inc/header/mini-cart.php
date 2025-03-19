<?php
if (function_exists('WC')) : ?>
    <div class="srf_btn htact show-reg-form">
        <i class="fal fa-user"></i>
        <span class="header-tooltip">
            <?php if (is_user_logged_in()) : ?>
                <a href="<?= esc_url(get_permalink(get_option('woocommerce_myaccount_page_id'))); ?>">My Account</a>
            <?php else : ?>
                <a href="<?= esc_url(get_permalink(get_option('woocommerce_myaccount_page_id'))); ?>">Sign In</a>
            <?php endif; ?>
        </span>
    </div>

    <div class="show-cart sc_btn htact">
        <i class="fal fa-shopping-bag"></i>
        <span class="show-cart_count"><?= WC()->cart->get_cart_contents_count(); ?></span>
        <span class="header-tooltip">Your Cart</span>
    </div>

    <div class="header-cart_wrap novis_cart">
        <div class="header-cart_title">Your Cart <span><strong><?= WC()->cart->get_cart_contents_count(); ?></strong> items</span></div>
        <div class="header-cart_wrap_container fl-wrap">
            <div class="box-widget-content">
                <div class="widget-posts fl-wrap">
                    <ol>
                        <?php
                        foreach (WC()->cart->get_cart() as $cart_item_key => $cart_item) :
                            $product = $cart_item['data'];
                            $product_image = wp_get_attachment_image_src($product->get_image_id(), 'thumbnail')[0];
                            $product_url = get_permalink($product->get_id());
                            $product_name = $product->get_name();
                            $quantity = $cart_item['quantity'];
                            $price = $product->get_price();
                        ?>
                            <li class="clearfix">
                                <a href="<?= esc_url($product_url); ?>" class="widget-posts-img">
                                    <img src="<?= esc_url($product_image); ?>" class="respimg" alt="<?= esc_attr($product_name); ?>">
                                </a>
                                <div class="widget-posts-descr">
                                    <a href="<?= esc_url($product_url); ?>" title="<?= esc_attr($product_name); ?>"><?= esc_html($product_name); ?></a>
                                    <div class="widget-posts-descr_calc clearfix"><?= esc_html($quantity); ?> <span>x</span> $<?= esc_html($price); ?></div>
                                </div>
                                <div class="clear-cart_button" data-cart-item-key="<?= esc_attr($cart_item_key); ?>">
                                    <i class="far fa-times"></i>
                                </div>
                            </li>
                        <?php endforeach; ?>
                    </ol>
                </div>
            </div>
        </div>
        <div class="header-cart_wrap_total fl-wrap">
            <div class="header-cart_wrap_total_item">Subtotal : <span>$<?= WC()->cart->get_cart_subtotal(); ?></span></div>
        </div>
        <div class="header-cart_wrap_footer fl-wrap">
            <a href="<?= wc_get_cart_url(); ?>"> View Cart</a>
            <a href="<?= wc_get_checkout_url(); ?>"> Checkout</a>
        </div>
    </div>
<?php endif; ?>

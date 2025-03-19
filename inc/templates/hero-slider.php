<div class="hero-slider-wrap fl-wrap">
    <div class="hero-slider-container multi-slider fl-wrap full-height">
        <div class="swiper-container">
            <div class="swiper-wrapper">

                <?php
                $slider_query = new WP_Query([
                    'post_type' => 'post',
                    'meta_key' => '_slider_meta',
                    'meta_value' => '1', // Only fetch posts with the slider meta set
                    'posts_per_page' => -1, // Fetch all relevant posts
                ]);

                if ($slider_query->have_posts()) :
                    while ($slider_query->have_posts()) : $slider_query->the_post(); ?>
                        <div class="swiper-slide">
                            <div class="bg-wrap">
                                <div class="bg" data-bg="<?= get_the_post_thumbnail_url(get_the_ID(), 'full') ?>" data-swiper-parallax="40%"></div>
                                <div class="overlay"></div>
                            </div>
                            <div class="hero-item fl-wrap">
                                <div class="container">
                                    <?php 
                                    // Fetch categories and display the first one as a marker
                                    $categories = get_the_category();
                                    if (!empty($categories)) : ?>
                                        <a class="post-category-marker" href="<?= get_category_link($categories[0]->term_id) ?>">
                                            <?= esc_html($categories[0]->name) ?>
                                        </a>
                                    <?php endif; ?>
                                    <div class="clearfix"></div>
                                    <h2><a href="<?= get_permalink() ?>"><?= get_the_title() ?></a></h2>
                                    <h4><?= get_the_excerpt() ?></h4>
                                    <div class="clearfix"></div>
                                    <div class="author-link">
                                        <?php $author_id = get_the_author_meta('ID'); ?>
                                        <a href="<?= get_author_posts_url($author_id) ?>">
                                            <img src="<?= get_avatar_url($author_id, ['size' => 96]) ?>" alt="">
                                            <span>By <?= get_the_author() ?></span>
                                        </a>
                                    </div>
                                    <span class="post-date"><i class="far fa-clock"></i> <?= get_the_date() ?></span>
                                </div>
                            </div>
                        </div>
                    <?php endwhile;
                    wp_reset_postdata(); // Reset query data
                endif;
                ?>

                
            </div>
        </div>
        <div class="fs-slider_btn color-bg fs-slider-button-prev"><i class="fas fa-caret-left"></i></div>
        <div class="fs-slider_btn color-bg fs-slider-button-next"><i class="fas fa-caret-right"></i></div>
    </div>
    <div class="hero-slider_controls-wrap">
        <div class="container">
            <div class="hero-slider_controls-list multi-slider_control">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                    <?php
                    $slider_query = new WP_Query([
                        'post_type' => 'post',
                        'meta_key' => '_slider_meta',
                        'meta_value' => '1', // Only fetch posts with the slider meta set
                        'posts_per_page' => -1, // Fetch all relevant posts
                    ]);

                    if ($slider_query->have_posts()) :
                        while ($slider_query->have_posts()) : $slider_query->the_post(); ?>
                            <div class="swiper-slide">
                                <div class="hsc-list_item fl-wrap">
                                    <div class="hsc-list_item-media">
                                        <div class="bg-wrap">
                                            <div class="bg" data-bg="<?= get_the_post_thumbnail_url(get_the_ID(), 'full') ?>"></div>
                                        </div>
                                    </div>
                                    <div class="hsc-list_item-content fl-wrap">
                                        <h4><a href="<?= get_permalink() ?>"><?= get_the_title() ?></a></h4>
                                        <span class="post-date"><i class="far fa-clock"></i> <?= get_the_date() ?></span>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile;
                        wp_reset_postdata(); // Reset query data
                    endif;
                    ?>

                    </div>
                </div>
            </div>
            <div class="multi-pag"></div>
        </div>
    </div>
    <div class="slider-progress-bar act-slider">
        <span>
            <svg class="circ" width="30" height="30">
                <circle class="circ2" cx="15" cy="15" r="13" stroke="rgba(255,255,255,0.4)" stroke-width="1"
                    fill="none" />
                <circle class="circ1" cx="15" cy="15" r="13" stroke="#e93314" stroke-width="2" fill="none" />
            </svg>
        </span>
    </div>
</div>
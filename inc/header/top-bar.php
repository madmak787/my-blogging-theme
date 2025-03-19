<div class="top-bar fl-wrap">
    <div class="container">
        <?php
        @$show_date = $mmb['show_date'] == '1';
        if($show_date) {
            ?>
            <div class="date-holder">
                <span class="date_num"></span>
                <span class="date_mounth"></span>
                <span class="date_year"></span>
            </div>
            <?php
        }
        ?>
        <?php
        $quotes = new WP_Query([
            'post_type' => 'quote',
            'post_status' => 'publish',
            'posts_per_page' => -1, // Fetch all published quotes
        ]);

        if(!empty($mmb['hot_news']) && $quotes->have_posts()) {
            ?>
            <div class="header_news-ticker-wrap">
                <div class="hnt_title"><?=$mmb['hot_news']?> :</div>
                <div class="header_news-ticker fl-wrap">
                    <ul>
                    <?php
                    while ($quotes->have_posts()) : $quotes->the_post(); ?>
                        <li>
                            <a href="<?php the_permalink(); ?>">
                                <?php the_title(); ?>
                            </a>
                        </li>
                    <?php
                    endwhile;
                    ?>
                    </ul>
                </div>
                <div class="n_contr-wrap">
                    <div class="n_contr p_btn"><i class="fas fa-caret-left"></i></div>
                    <div class="n_contr n_btn"><i class="fas fa-caret-right"></i></div>
                </div>
            </div>
            <?php
        }
        wp_reset_postdata();
        ?>
        <ul class="topbar-social">
            <?= !empty($mmb['facebook']) ? '<li><a href="' . $mmb['facebook'] . '" target="_blank"><i class="fab fa-facebook-f"></i></a></li>' : '' ?>
            <?= !empty($mmb['twitter']) ? '<li><a href="' . $mmb['twitter'] . '" target="_blank"><i class="fab fa-twitter"></i></a></li>' : '' ?>
            <?= !empty($mmb['instagram']) ? '<li><a href="' . $mmb['instagram'] . '" target="_blank"><i class="fab fa-instagram"></i></a></li>' : '' ?>
            <?= !empty($mmb['linkedin']) ? '<li><a href="' . $mmb['linkedin'] . '" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>' : '' ?>
            <?= !empty($mmb['pinterest']) ? '<li><a href="' . $mmb['pinterest'] . '" target="_blank"><i class="fab fa-pinterest"></i></a></li>' : '' ?>
            <?= !empty($mmb['youtube']) ? '<li><a href="' . $mmb['youtube'] . '" target="_blank"><i class="fab fa-youtube"></i></a></li>' : '' ?>
            <?= !empty($mmb['tiktok']) ? '<li><a href="' . $mmb['tiktok'] . '" target="_blank"><i class="fab fa-tiktok"></i></a></li>' : '' ?>
            <?= !empty($mmb['reddit']) ? '<li><a href="' . $mmb['reddit'] . '" target="_blank"><i class="fab fa-reddit-alien"></i></a></li>' : '' ?>
            <?= !empty($mmb['tumblr']) ? '<li><a href="' . $mmb['tumblr'] . '" target="_blank"><i class="fab fa-tumblr"></i></a></li>' : '' ?>
        </ul>
    </div>
</div>
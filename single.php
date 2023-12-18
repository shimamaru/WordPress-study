<?php get_header(); ?>

<main>
    <?php while (have_posts()) : the_post(); ?>
        <!-- page-kv -->
        <div class="c-page-kv c-page-kv--blog">
            <div class="l-container-l">
                <p class="c-title-level1 c-title-level1--white">blog & news</p>
            </div>
        </div>
        <!-- end page-kv -->

        <!-- single -->
        <div class="u-ptb">
            <div class="l-container-s">
                <article <?php post_class('single-article'); ?>>
                    <div class="single-thumbnail">
                        <?php
                        if (has_post_thumbnail()) {
                            the_post_thumbnail('full', array('class' => 'single-thumbnail-image'));
                        }
                        ?>
                    </div>

                    <div class="single-date">
                        <time datetime="<?php echo esc_attr(get_the_date('Y-m-d')); ?>" class="c-date"><?php echo esc_html(get_the_date()); ?></time>
                    </div>

                    <h1 class="single-title"><?php the_title(); ?></h1>

                    <div class="single-contents">
                        <?php the_content(); ?>
                    </div>
                </article>
            </div>
        </div>
        <!-- end single -->

    <?php endwhile; ?>

    <!-- instagram -->
    <section class="c-instagram u-ptb">
        <h2 class="c-title-level2 c-title-level2--center">instagram</h2>

        <ul class="c-instagram-list">
            <?php
            // Instagramの画像を表示するコードを追加
            // ここではダミーの画像URLを使用していますが、実際の画像URLに置き換えてください
            for ($i = 1; $i <= 6; $i++) {
                echo '<li class="c-instagram-item">';
                echo '<img width="402" height="402" srcset="img/pic-instagram-post' . sprintf('%02d', $i) . '.jpg 201w, img/pic-instagram-post' . sprintf('%02d', $i) . '@2x.jpg 402w" sizes="(max-width: 767px) 30vw, (max-width: 1719px) 17vw, 260px" src="img/pic-instagram-post' . sprintf('%02d', $i) . '@2x.jpg" alt="〇〇の写真" decoding="async" loading="lazy" />';
                echo '</li>';
            }
            ?>
        </ul>

        <div class="c-instagram-button">
            <a href="https://www.instagram.com/?hl=ja" target="_blank" rel="noopener noreferrer" class="c-button c-button--center">instagram</a>
        </div>
    </section>
    <!-- end instagram -->
</main>

<?php get_footer(); ?>

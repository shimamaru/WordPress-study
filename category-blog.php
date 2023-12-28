<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width,initial-scale=1" />
        <title>BLOG&NEWS | SUPPLE</title>
        <meta name="description" content="..." />
        <meta name="format-detection" content="telephone=no" />

        <!-- favicon/webclipicon -->
        <link rel="shortcut icon" href="favicon.ico" />
        <link rel="apple-touch-icon" href="webclip.png" />

        <!-- ogp -->
        <meta property="og:site_name" content="SUPPLE" />
        <meta property="og:url" content="URL(絶対パス)" />
        <meta property="og:type" content="article" />
        <meta property="og:title" content="BLOG&NEWS | SUPPLE" />
        <meta property="og:description" content="..." />
        <meta property="og:image" content="URL(絶対パス)" />
        <meta property="og:locale" content="ja_JP" />
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:description" content="..." />
        <meta name="twitter:image:src" content="URL(絶対パス)" />

        <!-- google fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Noto+Sans+JP&display=swap" rel="stylesheet" />

        <!-- css -->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" />

        <!-- js -->
        <script src="js/main.js" defer></script>
    </head>

    <body>
        <!-- header -->
        <header class="header">
            <p class="header-logo">
                <a href="index.html">
                    <img src="img/logo.svg" width="200" height="26" alt="supple" decoding="async" loading="lazy" />
                </a>
            </p>

            <a href="https://www.google.com/" class="header-onlineshop" target="_blank" rel="noopener noreferrer">online shop</a>

            <nav class="header-nav">
                <ul class="header-list">
                    <li class="header-item">
                        <a href="consept.html" class="header-link">concept</a>
                    </li>

                    <li class="header-item">
                        <a href="menu.html" class="header-link">menu</a>
                    </li>

                    <li class="header-item">
                        <a href="shoplist.html" class="header-link">shoplist</a>
                    </li>

                    <li class="header-item">
                        <a href="blog.html" class="header-link">blog&news</a>
                    </li>
                </ul>
            </nav>
        </header>
        <!-- end header -->

        <main>
            <!-- page-kv -->
            <div class="c-page-kv c-page-kv--blog">
                <div class="l-container-l">
                    <h1 class="c-title-level1 c-title-level1--white">blog & news</h1>
                </div>
            </div>
            <!-- end page-kv -->

            <!-- blog -->
            <div class="u-ptb">
                <div class="l-container">
                    <div class="c-posts c-posts--col3">
                      <?php
$args = array(
    'category_name' => 'blog',  // カテゴリーのスラッグを指定
    'posts_per_page' => -1,   
);

$query = new WP_Query($args);

if ($query->have_posts()) :
    while ($query->have_posts()) : $query->the_post(); ?>

        <article class="c-post">
            <a href="<?php the_permalink(); ?>" class="c-post-thumbnail">
                <?php
                if (has_post_thumbnail()) {
                    the_post_thumbnail('full', array('alt' => get_the_title()));
                }
                ?>
            </a>
            <div class="c-post-date">
                <time datetime="<?php the_time('Y-m-d'); ?>" class="c-date"><?php the_time('Y/m/d'); ?></time>
            </div>
            <h2 class="c-post-ttl">
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </h2>
        </article>

    <?php endwhile;
    wp_reset_postdata();
else :
    // 投稿がない場合の処理
endif;
?>

                    </div>

                    <!-- pagination -->
                    <nav class="c-pagination">
                        <a href="index.html" class="c-pagination-item c-pagination-item--prev"><span class="u-visually-hidden">前のページ</span></a>
                        <a href="index.html" class="c-pagination-item">1<span class="u-visually-hidden">ページ目</span></a>
                        <span class="c-pagination-item is-pagination-active"><span class="u-visually-hidden">現在のページ：</span>2<span class="u-visually-hidden">ページ目</span></span>
                        <span class="c-pagination-item">…</span>
                        <a href="index.html" class="c-pagination-item">10<span class="u-visually-hidden">ページ目</span></a>
                        <a href="index.html" class="c-pagination-item c-pagination-item--next"><span class="u-visually-hidden">次のページ</span></a>
                    </nav>
                    <!-- end pagination -->
                </div>
            </div>
            <!-- end blog -->

            <!-- instagram -->
            <section class="c-instagram u-ptb">
                <h2 class="c-title-level2 c-title-level2--center">instagram</h2>

                <ul class="c-instagram-list">
                    <li class="c-instagram-item">
                        <img width="402" height="402" srcset="img/pic-instagram-post.jpg 201w, img/pic-instagram-post@2x.jpg 402w" sizes="(max-width: 767px) 30vw, (max-width: 1719px) 17vw, 260px" src="img/pic-instagram-post@2x.jpg" alt="〇〇の写真" decoding="async" loading="lazy" />
                    </li>
                    <li class="c-instagram-item">
                        <img width="402" height="402" srcset="img/pic-instagram-post02.jpg 201w, img/pic-instagram-post02@2x.jpg 402w" sizes="(max-width: 767px) 30vw, (max-width: 1719px) 17vw, 260px" src="img/pic-instagram-post02@2x.jpg" alt="〇〇の写真" decoding="async" loading="lazy" />
                    </li>
                    <li class="c-instagram-item">
                        <img width="402" height="402" srcset="img/pic-instagram-post03.jpg 201w, img/pic-instagram-post03@2x.jpg 402w" sizes="(max-width: 767px) 30vw, (max-width: 1719px) 17vw, 260px" src="img/pic-instagram-post03@2x.jpg" alt="〇〇の写真" decoding="async" loading="lazy" />
                    </li>
                    <li class="c-instagram-item">
                        <img width="402" height="402" srcset="img/pic-instagram-post04.jpg 201w, img/pic-instagram-post04@2x.jpg 402w" sizes="(max-width: 767px) 30vw, (max-width: 1719px) 17vw, 260px" src="img/pic-instagram-post04@2x.jpg" alt="〇〇の写真" decoding="async" loading="lazy" />
                    </li>
                    <li class="c-instagram-item">
                        <img width="402" height="402" srcset="img/pic-instagram-post05.jpg 201w, img/pic-instagram-post05@2x.jpg 402w" sizes="(max-width: 767px) 30vw, (max-width: 1719px) 17vw, 260px" src="img/pic-instagram-post05@2x.jpg" alt="〇〇の写真" decoding="async" loading="lazy" />
                    </li>
                    <li class="c-instagram-item">
                        <img width="402" height="402" srcset="img/pic-instagram-post06.jpg 201w, img/pic-instagram-post06@2x.jpg 402w" sizes="(max-width: 767px) 30vw, (max-width: 1719px) 17vw, 260px" src="img/pic-instagram-post06@2x.jpg" alt="〇〇の写真" decoding="async" loading="lazy" />
                    </li>
                </ul>

                <div class="c-instagram-button">
                    <a href="https://www.instagram.com/?hl=ja" target="_blank" rel="noopener noreferrer" class="c-button c-button--center">instagram</a>
                </div>
            </section>
            <!-- end instagram -->
        </main>

        <!-- footer -->
        <footer class="footer">
            <div class="l-container">
                <div class="footer-logo">
                    <a href="index.html">
                        <img src="img/logo-white.svg" width="200" height="26" alt="supple" decoding="async" loading="lazy" />
                    </a>
                </div>

                <nav class="footer-shop-nav">
                    <ul class="footer-shop-list">
                        <li class="footer-shop-item">北千住店</li>
                        <li class="footer-shop-item">代官山店</li>
                        <li class="footer-shop-item">新宿店</li>
                        <li class="footer-shop-item">八王子店</li>
                        <li class="footer-shop-item">銀座店</li>
                        <li class="footer-shop-item">渋谷店</li>
                    </ul>
                </nav>

                <div class="footer-company-info">
                    <span>株式会社 SUPPLE</span>
                    <span>〒123-4567 東京都渋谷区ABC</span>
                </div>

                <small class="footer-copyright">&copy; 2021 SUPPLE</small>
            </div>
        </footer>
        <!-- end footer -->
    </body>
</html>

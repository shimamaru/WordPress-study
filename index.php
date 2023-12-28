<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>SUPPLE - コーヒー好きによるコーヒー好きのためのカフェ -</title>
  <meta name="description" content="SUPPLEはコーヒー好きのスタッフによるコーヒー好きのためのコーヒーだけを提供するこだわりのカフェです。" />
  <meta name="format-detection" content="telephone=no" />

  <!-- favicon/webclipicon -->
  <link rel="shortcut icon" href="favicon.ico" />
  <link rel="apple-touch-icon" href="webclip.png" />

  <!-- ogp -->
  <meta property="og:site_name" content="SUPPLE" />
  <meta property="og:url" content="" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="SUPPLE - コーヒー好きによるコーヒー好きのためのカフェ -" />
  <meta property="og:description" content="SUPPLEはコーヒー好きのスタッフによるコーヒー好きのためのコーヒーだけを提供するこだわりのカフェです。" />
  <meta property="og:image" content="URL(絶対パス)" />
  <meta property="og:locale" content="ja_JP" />
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:description" content="SUPPLEはコーヒー好きのスタッフによるコーヒー好きのためのコーヒーだけを提供するこだわりのカフェです。" />
  <meta name="twitter:image:src" content="URL(絶対パス)" />

  <!-- google fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Noto+Sans+JP&display=swap"
    rel="stylesheet" />

  <!-- css -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" />

  <!-- js -->
  <script src="js/main.js" defer></script>
</head>

<body>
  <!-- header -->
  <header class="header">
    <h1 class="header-logo">
      <a href="index.html">
        <img src="img/logo.svg" width="200" height="26" alt="supple" decoding="async" loading="lazy" />
      </a>
    </h1>

    <a href="https://www.google.com/" class="header-onlineshop" target="_blank" rel="noopener noreferrer">online
      shop</a>

    <nav class="header-nav">
      <ul class="header-list">
        <li class="header-item">
          <a href="<?php echo esc_url(get_category_link(get_category_by_slug('concept')->term_id)); ?>"
            class="header-link">concept</a>
        </li>
        <li class="header-item">
          <a href="<?php echo esc_url(get_category_link(get_category_by_slug('menu')->term_id)); ?>"
            class="header-link">menu</a>
        </li>
        <li class="header-item">
          <a href="<?php echo esc_url(get_category_link(get_category_by_slug('shoplist')->term_id)); ?>"
            class="header-link">shoplist</a>
        </li>
        <li class="header-item">
          <a href="<?php echo esc_url(get_category_link(get_category_by_slug('blog&news')->term_id)); ?>"
            class="header-link">blog&news</a>
        </li>
      </ul>
    </nav>
  </header>
  <!-- end header -->

  <main>
    <!-- top-kv -->
    <div class="top-kv"></div>
    <!-- end top-kv -->

    <!-- top-consept -->
    <section class="top-consept u-ptb">
      <div class="l-container-s">
        <h2 class="c-title-level2 c-title-level2--center">consept</h2>
        <div class="u-mt">
          <div class="top-consept-img">
            <img width="1920" height="954" srcset="img/pic-top-consept.jpg 960w, img/pic-top-consept@2x.jpg 1920w"
              sizes="(max-width: 767px) 90vw, 960px" src="img/pic-top-consept@2x.jpg" alt="" decoding="async"
              loading="lazy" />
          </div>
          <p class="top-consept-text u-mt">一杯一杯まごころをこめて調製し、新鮮な香りと豊かな風味のコーヒーを提供します。</p>
          <p class="top-consept-text02">
            <span>親譲りの無鉄砲で小供の時から損ばかりしている。</span><span>小学校に居る時分学校の二階から飛び降りて一週間ほど腰を抜かした事がある。</span><span>なぜそんな無闇をしたと聞く人があるかも知れぬ。</span>
          </p>
          <div class="u-mt">
            <a href="consept.html" class="c-button c-button--center">more</a>
          </div>
        </div>
      </div>
    </section>
    <!-- end top-consept -->

    <!-- top-menu -->
    <section class="top-menu u-ptb">
      <div class="l-container">
        <div class="top-menu-inner">
          <h2 class="c-title-level2 c-title-level2--white c-title-level2--center">menu</h2>

          <div class="top-menu-body u-mt">
            <section class="top-menu-block">
              <h3 class="top-menu-list-title">drip</h3>

              <ul class="top-menu-list">
                <li class="top-menu-item">
                  <span class="top-menu-item-name">エントランスブレンド</span>
                  <span class="top-menu-item-price">¥800</span>
                </li>
                <li class="top-menu-item">
                  <span class="top-menu-item-name">エチオピア ウォッシュド</span>
                  <span class="top-menu-item-price">¥800</span>
                </li>
                <li class="top-menu-item">
                  <span class="top-menu-item-name">エチオピア ナチュラル</span>
                  <span class="top-menu-item-price">¥800</span>
                </li>
                <li class="top-menu-item">
                  <span class="top-menu-item-name">グアテマラ</span>
                  <span class="top-menu-item-price">¥800</span>
                </li>
                <li class="top-menu-item">
                  <span class="top-menu-item-name">ブラジル</span>
                  <span class="top-menu-item-price">¥800</span>
                </li>
                <li class="top-menu-item">
                  <span class="top-menu-item-name">タンザニア</span>
                  <span class="top-menu-item-price">¥800</span>
                </li>
                <li class="top-menu-item">
                  <span class="top-menu-item-name">フスクブレンド</span>
                  <span class="top-menu-item-price">¥800</span>
                </li>
              </ul>
            </section>

            <section class="top-menu-block">
              <h3 class="top-menu-list-title">espresso</h3>

              <ul class="top-menu-list">
                <li class="top-menu-item">
                  <span class="top-menu-item-name">エントランスブレンド</span>
                  <span class="top-menu-item-price">¥800</span>
                </li>
                <li class="top-menu-item">
                  <span class="top-menu-item-name">エチオピア ウォッシュド</span>
                  <span class="top-menu-item-price">¥800</span>
                </li>
                <li class="top-menu-item">
                  <span class="top-menu-item-name">エチオピア ナチュラル</span>
                  <span class="top-menu-item-price">¥800</span>
                </li>
                <li class="top-menu-item">
                  <span class="top-menu-item-name">グアテマラ</span>
                  <span class="top-menu-item-price">¥800</span>
                </li>
                <li class="top-menu-item">
                  <span class="top-menu-item-name">ブラジル</span>
                  <span class="top-menu-item-price">¥800</span>
                </li>
                <li class="top-menu-item">
                  <span class="top-menu-item-name">タンザニア</span>
                  <span class="top-menu-item-price">¥800</span>
                </li>
                <li class="top-menu-item">
                  <span class="top-menu-item-name">フスクブレンド</span>
                  <span class="top-menu-item-price">¥800</span>
                </li>
              </ul>
            </section>
          </div>

          <div class="u-mt">
            <a href="menu.html" class="c-button c-button--white c-button--center">more</a>
          </div>
        </div>
      </div>
    </section>
    <!-- end top-menu -->

    <!-- top-shoplist -->
    <section class="top-shoplist u-ptb">
      <div class="l-container-s">
        <h2 class="c-title-level2 c-title-level2--center">shop list</h2>
        <p class="top-shoplist-copy"><span>首都圏を中心に6店舗展開しています。</span><span>お近くの店舗でお待ちしています。</span></p>

        <div class="u-mt">
          <ul class="top-shoplist-list">
            <li class="top-shoplist-item">北千住店</li>
            <li class="top-shoplist-item">代官山店</li>
            <li class="top-shoplist-item">新宿店</li>
            <li class="top-shoplist-item">八王子店</li>
            <li class="top-shoplist-item">銀座店</li>
            <li class="top-shoplist-item">渋谷店</li>
          </ul>
        </div>

        <div class="u-mt">
          <a href="shoplist.html" class="c-button c-button--center">more</a>
        </div>
      </div>
    </section>
    <!-- end top-shoplist -->

    <!-- top-blog -->
    <div class="top-blog">
      <section class="u-ptb">
        <div class="l-container-s">
          <h2 class="c-title-level2 c-title-level2--center">blog & news</h2>

          <div class="u-mt">
            <div class="c-posts c-posts--col3">
              <article class="c-post">
                <a href="single.html" class="c-post-thumbnail">
                  <img width="600" height="369" srcset="img/thumb-post.jpg 1x, img/thumb-post@2x.jpg 2x"
                    src="img/thumb-post@2x.jpg" alt="〇〇の写真。" decoding="async" loading="lazy" />
                </a>
                <div class="c-post-date">
                  <time datetime="2021-01-01" class="c-date">2021/01/01</time>
                </div>
                <h3 class="c-post-ttl">
                  <a href="single.html">講習会を開催しました。</a>
                </h3>
              </article>

              <article class="c-post">
                <a href="single.html" class="c-post-thumbnail">
                  <img width="600" height="369" srcset="img/thumb-post.jpg 1x, img/thumb-post@2x.jpg 2x"
                    src="img/thumb-post@2x.jpg" alt="〇〇の写真。" decoding="async" loading="lazy" />
                </a>
                <div class="c-post-date">
                  <time datetime="2021-01-01" class="c-date">2021/01/01</time>
                </div>
                <h3 class="c-post-ttl">
                  <a href="single.html">講習会を開催しました。</a>
                </h3>
              </article>

              <article class="c-post">
                <a href="single.html" class="c-post-thumbnail">
                  <img width="600" height="369" srcset="img/thumb-post.jpg 1x, img/thumb-post@2x.jpg 2x"
                    src="img/thumb-post@2x.jpg" alt="〇〇の写真。" decoding="async" loading="lazy" />
                </a>
                <div class="c-post-date">
                  <time datetime="2021-01-01" class="c-date">2021/01/01</time>
                </div>
                <h3 class="c-post-ttl">
                  <a href="single.html">講習会を開催しました。</a>
                </h3>
              </article>
            </div>
          </div>

          <div class="u-mt">
            <a href="blog.html" class="c-button c-button--center">more</a>
          </div>
        </div>
      </section>
    </div>
    <!-- end top-blog -->

    <!-- instagram -->
    <section class="c-instagram u-ptb">
      <h2 class="c-title-level2 c-title-level2--center">instagram</h2>

      <ul class="c-instagram-list">
        <li class="c-instagram-item">
          <img width="402" height="402" srcset="img/pic-instagram-post.jpg 201w, img/pic-instagram-post@2x.jpg 402w"
            sizes="(max-width: 767px) 30vw, (max-width: 1719px) 17vw, 260px" src="img/pic-instagram-post@2x.jpg"
            alt="〇〇の写真" decoding="async" loading="lazy" />
        </li>
        <li class="c-instagram-item">
          <img width="402" height="402" srcset="img/pic-instagram-post02.jpg 201w, img/pic-instagram-post02@2x.jpg 402w"
            sizes="(max-width: 767px) 30vw, (max-width: 1719px) 17vw, 260px" src="img/pic-instagram-post02@2x.jpg"
            alt="〇〇の写真" decoding="async" loading="lazy" />
        </li>
        <li class="c-instagram-item">
          <img width="402" height="402" srcset="img/pic-instagram-post03.jpg 201w, img/pic-instagram-post03@2x.jpg 402w"
            sizes="(max-width: 767px) 30vw, (max-width: 1719px) 17vw, 260px" src="img/pic-instagram-post03@2x.jpg"
            alt="〇〇の写真" decoding="async" loading="lazy" />
        </li>
        <li class="c-instagram-item">
          <img width="402" height="402" srcset="img/pic-instagram-post04.jpg 201w, img/pic-instagram-post04@2x.jpg 402w"
            sizes="(max-width: 767px) 30vw, (max-width: 1719px) 17vw, 260px" src="img/pic-instagram-post04@2x.jpg"
            alt="〇〇の写真" decoding="async" loading="lazy" />
        </li>
        <li class="c-instagram-item">
          <img width="402" height="402" srcset="img/pic-instagram-post05.jpg 201w, img/pic-instagram-post05@2x.jpg 402w"
            sizes="(max-width: 767px) 30vw, (max-width: 1719px) 17vw, 260px" src="img/pic-instagram-post05@2x.jpg"
            alt="〇〇の写真" decoding="async" loading="lazy" />
        </li>
        <li class="c-instagram-item">
          <img width="402" height="402" srcset="img/pic-instagram-post06.jpg 201w, img/pic-instagram-post06@2x.jpg 402w"
            sizes="(max-width: 767px) 30vw, (max-width: 1719px) 17vw, 260px" src="img/pic-instagram-post06@2x.jpg"
            alt="〇〇の写真" decoding="async" loading="lazy" />
        </li>
      </ul>

      <div class="c-instagram-button">
        <a href="https://www.instagram.com/?hl=ja" target="_blank" rel="noopener noreferrer"
          class="c-button c-button--center">instagram</a>
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
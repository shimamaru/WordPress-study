<?php get_header(); ?>


<main>
  <!-- page-kv -->
  <div class="c-page-kv c-page-kv--consept">
    <div class="l-container-l">
      <h1 class="c-title-level1 c-title-level1--white">consept</h1>
    </div>
  </div>
  <!-- end page-kv -->

  <!-- consept -->
  <div class="u-ptb">
    <div class="l-container">
      <div class="consept-img">
        <?php
  $image_url_concept2 = get_template_directory_uri() . '/img/pic-consept@2x.jpg'; // 画像のパスを修正
  ?>
        <img width="2160" height="540"
          srcset="<?php echo $image_url_concept2; ?> 1080w, <?php echo $image_url_concept2; ?> 2160w"
          sizes="(max-width: 767px) 90vw, 1080px" src="<?php echo $image_url_concept2; ?>" alt="suppleに関する4枚の写真。1枚目は..."
          decoding="async" loading="lazy" />
      </div>


      <p class="consept-text u-mt">一杯一杯まごころをこめて調製し、新鮮な香りと豊かな風味のコーヒーを提供します。</p>

      <p class="consept-text02">
        <span>親譲りの無鉄砲で小供の時から損ばかりしている。</span><span>小学校に居る時分学校の二階から飛び降りて一週間ほど腰を抜かした事がある。</span><span>なぜそんな無闇をしたと聞く人があるかも知れぬ。</span>
      </p>

      <div class="consept-img u-mt">
        <?php
  $image_url_concept1 = get_template_directory_uri() . '/img/pic-consept02@2x.jpg'; // 画像のパスを修正
  ?>
        <img width="2160" height="540"
          srcset="<?php echo $image_url_concept1; ?> 1080w, <?php echo $image_url_concept1; ?> 2160w"
          sizes="(max-width: 767px) 90vw, 1080px" src="<?php echo $image_url_concept1; ?>" alt="suppleに関する4枚の写真。1枚目は..."
          decoding="async" loading="lazy" />
      </div>

    </div>
  </div>
  <!-- end consept -->
  <!-- instagram -->
  <section class="c-instagram u-ptb">
    <h2 class="c-title-level2 c-title-level2--center">instagram</h2>

    <ul class="c-instagram-list">
      <?php
  $args = array(
    'category_name' => 'blog',  // カテゴリースラッグ
    'posts_per_page' => 6,      // 取得する投稿の数
    'orderby' => 'rand'         // ランダムで記事を表示
  );

  $blog_posts = new WP_Query($args);

  if ($blog_posts->have_posts()) :
    while ($blog_posts->have_posts()) : $blog_posts->the_post();
      ?>
      <li class="c-instagram-item">
        <a href="<?php echo get_permalink(); ?>" class="c-post-thumbnail">
          <?php
          $thumbnail_id = get_post_thumbnail_id(get_the_ID());
          $thumbnail = wp_get_attachment_image_src($thumbnail_id, 'full');

          if ($thumbnail) {
            $thumbnail_url = $thumbnail[0];
            echo '<img src="' . esc_url($thumbnail_url) . '" width="402" height="402" alt="' . esc_attr(get_the_title()) . '" decoding="async" loading="lazy" />';
          }
          ?>
        </a>
      </li>
      <?php
    endwhile;
    wp_reset_postdata(); // クエリのリセット
  else :
    echo 'No posts found';
  endif;
  ?>
    </ul>


    <div class="c-instagram-button">
      <a href="https://www.instagram.com/?hl=ja" target="_blank" rel="noopener noreferrer"
        class="c-button c-button--center">instagram</a>
    </div>
  </section>
  <!-- end instagram -->
</main>

<?php get_footer(); ?>
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
<?php get_header(); ?>
<main>
  <!-- top-kv -->
  <?php
$args = array(
    'category_name' => 'kv',  // カテゴリースラッグ
    'posts_per_page' => 1,    // 取得する投稿の数
    'order' => 'DESC',        // 投稿の順序（DESC: 新しい順）
    'orderby' => 'date'       // 投稿の順序を日付で指定
);

$recent_posts = new WP_Query($args);

if ($recent_posts->have_posts()) :
    while ($recent_posts->have_posts()) : $recent_posts->the_post();

        // 投稿のサムネイル画像を取得
        $thumbnail_url = get_the_post_thumbnail_url(get_the_ID(), 'full');

        // サムネイル画像を背景画像として指定
        echo '<div class="top-kv" style="background-image: url(' . esc_url($thumbnail_url) . ');"></div>';

    endwhile;
    wp_reset_postdata(); // クエリのリセット
else :
    echo 'No posts found';
endif;
?>

  <!-- end top-kv -->

  <!-- top-consept -->
  <section class="top-consept u-ptb">
    <div class="l-container-s">
      <h2 class="c-title-level2 c-title-level2--center">consept</h2>
      <div class="u-mt">
        <div class="top-consept-img">
          <?php
  $image_url = get_template_directory_uri() . '/img/pic-top-consept@2x.jpg'; // 画像のパスを修正
  ?>
          <img width="1920" height="954" srcset="<?php echo $image_url; ?> 960w, <?php echo $image_url; ?> 1920w"
            sizes="(max-width: 767px) 90vw, 960px" src="<?php echo $image_url; ?>" alt="" decoding="async"
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

          <?php
                $categories = array('drip', 'espresso');

                foreach ($categories as $category) :
                    $args = array(
                        'category_name' => 'menu',
                        'posts_per_page' => -1,
                    );

                    $blog_posts = new WP_Query($args);

                    if ($blog_posts->have_posts()) :
                ?>

          <section class="top-menu-block">
            <h3 class="top-menu-list-title"><?php echo esc_html($category); ?></h3>

            <ul class="top-menu-list">

              <?php
                                while ($blog_posts->have_posts()) : $blog_posts->the_post();

                                    $kind_value = get_post_meta(get_the_ID(), 'kind', true);

                                    if ($kind_value === $category) :
                                ?>
              <li class="top-menu-item">
                <span class="top-menu-item-name"><a
                    href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></span>
                <span
                  class="top-menu-item-price"><?php echo '¥' . esc_html(get_post_meta(get_the_ID(), 'price', true)); ?></span>
              </li>
              <?php
                                    endif;
                                endwhile;
                                wp_reset_postdata();
                                ?>

            </ul>
          </section>

          <?php else : ?>
          <p>No posts found in the '<?php echo esc_html($category); ?>' category</p>
          <?php endif; ?>

          <?php endforeach; ?>


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
          <?php
    $args = array(
        'category_name' => 'shoplist',
        'posts_per_page' => 6,
    );

    $shop_posts = new WP_Query($args);

    if ($shop_posts->have_posts()) :
        while ($shop_posts->have_posts()) : $shop_posts->the_post();
    ?>
          <li class="top-shoplist-item">
            <?php the_title(); ?>
          </li>
          <?php
        endwhile;
        wp_reset_postdata();
    else :
        echo 'No posts found';
    endif;
    ?>
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

            <?php
$args = array(
    'category_name' => 'blog',
    'posts_per_page' => 3,
);

$blog_posts = new WP_Query($args);

if ($blog_posts->have_posts()) :
    while ($blog_posts->have_posts()) : $blog_posts->the_post();
?>
            <article class="c-post">
              <a href="<?php echo get_permalink(); ?>" class="c-post-thumbnail">
                <?php
            $thumbnail_id = get_post_thumbnail_id(get_the_ID());
            $thumbnail = wp_get_attachment_image_src($thumbnail_id, 'full'); 

            if ($thumbnail) {
                $thumbnail_url = $thumbnail[0];
                echo '<img src="' . esc_url($thumbnail_url) . '" width="250" height="250" alt="..." decoding="async" loading="lazy" style="object-fit: cover; object-position: center center;">';
            }
            ?>
              </a>
              <div class="c-post-date">
                <time datetime="<?php echo get_the_date('Y-m-d'); ?>"
                  class="c-date"><?php echo get_the_date('Y/m/d'); ?></time>
              </div>
              <h2 class="c-post-ttl">
                <a href="<?php echo get_category_link(get_the_category()[0]->term_id); ?>"><?php the_title(); ?></a>
              </h2>
            </article>
            <?php
    endwhile;
    wp_reset_postdata();
else :
    echo 'No posts found';
endif;
?>
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
</body>

</html>
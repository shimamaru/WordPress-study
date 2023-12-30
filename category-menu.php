<?php get_header(); ?>

<main>
  <!-- page-kv -->
  <div class="c-page-kv c-page-kv--menu">
    <div class="l-container-l">
      <h1 class="c-title-level1 c-title-level1--white">menu</h1>
    </div>
  </div>
  <!-- end page-kv -->

  <!-- menu -->
  <div class="u-ptb">
    <div class="l-container-s">
      <p class="menu-head-text">使用しているコーヒー豆を紹介します</p>
      <p class="menu-head-text02"><span>SUPPLEでは上質なコーヒー豆を</span><span>世界中から直接輸入しています。</span></p>

      <div class="u-mt">
        <?php
$args = array(
    'category_name' => 'menu',
    'posts_per_page' => 12,
);

$blog_posts = new WP_Query($args);

if ($blog_posts->have_posts()) :
    while ($blog_posts->have_posts()) : $blog_posts->the_post();
?>
        <section class="menu-item">
          <div class="menu-item-img">
            <a href="<?php echo get_permalink(); ?>" class="c-post-thumbnail">
              <?php
                $thumbnail_id = get_post_thumbnail_id(get_the_ID());
                $thumbnail = wp_get_attachment_image_src($thumbnail_id, 'full');

                if ($thumbnail) {
                    $thumbnail_url = $thumbnail[0];
                    echo '<img src="' . esc_url($thumbnail_url) . '" width="560" height="560" alt="..." decoding="async" loading="lazy" style="object-fit: cover; object-position: center center;">';
                }
                ?>
            </a>
          </div>

          <div class="menu-item-info">
            <h2 class="menu-item-name">
              <a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a>
            </h2>
            <p class="menu-item-price">
              <?php
            $price = get_post_meta(get_the_ID(), 'price', true);
            echo !empty($price) ? '¥' . esc_html($price) : '';
            ?>
            </p>
            <p class="menu-item-description"> <?php the_content(); ?></p>
          </div>
        </section>
        <?php
    endwhile;
    wp_reset_postdata();
else :
    echo 'No posts found';
endif;
?>

      </div>
    </div>
  </div>
  <!-- end menu -->
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
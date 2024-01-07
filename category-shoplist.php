<?php get_header(); ?>

<main>
  <!-- page-kv -->
  <div class="c-page-kv c-page-kv--shoplist">
    <div class="l-container-l">
      <h1 class="c-title-level1 c-title-level1--white">shoplist</h1>
    </div>
  </div>
  <!-- end page-kv -->

  <!-- shoplist -->
  <div class="u-ptb">
    <div class="l-container-l">
      <div class="shoplist-list">

        <?php
// do_shortcode 関数を使ってショートコードを呼び出す
echo do_shortcode('[searchandfilter fields="search,category,post_tag"]');
?>
        <?php
$args = array(
    'category_name' => 'shoplist',
    'posts_per_page' => 12,
);

$shop_posts = new WP_Query($args);

if ($shop_posts->have_posts()) :
    while ($shop_posts->have_posts()) : $shop_posts->the_post();
?>
        <section class="shoplist-item">
          <div class="shoplist-item-img" class="c-post-thumbnail">
            <?php
                $thumbnail_id = get_post_thumbnail_id(get_the_ID());
                $thumbnail = wp_get_attachment_image_src($thumbnail_id, 'full');

                if ($thumbnail) {
                    $thumbnail_url = $thumbnail[0];
                    echo '<img src="' . esc_url($thumbnail_url) . '" width="648" height="410" alt="..." decoding="async" loading="lazy" style="object-fit: cover; object-position: center center;">';
                }
                ?>
          </div>

          <div class="shoplist-item-info">
            <h2 class="shoplist-item-name">
              <?php the_title(); ?>
            </h2>

            <p class="shoplist-item-address">
              <?php
                $address = get_post_meta(get_the_ID(), 'shop_address', true);
                echo esc_html($address);
                ?>
            </p>
            <p class="shoplist-item-tel">
              <?php
                $tel = get_post_meta(get_the_ID(), 'shop_tel', true);
                echo esc_html($tel);
                ?>
            </p>

            <ul class="shoplist-item-detail">
              <li class="shoplist-item-detail-item">
                <?php
                    $hours = get_post_meta(get_the_ID(), 'shop_hours', true);
                    echo esc_html('営業時間／' . $hours);
                    ?>
              </li>
              <li class="shoplist-item-detail-item">
                <?php
                    $seats = get_post_meta(get_the_ID(), 'shop_seats', true);
                    echo esc_html('席数／' . $seats);
                    ?>
              </li>
              <li class="shoplist-item-detail-item">
                <?php
                    $smoking = get_post_meta(get_the_ID(), 'shop_smoking', true);
                    echo esc_html('喫煙／' . $smoking);
                    ?>
              </li>
            </ul>
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
  <!-- end shoplist -->
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
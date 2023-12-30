<?php get_header(); ?>


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
    'category_name' => 'blog',
    'posts_per_page' => 12,
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

      <!-- pagination -->
      <nav class="c-pagination">
        <a href="index.html" class="c-pagination-item c-pagination-item--prev"><span
            class="u-visually-hidden">前のページ</span></a>
        <a href="index.html" class="c-pagination-item">1<span class="u-visually-hidden">ページ目</span></a>
        <span class="c-pagination-item is-pagination-active"><span class="u-visually-hidden">現在のページ：</span>2<span
            class="u-visually-hidden">ページ目</span></span>
        <span class="c-pagination-item">…</span>
        <a href="index.html" class="c-pagination-item">10<span class="u-visually-hidden">ページ目</span></a>
        <a href="index.html" class="c-pagination-item c-pagination-item--next"><span
            class="u-visually-hidden">次のページ</span></a>
      </nav>
      <!-- end pagination -->
    </div>
  </div>
  <!-- end blog -->

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
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
          <time datetime="<?php echo esc_attr(get_the_date('Y-m-d')); ?>"
            class="c-date"><?php echo esc_html(get_the_date()); ?></time>
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
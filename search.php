<?php
get_header();
?>


<!-- page-kv -->
<div class="c-page-kv c-page-kv--shoplist">
  <div class="l-container-l">
    <h1 class="c-title-level1 c-title-level1--white">shoplist</h1>
  </div>
</div>
<!-- end page-kv -->

<div class="u-ptb">
  <div class="l-container-l">
    <?php get_search_form(); ?>

    <div class="shoplist-list">

      <?php
     // キーワード検索
      $search_keyword = isset($_GET['s']) ? sanitize_text_field($_GET['s']) : '';

      // エリアの選択
      $selected_area = isset($_GET['area']) ? sanitize_text_field($_GET['area']) : '';

      
      // WP_Queryを使用して検索結果を取得
      $args = array(
        's'          => $search_keyword,
        'meta_query' => array(
          'relation' => 'AND',
          array(
            'key'     => 'area',
            'value'   => $selected_area,
            'compare' => '=',
          ),
        ),
      );

      $query = new WP_Query($args);

      if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post();
      ?>

      <section class="shoplist-item">
        <div class="shoplist-item-img c-post-thumbnail">
          <?php
              $thumbnail_id = get_post_thumbnail_id(get_the_ID());
              $thumbnail = wp_get_attachment_image_src($thumbnail_id, 'full');

              if ($thumbnail) {
                $thumbnail_url = $thumbnail[0];
                ?>
          <img src="<?php echo esc_url($thumbnail_url); ?>" width="648" height="410" alt="..." decoding="async"
            loading="lazy" style="object-fit: cover; object-position: center center;">
          <?php
              }
              ?>
        </div>

        <div class="shoplist-item-info">
          <h2 class="shoplist-item-name">
            <a href="<?php echo esc_url(get_permalink()); ?>"><?php the_title(); ?></a>
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
      else :
        // 記事が見つからない場合の表示
        echo '該当する記事はありません。';
      endif;

      wp_reset_postdata(); // クエリのリセット
      ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>
<?php
if (file_exists(__DIR__ . '/functions.php')) {
    include(__DIR__ . '/functions.php');
} else {
    echo "functions.php ファイルが見つかりませんでした。";
}
?>


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
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css" />


  <!-- js -->
  <script src="js/main.js" defer></script>
</head>

<body>
  <!-- header -->
  <header class="header">
    <h1 class="header-logo">
      <a href="<?php echo esc_url(home_url('/')); ?>">
        <!-- home_url関数を使用してトップページのURLを取得 -->
        <img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" width="200" height="26" alt="supple"
          decoding="async" loading="lazy" />
      </a>
    </h1>


    <a href="<?php echo esc_url(get_permalink(get_page_by_path('contact'))); ?>" class="header-onlineshop"
      target="_blank" rel="noopener noreferrer">online shop</a>


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
          <a href="<?php echo esc_url(get_category_link(get_category_by_slug('blog')->term_id)); ?>"
            class="header-link">blog&news</a>
        </li>
      </ul>
    </nav>
  </header>
  <!-- end header -->

  <body>
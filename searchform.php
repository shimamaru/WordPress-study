<div class="search">
  <p class="search-title">店舗検索</p>
  <form class="search-form" role="search" method="get" id="searchform" action="<?php echo home_url('/'); ?>">
    <!-- キーワード検索 -->
    <input class="search-input" type="text" value="" name="s" id="s" placeholder="店舗名を入力してください" />

    <!-- 都道府県の選択 -->
    <!-- selectにデフォルト設定する -->
    <select name="area" id="area" class="c-search-input">
      <option value="" selected hidden>選択してください</option>
      <option value="北海道">北海道</option>
      <option value="東北">東北</option>
      <option value="関東">関東</option>
      <option value="中部">中部</option>
      <option value="近畿">近畿</option>
      <option value="中国">中国</option>
      <option value="四国">四国</option>
      <option value="九州沖縄">九州沖縄</option>
    </select>

    <input class="search-button" type="submit" id="searchsubmit" value="検索" />
  </form>
</div>
<!-- Search form -->
<form role="search" method="get" id="searchform" action="<?php echo home_url('/'); ?>">
  <label for="s">テキスト検索:</label>
  <input type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" />

  <label for="area">エリア:</label>
  <select name="area" id="area">
    <option value="">すべてのエリア</option>
    <option value="北海道">北海道</option>
    <option value="東北">東北</option>
    <option value="関東">関東</option>
    <!-- 他のエリアも同様に追加 -->
  </select>

  <input type="submit" id="searchsubmit" value="検索" />
</form>
<!-- End Search form -->
<?php if (paginate_links()) : //ページが1ページ以上あれば以下を表示 ?>
<!-- pagination -->
<div class="c-pagenation-list">
  <?php
    // $paged = get_query_var('paged') ? get_query_var('paged') : 1; // 現在のページ番号を取得
    echo paginate_links(
      array(
        'end_size' => 0,
        'mid_size' => 3, //もし2に変更した場合、両方のファイルを修正する必要がある
        'prev_next' => true,
        'prev_text' => '<i class="fas fa-angle-left"></i>',
        'next_text' => '<i class="fas fa-angle-right"></i>',
      )
    );
  ?>
</div><!-- /pagination -->
<?php endif; ?>
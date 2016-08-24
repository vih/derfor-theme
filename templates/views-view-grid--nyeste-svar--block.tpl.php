<?php if (!empty($title)) {
  echo '<h3>' . $title . '</h3>';
} ?>

<div class="grid">
  <?php
  foreach ($rows as $row_number => $columns) {
    echo '<div class="clearfix ' . $row_classes[$row_number] . '">';
    if ($row_number == 0) {
      echo '<div class="item col-1 logobox">
		<div class="logotext"><a href="http://ruc.dk">RUC <span>Roskilde Universitet</span></a></div>
		</div>';
    }
    foreach ($columns as $column_number => $item) {
      $cid = $column_classes[$row_number][$column_number];
      if (strpos($cid, ' ') !== FALSE) {
        list($cid) = explode(' ', $cid);
      }
      $cid = explode('-', $cid);
      $cid[1] = ((int) $cid[1]) + 1;
      $cid = implode('-', $cid);
      echo '<div class="item ' . $cid . '">' . $item . '</div>';
    }
    echo '</div>';
  }
  ?>
</div>

<?php if (!empty($title)) {
  echo '<h3>' . $title . '</h3>';
} ?>

<div class="grid gallery">
  <?php
  foreach ($rows as $row_number => $columns) {
    echo '<div class="clearfix">';
    foreach ($columns as $column_number => $item) {
      echo '<div class="item">' . $item . '</div>';
    }
    echo '</div>';
  }
  ?>
</div>

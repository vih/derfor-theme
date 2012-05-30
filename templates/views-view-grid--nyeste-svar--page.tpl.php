<?php if(!empty($title)) { echo '<h3>'.$title.'</h3>'; } ?>

<div class="grid">
<?php
foreach ($rows as $row_number => $columns) {
	echo '<div class="clearfix '.$row_classes[$row_number].'">';
	foreach($columns as $column_number => $item) {
		echo '<div class="item '.$column_classes[$row_number][$column_number].'">'.$item.'</div>';
	}
	echo '</div>';
} 
?>
</div>

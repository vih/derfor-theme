<?php if(!empty($title)) { echo '<h3>'.$title.'</h3>'; } ?>

<div class="grid questions">
<?php
foreach ($rows as $row_number => $columns) {
	echo '<div class="clearfix '.$row_classes[$row_number].'">';
	foreach($columns as $column_number => $item) {
		if($item == '' && $column_number < 6) {
				$item = '<div class="questionteaser"><h2>Uge '.($column_number+1).'</h2><div class="bigqmark">?</div></div>';
		}
		elseif($column_number == 6) {
			$item = '<a href="'.url('billeder').'"><img src="/sites/default/files/Q08.jpg" alt="" /></a>';
		}
		echo '<div class="item '.$column_classes[$row_number][$column_number].'">'.$item.'</div>';
	}
	echo '</div>';
} 
?>
</div>

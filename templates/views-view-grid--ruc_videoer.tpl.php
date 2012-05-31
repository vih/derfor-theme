<?php if(!empty($title)) { echo '<h3>'.$title.'</h3>'; } ?>

<div class="grid gallery">
<div class="item text">
    <div class="inner">
    <h2>Tester</h2>
    <p>Min relativt lange tekst, som bare fortsætter indtil pladsen er løbet helt ud. Det aner vi ikke hvornår det er, men mon ikke det er snart? Hm, det er slet ikke endnu. Der er endnu plads nok. Så skriv bare hertil.</p>
    <?php if ($is_front): ?>
    <?php echo l('Se alle videoer...', 'videoer'); ?>
    <?php endif; ?>
    </div>
</div>
<?php
foreach ($rows as $row_number => $columns) {
	foreach($columns as $column_number => $item) {
	    if (empty($item)) {
	        continue;
	    }
		echo '<div class="item">'.$item.'</div>';
	}
} 
?>
</div>

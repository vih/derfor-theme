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
$must_be_pics = 2;
$row_pics = 1;
foreach ($rows as $row_number => $columns) {
  print '<div class="row-'.$row_number.'">';
	foreach($columns as $column_number => $item) {
		echo '<div class="item col-'.$column_number.'">'.$item.'</div>';
		$row_pics++;
	}
	echo '</div>';
}
$missing_pics = $must_be_pics - $row_pics;

if ($missing_pics != 0)  {
    for ($i = 0; $i < $missing_pics; $i++) {
        $z = $i+1;
        $x = $i+2;
        echo '<div class="row-'.$z.'"><div class="item col-'.$x.'"></div></div>';
    }
}
 
?>
</div>

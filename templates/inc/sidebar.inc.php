<div class="questionofweek">
	<?php $q = ruc_get_current_question(); ?>
	<h2>Ugens spørgsmål</h2>
	<h3><?php echo $q->title; ?></h3>
	<p class="question"><?php echo $q->question; ?></p>
	<div style="text-align:center;"><a href="<?php echo url('svar/'.$q->nid); ?>" class="greybtn"><span></span>Svar</a></div>
</div>
<?php echo views_embed_view('random_billede','default'); ?>

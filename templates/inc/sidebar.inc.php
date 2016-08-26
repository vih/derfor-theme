<div class="questionofweek">
  <?php $q = ruc_get_current_question(); ?>
  <h2>Aktuelt spørgsmål</h2>
  <?php if ($q !== false) { ?>
    <h3><?php echo $q->title; ?></h3>
    <p class="question"><?php echo $q->question; ?></p>
    <div style="text-align:center;"><a
        href="<?php echo url('svar/' . $q->nid); ?>" class="greybtn"><span></span>Svar</a>
    </div>
  <?php } else { ?>
    <p>Der er ikke stillet et spørgsmål endnu.</p>
  <?php } ?>
</div>
<?php echo views_embed_view('random_billede', 'default'); ?>

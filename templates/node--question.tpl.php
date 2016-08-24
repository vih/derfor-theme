<div class="questionteaser">
  <?php
  echo '<h2>' . $node->title . '</h2>';
  echo '<p class="question">' . $node->field_question[LANGUAGE_NONE][0]['value'] . '</p>';
  ?>
  <div style="text-align:center;">
    <a href="/svar/<?php echo $node->nid; ?>" class="greybtn"><span></span>Svar</a>
  </div>
</div>

<?php if (!$page) { ?>
  <div class="clearfix">
    <h2
      style="float:right;"><?php echo $node->field_question_reference[LANGUAGE_NONE][0]['entity']->title; ?></h2>
  </div>
  <p>
    <strong>
      <?php
      echo $node->field_question_reference[LANGUAGE_NONE][0]['entity']->field_question[LANGUAGE_NONE][0]['value'];
      ?>
    </strong>
  </p>
  <p>
    <?php echo render($content['field_answer']); ?>
  </p>
  <a href="<?php echo $node_url; ?>">Læs hele svaret...</a>

<?php }
else { ?>
  <div class="answernode">
    <h2>
      <?php
      echo $node->field_question_reference[LANGUAGE_NONE][0]['entity']->title . ': ';
      echo $node->field_question_reference[LANGUAGE_NONE][0]['entity']->field_question[LANGUAGE_NONE][0]['value'];
      ?>
    </h2>
    <div class="answercontent">
      <p>
        <strong>Svar skrevet af</strong>:
        <?php
        // We need to print
        echo $name;
        //echo "Relation";
        ?>
      </p>
      <?php echo render($content['field_answer']); ?>
    </div>
    <p>
      <?php
      global $user;
      if (empty($user->uid)) {
        echo '<a href="' . url('user', array('query' => array('destination' => $_GET['q']))) . '" class="greybtn"><span></span>';
        echo 'Log ind for at stemme</a> ';
      }
      else {
        echo flag_create_link('answeragree', $node->nid);
      }
      global $user;
      $youFlagged = FALSE;
      $flag = flag_get_flag('answeragree');
      if (!empty($user->uid)) {
        $youFlagged = $flag->is_flagged($node->nid, $user->uid);
      }
      $countFlags = $flag->get_count($node->nid);

      if ($countFlags == 0) {
        //$msg = 'Ingen har markeret sig som enig';
        $msg = '';
      }
      elseif ($youFlagged) {
        $f = ($countFlags - 1);
        if ($f == 0) {
          $msg = 'Du er enig i dette svar';
        }
        else {
          $msg = 'Du og ';
          $msg .= ($f == 1) ? 'en anden enig' : $f . ' andre enige';
          $msg .= ' i dette svar';
        }
      }
      else {
        $msg = $countFlags . ' er ';
        $msg .= ($countFlags == 1) ? 'enig' : 'enige';
        $msg .= ' i dette svar';
      }
      echo '<span class="agreemsg">' . $msg . '</span>';
      ?>
    </p>
  </div>
<?php } ?>

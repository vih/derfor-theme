<?php if (!$page): ?>
  <a class="colorbox" href="<?php echo url('node/' . $node->nid, array(
    'query' => array(
      'width' => 640,
      'height' => 480,
      'template' => 'colorbox'
    )
  )); ?>">
    <?php echo theme_image(array(
      'path' => $node->field_ruc_video_thumb['und'][0]['uri'],
      'attributes' => array()
    )); ?>
  </a>
<?php else: ?>
  <div id="rucvideo">
    <h2>
      <?php echo $title; ?>
    </h2>
    <div>
      <?php echo render($content['field_ruc_video_link']); ?>
    </div>
    <p style="margin-top: 2em;">
      <?php
      global $user;
      if (empty($user->uid)) {
        echo '<a href="' . url('cas', array('query' => array('destination' => $_GET['q']))) . '" class="greybtn"><span></span>';
        echo 'Log ind for at stemme</a> ';
      }
      else {
        echo flag_create_link('videolike', $node->nid);
      }
      $youFlagged = FALSE;
      $flag = flag_get_flag('videolike');
      if (!empty($user->uid)) {
        $youFlagged = $flag->is_flagged($node->nid, $user->uid);
      }
      $countFlags = $flag->get_count($node->nid);

      $msg = '';
      if ($countFlags == 0) {
        //$msg = 'Ingen synes om videoen';
      }
      elseif ($youFlagged) {
        $f = ($countFlags - 1);
        if ($f == 0) {
          $msg = 'Du synes om videoen';
        }
        else {
          $msg = 'Du og ' . $f . ' andre synes om denne video';
        }
      }
      else {
        $msg = $countFlags . ' synes om denne video';
      }
      echo '<span class="agreemsg">' . $msg . '</span>';
      ?>
    </p>
  </div>
<?php endif; ?>

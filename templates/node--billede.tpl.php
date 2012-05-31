<?php
echo '<a class="colorbox" href="'.file_create_url($node->field_picture['und'][0]['uri']).'">';
echo theme_image(array('path' => $node->field_picture_thumb['und'][0]['uri'], 'attributes' => array('class' => array('colorbox'))));
echo '</a>';
?>

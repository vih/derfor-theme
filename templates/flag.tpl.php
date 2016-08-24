<span class="<?php print $flag_wrapper_classes; ?>">
  <?php if ($link_href): ?>
    <a href="<?php print $link_href; ?>" title="<?php print $link_title; ?>"
       class="<?php print $flag_classes ?> greybtn"
       rel="nofollow"><span></span><?php print $link_text; ?></a><span
      class="flag-throbber">&nbsp;</span>
  <?php else: ?>

  <?php endif; ?>
</span>

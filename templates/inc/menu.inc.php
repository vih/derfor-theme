<?php
$act = '';
if ($is_front) {
  $act = 'home';
}
if (arg(0) == 'nyeste_svar') {
  $act = 'all';
}
if (arg(0) == 'populaere_svar') {
  $act = 'pop';
}
if (arg(0) == 'tidligere_spoergsmaal') {
  $act = 'ques';
}
if (arg(0) == 'videoer') {
  $act = 'videoer';
}
?>
<div class="navbar">
  <div class="navbar-inner">
    <div class="container">
      <a class="brand" href="<?php echo url(); ?>">Derfor RUC</a>
      <div class="nav-collapse">
        <ul class="nav">
          <li<?php if ($act == 'home') { ?> class="active"<?php } ?>><a
              href="<?php echo url(''); ?>">Forside</a></li>
          <li<?php if ($act == 'all') { ?> class="active"<?php } ?>><a
              href="<?php echo url('nyeste_svar'); ?>">Alle svar</a></li>
          <li<?php if ($act == 'pop') { ?> class="active"<?php } ?>><a
              href="<?php echo url('populaere_svar'); ?>">Populære svar</a></li>
          <li<?php if ($act == 'ques') { ?> class="active"<?php } ?>><a
              href="<?php echo url('tidligere_spoergsmaal'); ?>">Tidligere
              spørgsmål</a></li>
          <li<?php if ($act == 'videoer') { ?> class="active"<?php } ?>><a
              href="<?php echo url('videoer'); ?>">Videoer</a></li>
        </ul>
        <!--<form class="navbar-search pull-right" action="">
<input type="text" class="search-query span2" placeholder="Søg">
</form>-->
        <div class="navbar-search pull-right">
          <?php
          $form = drupal_get_form('search_block_form');
          print render($form);
          ?>
        </div>
      </div><!-- /.nav-collapse -->
    </div>
  </div><!-- /navbar-inner -->
</div>

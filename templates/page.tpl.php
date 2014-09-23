<?php
if (isset($_GET['template']) && $_GET['template'] == 'colorbox'){
  print render($page['content']);
  exit;
}
?>
<?php print render($page['header']); ?>
<div class="container background">
	<?php include('inc/menu.inc.php'); ?>
 	<div class="clearfix">
		<?php
		$hideSidebar = false;
		if(arg(0) == 'nyeste_svar' || arg(0) == 'populaere_svar' || arg(0) == 'tidligere_spoergsmaal' || arg(0) == 'billeder' || arg(0) == 'videoer') {
			echo '<div><div>';
			$hideSidebar = true;
		}
		else {
			echo '<div class="leftregion"><div class="inner">';
		}
		?>
			<?php if ($tabs): ?><div id="tabs-wrapper" class="clearfix"><?php endif; ?>
			<?php print render($title_prefix); ?>
				<?php if ($title && arg(0) == 'search'): ?>
					<h1><?php echo $title; ?></h1>
				<?php endif; ?>
				<?php print render($title_suffix); ?>
					<?php print $messages; ?>
					<?php print render($page['help']); ?>
					<?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
					<div class="clearfix">
						<?php print render($page['content']); ?>
					</div>
					<?php if ($tabs): ?><?php print render($tabs); ?></div><?php endif; ?>
					<?php print render($tabs2); ?>
				<?php print render($page['footer']); ?>
		</div></div>
		<?php if(!$hideSidebar) { ?>
 		<div style="width:240px;float:left;">
			<?php include('inc/sidebar.inc.php'); ?>
		</div>
		<?php } ?>
	</div>
</div>
<?php include('inc/footer.inc.php'); ?>

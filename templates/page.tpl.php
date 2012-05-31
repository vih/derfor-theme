<?php
if (isset($_GET['template']) && $_GET['template'] == 'colorbox'){
  print render($page['content']);
  exit;
}
?>
<?php print render($page['header']); ?>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-31734643-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
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

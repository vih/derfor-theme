<meta name="Description" content="I år er det 40 år siden, RUC blev grundlagt, og det vil vi fejre! Derfor vil vi lave en helt ny og innovativ form for festskrift, skrevet af alle RUC'ere der har lyst til at bidrage. " />
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
	<div>
		<?php
		echo views_embed_view('nyeste_svar','block_1');
		?>
	</div>
	<div class="clearfix">
		<div class="leftregion clearfix">
			<div class="pull-right frontpagebox">
					<img src="<?php echo $base_path.$directory; ?>/img/ib_poulsen.jpg" alt="" style="width:240px;height:240px;" />
			</div>
			<div class="inner" style="margin-bottom:0;">
			<h2>RUC fylder 40 år<br />
			– vær med til at skabe festskriftet</h2>
			<p>
				Kære RUC’er
			</p><p>
				I år er det 40 år siden, RUC blev grundlagt, og det vil vi fejre! Derfor vil vi lave en helt ny og innovativ form for festskrift, skrevet af alle RUC’ere der har lyst til at bidrage. 
		  </p><p>
				Hvad er RUC for en størrelse i dag?
			</p><p>
				Det vil jeg meget gerne høre din mening om. Derfor udsender jeg fra 14. maj og 6 uger frem hver uge en stafet med et nyt spørgsmål om RUC, som jeg opfordrer alle jer RUC’ere, nye som gamle, til at svare på. 
			</p><p>
				Du kan også gå ind og stemme på de bidrag, du synes er bedst. De bidrag der får flest stemmer, vil blive udgivet i et festskrift. Alle bidragsydere vil fremstå som forfattere af skriftet, da det netop er jer, der er med til at skabe indhold og værdi til RUC samt til fejringen af RUC’s 40-års jubilæum.
			</p>
			<p>
				Jeg håber, at du vil være med til at afspejle, hvad RUC betyder for dig, og hvad RUC har at byde på i det danske universitetslandskab 2012. Jeg ser meget frem til at læse jeres svar her på Derfor RUC.
			</p><p>
				Med venlig hilsen
			</p><p>
				Ib Poulsen<br />
				Rektor
			</p>	
			<p>
			<!-- AddThis Button BEGIN -->
			<div class="addthis_toolbox addthis_default_style addthis_default_style">
			<a class="addthis_button_facebook" title="Del på Facebook"></a>
			<a class="addthis_button_twitter" title="Del på Twitter"></a>
			<a class="addthis_button_linkedin" title="Del på LinkedIn"></a>
			<a class="addthis_button_email" title="Del via e-mail"></a>
			</div>
			<script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=xa-4f9d7f8443af8d5e"></script>
			<script type="text/javascript">
				var addthis_config = {
					ui_language: "da" 
				}
			</script>
			<!-- AddThis Button END -->
			</p>
			</div>
		</div>
		<div style="width:240px;float:left;">
			<?php include('inc/sidebar.inc.php'); ?>
		</div>
	</div>
	<div>
	    <?php echo views_embed_view('ruc_videoer','block_1'); ?>
	</div>
	
	<div>
		<?php
		echo views_embed_view('popul_re_svar','block_1');
		?>
	</div>
</div>
<?php include('inc/footer.inc.php'); ?>

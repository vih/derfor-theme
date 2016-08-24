<?php print render($page['header']); ?>
<div class="container background">
  <?php include('inc/menu.inc.php'); ?>
  <div>
    <?php
    echo views_embed_view('nyeste_svar', 'block_1');
    ?>
  </div>
  <div class="clearfix">
    <div class="leftregion clearfix">
      <div class="pull-right frontpagebox">
        <img src="<?php echo $base_path . $directory; ?>/img/od.jpg"
             alt="" style="width:240px;height:240px;"/>
      </div>
      <div class="inner" style="margin-bottom:0;">
        <h2>Vejle Idrætshøjskole fylder 75 år<br/>
          – vær med til at skabe festskriftet</h2>
        <p>
          Kære DJI’er og VIH'er
        </p>
        <p>
          I 2017 er det 75 år siden, Svend Aage Thomsen grundlage Den Jyske Idrætsskole. Det vil vi fejre!
          Derfor vil vi lave et festskrift, skrevet af alle DJI’ere og VIH'ere der har lyst til at bidrage.
        </p>
        <p>
          Hvad er Vejle Idrætshøjskole for en størrelse i dag?
        </p>
        <p>
          Det vil jeg meget gerne høre din mening om. Derfor udsender jeg en række forskellige spørgsmål om VIH,
          som jeg opfordrer alle jer DJI'ere/VIH’ere - nye som gamle - til at svare på.
        </p>
        <p>
          Du kan også gå ind og stemme på de bidrag, du synes er bedst. De
          bidrag der får flest stemmer, vil blive udgivet i et festskrift. Alle
          bidragsydere vil fremstå som forfattere af skriftet, da det netop er
          jer, der er med til at skabe indhold og værdi til VIH samt til
          fejringen af VIH’s 75-års jubilæum.
        </p>
        <p>
          Jeg håber, at du vil være med til at afspejle, hvad VIH betyder for
          dig, og hvad VIH har at byde på i det danske samfund anno 2017.
          Jeg ser meget frem til at læse jeres svar her på Derfor VIH.
        </p>
        <p>
          Med venlig hilsen
        </p>
        <p>
          Ole Damgaard<br/>
          Forstander
        </p>
        <p>
          <!-- AddThis Button BEGIN -->
        <div
          class="addthis_toolbox addthis_default_style addthis_default_style">
          <a class="addthis_button_facebook" title="Del på Facebook"></a>
          <a class="addthis_button_twitter" title="Del på Twitter"></a>
          <a class="addthis_button_linkedin" title="Del på LinkedIn"></a>
          <a class="addthis_button_email" title="Del via e-mail"></a>
        </div>
        <script type="text/javascript"
                src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=xa-4f9d7f8443af8d5e"></script>
        <script type="text/javascript">
          var addthis_config = {
            ui_language: "da"
          }
        </script>
        <!-- AddThis Button END -->
        </p>
      </div>
    </div>
    <div>
      <?php include('inc/sidebar.inc.php'); ?>
    </div>
  </div>
  <div>
    <?php echo views_embed_view('ruc_videoer', 'block_1'); ?>
  </div>
  <div>
    <?php
    echo views_embed_view('popul_re_svar', 'block_1');
    ?>
  </div>
</div>
<?php include('inc/footer.inc.php'); ?>

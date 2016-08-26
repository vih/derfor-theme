<?php print render($page['header']); ?>
<div class="container background">
  <?php include('inc/menu.inc.php'); ?>
  <div>
    <?php echo views_embed_view('nyeste_svar', 'block_1');
    ?>
  </div>
  <div class="clearfix">
    <div class="leftregion clearfix">
      <div class="pull-right frontpagebox">
        <img src="<?php echo $base_path . $directory; ?>/img/od.png"
             alt="" style="width:240px;height:240px;"/>
      </div>
      <div class="inner" style="margin-bottom:0;">
        <?php print render($page['content']); ?>
        <p>
          <!-- AddThis Button BEGIN -->
        <div
          class="addthis_toolbox addthis_default_style addthis_default_style">
          <a class="addthis_button_facebook" title="Del på Facebook"></a>
          <a class="addthis_button_twitter" title="Del på Twitter"></a>
          <a class="addthis_button_linkedin" title="Del på LinkedIn"></a>
          <a class="addthis_button_email" title="Del via e-mail"></a>
        </div>
        <!-- Go to www.addthis.com/dashboard to customize your tools -->
        <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-4f3a137c5cd412de"></script>
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
    <?php echo views_embed_view('ruc_videoer', 'block_1'); ?>
  </div>
  <div>
    <?php echo views_embed_view('popul_re_svar', 'block_1'); ?>
  </div>
</div>
<?php include('inc/footer.inc.php'); ?>

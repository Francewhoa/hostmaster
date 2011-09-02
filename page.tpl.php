<div id="page-wrapper">

  <div id="header" class='reverse'><div class='limiter clearfix'>
    <div class='logo'><?php print $logo ?></div>
    <?php if ($site_name): ?><div class='site-name'><?php print $site_name ?></div><?php endif; ?>
  </div></div><!-- /header -->

  <div id='navigation' class='reverse'><div class='limiter clearfix'>
    <?php if ($breadcrumb) print $breadcrumb; ?>
    <?php if ($main_menu): ?>
        <?php print theme('links__system_main_menu', array('links' => $main_menu, 'attributes' => array('id' => 'main-menu', 'class' => array('links', 'inline', 'clearfix')))); ?>
    <?php endif; ?>
  </div></div>

  <?php if ($messages): ?>
  <div id="console" class='reverse'><div class='limiter clearfix'>
   <?php if ($messages): print $messages; endif; ?>
  </div></div>
  <?php endif; ?>

  <div id='header-region'><div class='limiter clearfix'>
    <?php print render($page['header']); ?>
    <?php if ($title): ?><h2 class='page-title'><?php print $title ?></h2><?php endif; ?>
    <?php if ($tabs): ?><?php print render($tabs); ?><?php endif; ?>
  </div></div>

  <div id='page'><div class='limiter clearfix'>
    <?php if ($tabs2): ?><?php print render($tabs2); ?><?php endif; ?>
    <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>

    <div id='main'>
      <div class='page-content'>
        <?php print render($page['help']); ?>
        <?php print render($page['content']); ?>
        <?php print $feed_icons ?>
      </div>
    </div><!-- /main -->

    <?php if (!empty($page['sidebar_first']) or !empty($page['sidebar_second'])): ?>
      <div id="right" class="sidebar"><?php print render($page['sidebar_first']); ?><?php print render($page['sidebar_second']); ?></div>
    <?php endif; ?>

  </div></div>

  <div id="footer" class='reverse'><div class='limiter clearfix'>
    <?php print render($page['footer']); ?>
    <?php if ($secondary_menu): ?>
        <?php print theme('links__system_secondary_menu', array('links' => $secondary_menu, 'attributes' => array('id' => 'secondary-menu', 'class' => array('links', 'inline', 'clearfix')))); ?>
    <?php endif; ?>
  </div></div>

</div> <!-- /#page-wrapper -->

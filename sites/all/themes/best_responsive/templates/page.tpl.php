<?php
  global $base_url;
?>

<div id="wrap" class="clearfix">
  <div id="header-wrap">
    <header id="header" class="clearfix">
      <div id="logo">
       <div id="site-logo"><a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>">
          <img src="<?php echo $base_url; ?>/sites/all/themes/best_responsive/images/fejlec.jpg" alt="<?php print t('Home'); ?>" />
        </a></div>
      </div>
    </header>
  </div>

  <div id="main-content" class="clearfix">
    <?php if($page['preface_first'] || $page['preface_middle'] || $page['preface_last'] || $page['header']) : ?>
    <div id="preface-area" class="clearfix">
      <?php if($page['preface_first'] || $page['preface_middle'] || $page['preface_last']) : ?>
      <div id="preface-block-wrap" class="clearfix">
        <?php if($page['preface_first']): ?><div class="preface-block">
          <?php print render ($page['preface_first']); ?>
        </div><?php endif; ?>
        <?php if($page['preface_middle']): ?><div class="preface-block">
          <?php print render ($page['preface_middle']); ?>
        </div><?php endif; ?>
        <?php if($page['preface_last']): ?><div class="preface-block remove-margin">
          <?php print render ($page['preface_last']); ?>
        </div><?php endif; ?>
      </div>
      <div class="clear"></div>
      <?php endif; ?>

      <?php print render($page['header']); ?>
    </div>
    <?php endif; ?>

    <?php $sidebarclass=" "; if($page['sidebar_first']) { $sidebarclass="sidebar-bg"; } ?>
    <div id="primary" class="container <?php print $sidebarclass; ?> clearfix">
      <section id="content" role="main" class="clearfix">
        <?php if (theme_get_setting('breadcrumbs')): ?><?php if ($breadcrumb): ?><div id="breadcrumbs"><?php print $breadcrumb; ?></div><?php endif;?><?php endif; ?>
        <?php print $messages; ?>
        <?php if ($page['content_top']): ?><div id="content_top"><?php print render($page['content_top']); ?></div><?php endif; ?>
        <div id="content-wrap">
          <?php print render($title_prefix); ?>
          <?php if ($title): ?><h1 class="page-title"><?php print $title; ?></h1><?php endif; ?>
          <?php print render($title_suffix); ?>
          <?php if (!empty($tabs['#primary'])): ?><div class="tabs-wrapper clearfix"><?php print render($tabs); ?></div><?php endif; ?>
          <?php print render($page['help']); ?>
          <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
          <?php print render($page['content']); ?>
        </div>
      </section>
      <?php if ($page['sidebar_first']): ?>
        <aside id="sidebar" role="complementary">
         <?php print render($page['sidebar_first']); ?>
        </aside> 
      <?php endif; ?>
    </div>

    <div class="clear"></div>
  </div>

  <?php if ($page['footer_first'] || $page['footer_second'] || $page['footer_third']  || $page['footer']): ?>
  <footer id="footer-bottom">
    <div id="footer-area" class="clearfix">
      <?php if ($page['footer_first'] || $page['footer_second'] || $page['footer_third']): ?>
        <div id="footer-block-wrap" class="clearfix">
          <?php if($page['footer_first']): ?><div class="footer-block">
            <?php print render ($page['footer_first']); ?>
          </div><?php endif; ?>
          <?php if($page['footer_second']): ?><div class="footer-block">
            <?php print render ($page['footer_second']); ?>
          </div><?php endif; ?>
          <?php if($page['footer_third']): ?><div class="footer-block remove-margin">
            <?php print render ($page['footer_third']); ?>
          </div><?php endif; ?>
        </div>
        <div class="clear"></div>
      <?php endif; ?>
      
      <?php print render($page['footer']); ?>
    </div>
  </footer>
  <?php endif; ?>

  <div id="copyright">
    <?php print t('Copyright'); ?> &copy; <?php echo date("Y"); ?>, <a href="<?php print $front_page; ?>"><?php print $site_name; ?></a>.
  </div>
</div>

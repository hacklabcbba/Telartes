<!--.page -->
<div role="document" class="page">

  <!--.l-header region -->
  <header role="banner" class="l-header">

    <?php if ($top_bar): ?>
      <!--.top-bar -->
      <?php if ($top_bar_classes): ?>
      <div class="<?php print $top_bar_classes; ?>">
      <?php endif; ?>
        <nav class="top-bar"<?php print $top_bar_options; ?>>
          
          <?php if ($logo): ?>
            <a class="logo navbar-btn pull-left" href="<?php print $front_page; ?>" title="<?php print t('telartes'); ?>">
              <img src="<?php print $logo; ?>" alt="<?php print t('telartes'); ?>" />
            </a>
          <?php endif; ?>

          <ul class="title-area">
            <li class="name"><h1><?php print $linked_site_name; ?></h1></li>
            <li class="toggle-topbar menu-icon"><a href="#"><span><?php print $top_bar_menu_text; ?></span></a></li>
          </ul>
          <section class="top-bar-section">
            <?php if ($top_bar_main_menu) :?>
              <?php print $top_bar_main_menu; ?>
            <?php endif; ?>
            <?php if ($top_bar_secondary_menu) :?>
              <?php print $top_bar_secondary_menu; ?>
            <?php endif; ?>
          </section>
        </nav>
      <?php if ($top_bar_classes): ?>
      </div>
      <?php endif; ?>
      <!--/.top-bar -->
    <?php endif; ?>

    <!-- Title, slogan and menu -->
    <?php if ($alt_header): ?>
    <section class="row <?php print $alt_header_classes; ?>">

      <?php if ($linked_logo): print $linked_logo; endif; ?>

      <?php if ($site_name): ?>
        <?php if ($title): ?>
          <div id="site-name" class="element-invisible">
            <strong>
              <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><span><?php print $site_name; ?></span></a>
            </strong>
          </div>
        <?php else: /* Use h1 when the content title is empty */ ?>
          <h1 id="site-name">
            <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><span><?php print $site_name; ?></span></a>
          </h1>
        <?php endif; ?>
      <?php endif; ?>

      <?php if ($site_slogan): ?>
        <h2 title="<?php print $site_slogan; ?>" class="site-slogan"><?php print $site_slogan; ?></h2>
      <?php endif; ?>

      <?php if ($alt_main_menu): ?>
        <nav id="main-menu" class="navigation" role="navigation">
          <?php print ($alt_main_menu); ?>
        </nav> <!-- /#main-menu -->
      <?php endif; ?>

      <?php if ($alt_secondary_menu): ?>
        <nav id="secondary-menu" class="navigation" role="navigation">
          <?php print $alt_secondary_menu; ?>
        </nav> <!-- /#secondary-menu -->
      <?php endif; ?>

    </section>
    <?php endif; ?>
    <!-- End title, slogan and menu -->

    <?php if (!empty($page['header'])): ?>
      <!--.l-header-region -->
      <section class="l-header-region row">
        <div class="large-12 columns">
          <?php print render($page['header']); ?>
        </div>
      </section>
      <!--/.l-header-region -->
    <?php endif; ?>

  </header>
  <!--/.l-header -->

  <?php if (!empty($page['featured'])): ?>
    <!--/.featured -->
    <section class="l-featured row">
      <div class="large-12 columns">
        <?php print render($page['featured']); ?>
      </div>
    </section>
    <!--/.l-featured -->
  <?php endif; ?>

  <?php if ($messages && !$zurb_foundation_messages_modal): ?>
    <!--/.l-messages -->
    <section class="l-messages row">
      <div class="large-12 columns">
        <?php if ($messages): print $messages; endif; ?>
      </div>
    </section>
    <!--/.l-messages -->
  <?php endif; ?>

  <?php if (!empty($page['help'])): ?>
    <!--/.l-help -->
    <section class="l-help row">
      <div class="large-12 columns">
        <?php print render($page['help']); ?>
      </div>
    </section>
    <!--/.l-help -->
  <?php endif; ?>

  <main role="main" class="row l-main">
    <div class="<?php print $main_grid; ?> main columns">
      <?php if (!empty($page['highlighted'])): ?>

      <div class="row-custom-menu">
        <div class="highlight panel callout">
          <?php print render($page['highlighted']); ?>
        </div>
        <nav class="custom-menu-wrapper">
          <ul class="main-nav view-menu-wrapper">
            <li>
              <ul class="menu-inciedncias">
                <li class="expanded">
                  <a class="plus-icon" href="content/incidencia">incidencia</a>
                  <ul class="dropdown child-menu">
                    <li>
                      <a href="http://abrecultura.org/" title="abre cultura">abre cultura</a>
                    </li>
                    <li>
                      <!--<a href="#" title="leyes optales">legislación Cultural</a>-->
                    </li>
                  </ul>
                </li> 
             </ul><!--/.menu-inciedncias -->
             <ul class="cultura-viva-comunitaria">
                <li>
                  <a class="plus-icon" href="content/cultura-viva-comunitaria" title="cultura viva comunitaria">cultura viva comunitaria</a>
                </li>
              </ul><!--/.cultura-viva-comunitaria -->
              <ul class="comunicacion">
                <li>
                  <a class="plus-icon" href="content/comunicación" title="comunicacion">comunicación</a>
                  <ul class="dropdown child-menu">
                    <li>

                    </li>
                    <li>
                      <a href="http://faccionlatina.org" title="Facción">facción</a>
                    </li>
                  </ul>
                </li>
              </ul><!--/.comunicacion -->
              
              <ul class="circulacion">
                <li>
                  <a class="plus-icon" href="content/circulacion" title="circulación cultural">circulación cultural</a>
                  <ul class="dropdown child-menu">
                    <li>

                    </li>
                    <li>
                      <a href="https://docs.google.com/a/telartes.org.bo/forms/d/1Il8KOf-xWcaR0thqhWHF0YzAq3KUuo7pH4Y5gKyUeNI/viewform" title="hospeda cultura">hospeda cultura</a>
                    </li>
                  </ul>
                </li>
              </ul><!--/.circulacion -->
              
              <ul class="formacion">
                <li>
                  <a class="plus-icon" href="content/formación" title="formacion">formación</a>
                </li>
              </ul><!--/.formacion -->
              <ul class="boletin">
                <li>
                  <a class="plus-icon" href="boletin" title="boletin">boletín</a>
                </li>
              </ul><!--/.boletlin -->
              <ul class="menu-manifiesto">
                <li>
                 <a class="plus-icon" href="content/manifiesto" title="manifiesto telartes">manifiesto telartes</a>
                </li>
              </ul>
              <ul class="cultura-red">
                <li>
                  <a class="plus-icon" href="content/cultura-de-red" title="cultura de red">cultura de red</a>
                </li>
              </ul><!--/.cultura-red -->
              <ul class="foro">
                <li>
                  <a class="plus-icon" href="foros/debate-general" title="foro">foro</a>
                </li>
              </ul><!--/.foro -->
              <ul class="menu-economia">
                <li class="expanded">
                  <a class="plus-icon" href="content/economia-colaborativa"  title="sostenibilidad">sostenibilidad</a>
                  <ul class="dropdown child-menu">
                    <li>
                      <a href="http://minka.me/" title="minka">Minka</a>
                    </li>
                    <li>
                     <!--/ <a href="#" title="talleres">Banco de Recursos 4D</a>-->
                    </li>
                  </ul>
                </li> 
              </ul><!--/.menu-economia -->
              <ul class="buscador">
                <li>
                  <a id="fa-search" ><i class="fa fa-search"></i></a>
                  <div class="sesrch-block">
                    <?php 
                      $block = module_invoke('search','block_view','form');
                      print render($block);
                    ?>
                  </div
                </li>
            </ul>
              <ul class="social-networks">
                <li class="twiter">
                  <a href="#">twitter</a>
                </li>
                <li class="facebook">
                  <a href="#">facebook</a>
                </li>
                <li class="youtube">
                  <a href="#">youtube</a>
                </li>
              </ul><!--/.social-networks -->
            </li>
          </ul>
        </nav><!--/.custom-menu-wrapper -->
      </div><!--/.row-custom-menu -->

      <?php endif; ?>

      <a id="main-content"></a>

      <?php if ($breadcrumb): print $breadcrumb; endif; ?>

      <?php if ($title && !$is_front): ?>
        <?php print render($title_prefix); ?>
        <h1 id="page-title" class="title"><?php print $title; ?></h1>
        <?php print render($title_suffix); ?>
      <?php endif; ?>

      <?php if (!empty($tabs)): ?>
        <?php print render($tabs); ?>
        <?php if (!empty($tabs2)): print render($tabs2); endif; ?>
      <?php endif; ?>

      <?php if ($action_links): ?>
        <ul class="action-links">
          <?php print render($action_links); ?>
        </ul>
      <?php endif; ?>

      <?php print render($page['content']); ?>
    </div>
    <!--/.main region -->

    <?php if (!empty($page['sidebar_first'])): ?>
      <aside role="complementary" class="<?php print $sidebar_first_grid; ?> sidebar-first columns sidebar">
        <?php print render($page['sidebar_first']); ?>
      </aside>
    <?php endif; ?>

    <?php if (!empty($page['sidebar_second'])): ?>
      <aside role="complementary" class="<?php print $sidebar_sec_grid; ?> sidebar-second columns sidebar">
        <?php print render($page['sidebar_second']); ?>
      </aside>
    <?php endif; ?>
  </main>
  <!--/.main-->

  <?php if (!empty($page['triptych_first']) || !empty($page['triptych_middle']) || !empty($page['triptych_last'])): ?>
    <!--.triptych-->
    <section class="l-triptych row">
      <div class="triptych-first large-4 columns">
        <?php print render($page['triptych_first']); ?>
      </div>
      <div class="triptych-middle large-4 columns">
        <?php print render($page['triptych_middle']); ?>
      </div>
      <div class="triptych-last large-4 columns">
        <?php print render($page['triptych_last']); ?>
      </div>
    </section>
    <!--/.triptych -->
  <?php endif; ?>

  <?php if (!empty($page['footer_firstcolumn']) || !empty($page['footer_secondcolumn']) || !empty($page['footer_thirdcolumn']) || !empty($page['footer_fourthcolumn'])): ?>
    <!--.footer-columns -->
    <section class="row l-footer-columns">
      <?php if (!empty($page['footer_firstcolumn'])): ?>
        <div class="footer-first large-3 columns">
          <?php print render($page['footer_firstcolumn']); ?>
        </div>
      <?php endif; ?>
      <?php if (!empty($page['footer_secondcolumn'])): ?>
        <div class="footer-second large-3 columns">
          <?php print render($page['footer_secondcolumn']); ?>
        </div>
      <?php endif; ?>
      <?php if (!empty($page['footer_thirdcolumn'])): ?>
        <div class="footer-third large-3 columns">
          <?php print render($page['footer_thirdcolumn']); ?>
        </div>
      <?php endif; ?>
      <?php if (!empty($page['footer_fourthcolumn'])): ?>
        <div class="footer-fourth large-3 columns">
          <?php print render($page['footer_fourthcolumn']); ?>
        </div>
      <?php endif; ?>
    </section>
    <!--/.footer-columns-->
  <?php endif; ?>

  <!--.l-footer-->
  <footer class="l-footer panel row" role="contentinfo">
    <?php if (!empty($page['footer'])): ?>
      <div class="footer large-12 columns">
        <?php print render($page['footer']); ?>
      </div>
    <?php endif; ?>

    <?php if ($site_name) :?>
      <div class="copyright large-12 columns">
        &copy; <?php print date('Y') . ' ' . check_plain($site_name) . ' ' . t('All rights reserved.'); ?>
      </div>
    <?php endif; ?>
  </footer>
  <!--/.footer-->

  <?php if ($messages && $zurb_foundation_messages_modal): print $messages; endif; ?>
</div>
<!--/.page -->

<?php

/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 * @see html.tpl.php
 */
?>
<header id="header" class="header" role="header">
  <nav class="navbar navbar-default navbar-inverse" role="navigation">
    <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
          <span class="sr-only"><?php print t('Toggle navigation'); ?></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <?php if ($site_name || $logo): ?>
          <a href="<?php print $front_page; ?>" class="navbar-brand" rel="home" title="<?php print t('Home'); ?>">
            <?php if ($logo): ?>
              <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" id="logo" />
            <?php endif; ?>
            <?php if ($site_name): ?>
              <span class="site-name"><?php print $site_name; ?></span>
            <?php endif; ?>
          </a>
        <?php endif; ?>
      </div> <!-- /.navbar-header -->

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse navbar-right" id="navbar-collapse">
        <?php if ($main_menu): ?>
          <ul id="main-menu" class="menu nav navbar-nav">
            <?php print render($main_menu); ?>
          </ul>
        <?php endif; ?>
      </div><!-- /.navbar-collapse -->
    </div> <!-- /.container -->
  </nav><!-- /.navbar -->
</header>

<?php if ($page['jumbotron']): ?>
  <div class="jumbotron">
    <div class="container">
      <?php print render($page['jumbotron']); ?>
    </div>
  </div>
<?php endif; ?>

<div class="clearfix">
  <div class="col-md-8 bg-primary">
    <div class="pull-right col-md-9">
      <div class="box" style="padding: 30px;">
        <p>드루팔 8을 출시했어요!</p>
        <a href="/" class="btn btn-primary">내려받기</a>
      </div>
    </div>
  </div>
  <div class="col-md-4 bg-info">
    <div class="pull-left">
      <div class="box" style="padding: 30px;">
        <p>바로 볼 수 있어요!</p>
        <a href="/" class="btn btn-primary">사용하기</a>
      </div>
    </div>
  </div>
</div>

<div class="clearfix">
  <div class="col-md-8">
    <div class="pull-right col-md-9" style="padding: 50px;">
      <h1>공지글</h1>
      <ul>
        <li>드루팔 8을 출시했어요!</li>
        <li>드루팔 8을 출시했어요!</li>
        <li>드루팔 8을 출시했어요!</li>
        <li>드루팔 8을 출시했어요!</li>
        <li>드루팔 8을 출시했어요!</li>
      </ul>
    </div>
  </div>
  <div class="col-md-4">
    <div class="pull-left" style="padding: 30px;">
      <h1>작은 배너</h1>
      <img class="card-img-top img-fluid" src="http://placehold.it/200x200" alt="Card image cap">
    </div>
  </div>
</div>

<div class="bg-info" style="padding: 50px;">
  <div class="container">
    <div class="row text-center">
      <a href="/" class="btn btn-primary">참여하기</a>
    </div>
  </div>
</div>


<footer id="footer" class="footer clearfix bg-danger" role="footer">
  <div class="container">
    <?php if ($copyright): ?>
      <small class="copyright pull-left"><?php print $copyright; ?></small>
    <?php endif; ?>
    <small class="pull-right"><a href="#"><?php print t('Back to Top'); ?></a></small>
  </div>
</footer>

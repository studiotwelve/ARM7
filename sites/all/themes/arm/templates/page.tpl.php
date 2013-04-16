<div id="page"><div class="page-wrap-inner">
	<header id="header" role="banner">	
	<?php if ($logo) : ?>
		<a href="<?php print $front_page;?>" title="Home" rel="home" id="logo"><img src="<?php print $logo;?>" alt="Home" /></a>
	<?php endif; ?>	
	<?php if ($site_name || $site_slogan) : ?>
		<hgroup id="name-and-slogan">		
		<?php if ($site_name) : ?>
			<h1 id="site-name"><a href="<?php print $front_page;?>" title="Home" rel="home"><?php print $site_name;?></a></h1>
		<?php endif; ?>		
		<?php if ($site_slogan) : ?>
			<h2 id="site-slogan"><?php print $site_slogan;?></h2>
		<?php endif; ?>		
		</hgroup><!-- /#name-and-slogan -->
	<?php endif; ?>	
	<?php if ($secondary_menu) : ?>
		<nav id="secondary-menu" role="navigation">
			<?php print theme('links__system_secondary_menu',
			array('links' => $secondary_menu, 'attributes' =>
			array('class' =>
			array('links', 'inline', 'clearfix'),),'heading' =>
			array('text' => $secondary_menu_heading, 'level' => 'h2', 'class' =>
			array('element-invisible'),),)); ?>
		</nav><!-- /#secondary-menu -->
	<?php endif; ?>
	<?php $header = render($page['header']); if ($header) : ?>
		<?php print $header; ?>	
	<?php endif; ?>
	</header><!-- /#header -->
	<?php $nav = render($page['navigation']); ?>	
	<div id="main" class="<?php if ($nav){print t("nav");} else {print t("no-nav");} ?>">	
		<div id="content" class="column" role="main">
			<?php print render($page['highlighted']); ?>
			<?php print $messages; ?>
			<?php print render($page['help']); ?>
			<?php print $breadcrumb; ?>
			<?php print render($title_prefix); ?>			
			<?php if ($title) : ?>
				<h1 class="title" id="page-title"><?php print $title; ?></h1>
			<?php endif; ?>		
			<?php print render($title_suffix); ?>
			<?php print render($page['content']); ?>			
			<?php print render($tabs); ?>			
			<?php if ($action_links) : ?>
				<ul class="action-links"><?php print render($action_links); ?></ul>
			<?php endif; ?>
			<?php print $feed_icons; ?>
		</div><!-- /#content -->
		<?php if ($nav) : ?>		
		<div id="navigation">
			<?php print $nav; ?>
		</div><!-- /#navigation -->
		<?php endif; ?>	
		<?php
		$sidebar_first = render($page['sidebar_first']);
		$sidebar_second = render($page['sidebar_second']);
		?>		
		<?php if ($sidebar_first || $sidebar_second) : ?>
		<aside class="sidebars">
			<?php print $sidebar_first ?>
			<?php print $sidebar_second; ?>
		</aside><!-- /.sidebars -->
		<?php endif; ?>
	</div><!-- /#main -->
	<?php print render($page['footer']); ?>
</div></div><!-- /#page -->
<?php print render($page['bottom']); ?>
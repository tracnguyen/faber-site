<?php
// $Id: page.tpl.php,v 1.18.2.1 2009/04/30 00:13:31 goba Exp $
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">
  <head>
    <?php print $head ?>
    <title><?php print $head_title ?></title>
    <?php print $styles ?>
    <?php print $scripts ?>
		<link type="text/css" rel="stylesheet" media="all" href="<?php	echo base_path().path_to_theme().'/stylesheets/main.css' ?>" />
  <!--[if lt IE 9]>
		<link type="text/css" rel="stylesheet" media="all" href="<?php	echo base_path().path_to_theme().'/stylesheets/ie9-lt.css' ?>" />
		<style type="text/css">
			.cls-ie-css3 { behavior: url("<?php	echo base_path().path_to_theme().'/stylesheets/PIE.htc' ?>"); position: relative;}
		</style>
	<![endif]-->
	<!--[if lt IE 8]>
		<style type="text/css">
			.cls-ie-css3, .cls-ie7 { zoom: 1;}
		</style>
	<![endif]-->
	<!--[if lte IE 6]>
		<link rel="stylesheet" media="screen" href="<?php	echo base_path().path_to_theme().'/stylesheets/ie6-lte.css' ?>" type="text/css" >
		<style type="text/css">
			div.fix-png, img.fix-png { behavior: url("<?php	echo base_path().path_to_theme().'/stylesheets/iepngfix.htc' ?>"); }
		</style>
	<![endif]-->
	</head>

	<body>
		<div id="site-wrapper">
			<div id="site-wrapper-c">
				<div id="site-wrapper-t">
					<div id="site-wrapper-b">
						<div id="header-subnav" class="">
							<div id="header-subnav-inner">
								<?php print $header_subnav; ?>
								<a id="rss-xml" href="?q=rss.xml"> RSS Feeds </a> 
							</div>
						</div>
						
						<div id="header-main" class="">
							<div id="header-main-inner">
								<a id="logo-fabelNovel" href="<?php	echo url('', array('absolute' => true)) ?>"> faberNovel's logo </a>
								<?php print $header_main; ?>
							</div>
						</div>
						
						<?php if ($node->type == "fabernovel_staff"): 
										$links = array();

										// creating a link to the team page
										$links[] = l(t('Team'), 'node/56');

										// yet another link
										$links[] = l(t($variables['node']->title), $variables['node']->path);

										// lastly, overwrite the contents of the breadcrumbs variable in the page scope
										$variables['breadcrumb'] = theme('breadcrumb', $links);
						?>
							<div id="breadcrumb" class="clear-block">
								<div id="breadcrumb-inner">
									<?php print $variables['breadcrumb']; ?>
								</div>
							</div>
						<?php endif; ?>
						
						<div id="banner-main" class="">
							<div id="banner-main-inner">
								<?php print $main_banner; ?>
							</div>
						</div>
						
						<div id="site-content">
							<?php if (isset($primary_links)) : ?>
							  <?php print theme('links', $primary_links, array('class' => 'cls-links cls-primary-links')) ?>
							<?php endif; ?>
							<?php if (isset($secondary_links)) : ?>
							  <?php print theme('links', $secondary_links, array('class' => 'cls-links cls-secondary-links')) ?>
							<?php endif; ?>
							<?php if ($pre_content): ?>
								<div id="pre-content" class="clear-block">
									<div id="pre-content-inner">
										<?php print $pre_content; ?>
									</div>
								</div>
							<?php endif; ?>
							
							<?php if ($tabs): ?>
								<div id='tabs'>
									<div class='page-tabs limiter clear-block'><?php print $tabs ?></div>
									<?php if ($tabs2): ?>
										<div class='page-tabs limiter clear-block'>
											<?php print $tabs2 ?>
										</div>
									<?php endif; ?>
								</div>
							<?php endif; ?>
							<?php if ($show_messages && $messages): ?>
								<div id='console' class='clear-block'><?php print $messages; ?></div>
							<?php endif; ?>
							
							<?php	if (!drupal_is_front_page()): ?>
							<div id="content">
								<?php if (!empty($content) && $node->type != "page_site" && $node->type != "fabernovel_staff"): ?>
									<div class="content-wrapper clear-block"><?php print $content ?></div>
								<?php endif; ?>
								<?php print $content_region ?>
							</div>
							<?php	endif;	?>
							
							<?php if ($post_content): ?>
								<div id="post-content" class="clear-block">
									<div id="post-content-inner">
										<?php print $post_content; ?>
									</div>
								</div>
							<?php endif; ?>
						</div>
						
						<div id="footer1" class="clear-block">
							<div id="footer1-inner">
								<div id="earth"></div>
								<a id="footer-logo" href="<?php	echo url('', array('absolute' => true)) ?>"> faberNovel's logo </a>
								<div id="footer-social">
									<div id="footer-social-inner">
										<ul class="cls-menu">
											<li class="cls-facebook">
												<a class="cls-facebook" href="javascript:;">
													Facebook
												</a>
											</li>
											<li class="cls-twitter">
												<a class="cls-twitter" href="javascript:;">
													Twitter
												</a>
											</li>
											<li class="cls-video">
												<a class="cls-video" href="javascript:;">
													Video
												</a>
											</li>
											<li class="cls-flickr">
												<a class="cls-flickr" href="javascript:;">
													Flickr
												</a>
											</li>
											<li class="cls-rss">
												<a class="cls-rss" href="javascript:;">
													Rss
												</a>
											</li>
										</ul>
									</div>
								</div>
								<?php if ($footer1): ?>
									<?php print $footer1; ?>
								<?php endif; ?>
								<div class="clr"></div>
							</div>
						</div>
					<?php if ($footer2): ?>
						<div id="footer2" class="clear-block">
							<div id="footer2-inner">
								<?php print $footer2; ?>
							</div>
						</div>
					<?php endif; ?>
					
					<?php if ($footer_logo): ?>
						<div id="footer" class="clear-block">
							<div id="footer-inner">
								<?php print $footer_logo; ?>
							</div>
						</div>
					<?php endif; ?>
					
					<?php print $closure ?>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>
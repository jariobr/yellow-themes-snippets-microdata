<!DOCTYPE html><html prefix="og: http://ogp.me/ns#" lang="<?php echo $yellow->page->getHtml("language") ?>">
<head>
<meta charset="utf-8" />
<title><?php echo $yellow->page->getHtml("titleHeader") ?></title>
<meta name="description" content="<?php echo $yellow->page->getHtml("titleHeader") ?>. <?php echo $yellow->page->getHtml("description") ?>" />
<meta name="keywords" content="<?php echo $yellow->page->getHtml("keywords") ?>" />
<meta name="author" content="<?php echo $yellow->page->getHtml("author") ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<?php echo $yellow->page->getExtra("header") ?>
<link rel="canonical" href="<?php echo $this->yellow->page->getUrl() ?>" />
</head>
<body>
<?php echo $yellow->page->getExtra("afterbody") ?>
	<?php $yellow->page->set("pageClass", "page") ?>
	<?php $yellow->page->set("pageClass", $yellow->page->get("pageClass")." template-".$yellow->page->get("template")) ?>
	<?php if($yellow->page->get("navigation")=="navigation-sidebar") $yellow->page->setPage("sidebar", $yellow->page); ?>
	<?php if($page = $yellow->pages->find($yellow->lookup->getDirectoryLocation($yellow->page->location).$yellow->page->get("sidebar"))) $yellow->page->setPage("sidebar", $page) ?>
	<?php if($yellow->page->isPage("sidebar")) $yellow->page->set("pageClass", $yellow->page->get("pageClass")." with-sidebar") ?>
	<div class="<?php echo $yellow->page->getHtml("pageClass") ?>">
<header>	
	<div class="header" role="banner">
	<hgroup itemscope itemtype="http://schema.org/WPHeader">	
		<div class="sitename">
		<h1><a href="<?php echo $yellow->page->base."/" ?>"><i class="sitename-logo"></i><?php echo $yellow->page->getHtml("sitename") ?></a></h1>
		<?php if($yellow->page->isExisting("tagline")): ?><span><?php $yellow->page->getHtml("tagline") ?></span><?php endif ?>
		</div>
	</hgroup>
		<div class="sitename-banner"></div>
			<nav id="site-navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
			<?php $yellow->snippet($yellow->page->get("navigation")) ?>
			</nav>
	</div>
</header>


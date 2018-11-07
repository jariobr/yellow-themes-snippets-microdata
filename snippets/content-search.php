<div class="breadcrambs"><?php echo $yellow->page->getExtra("breadcrumbs") ?></div>
<div class="content">
<?php $yellow->snippet("sidebar") ?>
<div class="main" role="main" itemscope itemtype="http://schema.org/SearchResultsPage">
<span class="description" itemprop="headline"><?php echo $yellow->page->getHtml("description") ?></span>

<?php if($yellow->page->get("navigation")!="navigation-search"): ?>
<form class="search-form" action="<?php echo $yellow->page->getLocation(true) ?>" method="post">
<input class="form-control" type="text" name="query" value="<?php echo htmlspecialchars($_REQUEST["query"]) ?>"<?php echo $yellow->page->get("status")=="none" ? " autofocus=\"autofocus\"" : "" ?> />
<input class="btn search-btn" type="submit" value="<?php echo $yellow->text->getHtml("searchButton") ?>" />
<input type="hidden" name="clean-url" />
</form>
<?php endif ?>

<?php if(count($yellow->page->getPages())): ?>
<?php foreach($yellow->page->getPages() as $page): ?>

<section class="entry">
<header class="entry-title"><h2 itemprop="headline"><a href="<?php echo $page->getLocation(true) ?>"><?php echo $page->getHtml("title") ?></a></h2></header>

<article class="entry-content"><?php echo htmlspecialchars($yellow->toolbox->createTextDescription($page->getContent(false, 4096), $yellow->config->get("searchPageLength"))) ?></article>
<footer>
<div class="entry-location"><a rel="bookmark" itemprop="url" href="<?php echo $page->getLocation(true) ?>"><?php echo $page->getUrl() ?></a></div>
</footer>
</section>
<?php endforeach ?>
<?php elseif($yellow->page->get("status")!="none"): ?>
<?php echo $yellow->text->getHtml("searchResults".ucfirst($yellow->page->get("status"))) ?>
<?php endif ?>

<?php $yellow->snippet("pagination", $yellow->page->getPages()) ?>


</div>
</div>

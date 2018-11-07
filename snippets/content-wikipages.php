<div class="breadcrambs"><?php echo $yellow->page->getExtra("breadcrumbs") ?></div>

<div class="content">
<?php $yellow->snippet("sidebar") ?>
<div itemscope class="main" role="main" itemtype="http://schema.org/NewsArticle">
<?php if($yellow->page->isExisting("titleWiki")): ?>
<h1 itemprop="headline"><?php echo $yellow->page->getHtml("titleWiki") ?></h1>
<?php endif ?>
<?php foreach($yellow->page->getPages() as $page): ?>
<?php $page->set("entryClass", "entry") ?>
<?php if($page->isExisting("tag")): ?>
<?php foreach(preg_split("/\s*,\s*/", $page->get("tag")) as $tag) { $page->set("entryClass", $page->get("entryClass")." tag-".$yellow->toolbox->normaliseArgs($tag, false)); } ?>
<?php endif ?>
<div class="<?php echo $page->getHtml("entryClass") ?>">
<div class="entry-title"><h2 itemprop="headline"><a itemprop="url" href="<?php echo $page->getLocation(true) ?>"><?php echo $page->getHtml("title") ?></a></h2></div>
<div class="entry-meta">
<span itemprop="datePublished" class="date"><?php echo $page->getDateHtml("published") ?></span> <span class="ping"><a href="http://pingomatic.com/ping/?title=<?php echo $yellow->page->getHtml("titleHeader") ?>&blogurl=<?php echo $yellow->page->getUrl() ?>&chk_weblogscom=on&chk_blogs=on&chk_feedburner=on&chk_newsgator=on&chk_myyahoo=on&chk_pubsubcom=on&chk_blogdigger=on&chk_weblogalot=on&chk_newsisfree=on&chk_topicexchange=on&chk_google=on&chk_tailrank=on&chk_skygrid=on&chk_collecta=on&chk_superfeedr=on&chk_audioweblogs=on&chk_rubhub=on&chk_a2b=on&chk_blogshares=on" target="_blank">&#961;</a></span>
</div>


<div itemprop="description" class="entry-content"><?php echo $yellow->toolbox->createTextDescription($page->getContent(), 0, false, "<!--more-->", "<span class=\"btn right more\"><a href=\"".$page->getLocation(true)."\">".$yellow->text->getHtml("blogMore")."</a> &crarr; </span>") ?></div>
</div>
<?php endforeach ?>
<?php $yellow->snippet("pagination", $yellow->page->getPages()) ?>
</div>
</div>

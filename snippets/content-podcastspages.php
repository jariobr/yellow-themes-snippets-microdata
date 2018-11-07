<div class="content">
<?php $yellow->snippet("sidebar") ?>

<div class="main">
<?php if($yellow->page->isExisting("titlePodcasts")): ?>
<h1><?php echo $yellow->page->getHtml("titlePodcasts") ?></h1>
<?php endif ?>
<?php foreach($yellow->page->getPages() as $page): ?>
<?php $page->set("entryClass", "entry") ?>
<?php if($page->isExisting("tag")): ?>
<?php foreach(preg_split("/\s*,\s*/", $page->get("tag")) as $tag) { $page->set("entryClass", $page->get("entryClass")." tag-".$yellow->toolbox->normaliseArgs($tag, false)); } ?>
<?php endif ?>
<div class="<?php echo $page->getHtml("entryClass") ?>">
<div class="entry-title"><h2 class="podcasts"><a href="<?php echo $page->getLocation(true) ?>"><?php echo $page->getHtml("title") ?></a></h2></div>

<div class="entry-meta">

<span class="meta-head"> 
<time class="calendar"> <?php echo $page->getDateHtml("published") ?> </time> 
<span class="byauthor">
<?php $authorCounter = 0; foreach(preg_split("/\s*,\s*/", $page->get("author")) as $author) { if(++$authorCounter>1) echo ", "; echo "<a href=\"".$yellow->page->getLocation(true).$yellow->toolbox->normaliseArgs("author:$author")."\">".htmlspecialchars($author)."</a>"; } ?></span>  

</span>

<span class="meta-tags"> 
 <?php if($yellow->page->isExisting("tag")): ?> <?php $tagCounter = 0; foreach(preg_split("/\s*,\s*/", $yellow->page->get("tag")) as $tag) { if(++$tagCounter>1) echo ", "; echo "<a href=\"".$yellow->page->getPage("podcasts")->getLocation(true).$yellow->toolbox->normaliseArgs("tag:$tag")."\"><h4>".htmlspecialchars($tag)."</h4></a>"; } ?>
<?php endif ?></span>

</div>

<div class="entry-content"><?php echo $yellow->toolbox->createTextDescription($page->getContent(), 0, false, "<!--more-->", "<a href=\"".$page->getLocation(true)."\">".$yellow->text->getHtml("Continue reading →")."</a> <hr>") ?></div>
</div>
<?php endforeach ?>
<?php $yellow->snippet("pagination", $yellow->page->getPages()) ?>
</div>
</div>

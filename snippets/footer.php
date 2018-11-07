<footer class="footer" role="contentinfo" itemscope itemtype="http://schema.org/WPFooter">
<div class="siteinfo">
		<div class="siteinfo-left">2018
		<a rel="bookmark" href="<?php echo $this->yellow->page->scheme."://".$this->yellow->page->address.$this->yellow->page->base."/"?>"><?php echo $yellow->page->getHtml("sitename") ?></a>
		</div>
		<div class="siteinfo-right">
		<a class="twitter" href="https://twitter.com/jariobr" target="_blank">Twitter</a>  
		<a class="googleplus" href="https://plus.google.com/+jario" target="_blank">GooglePlus</a>  
		<a class="youtube" href="https://youtube.com/jario" target="_blank">Youtube</a>  
		</div>		
		<div class="siteinfo-banner"></div>		
	
		<span class="none siteinfo-left">&#9929; </span> 
		
		<span class="siteinfo-right"> <a rel="bookmark" title="Contact us" href="<?php echo $yellow->page->base."/" ?>contact/">&#9993; Contact</a> <a rel="bookmark" title="About" href="<?php echo $yellow->page->base."/" ?>about/">&#10697; About</a> <a rel="bookmark" title="Sitemap" href="<?php echo $yellow->page->base."/" ?>sitemap/">&#128449;Sitemap</a></span>  	
  
</div>
<?php echo $yellow->page->getExtra("footer") ?>
</footer>
</body>
</html>

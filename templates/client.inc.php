<?php 
	$desc = str_replace("<p>", "", $pointer->getDescription());
	$desc = str_replace("</p>", "", $desc); 
?>
<li>
	<a href="/portfolio/<?php echo $pointer->getId(); ?>">
		<img src="/images/sites/<?php echo $pointer->getImage(); ?>" width="75px" height="75px" alt="<?php echo $pointer->getName(); ?>" />
        <h4><?php if(strlen($desc) > 55) echo substr($desc, 0, 55)."..."; else echo $desc; ?></h4>
		<?php echo $pointer->getName(); ?>
	</a>
</li>

<?php
	require_once('core/site.php');
	$site = new site();
	site::setLink(new mysqli('localhost', 'profile', 'g00gle', 'portfolio'));
	$site->init($_REQUEST);
	if($site->getCurClass() == 'services')
		$site->loadPortfolio(0);
	$obj = $site->getObj();
	include_once('core/ajax.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>Jacob Godin | Web Developer</title>
	<link rel="stylesheet" href="/style/style.css" type="text/css" media="screen" />
	<script type="text/javascript" src="/api/js/prototype.js"></script>
	<script type="text/javascript" src="/api/js/scriptaculous.js"></script>
	<script type="text/javascript" src="/core/js/<?php echo($site->getCurClass()); ?>.js"></script>
</head>
<body <?php if($site->getCurClass() == 'portfolio') { ?>onload="site(this, <?php echo $obj->getCur()->getId(); ?>)" <?php } ?>>
<div id="outside_container">
	<div id="container"<?php if($site->getCurClass() != 'main'){ ?> class="subpage"<?php } ?>>
		<a href="/"><img src="/images/logo.png" id="logo" alt="Jacob Godin | Web Developer" /></a>
        <ul id="nav">
        	<li><a href="/">Home</a></li>
        	<li><a href="/profile/">Profile</a></li>
        	<li><a href="/services/">Services</a></li>
            <li><a href="/portfolio/">Portfolio</a></li>
            <li><a href="/contact/">Contact</a></li>                   
		</ul>
        <ul id="right_nav">
        	<li><a href="/download/resume.pdf"><img src="/images/pdf.png" alt="PDF" />Download my Resum&eacute;</a></li>
        </ul>
        <?php include_once('templates/'.$site->getTemplate()).'.inc.php' ?>
	</div>
</div>
<div id="footer">
	<img src="/images/footer_logo.jpg" alt="Jacob Godin | Web Developer" />
    <span id="footer_text">
        Copyright &copy 2009 - <b><a href="mailto:jacobgodin@gmail.com">Jacob Godin</a></b><br />
        Website designed by <a href="http://www.jbvisualdesign.com">Justin Bellefontaine</a>, 
    </span>
</div>
</body>
</html>
<?php
	site::closeDB();
?>
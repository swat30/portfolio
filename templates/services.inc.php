<h2>what I offer</h2>
<p>I offer the following services:</p>
<ul>
	<li>Web application development</li>
	<li>PHP/MYSQL</li>
	<li>JavaScript / Prototype</li>
<?php
	if($site->getCurClass() != 'services'){
?>
</ul>
<p>Please visit my <a href="/services/">services</a> page to find out more.</p>
<?php
	} else {
?>
	<li>Server debugging</li>
	<li>Custom scripting</li>
	<li>Java application development</li>
</ul>	
<?php } ?>
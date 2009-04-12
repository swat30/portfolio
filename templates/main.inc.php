	<img src="images/panel_home.png" id="panel" alt="Text" />
		<div id="content">
        	<div class="column1">
            	<?php include_once('templates/profile.inc.php'); ?>
            </div>
            <div class="column2">
                <?php include_once('templates/services.inc.php') ?>
            </div>
            <div class="column3">
            	<h2>happy clients</h2>
            	<ul class="work">
            	<?php
            		$pointer = $obj->getCur();
					for($i = 0; $i < 3; $i++){
						include('templates/client.inc.php');
						$pointer = $pointer->getPrev();
					}
            	?>
            	</ul>
            </div>
            <div style="clear:both"></div>
        </div>
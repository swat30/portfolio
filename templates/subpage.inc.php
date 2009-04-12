		<div id="content"<?php if($site->getCurClass() != 'services') echo ' class="subpage"';?>>
        	<div class="column1">
            	<?php include("templates/".$site->getCurClass().".inc.php"); ?>
            </div>
            <?php if($site->getCurClass() == 'services'){ ?>
            <div class="column2">&nbsp;</div>
            <?php } ?>
            <div class="column<?php if($site->getCurClass() == 'services') echo '3'; else echo '2' ?>">
                <?php 
                if($site->getCurClass() != 'services')
                	include("templates/services.inc.php");
                else {
                	echo '<ul class="work">';
               		$pointer = $obj->getCur();
					for($i = 0; $i < 3; $i++){
						include('templates/client.inc.php');
						$pointer = $pointer->getPrev();
					}
                	echo '</ul>';
                } 
                ?>
            </div>
            <div style="clear:both"></div>
        </div>
<?php
if($_REQUEST['ajax']){
		switch ($_REQUEST['section']){
		case 'portfolio':
			$id = @$_REQUEST['id'];
			switch ($_REQUEST['element']){
				case 'column1':
					include_once('templates/portfolio_column1.inc.php');
					break;
				case 'column2':
					include_once('templates/portfolio_portfolioHolder.inc.php');
                	break;
				case 'thumbHolder':
					include_once('templates/portfolio_thumbHolder.inc.php');
                    break;
			}
		}
		exit;
	}
?>
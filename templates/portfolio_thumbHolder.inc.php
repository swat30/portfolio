<?php
				$inc = 0;
				if(isset($_REQUEST['increment']))
					$inc = $_REQUEST['increment'];
				$rtn = '<div class="arrowLeft"<a onclick="thumbUpdate('.($inc-3).')"><img src="/images/portfolio_l.jpg" alt="Previous" /></a></div>';
                	$sites = array();
                	$sites[] = $obj->getCur()->getNext();
                	$sites[] = $obj->getCur();
                	$sites[] = $obj->getCur()->getPrev();
                	if($inc > 0){
                		foreach($sites as &$site){
                			for($i = 0; $i < $inc; $i++){
                				$site = $site->getNext();
                			}
                		}
                	} else if($inc < 0){
                		foreach($sites as &$site){
                			for($i = $inc; $i < 0; $i++)
                				$site = $site->getPrev();
                		}
                	}
                	
                	for($i = 0; $i < count($sites); $i++){
                		$curSite = $sites[$i];
	                    $rtn .= '<div class="thumb" style="display: none;">';
	                    	if($curSite != null){
	                    		$rtn .= '<a onclick="site(this, '.$curSite->getId().')"><img src="/images/sites/'.$curSite->getImage().'" alt="Thumb" style="width: 106px; height: 106px; " /></a>';
	                        $rtn .= '<h2>'.$curSite->getName().'</h2>';
	                    	} else {
	                        $rtn .= '&nbsp;';
	                        }
	                    $rtn .= '</div>';
					}
                    $rtn .= '<div class="arrowRight"><a onclick="thumbUpdate('.($inc+3).')"><img src="/images/portfolio_r.jpg" alt="Next" onLoad="thumbsIn();" /></a></div>';
                    echo $rtn;
?>
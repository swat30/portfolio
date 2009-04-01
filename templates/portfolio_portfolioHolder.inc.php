					<div id="topSpacer">&nbsp;</div>
                    <div id="leftSpacer">&nbsp;</div>
                	<div id="portfolioImage" style="background-image: url('/images/sites/<?php echo($obj->getCur()->getImage()); ?>')<?php if($obj->getCur()->getImage() == 'thumb.jpg') echo '; background-repeat: repeat;';?> ">
                    	<div id="portfolioNav">
                            <div class="arrowLeft"><a onclick="site(this, <?php echo $obj->getCur()->getNext()->getId(); ?>)"><img src="/images/arrow_l.png" alt="Previous" /></a></div>
                            <div class="arrowRight"><a onclick="site(this, <?php echo $obj->getCur()->getPrev()->getId(); ?>)"><img src="/images/arrow_r.png" alt="Next" /></a></div>
                        </div><!--END NAV-->
                    </div><!--END IMAGE-->
<?php
		include('paths.inc'); 
		?>

<?php
	$TITLE = "Network Simulators" ;
	$METAS = '
		<meta name="Keywords" content="network simulator, network simulation" />
	  <meta name="description" content="Network Simulators" />
		';
  include "$THEMEDIR/head.php";
	include "$THEMEDIR/header.php";
	?>

<?php
include $includesDir . '/resource_tools.php';
	$mainContent = '
                        <h1>Network Simulators</h1>
                        <div class="infolet3">
                           <p>Sub Categories:</p>
                           			
                           <div class="infoLine sub"><a href="/network-management/simulation/open-source/">Open Source</a></div>
                           		
                        </div>
                        			
                        <div class="infolet3">' . display_new_status("2005-09-20") . '
                           <h2>Packetstorm</h2>
						   A range of products for traffic generation and network simulation.
                           <div class="content">
                              <div class="infoLine">
                                 <div class="left"><strong>Official Website:</strong></div>
                                 <div class="right"><a target="_blank" href="http://www.packetstorm.com/">http://www.packetstorm.com/</a></div>
                              </div>
                              <div class="infoLine bgLine1">
                                 <div class="left"><strong>Added:</strong></div>
                                 <div class="right">20th September 2005</div>
                              </div>
                              <div class="infoLine">
                                 <div class="left"><strong>Updated:</strong></div>
                                 <div class="right">20th September 2005</div>
                              </div>
                           </div>
                        </div>
                        			
                        <div class="infolet3">' . display_new_status("2005-09-20") . '
                           <h2>Candela Technologies</h2>
						   The LANforgeFire and LANforgeICE provide network simulation and test facilities.
                           <div class="content">
                              <div class="infoLine">
                                 <div class="left"><strong>Official Website:</strong></div>
                                 <div class="right"><a target="_blank" href="http://www.candelatech.com/">http://www.candelatech.com/</a></div>
                              </div>
                              <div class="infoLine bgLine1">
                                 <div class="left"><strong>Added:</strong></div>
                                 <div class="right">20th September 2005</div>
                              </div>
                              <div class="infoLine">
                                 <div class="left"><strong>Updated:</strong></div>
                                 <div class="right">20th September 2005</div>
                              </div>
                           </div>
                        </div>
    ';
    
    displayContent($mainContent, $THEMEDIR);
	include "$THEMEDIR/footer.php";
	?>
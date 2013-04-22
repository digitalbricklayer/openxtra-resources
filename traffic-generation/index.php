<?php
		include('paths.inc'); 
		?>

<?php
	$TITLE = "Network Traffic Generation Tools" ;
	$METAS = '
		<meta name="Keywords" content="Network Traffic Generation Tools" />
	  <meta name="description" content="Network Traffic Generation Tools" />
		';
  include "$THEMEDIR/head.php";
	include "$THEMEDIR/header.php";
	?>

<?php
include $includesDir . '/resource_tools.php';
	$mainContent = '
                        <h1>Network Traffic Generation Tools</h1>
                        <div class="infolet3">
                           <p>Sub Categories:</p>
                           			
                           <div class="infoLine sub"><a href="/network-management/traffic-generation/open-source/">Open Source</a></div>
                           		
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
                           <h2>omnicor</h2>
						   LANTraffic V2 and IP Traffic Test &amp; Measure are powerful software testing tools for automatic generation of TCP and UDP traffic.
                           User can specify configuration parameters to shape and control traffic load.
                           <div class="content">
                              <div class="infoLine">
                                 <div class="left"><strong>Official Website:</strong></div>
                                 <div class="right"><a target="_blank" href="http://www.omnicor.com/netest.htm">http://www.omnicor.com/netest.htm</a></div>
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
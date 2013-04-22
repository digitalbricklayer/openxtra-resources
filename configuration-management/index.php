<?php
	include('paths.inc'); 
	?>

<?php
	$TITLE = "Network Configuration Management Tools" ;
	$METAS = '
		<meta name="Keywords" content="Network Configuration Management Tools" />
	  	<meta name="description" content="Network Configuration Management Tools" />
		';
  include "$THEMEDIR/head.php";
	include "$THEMEDIR/header.php";
	?>

<?php
include $includesDir . '/resource_tools.php';
	$mainContent = '
                        <h1>Network Configuration Management Tools</h1>
                        <div class="infolet3">
                           <p>Sub Categories:</p>
                           			
                           <div class="infoLine sub"><a href="/network-management/configuration-management/open-source/">Open Source</a></div>
                        </div>
                        			
                        <div class="infolet3">' . display_new_status("2005-09-19") . '
                           <h2>Introduction to Network Configuration Management Article</h2>
						   A nice easy introduction to network configuration management.
                           <div class="content">
                              <div class="infoLine">
                                 <div class="left"><strong>Official Website:</strong></div>
                                 <div class="right"><a target="_blank" href="http://www.openxtra.co.uk/articles/network-configuration-management.php">http://www.openxtra.co.uk/articles/network-configuration-management.php</a></div>
                              </div>
                              <div class="infoLine bgLine1">
                                 <div class="left"><strong>Added:</strong></div>
                                 <div class="right">19th September 2005</div>
                              </div>
                              <div class="infoLine">
                                 <div class="left"><strong>Updated:</strong></div>
                                 <div class="right">19th September 2005</div>
                              </div>
                           </div>
                        </div>
				';
				
    
    displayContent($mainContent, $THEMEDIR);
	include "$THEMEDIR/footer.php";
	?>
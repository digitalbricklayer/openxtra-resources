<?php
	include('paths.inc'); 
	?>

<?php
	$TITLE = "Open Source Network Configuration Management" ;
	$METAS = '';
  include "$THEMEDIR/head.php";
	include "$THEMEDIR/header.php";
	?>

<?php
include $includesDir . '/resource_tools.php';
	$mainContent = '
                        <h1>Open Source Network Configuration Management</h1>
                        			
                        <div class="infolet3">' . display_new_status("2004-02-04") . '
                           <h2>Really Awesome New Cisco confIg Differ (RANCID)</h2>
						   RANCID is a switch and router configuration management tool
                           <div class="content">
                              <div class="infoLine">
                                 <div class="left"><strong>Official Website:</strong></div>
                                 <div class="right"><a target="_blank" href="http://www.shrubbery.net/rancid/">http://www.shrubbery.net/rancid/</a></div>
                              </div>
                              <div class="infoLine bgLine1">
                                 <div class="left"><strong>Added:</strong></div>
                                 <div class="right">4th February 2004</div>
                              </div>
                              <div class="infoLine">
                                 <div class="left"><strong>Updated:</strong></div>
                                 <div class="right">4th February 2004</div>
                              </div>
                           </div>
                        </div>
				';
				
    
    displayContent($mainContent, $THEMEDIR);
	include "$THEMEDIR/footer.php";
	?>
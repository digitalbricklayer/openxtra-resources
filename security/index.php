<?php
		include('paths.inc'); 
		?>
        
<?php
	$TITLE = "Network Security" ;
	$METAS = '
		<meta name="Keywords" content="network management, resources, network security" />
      <meta name="Description" content="Network security directory focusing on network management" />
		';
  include "$THEMEDIR/head.php";
	include "$THEMEDIR/header.php";
	?>
    
<?php
include $includesDir . '/resource_tools.php';
	$mainContent = '
                        <h1>Network Security</h1>
                        			
                        <div class="infolet3">' . display_new_status("2004-04-28") . '
                           <h2>Security Wizardry</h2>
						   Good resource for computer and network security. Has categorized product listings and training courses. Comprehensive resource,
                           recommended!
                           <div class="content">
                              <div class="infoLine">
                                 <div class="left"><strong>Official Website:</strong></div>
                                 <div class="right"><a target="_blank" href="http://www.networkintrusion.co.uk/">http://www.networkintrusion.co.uk/</a></div>
                              </div>
                              <div class="infoLine bgLine1">
                                 <div class="left"><strong>Added:</strong></div>
                                 <div class="right">28th April 2004</div>
                              </div>
                              <div class="infoLine">
                                 <div class="left"><strong>Updated:</strong></div>
                                 <div class="right">28th April 2004</div>
                              </div>
                           </div>
                        </div>
                        			
                        <div class="infolet3">' . display_new_status("2005-09-21") . '
                           <h2>Top 75 Network Security Tools</h2>
						   Insecure.org&rsquo;s Top 75 network security tools as voted by the nmap-hackers mailing list in May 2003. Excellent resource!
                           <div class="content">
                              <div class="infoLine">
                                 <div class="left"><strong>Official Website:</strong></div>
                                 <div class="right"><a target="_blank" href="http://www.insecure.org/tools.html">http://www.insecure.org/tools.html</a></div>
                              </div>
                              <div class="infoLine bgLine1">
                                 <div class="left"><strong>Added:</strong></div>
                                 <div class="right">21st September 2005</div>
                              </div>
                              <div class="infoLine">
                                 <div class="left"><strong>Updated:</strong></div>
                                 <div class="right">21st September 2005</div>
                              </div>
                           </div>
                        </div>
    ';
    
    displayContent($mainContent, $THEMEDIR);
	include "$THEMEDIR/footer.php";
	?>
<?php
		include('paths.inc'); 
		?>
        
<?php
	$TITLE = "Open Source Network Management" ;
	$METAS = '
		<meta name="Keywords" content="network management, resources, links, openxtra" />
      <meta name="Description" content="A collection of open source network management resource for the Small/Medium Enterprise (SME)" />
		';
  include "$THEMEDIR/head.php";
	include "$THEMEDIR/header.php";
	?>
    
<?php
include $includesDir . '/resource_tools.php';
	$mainContent = '
                        <h1>Open Source Network Management</h1>
                        <div class="infolet3">
                           <div class="content">
                              <div class="infoLine">
                                 			&nbsp;<a href="/network-management/snmp/open-source/">SNMP Tools</a>
                                 			&nbsp;<a href="/network-management/mapping/open-source/">Network Mapping Tools</a>
                                 			&nbsp;<a href="/network-management/packet-capture/open-source/library/">Packet Capture</a>
                                 			&nbsp;<a href="/network-management/configuration-management/open-source/">Network Configuration Management</a>
                                 			&nbsp;<a href="/network-management/protocol-analysis/">Protocol Analysis</a>
                                 			&nbsp;<a href="/network-management/monitor/open-source/">Network Monitor Tools</a>
                                 			&nbsp;<a href="/network-management/traffic-generation/open-source/">Network Traffic Generation Tools</a>
                                 			&nbsp;<a href="/network-management/system/open-source/">Network Management Systems</a>
                                 			&nbsp;<a href="/network-management/performance-management/open-source/">Performance Management</a>
                                 			&nbsp;<a href="/network-management/simulation/open-source/">Network Simulation</a>
                                 			&nbsp;<a href="/network-management/event-correlation/open-source/">Event Correlation</a>
                                 		
                              </div>
                           </div>
                        </div>
                        			
                        <div class="infolet3">' . display_new_status("2004-02-05") . '
                           <h2>Cooperative Association for Internet Data Analysis (CAIDA)</h2>
						   CAIDA provides tools promoting the engineering and maintenance of a robust, scalable global Internet infrastructure. Well
                           worth a visit. Many of the open source tools featured on this site were sponsored by CAIDA (like RRDTool for instance).
                           <div class="content">
                              <div class="infoLine">
                                 <div class="left"><strong>Official Website:</strong></div>
                                 <div class="right"><a target="_blank" href="http://caida.org/">http://caida.org/</a></div>
                              </div>
                              <div class="infoLine bgLine1">
                                 <div class="left"><strong>Added:</strong></div>
                                 <div class="right">5th February 2004</div>
                              </div>
                              <div class="infoLine">
                                 <div class="left"><strong>Updated:</strong></div>
                                 <div class="right">5th February 2004</div>
                              </div>
                           </div>
                        </div>
                        			
                        <div class="infolet3">' . display_new_status("2004-04-29") . '
                           <h2>Cisco-centric Open Source Community (COSI)</h2>
						   A community effort to create a range of Cisco related open source tools.
                           <div class="content">
                              <div class="infoLine">
                                 <div class="left"><strong>Official Website:</strong></div>
                                 <div class="right"><a target="_blank" href="http://cosi-nms.sourceforge.net/">http://cosi-nms.sourceforge.net/</a></div>
                              </div>
                              <div class="infoLine bgLine1">
                                 <div class="left"><strong>Added:</strong></div>
                                 <div class="right">29th April 2004</div>
                              </div>
                              <div class="infoLine">
                                 <div class="left"><strong>Updated:</strong></div>
                                 <div class="right">29th April 2004</div>
                              </div>
                           </div>
                        </div>
                        			
                        <div class="infolet3">' . display_new_status("2004-04-29") . '
                           <h2>The Written Word</h2>
						   A pre-packaging service for people not wanting the hassle of compiling their own open source software on the following platforms
                           AIX, HP-UX, IRIX, Redhat Linux, Solaris, and Tru64 UNIX. Amongst the many packages that the written word package are a number
                           of open source network management favorites like MRTG and Ethereal.
                           <div class="content">
                              <div class="infoLine">
                                 <div class="left"><strong>Official Website:</strong></div>
                                 <div class="right"><a target="_blank" href="http://www.thewrittenword.com/">http://www.thewrittenword.com/</a></div>
                              </div>
                              <div class="infoLine bgLine1">
                                 <div class="left"><strong>Added:</strong></div>
                                 <div class="right">29th April 2004</div>
                              </div>
                              <div class="infoLine">
                                 <div class="left"><strong>Updated:</strong></div>
                                 <div class="right">29th April 2004</div>
                              </div>
                           </div>
                        </div>
    ';
    
    displayContent($mainContent, $THEMEDIR);
	include "$THEMEDIR/footer.php";
	?>
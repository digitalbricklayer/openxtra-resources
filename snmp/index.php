<?php
		include('paths.inc'); 
		?>

<?php
	$TITLE = "SNMP" ;
	$METAS = '
		<meta name="Keywords" content="snmp simple network management protocol" />
		';
  include "$THEMEDIR/head.php";
	include "$THEMEDIR/header.php";
	?>

<?php
include $includesDir . '/resource_tools.php';
	$mainContent = '
                        <h1>SNMP</h1>
                        <div class="infolet3">
                           <div class="content">
                              <div class="infoLine">
                                 			&nbsp;<a href="/network-management/monitor/">Network Monitoring Tools</a>
                                 		
                              </div>
                           </div>
                        </div>
                        <div class="infolet3">
                           <p>Sub Categories:</p>
                           			
                           <div class="infoLine sub"><a href="/network-management/snmp/simulation/">SNMP Simulation</a></div>
                           		
                        </div>
                        			
                        <div class="infolet3">' . display_new_status("2004-02-05") . '
                           <h2>SNMPWorld</h2>
						   High quality SNMP portal, featuring articles and resources.
                           <div class="content">
                              <div class="infoLine">
                                 <div class="left"><strong>Official Website:</strong></div>
                                 <div class="right"><a target="_blank" href="http://www.snmpworld.com/">http://www.snmpworld.com/</a></div>
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
                        			
                        <div class="infolet3">' . display_new_status("2004-02-05") . '
                           <h2>SNMP Links</h2>
						   Website provides a lot of links to SNMP related articles, books, forums etc. Well worth a visit.
                           <div class="content">
                              <div class="infoLine">
                                 <div class="left"><strong>Official Website:</strong></div>
                                 <div class="right"><a target="_blank" href="http://www.snmplink.org/">http://www.snmplink.org/</a></div>
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
                        			
                        <div class="infolet3">' . display_new_status("2004-02-05") . '
                           <h2>MIB Index</h2>
						   An exhaustive MIB index maintained by Bill Fenner.
                           <div class="content">
                              <div class="infoLine">
                                 <div class="left"><strong>Official Website:</strong></div>
                                 <div class="right"><a target="_blank" href="http://www.icir.org/fenner/mibs/mib-index.html">http://www.icir.org/fenner/mibs/mib-index.html</a></div>
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
                        			
                        <div class="infolet3">' . display_new_status("2004-02-05") . '
                           <h2>MIB Depot</h2>
						   An extensive array of MIBs from 130 organizations, beautifully presented.
                           <div class="content">
                              <div class="infoLine">
                                 <div class="left"><strong>Official Website:</strong></div>
                                 <div class="right"><a target="_blank" href="http://www.mibdepot.com/">http://www.mibdepot.com/</a></div>
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
                        			
                        <div class="infolet3">' . display_new_status("2004-02-05") . '
                           <h2>The Simple Web</h2>
						   An online information centre for network management information. The focus is on SNMP and Internet management
                           <div class="content">
                              <div class="infoLine">
                                 <div class="left"><strong>Official Website:</strong></div>
                                 <div class="right"><a target="_blank" href="http://www.simpleweb.org/">http://www.simpleweb.org/</a></div>
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
                        			
                        <div class="infolet3">' . display_new_status("2004-02-05") . '
                           <h2>The Simple Times</h2>
						   An online magazine devoted to SNMP.
                           <div class="content">
                              <div class="infoLine">
                                 <div class="left"><strong>Official Website:</strong></div>
                                 <div class="right"><a target="_blank" href="http://www.simpleweb.org/">http://www.simpleweb.org/</a></div>
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
    ';
    
    displayContent($mainContent, $THEMEDIR);
	include "$THEMEDIR/footer.php";
	?>
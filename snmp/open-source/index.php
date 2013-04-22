<?php
		include('paths.inc'); 
		?>

<?php
	$TITLE = "Open Source SNMP Tools" ;
	$METAS = '';
  include "$THEMEDIR/head.php";
	include "$THEMEDIR/header.php";
	?>

<?php
include $includesDir . '/resource_tools.php';
	$mainContent = '
                        <h1>Open Source SNMP Tools</h1>
                        <div class="infolet3">
                           <div class="content">
                              <div class="infoLine">
                                 			&nbsp;<a href="/network-management/snmp/">SNMP</a>
                                 		
                              </div>
                           </div>
                        </div>
                        <div class="infolet3">
                           <p>Sub Categories:</p>
                           			
                           <div class="infoLine sub"><a href="/network-management/snmp/open-source/programming/">SNMP Programming Tools</a></div>
                           		
                        </div>
                        <h2>Tools:</h2>
                        			
                        <div class="infolet3">' . display_new_status("2004-02-05") . '
                           <h2>Spumoni</h2>
                           <p>Spumoni is a Java program that enables any program which can be queried via local commands to be health-checked via SNMP.</p>
                           				
                           <div class="content">
                              <div class="infoLine">
                                 <div class="left"><strong>Rating:</strong></div>
                                 <div class="right"><?php draw_star_rating("4"); ?></div>
                              </div>
                              <div class="infoLine bgLine1">
                                 <div class="left"><strong>Platform:</strong></div>
                                 <div class="right">' .
                                    					draw_supported_platform("Linux") .
                                    					draw_supported_platform("Windows") . '
                                    				
                                 </div>
                              </div>
                              <div class="infoLine">
                                 <div class="left"><strong>Official Website:</strong></div>
                                 <div class="right"><a target="_blank" href="http://spumoni.sourceforge.net/">http://spumoni.sourceforge.net/</a></div>
                              </div>
                              <div class="infoLine bgLine1">
                                 <div class="left"><strong>Added:</strong></div>
                                 <div class="right">5th February 2004</div>
                              </div>
                              <div class="infoLine">
                                 <div class="left"><strong>Updated:</strong></div>
                                 <div class="right">5th February 2004</div>
                              </div>
                              <div class="infoLine bgLine1">
                                 <div class="left"><strong>Dependencies:</strong></div>
                                 <div class="right">
                                    					
                                    				
                                 </div>
                              </div>
                              <div class="infoLine">
                                 <div class="left"><strong>Licence:</strong></div>
                                 <div class="right">GPL</div>
                              </div>
                           </div>
                        </div>
                        			
                        <div class="infolet3">' . display_new_status("2004-02-05") . '
                           <h2>NET-SNMP</h2>
                           <p>A collection of tools relating to the Simple Network Management Protocol (SNMP), including a client library written in Perl.</p>
                           				
                           <div class="content">
                              <div class="infoLine">
                                 <div class="left"><strong>Rating:</strong></div>
                                 <div class="right"><?php draw_star_rating("5"); ?></div>
                              </div>
                              <div class="infoLine bgLine1">
                                 <div class="left"><strong>Platform:</strong></div>
                                 <div class="right">' .
                                    					draw_supported_platform("Linux") .
                                    					draw_supported_platform("BSD") .
                                    					draw_supported_platform("AIX") .
                                    					draw_supported_platform("HPUX") .
                                    					draw_supported_platform("OSX") .
                                    					draw_supported_platform("Solaris") .
                                    					draw_supported_platform("Windows") . '
                                    				
                                 </div>
                              </div>
                              <div class="infoLine">
                                 <div class="left"><strong>Official Website:</strong></div>
                                 <div class="right"><a target="_blank" href="http://net-snmp.sourceforge.net/">http://net-snmp.sourceforge.net/</a></div>
                              </div>
                              <div class="infoLine bgLine1">
                                 <div class="left"><strong>Added:</strong></div>
                                 <div class="right">5th February 2004</div>
                              </div>
                              <div class="infoLine">
                                 <div class="left"><strong>Updated:</strong></div>
                                 <div class="right">5th February 2004</div>
                              </div>
                              <div class="infoLine bgLine1">
                                 <div class="left"><strong>Dependencies:</strong></div>
                                 <div class="right">
                                    				
                                 </div>
                              </div>
                              <div class="infoLine">
                                 <div class="left"><strong>Licence:</strong></div>
                                 <div class="right">BSD</div>
                              </div>
                           </div>
                           <div class="content">
                              <h4>News</h4><?php fetch_rss_feed("http://sourceforge.net/export/rss2_projnews.php?group_id=12694"); ?>
                           </div>
                        </div>
                        		
                        			
                        <div class="infolet3">' . display_new_status("2004-02-05") . '
                           <h2>Trap Collector</h2>
						   SNMP Trap Collector saves all incoming SNMP traps to a PostgreSQL database.
                           <div class="content">
                              <div class="infoLine">
                                 <div class="left"><strong>Official Website:</strong></div>
                                 <div class="right"><a target="_blank" href="http://sourceforge.net/projects/trapcollector/">http://sourceforge.net/projects/trapcollector/</a></div>
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
                        			
                        <div class="infolet3">' . display_new_status("2004-02-05") . display_updated_status("2005-11-25") . '
                           <h2>Scotty</h2>
						   Scotty is a collection of tools for writing your own, network specific, network management system using high-level, string-based
                           APIs.
                           <div class="content">
                              <div class="infoLine">
                                 <div class="left"><strong>Official Website:</strong></div>
                                 <div class="right"><a target="_blank" href="http://wwwhome.cs.utwente.nl/~schoenw/scotty/">http://wwwhome.cs.utwente.nl/~schoenw/scotty/</a></div>
                              </div>
                              <div class="infoLine bgLine1">
                                 <div class="left"><strong>Added:</strong></div>
                                 <div class="right">5th February 2004</div>
                              </div>
                              <div class="infoLine">
                                 <div class="left"><strong>Updated:</strong></div>
                                 <div class="right">25th November 2005</div>
                              </div>
                           </div>
                        </div>
    ';
    
    displayContent($mainContent, $THEMEDIR);
	include "$THEMEDIR/footer.php";
	?>
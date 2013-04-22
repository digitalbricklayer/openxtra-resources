<?php
		include('paths.inc'); 
		?>

<?php
	$TITLE = "Network Mapping Tools" ;
	$METAS = '
		<meta name="Keywords" content="network mapping tools, lansurveyor, visio, netviz" />
      	<meta name="Description" content="Network mapping tools directory" />
		';
  include "$THEMEDIR/head.php";
	include "$THEMEDIR/header.php";
	?>

<?php
include $includesDir . '/resource_tools.php';
	$mainContent = '
					<h1>Network Mapping Tools</h1>
                        <div class="infolet3">
                           <p>Sub Categories:</p>
                           			
                           <div class="infoLine sub"><a href="/network-management/mapping/open-source/">Open Source</a></div>
                           		
                        </div>
                        			
                        <div class="infolet3">' . display_new_status("2005-09-15") . '
                           <h2>Introduction to Network Mapping Article</h2>
						   An introductory article on network mapping.
                           <div class="content">
                              <div class="infoLine">
                                 <div class="left"><strong>Official Website:</strong></div>
                                 <div class="right"><a target="_blank" href="http://www.openxtra.co.uk/articles/network-mapping.php">http://www.openxtra.co.uk/articles/network-mapping.php</a></div>
                              </div>
                              <div class="infoLine bgLine1">
                                 <div class="left"><strong>Added:</strong></div>
                                 <div class="right">15th September 2005</div>
                              </div>
                              <div class="infoLine">
                                 <div class="left"><strong>Updated:</strong></div>
                                 <div class="right">15th September 2005</div>
                              </div>
                           </div>
                        </div>
                        			
                        <div class="infolet3">' . display_new_status("2005-09-15") . '
                           <h2>Neon LANSurveyor</h2>
						   LANsurveyor makes it easy to map, manage, and report on your entire network.
                           <div class="content">
                              <div class="infoLine">
                                 <div class="left"><strong>Official Website:</strong></div>
                                 <div class="right"><a target="_blank" href="http://www.neon.com/LSwin.html">http://www.neon.com/LSwin.html</a></div>
                              </div>
                              <div class="infoLine bgLine1">
                                 <div class="left"><strong>Added:</strong></div>
                                 <div class="right">15th September 2005</div>
                              </div>
                              <div class="infoLine">
                                 <div class="left"><strong>Updated:</strong></div>
                                 <div class="right">15th September 2005</div>
                              </div>
                           </div>
                        </div>
                        			
                        <div class="infolet3">' . display_new_status("2005-09-15") . '
                           <h2>Visio</h2>
						   Probably the best known network mapping tool as it is bundled with many versions of Microsoft Office. Visio has a wealth of
                           built in and third party template graphics as well as rudimentary network discovery.
                           <div class="content">
                              <div class="infoLine">
                                 <div class="left"><strong>Official Website:</strong></div>
                                 <div class="right"><a target="_blank" href="http://office.microsoft.com/home/office.aspx?assetid=FX01085798">http://office.microsoft.com/home/office.aspx?assetid=FX01085798</a></div>
                              </div>
                              <div class="infoLine bgLine1">
                                 <div class="left"><strong>Added:</strong></div>
                                 <div class="right">15th September 2005</div>
                              </div>
                              <div class="infoLine">
                                 <div class="left"><strong>Updated:</strong></div>
                                 <div class="right">15th September 2005</div>
                              </div>
                           </div>
                        </div>
                        			
                        <div class="infolet3">' . display_new_status("2005-09-15") . '
						<h2>netViz&trade;</h2>A network mapping tool with multi-level collaboration features. Don&rsquo;t expect the website to actually tell you anything useful
                           though, one of the worst cases of marketing bull I&rsquo;ve seen in a while.
                           <div class="content">
                              <div class="infoLine">
                                 <div class="left"><strong>Official Website:</strong></div>
                                 <div class="right"><a target="_blank" href="http://www.netviz.com/">http://www.netviz.com/</a></div>
                              </div>
                              <div class="infoLine bgLine1">
                                 <div class="left"><strong>Added:</strong></div>
                                 <div class="right">15th September 2005</div>
                              </div>
                              <div class="infoLine">
                                 <div class="left"><strong>Updated:</strong></div>
                                 <div class="right">15th September 2005</div>
                              </div>
                           </div>
                        </div>
				';
				
    
    displayContent($mainContent, $THEMEDIR);
	include "$THEMEDIR/footer.php";
	?>
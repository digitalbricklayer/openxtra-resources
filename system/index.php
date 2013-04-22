<?php
		include('paths.inc'); 
		?>

<?php
	$TITLE = "Network Management News" ;
	$METAS = '
		<meta name="Keywords" content="network management systems, resources, directory" />
      <meta name="Description" content="Network management systems directory" />
	  <meta name="description" content="Network Management Systems" />
		';
  include "$THEMEDIR/head.php";
	include "$THEMEDIR/header.php";
	?>

<?php
include $includesDir . '/resource_tools.php';
	$mainContent = '
                        <h1>Network Management Systems</h1>
                        <div class="infolet3">
                           <p>Sub Categories:</p>
                           			
                           <div class="infoLine sub"><a href="/network-management/system/open-source/">Open Source</a></div>
                           		
                        </div>
                        			
                        <div class="infolet3">' . display_new_status("2005-09-20") . '
                           <h2>HP OpenView</h2>
						   I doubt many people haven&rsquo;t heard of OpenView. It is debatable whether it is a SME tool but maybe some SMEs have very deep
                           pockets.
                           <div class="content">
                              <div class="infoLine">
                                 <div class="left"><strong>Official Website:</strong></div>
                                 <div class="right"><a target="_blank" href="http://www.managementsoftware.hp.com/">http://www.managementsoftware.hp.com/</a></div>
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
                           <h2>Tivoli NetView</h2>
						   Another network management monster in the vein of HP OpenView.
                           <div class="content">
                              <div class="infoLine">
                                 <div class="left"><strong>Official Website:</strong></div>
                                 <div class="right"><a target="_blank" href="http://www.tivoli.com/">http://www.tivoli.com/</a></div>
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
                           <h2>BMC</h2>
						   Another network management system on steroids. I doubt any SME is going to use BMC, but hey you never know.
                           <div class="content">
                              <div class="infoLine">
                                 <div class="left"><strong>Official Website:</strong></div>
                                 <div class="right"><a target="_blank" href="http://www.bmc.com/">http://www.bmc.com/</a></div>
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
                           <h2>Unicenter TNG Framework</h2>
						   Another expensive framework system.
                           <div class="content">
                              <div class="infoLine">
                                 <div class="left"><strong>Official Website:</strong></div>
                                 <div class="right"><a target="_blank" href="http://www.cai.com/">http://www.cai.com/</a></div>
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
                           <h2>Veritas NerveCenter</h2>
						   A framework network management system.  you can either use it stand alone or integrate with HP OpenView maps.
                           <div class="content">
                              <div class="infoLine">
                                 <div class="left"><strong>Official Website:</strong></div>
                                 <div class="right"><a target="_blank" href="http://www.veritas.com/">http://www.veritas.com/</a></div>
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
                           <h2>Micromuse NetCool</h2>
						   A framework network management system with strong root cause analysis functionality.
                           <div class="content">
                              <div class="infoLine">
                                 <div class="left"><strong>Official Website:</strong></div>
                                 <div class="right"><a target="_blank" href="http://www.micromuse.com/">http://www.micromuse.com/</a></div>
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
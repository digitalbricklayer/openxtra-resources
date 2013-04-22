<?php
		include('paths.inc'); 
		?>

<?php
	$TITLE = "Open Source Network Simulation" ;
	$METAS = '
		<meta name="description" content="Open Source Network Simulation" />
	  <meta name="keywords" content="Open Source Network Simulation" />
		';
  include "$THEMEDIR/head.php";
	include "$THEMEDIR/header.php";
	?>

<?php
include $includesDir . '/resource_tools.php';
	$mainContent = '
                        <h1>Open Source Network Simulation</h1>
                        			
                        <div class="infolet3">' . display_new_status("2004-04-28") . '
                           <h2>SSFNet</h2>
						   A collection of tools (in C++ and Java) for performing network simulations. A variety of network types and scenarios can be
                           simulated. A command language is provided so no need to be a C++ or Java engineer.
                           <div class="content">
                              <div class="infoLine">
                                 <div class="left"><strong>Official Website:</strong></div>
                                 <div class="right"><a target="_blank" href="http://www.ssfnet.org/">http://www.ssfnet.org/</a></div>
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
                        			
                        <div class="infolet3">' . display_new_status("2004-04-28") . '
                           <h2>J-Sim</h2>
						   A Java based tool for simulating a variety of network types and scenarios. A command language is used so you don&rsquo;t need to
                           be a Java engineer to use this tool.
                           <div class="content">
                              <div class="infoLine">
                                 <div class="left"><strong>Official Website:</strong></div>
                                 <div class="right"><a target="_blank" href="http://www.j-sim.org/">http://www.j-sim.org/</a></div>
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
    ';
    
    displayContent($mainContent, $THEMEDIR);
	include "$THEMEDIR/footer.php";
	?>
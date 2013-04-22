<?php
		include('paths.inc'); 
		?>

<?php
	$TITLE = "Packet Capture Tools" ;
	$METAS = '
		<meta name="Keywords" content="packet capture tools, open source, commercial" />
		';
  include "$THEMEDIR/head.php";
	include "$THEMEDIR/header.php";
	?>

<?php
include $includesDir . '/resource_tools.php';
	$mainContent = '
						<h1>Packet Capture Tools</h1>
                        			
                        <p>There are few pure commercial packet capture tools. Most tools have long since evolved into sophisticated protocol analysis
                           tools. If you really want a pure packet capture tool, and you don&rsquo;t need the high end features of a tool like the Solera DS
                           series,  then you are probably best off looking at the wide range of open source packet capture tools. Packet capture and
                           protocol analysis is an area where open source has really delivered the goods.
                        </p>
                        		
                        <div class="infolet3">
                           <div class="content">
                              <div class="infoLine">
                                 			&nbsp;<a href="/network-management/protocol-analysis/">Protocol Analyzers</a>
                                 		
                              </div>
                           </div>
                        </div>
                        <div class="infolet3">
                           <p>Sub Categories:</p>
                           			
                           <div class="infoLine sub"><a href="/network-management/packet-capture/library/">Packet Capture Libraries</a></div>
                           			
                           <div class="infoLine sub"><a href="/network-management/packet-capture/open-source/library/">Open Source</a></div>
                           		
                        </div>
                        			
                        <div class="infolet3">' . display_new_status("2005-09-16") . '
                           <h2>Solera DS Series</h2>
						   The Solera DS Series is a suite of network packet recorder appliances with support up to the gigabit barrier. Solera Networks&rsquo; devices capture, archive, and regenerate network traffic data.
                           <div class="content">
                              <div class="infoLine">
                                 <div class="left"><strong>Official Website:</strong></div>
                                 <div class="right"><a target="_blank" href="http://www.soleranetworks.com/">http://www.soleranetworks.com/</a></div>
                              </div>
                              <div class="infoLine bgLine1">
                                 <div class="left"><strong>Added:</strong></div>
                                 <div class="right">16th September 2005</div>
                              </div>
                              <div class="infoLine">
                                 <div class="left"><strong>Updated:</strong></div>
                                 <div class="right">16th September 2005</div>
                              </div>
                           </div>
                        </div>
				';
				
    
    displayContent($mainContent, $THEMEDIR);
	include "$THEMEDIR/footer.php";
	?>
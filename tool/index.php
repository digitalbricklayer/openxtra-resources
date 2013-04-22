<?php
		include('paths.inc'); 
		?>
        
<?php
	$TITLE = "Network Management Tools" ;
	$METAS = '
		<meta name="Keywords" content="network management tools, resources, directory" />
		<meta name="Description" content="Network management tools directory" />
		';
  include "$THEMEDIR/head.php";
	include "$THEMEDIR/header.php";
	?>


<?php
include $includesDir . '/resource_tools.php';
	$mainContent = '
                        <h1>Network Management Tools</h1>
                        <div class="infolet3">
                           <p>Sub Categories:</p>
                           			
                           <div class="infoLine sub"><a href="/network-management/mapping/">Network Mapping Tools</a></div>
                           			
                           <div class="infoLine sub"><a href="/network-management/packet-capture/">Packet Capture Tools</a></div>
                           			
                           <div class="infoLine sub"><a href="/network-management/configuration-management/">Network Configuration Management Tools</a></div>
                           			
                           <div class="infoLine sub"><a href="/network-management/protocol-analysis/">Protocol Analysis</a></div>
                           			
                           <div class="infoLine sub"><a href="/network-management/monitor/">Network Monitors</a></div>
                           			
                           <div class="infoLine sub"><a href="/network-management/traffic-generation/">Network Traffic Generation Tools</a></div>
                           			
                           <div class="infoLine sub"><a href="/network-management/system/">Network Management Systems</a></div>
                           			
                           <div class="infoLine sub"><a href="/network-management/performance-management/">Performance Management</a></div>
                           			
                           <div class="infoLine sub"><a href="/network-management/simulation/">Network Simulators</a></div>
                           			
                           <div class="infoLine sub"><a href="/network-management/snmp/">SNMP Tools</a></div>
                           		
                        </div>
				';
				
    
    displayContent($mainContent, $THEMEDIR);
	include "$THEMEDIR/footer.php";
	?>
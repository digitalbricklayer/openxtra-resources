<?php
		include('paths.inc'); 
		?>

<?php
	$TITLE = "SNMP Simulation" ;
	$METAS = '
      <meta name="Keywords" content="snmp simulation simple network management protocol" />
		';
  include "$THEMEDIR/head.php";
	include "$THEMEDIR/header.php";
	?>

<?php
include $includesDir . '/resource_tools.php';
	$mainContent = '
                        <h1>SNMP Simulation</h1>
                        <div class="infolet3">
                           <h2>MIMIC</h2><?php display_new_status("2004-06-03"); ?>A SNMP device simulator with an extensive range of pre-configured devices. In addition to SNMP simulation the product also
                           simulates Cisco IOS and cable modems.
                           <div class="content">
                              <div class="infoLine">
                                 <div class="left"><strong>Official Website:</strong></div>
                                 <div class="right"><a target="_blank" href="http://www.gambitcomm.com/site/products/mimic_simulator.shtml">http://www.gambitcomm.com/site/products/mimic_simulator.shtml</a></div>
                              </div>
                              <div class="infoLine bgLine1">
                                 <div class="left"><strong>Added:</strong></div>
                                 <div class="right">3rd June 2004</div>
                              </div>
                              <div class="infoLine">
                                 <div class="left"><strong>Updated:</strong></div>
                                 <div class="right">3rd June 2004</div>
                              </div>
                           </div>
                        </div>
                        			
                        <div class="infolet3">
                           <h2>SimpleAgentPRO® SNMP Network Simulator</h2><?php display_new_status("2004-06-03"); ?>SimpleAgentPro® is a SNMP Agent Simulator with an easy to use GUI that can simulate an entire network of LAN-WAN components
                           made up of thousands of SNMPv1, SNMPv2C and SNMPv3 manageable devices.
                           <div class="content">
                              <div class="infoLine">
                                 <div class="left"><strong>Official Website:</strong></div>
                                 <div class="right"><a target="_blank" href="http://www.snmptest.com/sagent2.html">http://www.snmptest.com/sagent2.html</a></div>
                              </div>
                              <div class="infoLine bgLine1">
                                 <div class="left"><strong>Added:</strong></div>
                                 <div class="right">3rd June 2004</div>
                              </div>
                              <div class="infoLine">
                                 <div class="left"><strong>Updated:</strong></div>
                                 <div class="right">3rd June 2004</div>
                              </div>
                           </div>
                        </div>
                        			
                        <div class="infolet3">
                           <h2>AdventNet Simulation Toolkit</h2>
                           <?php display_new_status("2004-06-03"); ?>A tool for simulating SNMP devices on your network. Just record the device you are interested in then replay it at will without
                           needing the original device.
                           <div class="content">
                              <div class="infoLine">
                                 <div class="left"><strong>Official Website:</strong></div>
                                 <div class="right"><a target="_blank" href="http://www.adventnet.comhref="/products/simulator/">http://www.adventnet.com/products/simulator/index.html"</a></div>
                              </div>
                              <div class="infoLine bgLine1">
                                 <div class="left"><strong>Added:</strong></div>
                                 <div class="right">3rd June 2004</div>
                              </div>
                              <div class="infoLine">
                                 <div class="left"><strong>Updated:</strong></div>
                                 <div class="right">3rd June 2004</div>
                              </div>
                           </div>
                        </div>
    ';
    
    displayContent($mainContent, $THEMEDIR);
	include "$THEMEDIR/footer.php";
	?>

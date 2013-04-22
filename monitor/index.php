<?php
		include('paths.inc'); 
		?>

<?php
	$TITLE = "Network Monitoring Tools" ;
	$METAS = '
	<meta name="Keywords" content="network monitoring tools, resources, directory" />
	<meta name="Description" content="Network monitoring tools directory" />
		';
  include "$THEMEDIR/head.php";
	include "$THEMEDIR/header.php";
	?>

<?php
include $includesDir . '/resource_tools.php';
	$mainContent = '
	<h1>Network Monitoring Tools</h1>
	<div class="infolet3">
		 <p>Sub Categories:</p>
					
		 <div class="infoLine sub"><a href="/network-management/monitor/open-source/">Open Source</a></div>
		 <div class="infoLine sub"><a href="/network-management/monitor/appliance/">Appliances</a></div>
				
	</div>
				
	<div class="infolet3">' . display_new_status("2005-09-20") . '
		 <h2>Ipswitch What&rsquo;s Up Gold</h2>
			Probably the best known commercial network monitor. Now includes network mapping features too. What&rsquo;s Up Gold has both 
			a Microsoft Windows user interface and a web based interface. A distributed edition is now available.
		 <div class="content">
				<div class="infoLine">
					 <div class="left"><strong>Official Website:</strong></div>
					 <div class="right"><a target="_blank" href="http://www.ipswitch.com/products/whatsup/index.asp">http://www.ipswitch.com/products/whatsup/index.asp</a></div>
				</div>
				<div class="infoLine bgLine1">
					 <div class="left"><strong>Added:</strong></div>
					 <div class="right">20th September 2005</div>
				</div>
				<div class="infoLine">
					 <div class="left"><strong>Updated:</strong></div>
					 <div class="right">5th November 2007</div>
				</div>
		 </div>
	</div>
				
	<div class="infolet3">' . display_new_status("2005-09-20") . '
		 <h2>Intellipool Network Monitor</h2>
			A web based network monitoring application running on Microsoft Windows. A distributed edition is available.
		 <div class="content">
				<div class="infoLine">
					 <div class="left"><strong>Official Website:</strong></div>
					 <div class="right"><a target="_blank" href="http://www.intellipool.se/">http://www.intellipool.se/</a></div>
				</div>
				<div class="infoLine bgLine1">
					 <div class="left"><strong>Added:</strong></div>
					 <div class="right">20th September 2005</div>
				</div>
				<div class="infoLine">
					 <div class="left"><strong>Updated:</strong></div>
					 <div class="right">5th November 2007</div>
				</div>
		 </div>
	</div>
				
	<div class="infolet3">' . display_new_status("2005-09-20") . '
		 <h2>RGE ipsentry</h2>
A mature network monitor with many plugin modules.
		 <div class="content">
				<div class="infoLine">
					 <div class="left"><strong>Official Website:</strong></div>
					 <div class="right"><a target="_blank" href="http://www.ipsentry.com/">http://www.ipsentry.com/</a></div>
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
		 <h2>KS-Soft Advanced HostMonitor</h2>
A mature network monitor with an extensive range of server tests and a wide range of alerting options.
		 <div class="content">
				<div class="infoLine">
					 <div class="left"><strong>Official Website:</strong></div>
					 <div class="right"><a target="_blank" href="http://www.ks-soft.net/hostmon.eng/">http://www.ks-soft.net/hostmon.eng/</a></div>
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
		 <h2>Solarwinds Orion</h2>
Solarwinds have a wide range of tools of interest to the network manager and systems administrator, including a network monitoring
		 application.
		 <div class="content">
				<div class="infoLine">
					 <div class="left"><strong>Official Website:</strong></div>
					 <div class="right"><a target="_blank" href="http://www.solarwinds.com/products/orion/">http://www.solarwinds.com/products/orion/</a></div>
				</div>
				<div class="infoLine bgLine1">
					 <div class="left"><strong>Added:</strong></div>
					 <div class="right">20th September 2005</div>
				</div>
				<div class="infoLine">
					 <div class="left"><strong>Updated:</strong></div>
					 <div class="right">5th November 2007</div>
				</div>
		 </div>
	</div>
				
	<div class="infolet3">' . display_new_status("2005-09-20") . '
		 <h2>PRTG</h2>
A commercial MRTG derivative, with all of the nice bits about MRTG but easy to install and configure.
		 <div class="content">
				<div class="infoLine">
					 <div class="left"><strong>Official Website:</strong></div>
					 <div class="right"><a target="_blank" href="http://www.paessler.com/prtg">http://www.paessler.com/prtg</a></div>
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
		 <h2>Somix</h2>
			A commercial MRTG derivative with professional support.
		 <div class="content">
				<div class="infoLine">
					 <div class="left"><strong>Official Website:</strong></div>
					 <div class="right"><a target="_blank" href="http://www.somix.com/">http://www.somix.com/</a></div>
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
<?php
		include('paths.inc'); 
		?>

<?php
	$TITLE = "Network Monitoring Appliances" ;
	$METAS = '';
  include "$THEMEDIR/head.php";
	include "$THEMEDIR/header.php";
	?>

<?php
include $includesDir . '/resource_tools.php';
	$mainContent = '
	<h1>Network Monitoring Appliances</h1>
				
	<div class="infolet3">' . display_new_status("2005-09-20") . '
		 <h2>Dartware</h2>
			A plug and play appliance for trouble free network monitoring.
		 <div class="content">
				<div class="infoLine">
					 <div class="left"><strong>Official Website:</strong></div>
					 <div class="right"><a target="_blank" href="http://www.dartware.com/">http://www.dartware.com/</a></div>
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
		 <h2>netmon</h2>
			A plug and play appliance with good network mapping ability.
		 <div class="content">
				<div class="infoLine">
					 <div class="left"><strong>Official Website:</strong></div>
					 <div class="right"><a target="_blank" href="http://www.netmon.ca/">http://www.netmon.ca/</a></div>
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
		 <h2>interloci</h2>
			A network appliance, based upon open source network management tools, all bundled into an easy to configure and use appliance.
		 <div class="content">
				<div class="infoLine">
					 <div class="left"><strong>Official Website:</strong></div>
					 <div class="right"><a target="_blank" href="http://www.interloci.com/">http://www.interloci.com/</a></div>
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
	
	<div class="infolet3">' . display_new_status("2007-11-05") . '
		 <h2>Zenoss Appliance</h2>
			A network appliance, based upon the Zenoss open source network management project, in an easy to deploy hardware form factor.
		 <div class="content">
				<div class="infoLine">
					 <div class="left"><strong>Official Website:</strong></div>
					 <div class="right"><a target="_blank" href="http://www.zenoss.com/">http://www.zenoss.com/</a></div>
				</div>
				<div class="infoLine bgLine1">
					 <div class="left"><strong>Added:</strong></div>
					 <div class="right">5th November 2007</div>
				</div>
				<div class="infoLine">
					 <div class="left"><strong>Updated:</strong></div>
					 <div class="right">5th November 2007</div>
				</div>
		 </div>
	</div>
				';
				
    
    displayContent($mainContent, $THEMEDIR);
	include "$THEMEDIR/footer.php";
	?>
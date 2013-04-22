<?php
	include('paths.inc'); 
	?>
        
<?php
	$TITLE = "Network Management Directories" ;
	$METAS = '
		<meta name="Keywords" content="network management directories" />
	  <meta name="description" content="Network Management Directories" />
		';
  include "$THEMEDIR/head.php";
	include "$THEMEDIR/header.php";
	?>
    
<?php
include $includesDir . '/resource_tools.php';
	$mainContent = '
	<h1>Network Management Directories</h1>
				
	<div class="infolet3">' . display_new_status("2005-09-21") . '
		 <h2>Network Management @ Yahoo!</h2>
		 <div class="content">
				<div class="infoLine">
					 <div class="left"><strong>Official Website:</strong></div>
					 <div class="right"><a target="_blank" href="http://dir.yahoo.com/Business_and_Economy/Business_to_Business/Computers/Communications_and_Networking/Network_Management/">http://dir.yahoo.com/Business_and_Economy/&hellip;</a></div>
				</div>
				<div class="infoLine bgLine1">
					 <div class="left"><strong>Added:</strong></div>
					 <div class="right">21st September 2005</div>
				</div>
				<div class="infoLine">
					 <div class="left"><strong>Updated:</strong></div>
					 <div class="right">21st September 2005</div>
				</div>
		 </div>
	</div>
				
	<div class="infolet3">' . display_new_status("2005-09-21") . '
		 <h2>Network Management @ DMOZ</h2>
		 <div class="content">
				<div class="infoLine">
					 <div class="left"><strong>Official Website:</strong></div>
					 <div class="right"><a target="_blank" href="http://dmoz.org/Computers/Software/Internet/Network_Management/">http://dmoz.org/Computers/Software/Internet/Network_Management/</a></div>
				</div>
				<div class="infoLine bgLine1">
					 <div class="left"><strong>Added:</strong></div>
					 <div class="right">21st September 2005</div>
				</div>
				<div class="infoLine">
					 <div class="left"><strong>Updated:</strong></div>
					 <div class="right">21st September 2005</div>
				</div>
		 </div>
	</div>
				
	<div class="infolet3">' . display_new_status("2004-02-05") . '
		 <h2>Admin Favorites</h2>
A collection of resources about commercial and open source tools for systems administration.
		 <div class="content">
				<div class="infoLine">
					 <div class="left"><strong>Official Website:</strong></div>
					 <div class="right"><a target="_blank" href="http://www.adminfavorites.com/">http://www.adminfavorites.com/</a></div>
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
		 <h2>MonitorTools.com</h2>
A collection of resources about tools for monitoring IT systems, from databases through to routers, commercial and open source.
		 <div class="content">
				<div class="infoLine">
					 <div class="left"><strong>Official Website:</strong></div>
					 <div class="right"><a target="_blank" href="http://www.monitortools.com/">http://www.monitortools.com/</a></div>
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
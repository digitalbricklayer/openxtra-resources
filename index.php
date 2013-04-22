<?php
		include('paths.inc'); 
		?>
        
<?php
	$TITLE = "Network Management Resources" ;
	$METAS = '
		<meta name="Keywords" content="network management, resources, openxtra" />
		<meta name="Description" content="The OPENXTRA Network Management Resource Center is a focused set of resources targeted towards network managers in Small/Medium Enterprises (SME)." />
		';
  include "$THEMEDIR/head.php";
	include "$THEMEDIR/header.php";
	?>
    
<?php
	include $includesDir . '/resource_tools.php';
	$mainContent = '
    <h1>Network Management</h1>

		<p>The OPENXTRA Network Management Resource Center is a focused set of resources targeted towards network managers in Small/Medium Enterprises (SME). Network Managers in larger enterprises will hopefully find much of interest too.</p>

		<p>Most of the links in the directory have been researched by ourselves. We do welcome suggestions for links from you. If you are the webmaster of a great website that we haven&rsquo;t included, or if you know of a website that has helped you, please <a href="http://www.openxtra.co.uk/blog/contact/">get in touch</a>.</p>

		<div class="infolet3">
			 <p>Sub Categories:</p>
						
			 <div class="infoLine sub"><a href="/network-management/tool/">Network Management Tools</a></div>
						
			 <div class="infoLine sub"><a href="/network-management/news/">Network Management News</a></div>
						
			 <div class="infoLine sub"><a href="/network-management/directory/">Network Management Directories</a></div>
			 
			 <div class="infoLine sub"><a href="/network-management/security/">Network Security</a></div>
						
			 <div class="infoLine sub"><a href="/network-management/open-source/">Open Source</a></div>
		</div>
    ';
    
    displayContent($mainContent, $THEMEDIR);
	include "$THEMEDIR/footer.php";
	?>
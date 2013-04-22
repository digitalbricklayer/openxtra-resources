<?php
	include('paths.inc'); 
	?>
        
<?php
	$TITLE = "Open Source Event Correlation" ;
	$METAS = '';
  include "$THEMEDIR/head.php";
	include "$THEMEDIR/header.php";
	?>
    
<?php
include $includesDir . '/resource_tools.php';
	$mainContent = '
	<h1>Open Source Event Correlation</h1>
			
<div class="infolet3">' . display_new_status("2004-02-04") . '
	 <h2>LogSurfer</h2>
	LogSurfer is designed to monitor any text-based logfiles in real time.
	 <div class="content">
			<div class="infoLine">
				 <div class="left"><strong>Official Website:</strong></div>
				 <div class="right"><a target="_blank" href="http://www.cert.dfn.de/eng/logsurf/">http://www.cert.dfn.de/eng/logsurf/</a></div>
			</div>
			<div class="infoLine bgLine1">
				 <div class="left"><strong>Added:</strong></div>
				 <div class="right">4th February 2004</div>
			</div>
			<div class="infoLine">
				 <div class="left"><strong>Updated:</strong></div>
				 <div class="right">4th February 2004</div>
			</div>
	 </div>
</div>
			
<div class="infolet3">' . display_new_status("2004-02-04") . '
	 <h2>Simple Event Correlator (SEC)</h2>
SEC (Simple Event Correlator) is a platform independent event correlation tool.
	 <div class="content">
			<div class="infoLine">
				 <div class="left"><strong>Official Website:</strong></div>
				 <div class="right"><a target="_blank" href="http://www.estpak.ee/~risto/sec/">http://www.estpak.ee/~risto/sec/</a></div>
			</div>
			<div class="infoLine bgLine1">
				 <div class="left"><strong>Added:</strong></div>
				 <div class="right">4th February 2004</div>
			</div>
			<div class="infoLine">
				 <div class="left"><strong>Updated:</strong></div>
				 <div class="right">4th February 2004</div>
			</div>
	 </div>
</div>
			
<div class="infolet3">' . display_new_status("2004-08-20") . '
	 <h2>ruleCore</h2>
The ruleCore engine is an event-driven rule engine that manages and executes reaction rules.
	 <div class="content">
			<div class="infoLine">
				 <div class="left"><strong>Official Website:</strong></div>
				 <div class="right"><a target="_blank" href="http://www.rulecore.com/">http://www.rulecore.com/</a></div>
			</div>
			<div class="infoLine bgLine1">
				 <div class="left"><strong>Added:</strong></div>
				 <div class="right">20th August 2004</div>
			</div>
			<div class="infoLine">
				 <div class="left"><strong>Updated:</strong></div>
				 <div class="right">20th August 2004</div>
			</div>
	 </div>
</div>
			
<div class="infolet3">' . display_new_status("2004-08-24") . '
	 <h2>Band Saw</h2>
Band Saw helps system administrators monitor large numbers of computers by monitoring syslog and alerting the administrator
	 whenever interesting log messages arrive.
	 <div class="content">
			<div class="infoLine">
				 <div class="left"><strong>Official Website:</strong></div>
				 <div class="right"><a target="_blank" href="http://bandsaw.sourceforge.net/">http://bandsaw.sourceforge.net/</a></div>
			</div>
			<div class="infoLine bgLine1">
				 <div class="left"><strong>Added:</strong></div>
				 <div class="right">24th August 2004</div>
			</div>
			<div class="infoLine">
				 <div class="left"><strong>Updated:</strong></div>
				 <div class="right">24th August 2004</div>
			</div>
	 </div>
</div>
    ';
    
    displayContent($mainContent, $THEMEDIR);
	include "$THEMEDIR/footer.php";
	?>
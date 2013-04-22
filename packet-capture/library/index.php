<?php
		include('paths.inc'); 
		?>

<?php
	$TITLE = "Packet Capture Libraries" ;
	$METAS = '';
  include "$THEMEDIR/head.php";
	include "$THEMEDIR/header.php";
	?>

<?php
include $includesDir . '/resource_tools.php';
	$mainContent = '
	<h1>Packet Capture Libraries</h1>
	<div class="infolet3">
		 <p>Sub Categories:</p>
					
		 <div class="infoLine sub"><a href="/network-management/packet-capture/open-source/library/">Open Source</a></div>
				
	</div>
                        			
	<div class="infolet3"> ' . display_new_status("2005-09-16") . '
		 <h2>Distinct Packet Sniffing Library for C#/C++/Visual Basic (VB)</h2>
The Distinct Network Packet Sniffing Toolkit is for software developers who need to integrate specialized features in their
		 applications that require capturing of network traffic. The following languages are supported: C#, C++, and VB (Visual Basic).
		 <div class="content">
				<div class="infoLine">
					 <div class="left"><strong>Official Website:</strong></div>
					 <div class="right"><a target="_blank" href="http://www.packet-sniffing.com/">http://www.packet-sniffing.com/</a></div>
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
				
	<div class="infolet3">' . display_new_status("2005-09-16") . '
		 <h2>microOLAP Packet Sniffer SDK</h2>
Packet Sniffer SDK (former Network Investigation Suite) is a Gigabit network compatible development suite for network packet
		 capture in Windows OS family environment. Packet Sniffer SDK library set is 100% exactly what you knew you wanted but never
		 expected to get: a fully self-contained, dynamically-loaded packet capture technology that is compatible with Microsoft Visual
		 C++, Microsoft Visual Basic, Intel C++, Borland C++ Builder, Borland Delphi and many others.
		 <div class="content">
				<div class="infoLine">
					 <div class="left"><strong>Official Website:</strong></div>
					 <div class="right"><a target="_blank" href="http://www.microolap.com/products/network/pssdk/">http://www.microolap.com/products/network/pssdk/</a></div>
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
                        			
	<div class="infolet3">' . display_new_status("2007-10-31") . '
		 <h2>WinPCAP Pro</h2>
		 A commercial software friendly version of the famous <a href="http://www.winpcap.org/">WinPCAP</a> open source packet capture library.
		 <div class="content">
				<div class="infoLine">
					 <div class="left"><strong>Official Website:</strong></div>
					 <div class="right"><a target="_blank" href="http://www.cacetech.com/products/winpcap_professional.htm">http://www.cacetech.com/products/winpcap_professional.htm</a></div>
				</div>
				<div class="infoLine bgLine1">
					 <div class="left"><strong>Added:</strong></div>
					 <div class="right">31th October 2007</div>
				</div>
				<div class="infoLine">
					 <div class="left"><strong>Updated:</strong></div>
					 <div class="right">31th October 2007</div>
				</div>
		 </div>
	</div>
				';
    
    displayContent($mainContent, $THEMEDIR);
	include "$THEMEDIR/footer.php";
	?>
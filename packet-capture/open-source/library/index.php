<?php
		include('paths.inc'); 
		?>

<?php
	$TITLE = "Open Source Packet Capture Libraries" ;
	$METAS = '
		<meta name="Keywords" content="network management news" />
		<meta name="description" content="Network Management News" />
		';
  include "$THEMEDIR/head.php";
	include "$THEMEDIR/header.php";
	?>

<?php
	include $includesDir . '/resource_tools.php';
	$mainContent = '
		<h1>Open Source Packet Capture Libraries</h1>
					
		<div class="infolet3">' . display_new_status("2005-09-16") . '
			 <h2>libpcap</h2>
libpcap is a system-independent interface for user-level packet capture. libpcap provides a portable framework for low-level
			 network monitoring. Applications include network statistics collection, security monitoring, network debugging, etc.
			 <div class="content">
					<div class="infoLine">
						 <div class="left"><strong>Official Website:</strong></div>
						 <div class="right"><a target="_blank" href="http://www.tcpdump.org/">http://www.tcpdump.org/</a></div>
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
					
		<div class="infolet3">' . display_new_status("2005-09-19") . '
			 <h2>winpcap</h2>WinPcap is the industry-standard tool for link-layer network access in Windows environments: it allows applications to capture and transmit network packets bypassing the protocol stack, and has additional useful features, including kernel-level packet filtering, a network statistics engine and support for remote packet capture. All well known open source networking tools like Ethereal, ntop, nmap, snort and windump use winpcap.
			 <div class="content">
					<div class="infoLine">
						 <div class="left"><strong>Official Website:</strong></div>
						 <div class="right"><a target="_blank" href="http://www.winpcap.org/">http://www.winpcap.org/</a></div>
					</div>
					<div class="infoLine bgLine1">
						 <div class="left"><strong>Added:</strong></div>
						 <div class="right">19th September 2005</div>
					</div>
					<div class="infoLine">
						 <div class="left"><strong>Updated:</strong></div>
						 <div class="right">19th September 2005</div>
					</div>
			 </div>
		</div>
					
		<div class="infolet3">' . display_new_status("2005-09-19") . '
			 <h2>jpcap</h2>
A Java wrapper for both winpcap and libpcap programming libraries.
			 <div class="content">
					<div class="infoLine">
						 <div class="left"><strong>Official Website:</strong></div>
						 <div class="right"><a target="_blank" href="http://sourceforge.net/projects/jpcap/">http://sourceforge.net/projects/jpcap/</a></div>
					</div>
					<div class="infoLine bgLine1">
						 <div class="left"><strong>Added:</strong></div>
						 <div class="right">19th September 2005</div>
					</div>
					<div class="infoLine">
						 <div class="left"><strong>Updated:</strong></div>
						 <div class="right">19th September 2005</div>
					</div>
			 </div>
		</div>
					
		<div class="infolet3">' . display_new_status("2005-09-19") . '
			 <h2>net::pcap</h2>
A perl wrapper for the libpcap library.
			 <div class="content">
					<div class="infoLine">
						 <div class="left"><strong>Official Website:</strong></div>
						 <div class="right"><a target="_blank" href="http://www.bribes.org/perl/wnetpcap.html">http://www.bribes.org/perl/wnetpcap.html</a></div>
					</div>
					<div class="infoLine bgLine1">
						 <div class="left"><strong>Added:</strong></div>
						 <div class="right">19th September 2005</div>
					</div>
					<div class="infoLine">
						 <div class="left"><strong>Updated:</strong></div>
						 <div class="right">19th September 2005</div>
					</div>
			 </div>
		</div>
					
		<div class="infolet3">' . display_new_status("2005-09-19") . '
			 <h2>Win32::NetPacket</h2>
An object oriented perl wrapper for the winpcap library.
			 <div class="content">
					<div class="infoLine">
						 <div class="left"><strong>Official Website:</strong></div>
						 <div class="right"><a target="_blank" href="http://www.bribes.org/perl/netpacket.html">http://www.bribes.org/perl/netpacket.html</a></div>
					</div>
					<div class="infoLine bgLine1">
						 <div class="left"><strong>Added:</strong></div>
						 <div class="right">19th September 2005</div>
					</div>
					<div class="infoLine">
						 <div class="left"><strong>Updated:</strong></div>
						 <div class="right">19th September 2005</div>
					</div>
			 </div>
		</div>
					
		<div class="infolet3">' . display_new_status("2005-09-19") . '
			 <h2>pcapy</h2>
A python wrapper library for both libpcap and winpcap.
			 <div class="content">
					<div class="infoLine">
						 <div class="left"><strong>Official Website:</strong></div>
						 <div class="right"><a target="_blank" href="http://oss.coresecurity.com/projects/pcapy.html">http://oss.coresecurity.com/projects/pcapy.html</a></div>
					</div>
					<div class="infoLine bgLine1">
						 <div class="left"><strong>Added:</strong></div>
						 <div class="right">19th September 2005</div>
					</div>
					<div class="infoLine">
						 <div class="left"><strong>Updated:</strong></div>
						 <div class="right">19th September 2005</div>
					</div>
			 </div>
		</div>
					
		<div class="infolet3">' . display_new_status("2005-09-19") . '
			 <h2>vb.pcap</h2>
A Visual Basic (VB) wrapper for the winpcap library.
			 <div class="content">
					<div class="infoLine">
						 <div class="left"><strong>Official Website:</strong></div>
						 <div class="right"><a target="_blank" href="http://www.lorenzocerulli.tk/">http://www.lorenzocerulli.tk/</a></div>
					</div>
					<div class="infoLine bgLine1">
						 <div class="left"><strong>Added:</strong></div>
						 <div class="right">19th September 2005</div>
					</div>
					<div class="infoLine">
						 <div class="left"><strong>Updated:</strong></div>
						 <div class="right">19th September 2005</div>
					</div>
			 </div>
		</div>
					
		<div class="infolet3">' . display_new_status("2005-09-19") . '
			 <h2>libnet</h2>
A packet injection engine for both *nix and windows.
			 <div class="content">
					<div class="infoLine">
						 <div class="left"><strong>Official Website:</strong></div>
						 <div class="right"><a target="_blank" href="http://libnet.sourceforge.net/">http://libnet.sourceforge.net/</a></div>
					</div>
					<div class="infoLine bgLine1">
						 <div class="left"><strong>Added:</strong></div>
						 <div class="right">19th September 2005</div>
					</div>
					<div class="infoLine">
						 <div class="left"><strong>Updated:</strong></div>
						 <div class="right">19th September 2005</div>
					</div>
			 </div>
		</div>
		';
				
    
    displayContent($mainContent, $THEMEDIR);
	include "$THEMEDIR/footer.php";
	?>
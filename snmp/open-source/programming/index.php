<?php
		include('paths.inc'); 
		?>

<?php
	$TITLE = "Open Source SNMP Programming Tools" ;
	$METAS = '
		<meta name="Keywords" content="snmp client library, perl, python, C++, c" />
		';
  include "$THEMEDIR/head.php";
	include "$THEMEDIR/header.php";
	?>

<?php
include $includesDir . '/resource_tools.php';
	$mainContent = '
                        <h1>Open Source SNMP Programming Tools</h1>
                        			
                        <div class="infolet3">' . display_new_status("2005-09-19") . '
                           <h2>SNMP_util</h2>
						   An easy to use Perl SNMP library.
                           <div class="content">
                              <div class="infoLine">
                                 <div class="left"><strong>Official Website:</strong></div>
                                 <div class="right"><a target="_blank" href="http://www.switch.ch/misc/leinen/snmp/perl/">http://www.switch.ch/misc/leinen/snmp/perl/</a></div>
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
                           <h2>pysnmp</h2>
						   A python based SNMP library with stable support for SNMP v1 and V2c, with unstable support for v3.
                           <div class="content">
                              <div class="infoLine">
                                 <div class="left"><strong>Official Website:</strong></div>
                                 <div class="right"><a target="_blank" href="http://pysnmp.sourceforge.net/">http://pysnmp.sourceforge.net/</a></div>
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
                           <h2>yapsnmp</h2>
						   yapsnmp is a Python SNMP module based on the net-snmp library.
                           <div class="content">
                              <div class="infoLine">
                                 <div class="left"><strong>Official Website:</strong></div>
                                 <div class="right"><a target="_blank" href="http://yapsnmp.sourceforge.net/">http://yapsnmp.sourceforge.net/</a></div>
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
                        			
                        <div class="infolet3">' . display_new_status("2004-02-05") . '
                           <h2>SNMP++</h2>
						   A SNMP client library for C++ programs.
                           <div class="content">
                              <div class="infoLine">
                                 <div class="left"><strong>Official Website:</strong></div>
                                 <div class="right"><a target="_blank" href="http://www.sa-ha.de/snmp/">http://www.sa-ha.de/snmp/</a></div>
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
                           <h2>OpenSNMP</h2>
						   openSNMP is a multi-threaded SNMPv3 programming library.
                           <div class="content">
                              <div class="infoLine">
                                 <div class="left"><strong>Official Website:</strong></div>
                                 <div class="right"><a target="_blank" href="http://sourceforge.net/projects/opensnmp/">http://sourceforge.net/projects/opensnmp/</a></div>
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
                        			
                        <div class="infolet3">' . display_new_status("2005-09-15") . '
                           <h2>Net-SNMP</h2>
						   A collection of SNMP tools, including both a C based and Perl based client library for SNMP.
                           <div class="content">
                              <div class="infoLine">
                                 <div class="left"><strong>Official Website:</strong></div>
                                 <div class="right"><a target="_blank" href="http://net-snmp.sourceforge.net/">http://net-snmp.sourceforge.net/</a></div>
                              </div>
                              <div class="infoLine bgLine1">
                                 <div class="left"><strong>Added:</strong></div>
                                 <div class="right">15th September 2005</div>
                              </div>
                              <div class="infoLine">
                                 <div class="left"><strong>Updated:</strong></div>
                                 <div class="right">15th September 2005</div>
                              </div>
                           </div>
                        </div>
                        			
                        <div class="infolet3">' . display_new_status("2005-09-15") . '
                           <h2>Scotty</h2>
						   A collection of TCL based SNMP tools, including a client library for SNMP.
                           <div class="content">
                              <div class="infoLine">
                                 <div class="left"><strong>Official Website:</strong></div>
                                 <div class="right"><a target="_blank" href="http://wwwhome.cs.utwente.nl/~schoenw/scotty/">http://wwwhome.cs.utwente.nl/~schoenw/scotty/</a></div>
                              </div>
                              <div class="infoLine bgLine1">
                                 <div class="left"><strong>Added:</strong></div>
                                 <div class="right">15th September 2005</div>
                              </div>
                              <div class="infoLine">
                                 <div class="left"><strong>Updated:</strong></div>
                                 <div class="right">15th September 2005</div>
                              </div>
                           </div>
                        </div>
    ';
    
    displayContent($mainContent, $THEMEDIR);
	include "$THEMEDIR/footer.php";
	?>
<?php
		include('paths.inc'); 
		?>

<?php
	$TITLE = "Open Source Packet Capture" ;
	$METAS = '';
  include "$THEMEDIR/head.php";
	include "$THEMEDIR/header.php";
	?>

<?php
include $includesDir . '/resource_tools.php';
	$mainContent = '
                        <h1>Open Source Packet Capture</h1>
                        			
                        <div class="infolet3">' . display_new_status("2005-09-19") . '
                           <h2>tcpdump</h2>
						   A command line packet capture tool for *nix hosts.
                           <div class="content">
                              <div class="infoLine">
                                 <div class="left"><strong>Official Website:</strong></div>
                                 <div class="right"><a target="_blank" href="http://www.tcpdump.org/">http://www.tcpdump.org/</a></div>
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
                        			
                        <div class="infolet3">' . display_new_status("2004-02-04") . '
                           <h2>ngrep</h2>
						   ngrep is a pcap-aware tool that will allow you to specify extended regular or hexadecimal expressions to match against data
                           payloads of packets.
                           <div class="content">
                              <div class="infoLine">
                                 <div class="left"><strong>Official Website:</strong></div>
                                 <div class="right"><a target="_blank" href="http://ngrep.sf.net/">http://ngrep.sf.net/</a></div>
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
                           <h2>TrafShow</h2>
						   TrafShow continuously displays information regarding packet traffic on the configured network interface that matches a boolean
                           expression. It periodically sorts and updates this information.
                           <div class="content">
                              <div class="infoLine">
                                 <div class="left"><strong>Official Website:</strong></div>
                                 <div class="right"><a target="_blank" href="http://soft.risp.ru/trafshow/index_en.shtml">http://soft.risp.ru/trafshow/index_en.shtml</a></div>
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
                           <h2>TCPTrace</h2>
						   TCPTrace is a dump file summarizer of various dump file formats.
                           <div class="content">
                              <div class="infoLine">
                                 <div class="left"><strong>Official Website:</strong></div>
                                 <div class="right"><a target="_blank" href="http://irg.cs.ohiou.edu/software/tcptrace/tcptrace.html">http://irg.cs.ohiou.edu/software/tcptrace/tcptrace.html</a></div>
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
                           <h2>TCPSlice</h2>
						   A tool for extracting portions of TCPDump trace files. It can combine multiple trace files, and/or extract portions of one
                           or more traces based on time.
                           <div class="content">
                              <div class="infoLine">
                                 <div class="left"><strong>Official Website:</strong></div>
                                 <div class="right"><a target="_blank" href="http://sourceforge.net/projects/tcpslice/">http://sourceforge.net/projects/tcpslice/</a></div>
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
                           <h2>TCPReduce</h2>
						   TCPReduce is a collection of shell scripts for reducing a TCPDump trace file to a summary.
                           <div class="content">
                              <div class="infoLine">
                                 <div class="left"><strong>Official Website:</strong></div>
                                 <div class="right"><a target="_blank" href="http://www.cs.unc.edu/~jeffay/dirt/FAQ/tcp-reduce.html">http://www.cs.unc.edu/~jeffay/dirt/FAQ/tcp-reduce.html</a></div>
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
                           <h2>TCPFlow</h2>
						   TCPFlow is a program that captures data transmitted as part of TCP connections (flows), and stores the data in a way that
                           is convenient for protocol analysis or debugging.
                           <div class="content">
                              <div class="infoLine">
                                 <div class="left"><strong>Official Website:</strong></div>
                                 <div class="right"><a target="_blank" href="http://www.circlemud.org/~jelson/software/tcpflow/">http://www.circlemud.org/~jelson/software/tcpflow/</a></div>
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
                           <h2>Tcpdpriv</h2>
						   Tcpdpriv is a program for eliminating confidential information from packets collected on a network interface (or, from trace
                           files created using the -w argument to TCPDump).
                           <div class="content">
                              <div class="infoLine">
                                 <div class="left"><strong>Official Website:</strong></div>
                                 <div class="right"><a target="_blank" href="http://ita.ee.lbl.gov/html/contrib/tcpdpriv.html">http://ita.ee.lbl.gov/html/contrib/tcpdpriv.html</a></div>
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
                           <h2>Sanitize</h2>
						   Sanitize is a collection of five (simple) Bourne shell scripts for reducing TCPDump traces in order to address security and
                           privacy concerns, by renumbering hosts and stripping out packet contents.
                           <div class="content">
                              <div class="infoLine">
                                 <div class="left"><strong>Official Website:</strong></div>
                                 <div class="right"><a target="_blank" href="http://ita.ee.lbl.gov/html/contrib/sanitize.html">http://ita.ee.lbl.gov/html/contrib/sanitize.html</a></div>
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
                           <h2>WinDump</h2>
						   WinDump, a Microsoft Windows port of TCPDump, typically writes packet headers out to the console (although they can be logged
                           to file). The utility shares the libpcap library, for reading packets from a network interface, with Ethereal. It also shares
                           a powerful filter language with Ethereal.
                           <div class="content">
                              <div class="infoLine">
                                 <div class="left"><strong>Official Website:</strong></div>
                                 <div class="right"><a target="_blank" href="http://windump.polito.it/">http://windump.polito.it/</a></div>
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
				';
				
    
    displayContent($mainContent, $THEMEDIR);
	include "$THEMEDIR/footer.php";
	?>
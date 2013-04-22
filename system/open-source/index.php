<?php
		include('paths.inc'); 
		?>

<?php
	$TITLE = "Open Source Network Management Systems" ;
	$METAS = '';
  include "$THEMEDIR/head.php";
	include "$THEMEDIR/header.php";
	?>

<?php
include $includesDir . '/resource_tools.php';
	$mainContent = '
                        <h1>Open Source Network Management Systems</h1>
                        			
                        <div class="infolet3">' . display_new_status("2004-03-02") . '
                           <h2>OpenNMS</h2>
						   OpenNMS is a project that attempts to replicate an enterprise grade Network Management System (NMS) like HP OpenView. The
                           software provides network and system monitoring, trouble ticketing, asset management and rudimentary network mapping.
                           <div class="content">
                              <div class="infoLine">
                                 <div class="left"><strong>Official Website:</strong></div>
                                 <div class="right"><a target="_blank" href="http://www.opennms.org/">http://www.opennms.org/</a></div>
                              </div>
                              <div class="infoLine bgLine1">
                                 <div class="left"><strong>Added:</strong></div>
                                 <div class="right">2nd March 2004</div>
                              </div>
                              <div class="infoLine">
                                 <div class="left"><strong>Updated:</strong></div>
                                 <div class="right">2nd March 2004</div>
                              </div>
                           </div>
                        </div>
                        			
                        <div class="infolet3">' . display_new_status("2006-10-26") . '
                           <h2>Groundwork Open Source</h2>
						   							Groundwork Open Source combines all the advantages of open source software with superior functionality, documentation, and professional support to give you unprecedented visibility and control of your entire IT infrastructure.
                           <div class="content">
                              <div class="infoLine">
                                 <div class="left"><strong>Official Website:</strong></div>
                                 <div class="right"><a target="_blank" href="http://www.groundworkopensource.com/">http://www.groundworkopensource.com/</a></div>
                              </div>
                              <div class="infoLine bgLine1">
                                 <div class="left"><strong>Added:</strong></div>
                                 <div class="right">19th October 2007</div>
                              </div>
                              <div class="infoLine">
                                 <div class="left"><strong>Updated:</strong></div>
                                 <div class="right">26th October 2007</div>
                              </div>
                           </div>
                        </div>

                        <div class="infolet3">' . display_new_status("2006-10-26") . '
                           <h2>Zenoss</h2>
						   							Zenoss is an enterprise-grade open source monitoring platform. Zenoss products provide application, server, and network management capabilities built on the python-based Zope application server.
                           <div class="content">
                              <div class="infoLine">
                                 <div class="left"><strong>Official Website:</strong></div>
                                 <div class="right"><a target="_blank" href="http://www.zenoss.com/">http://www.zenoss.com/</a></div>
                              </div>
                              <div class="infoLine bgLine1">
                                 <div class="left"><strong>Added:</strong></div>
                                 <div class="right">19th October 2007</div>
                              </div>
                              <div class="infoLine">
                                 <div class="left"><strong>Updated:</strong></div>
                                 <div class="right">26th October 2007</div>
                              </div>
                           </div>
                        </div>

                        <div class="infolet3">' . display_new_status("2006-10-26") . '
                           <h2>Hyperic</h2>
						   							Hyperic is an enterprise grade open source monitoring system built from the ground up with Java.
                           <div class="content">
                              <div class="infoLine">
                                 <div class="left"><strong>Official Website:</strong></div>
                                 <div class="right"><a target="_blank" href="http://www.hyperic.com/">http://www.hyperic.com/</a></div>
                              </div>
                              <div class="infoLine bgLine1">
                                 <div class="left"><strong>Added:</strong></div>
                                 <div class="right">19th October 2007</div>
                              </div>
                              <div class="infoLine">
                                 <div class="left"><strong>Updated:</strong></div>
                                 <div class="right">26th October 2007</div>
                              </div>
                           </div>
                        </div>

                        <div class="infolet3">' . display_new_status("2004-02-04") . '
                           <h2>PIKT&reg;</h2>
						   PIKT&reg; is a cross-categorical toolkit for monitoring and configuring systems, organizing system security, formatting documents,
                           assisting command-line work, and performing other common systems administration tasks.
                           <div class="content">
                              <div class="infoLine">
                                 <div class="left"><strong>Official Website:</strong></div>
                                 <div class="right"><a target="_blank" href="http://pikt.org/">http://pikt.org/</a></div>
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
                           <h2>Mars</h2>
						   Mars is a services-oriented network status monitor. It simulates client connections to Internet services and reports when
                           those services are not responding.
                           <div class="content">
                              <div class="infoLine">
                                 <div class="left"><strong>Official Website:</strong></div>
                                 <div class="right"><a target="_blank" href="http://www.altara.org/mars.html">http://www.altara.org/mars.html</a></div>
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
                           <h2>sysmon</h2>
						   Sysmon is a high performance, accurate network monitoring tool.
                           <div class="content">
                              <div class="infoLine">
                                 <div class="left"><strong>Official Website:</strong></div>
                                 <div class="right"><a target="_blank" href="http://www.sysmon.org/">http://www.sysmon.org/</a></div>
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
                           <h2>NMOPS</h2>
						   NMOPS (Network Management OPerationS) provides standards based networking tools for Service Providers using the Open Source
                           and Free Software model.
                           <div class="content">
                              <div class="infoLine">
                                 <div class="left"><strong>Official Website:</strong></div>
                                 <div class="right"><a target="_blank" href="http://www.nmops.org/">http://www.nmops.org/</a></div>
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
                           <h2>JFFNMS</h2>
						   JFFNMS is a Network Management System designed to mantain a IP/SNMP/Syslog/ Tacacs+ Network but can also be used to monitor
                           any standards compliant SNMP device, Server, TCP port, or Custom Poller. Supports some Cisco routers/switches.
                           <div class="content">
                              <div class="infoLine">
                                 <div class="left"><strong>Official Website:</strong></div>
                                 <div class="right"><a target="_blank" href="http://jffnms.sourceforge.net/">http://jffnms.sourceforge.net/</a></div>
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
                           <h2>Net-Policy</h2>
						   Net-Policy is a scalable role-and-policy based network management system.
                           <div class="content">
                              <div class="infoLine">
                                 <div class="left"><strong>Official Website:</strong></div>
                                 <div class="right"><a target="_blank" href="http://net-policy.sourceforge.net/">http://net-policy.sourceforge.net/</a></div>
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
                           <h2>Nagios&reg;</h2>
						   Nagios&reg; is a comprehensive and fully featured host and service network problem monitoring system.
                           <div class="content">
                              <div class="infoLine">
                                 <div class="left"><strong>Official Website:</strong></div>
                                 <div class="right"><a target="_blank" href="http://nagios.org/">http://nagios.org/</a></div>
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
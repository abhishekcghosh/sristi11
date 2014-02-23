<?php
	require_once("sristi-session-info.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php
		require_once("sristi-module-head-tag.php");
	?>
    <title>Sristi '11 :: Workshops</title>
    
                    
                    <link href="components/pirobox/css/jquery.ennui.contentslider.css" rel="stylesheet" type="text/css" media="screen,projection" />
                <!--////// CHOOSE ONE OF THE 3 PIROBOX STYLES  \\\\\\\-->
                <link href="components/pirobox/css_pirobox/white/style.css" media="screen" title="shadow" rel="stylesheet" type="text/css" />
                
                <!--////// END  \\\\\\\-->
                
                        <!-- Site JavaScript -->
                        <!-- 
                        	<script type="text/javascript" src="components/pirobox/jquery-1.3.1.min.js"></script>
                            already taken from jcarousel
                        -->
                        <script type="text/javascript" src="components/pirobox/jquery.easing.1.3.js"></script>
                        <script type="text/javascript" src="components/pirobox/jquery.ennui.contentslider.js"></script>
                        <script type="text/javascript">
                            $(function() {
                            $('#one').ContentSlider({
                            width : '960px',
                              height : '200px',
                          speed : 400,
                            easing : 'easeOutSine'
                            });
                            });
                        </script>
                        
                <!--////// INCLUDE THE JS AND PIROBOX OPTION IN YOUR HEADER  \\\\\\\-->
                
                <script type="text/javascript" src="components/pirobox/piroBox.1_2.js"></script>
                <script type="text/javascript">
                $(document).ready(function() {
                    $().piroBox({
                            my_speed: 600, //animation speed
                            bg_alpha: 0.5, //background opacity
                            radius: 4, //caption rounded corner
                            scrollImage : false, // true == image follows the page, false == image remains in the same open position
                            pirobox_next : 'piro_next', // Nav buttons -> piro_next == inside piroBox , piro_next_out == outside piroBox
                            pirobox_prev : 'piro_prev',// Nav buttons -> piro_prev == inside piroBox , piro_prev_out == outside piroBox
                            close_all : '.piro_close',// add class .piro_overlay(with comma)if you want overlay click close piroBox
                            slideShow : 'slideshow', // just delete slideshow between '' if you don't want it.
                            slideSpeed : 4 //slideshow duration in seconds(3 to 6 Recommended)
                    });
                });
                </script>
                <!--////// END  \\\\\\\-->
    
    
</head>
<body>
	
    <!-- header -->
    <?php
		require_once("sristi-module-header.php");
	?>
    <script language="javascript" type="text/javascript">
		document.getElementById("headermenu_workshops").className="current";
	</script>
    <!-- end of header -->
    
    <!-- body main wrapper -->
    <div id="templatemo_wrapper">
    
        
        <!-- content slider -->
        		<div id="templatemo_portfolio">
                    
                    <div id="one" class="contentslider">
                            <div class="cs_wrapper">
                                <div class="cs_slider">
                                
                                    <div class="cs_article">
                                        <div class="cs_article_inner">
                                            <div class="left">
                                                <img src="components/pirobox/images/templatemo_slide01.jpg" alt="AeroModelling" />
                                            </div>
                                            <div class="right">
                                                <h2>Fuel Cell Technology &amp; Hybrid Cars</h2>
                                                <p>The Best Emission Strategy is the Zero Emission Strategy</p>
                                                <a href="#fuelcell"><span>+</span>More</a>
                                            </div>
                                        </div>                               
                                    </div><!-- End cs_article -->
                                    
                                    <div class="cs_article">
                                    <div class="cs_article_inner">
                                    <div class="left">
                                        <img src="components/pirobox/images/templatemo_slide02.jpg" alt="Robotics" />
                                        </div>
                                        <div class="right">
                                            <h2>Robotics</h2>
                                            <p>A workshop aiming to provide a platform for learning the basics to advanced features in robotics.</p>
                                            
                                             <a href="#robotics"><span>+</span>More</a>
                                        </div>
                                        
                                        </div>
                                    </div><!-- End cs_article -->
                                    
                                    <div class="cs_article">
                                    <div class="cs_article_inner">
                                    <div class="left">
                                        <img src="components/pirobox/images/templatemo_slide03.jpg" alt="Ethical Hacking" />
                                        </div>
                                        <div class="right">
                                            <h2>Ethical Hacking</h2>
                                            <p>This workshop discusses about the ethics and techniques of network, email, Google hacking, 
                                             and a lot more.</p>
                                             <a href="#ethicalhacking"><span>+</span>More</a>
                                        </div>
                                        
                                        </div>
                                    </div><!-- End cs_article -->
                                    
                                    <div class="cs_article">
                                    <div class="cs_article_inner">
                                    <div class="left">
                                        <img src="components/pirobox/images/templatemo_slide04.jpg" alt="Webdesigning" />
                                        </div>
                                        <div class="right">
                                            <h2>Web-designing</h2>
                                            <p>Learn right from the beginning of web development to successfully creating and launching websites on the internet.</p>
                                            <a href="#webdesign"><span>+</span>More</a>
                                        </div>
                                        
                                        </div>
                                    </div><!-- End cs_article -->
                              
                                </div><!-- End cs_slider -->
                            </div><!-- End cs_wrapper -->
                        </div><!-- End contentslider -->
                        
                
                        <div class="cleaner"></div>
                   
                    </div> <!-- end of slider -->
        <!-- end of content slider -->
        
        
    	
        <!-- top content -->
        <div id="templatemo_content_top">
        </div>
        <!-- end of top content -->
    
        <!-- two paned content -->
        <div id="templatemo_content">
    
            <!-- main bar -->
            <div id="templatemo_main_content">
    
                <!-- content A: Sristi intro -->
                <div class="content_box last_box">
                       <a name="fuelcell"></a>
                        <div class="content_box">
                            <h2>Fuel Cell Technology &amp; Hybrid Cars</h2>
                            <p align="justify">
                            <b>Drivers of Fuel Cell Technology</b><br />
                            <blockquote style="font-style: normal; text-align: justify">Over recent years, there has been a switch in the fuel cell technology with the increasing involvement of many more traditionally
                            consumer-focused industries. Whilst the technological advances continue to be made at a rapid pace, corporations have targeted specific
                            market segments and real products will be seen over the coming years. What though, will drive significant portions of fuel cell
                            applications? There is, unfortunately, no one single answer but market drivers can be identified in all of the relevant sectors like Automotive, Small &
                            Large Stationary, Portable & Military sectors.</blockquote>
                            </p>
                            <p align="justify"><b>Skills Gained</b><br />
                            <blockquote style="font-style: normal; text-align: justify">About Renewable Energy Industry, Solar-Wind-Geothermal Energy Learning, About Fuel Cell Technology
                            (FCT), Automobile, Electric Locomotion's, Autocad Designing, Different Types of Fuel Cells, About
                            Photovoltaics, Software Learning & Carbon Analysis of FCT, Performance Analysis, Graphical Analysis,
                            Quantifiable Real time Stimulations, Consumption Analysis, Market Feasibility – Urban & Rural,
                            Government & Nodal Initiative across World, Application – Micro Power, Portal Power, Transportation,
                            Stationary etc. futuristic innovations and many more.</blockquote>
                            </p>
                            <p align="justify">
                            <b>Core Outcomes/Model Developed & Take-away</b><br />
                            <blockquote style="font-style: normal; text-align: justify">Building a Fuel Cell Hydrogen Technology Hybrid Vehicle, Study Materials, CDs', Scoring Points,
                            Fellowships, Internships, Online Support, Collaboration Learning with Mentors etc.</blockquote>
                            </p>
                            <p align="justify">
                            <b>Core Curriculum</b>
                            <ul>
                                <li>Introduction to Technology </li>
                                <li>Basic Fundamentals of Technology</li>
                                <li>Hands-on-sessions </li>
                                <li>Industry Linkage</li>
                                <li>Existing & Ongoing Project Case Studies</li>
                                <li>Career Perspectives Applications & Research</li>
                            </ul>
                            </p>
                            <p align="justify">
                            	<b>Inventory</b>
                                <ul>
                                	<li><b>Duration:</b> 16 Hours (2 Days) - 8<sup>th</sup> and 9<sup>th</sup> September 2011</li>
                                    <li><b>Certification:</b> Certification with Grades from <b>GreenAdd+</b> (associated with University of Cambridge Programme on Sustainibility Leadership, Federal Ministry of German Research and Education Initiative)</li>
                                    <li><b>Take-away Kit:</b> Specially designed takeaway Fuel Cell Development System &amp; Equipments (to a group of 6)</li>
                                	<li><b>Further Offers:</b> Green Jobs/Internship network membership</li>
                                    <li><b>Course Fees:</b> INR 1,250</li>
                                </ul>
                            </p>
                            <p align="justify">
                            	<b>For more information contact:</b>
                                <ul>
                                	<li>Shyamal Dash<br />(+91-8972229129)</li>
                                	<li>Sk Samsuddin<br />(+91-9647975356)</li>
                                </ul>
                            </p>
                        </div>
              
                        <a name="robotics"></a>
                        <div class="content_box">
                            <h2>Robotics</h2>
                            <p align="justify">
                            <b>Course Curriculum</b>
                            <ul>
                            	<li>Introduction to Electronic Circuits</li>
                                <li>Transistors</li>
                                <li>Power Supplies</li>
                                <li>IC-555</li>
                                <li>H-Bridge</li>
                                <li>Switches</li>
                                <li>Wireless Control</li>
                                <li>Microcontrollers</li>
                                <li>Sensors</li>
                                <li>Driving Motors</li>
                                <li>Hands-on-Activities</li>
                                <li>Advanced Algorithms</li>                                
                            </ul>
                            </p>
                            <p align="justify">
                            	<b>Inventory</b>
                                <ul>
                                	<li><b>Duration:</b> 16 Hours (2 Days) - 10<sup>th</sup> and 11<sup>th</sup> September 2011</li>
                                    <li><b>Certification:</b> Authorized certification from <b>Entrepreneurship Cell, IIT Kharagpur</b> and <b>Education Project Council of India</b>.</li>
                                    <li><b>Take-away Kit:</b> Robotic kit worth INR 1,500 (to a group of 4)</li>
                                	<li><b>Course Fees:</b> INR 1,200</li>
                                </ul>
                            </p>
                            <p align="justify">
                            	<b>For more information contact:</b>
                                <ul>
                                	<li>Mainak Bhattacharjee<br />(+91-7679460891)</li>
                                	<li>Deepak Kumar Biswas<br />(+91-9681176411)</li>
                                    <li>Tanumoy Chakraborty<br/>(+91-8013572924)</li>
                                </ul>
                            </p>                       
                        </div>
                        <a name="ethicalhacking"></a>
                        <div class="content_box">
                            <h2>Ethical Hacking</h2>
                            <p align="justify">
                            <b>Course Curriculum</b>
                            <ul>
                            	<li>Cyber Ethics</li>
                                <li>Information Gathering & Scanning Methodologies</li>
                                <li>Trojans, Backdoors</li>
                                <li>Google Hacking</li>
                                <li>Wireless Hacking and Security</li>
                                <li>Mobile, VoIP Hacking & Security</li>
                                <li>Web Application Attacks</li>
                                <li>System and Network Hacking</li>
                                <li>Email Hacking</li>
                                <li>Introduction to Cyber Crime Investigation</li>
                                <li>Investigation Methodologies</li>                        
                            </ul>
                            </p>
                            <p align="justify">
                            	<b>Inventory</b>
                                <ul>
                                	<li><b>Duration:</b> 16 Hours (2 Days) - 8<sup>th</sup> and 9<sup>th</sup> September 2011</li>
                                    <li><b>Certification:</b> Certificate of "Certified Ethical Hacking Expert – Level 1" will be given to participants from <b>TechDefence</b> and <b>Techfest, IIT Bombay</b>.</li>
                                    <li><b>Take-away Kit:</b> Ethical Hacking Toolkit worth INR 500 (Containing Tools, Videos, EBooks, Presentations)</li>
                                	<li><b>Course Fees:</b> INR 1,100</li>
                                </ul>
                            </p>
                            <p align="justify">
                            	<b>For more information contact:</b>
                                <ul>
                                	<li>Bikiran Guha<br />(+91-9230631585)</li>
                                	<li>Arindam Mondal<br />(+91-9749670974)</li>
                                </ul>
                            </p>                            
                        </div>
                        <a name="webdesign"></a>
                        <div class="content_box last_box">
                            <h2>Web-designing</h2>
                            <p align="justify">
                            <b>Course Curriculum</b>
                            <ul>
                            	<li>HTML</li>
                                <li>CSS</li>
                                <li>Designing with HTML and CSS</li>
                                <li>JavScript</li>
                                <li>Webservers</li>
                                <li>Hosting the website</li>
                                <li>PHP</li>
                                <li>PHP with MySQL</li>     
                                <li>CRUD Operation</li>               
                            </ul>
                            </p>
                            <p align="justify">
                            	<b>Inventory</b>
                                <ul>
                                	<li><b>Duration:</b> 16 Hours (2 Days) - 8<sup>th</sup> and 9<sup>th</sup> September 2011</li>
                                    <li><b>Certification:</b> Authorized certification from <b>Entrepreneurship Cell, IIT Kharagpur</b> and <b>Education Project Council of India</b>.</li>
                                    <li><b>Take-away Kit:</b> Toolkit worth INR 400</li>
                                	<li><b>Course Fees:</b> INR 800</li>
                                </ul>
                            </p>
                            <p align="justify">
                            	<b>For more information contact:</b>
                                <ul>
                                	<li>Krishnendu Sain<br />(+91-9474642562)</li>
                                	<li>Angshuman Chatterjee<br />(+91-9432161180)</li>
                                    <li>Sk Safiur Rahaman<br />(+91-9153034887)</li>
                                    <li>Biju Duari<br />(+91-9547766142)</li>
                                </ul>
                            </p>                            
                        </div>
                   
                    	
                </div>
                <!-- end of content A. -->
                
    
    		</div>
            <!-- end of main bar -->
    
            
            <!-- side bar -->
            <div id="templatemo_sidebar">
				<?php
					require_once("sristi-module-sidebar.php");
				?>
            </div>
            <!-- end of sidebar -->
    
            <div class="cleaner"></div>
        </div>
        <!-- end of two paned content -->
    
        <!-- bottom content -->
        <div id="templatemo_content_bottom">
        </div>
        <!-- end of bottom content -->
    
        <!-- footer -->
		<?php
            require_once("sristi-module-footer.php");
        ?>
        <!-- end of templatemo_footer -->
    
    </div> 
    <!-- end of body main wrapper -->
    
    <!-- floaters -->
    <?php
        require_once("sristi-module-floaters.php");
    ?>
    <!-- end of floaters -->
    
</body>
</html>


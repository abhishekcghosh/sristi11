<?php
	require_once("sristi-session-info.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php
		require_once("sristi-module-head-tag.php");
	?>
    <title>Sristi '11 :: Home</title>
		<script type="text/javascript" src="js/swfobject.js"></script>
        <script type="text/javascript">
              var flashvars = {};
              flashvars.cssSource = "components/piecemaker/piecemaker.css";
              flashvars.xmlSource = "components/piecemaker/photo_list.xml";
              var params = {};
              params.play = "true";
              params.menu = "false";
              params.scale = "showall";
              params.wmode = "transparent";
              params.allowfullscreen = "true";
              params.allowscriptaccess = "always";
              params.allownetworking = "all";
              swfobject.embedSWF('components/piecemaker/piecemaker.swf', 'piecemaker', '940', '420', '10', null, flashvars,    
              params, null);
        </script>
        
</head>
<body>
	
    <!-- header -->
    <?php
		require_once("sristi-module-header.php");
	?>
    <script language="javascript" type="text/javascript">
		document.getElementById("headermenu_home").className="current";
	</script>
    <!-- end of header -->
    
    <!-- body main wrapper -->
    <div id="templatemo_wrapper">
    
        <!-- flash -->
        <div id="templatemo_flash">
            <div id="piecemaker">
                <p><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" /></a></p>
            </div>
        </div> 
        <!-- end of flash -->
    
        <!-- top content -->
        <div id="templatemo_content_top">
        </div>
        <!-- end of top content -->
    
        <!-- two paned content -->
        <div id="templatemo_content">
    
            <!-- main bar -->
            <div id="templatemo_main_content">
    
                <!-- content A: Sristi intro -->
                <div class="content_box">
                    <h1>Welcome to Sristi '11</h1>
                    <div class="image_wrapper image_fl"><img src="images/home_creation.jpg" alt="Sristi" /></div>
                 	<p align="justify">
                    	The world is busy welcoming changes, some major, some minor but each one equally exhilarating. Every innovation, 
                        every novelty is highly valued in the fast paced world today, originality being the hauler.
                    </p>
                    <p align="justify">
						We here at the <a href="http://www.jgec.org" target="_blank">Jalpaiguri Government Engineering College (JGEC)</a> proudly affirm to align ourselves with the changing times; 
                        and organize Sristi '11, The Annual Techno-Management Festival as an exemplar to showcase our presence in the world of technology. 
                        This exclusive annual tech fiesta aims at sparking a flash into the torch of innovation and carry it forward igniting the mind of its bearers.
                    </p>
                    <p align="justify">
						"Sristi", is a word that brings along many vibrations of the universe. Vibrations that pulsate the mind, nurturing innovation. 
                        Vibrations of massive creations. Creations that put down the foundation of advancement and lay the seeds of humanity. 
                        In Sristi... conceals the past, the history. In Sristi... germinates and sprouts up the future, the mystery. 
                        Handing over the present, the gift. Sristi is the greatest boon bestowed on mankind.
					</p>
                    <p align="justify">
                    	Sristi '11 calls upon budding engineers, technocrats, innovators and technologists to come and join the brigade of competing young minds.
                    </p>
                </div>
                <!-- end of content A. -->
    
                <!-- content B: -->
                
                <div class="content_box last_box">
                    <h2>Highlights</h2>
                    <div class="image_wrapper image_fl"><img src="images/home_mdfaisal.jpg" alt="Muhammad Faisal"  /></div>
                    <p align="justify"><b>Guest Lecture on High Voltage Mathematics</b> by <b>Muhammad Faisal</b><br />
                    					Mr. Muhammad Faisal is the World Record Holder in Memory. 
                    					His name is registered in various world record books including 
                                        Global Book of World Records, 
                                        Open Book of World Records, Record Holder's Republic Book of World Records 
                                        and India Book of Records for the last three years...</p>
                    <div class="btn_more"><a href="sristi-lectures.php#mdfaisal" style="font-size:12px"><span>+</span> Read More</a></div>
                    <br />
                    <div class="image_wrapper image_fl"><img src="images/home_sunnyvaghela.jpg" alt="Muhammad Faisal" /></div>
                    <p align="justify"><b>Ethical Hacking Workshop</b> by <b>Sunny Vaghela's Team "Tech-Defence"</b><br />
                    						Sunny Vaghela is 23 year old countries pioneer Information Security & Cyber Crime Consultant.
                                            He is known to be involved in helping the government organizations to fight cyber crime.
                                            He was bestowed with Rajiv Gandhi Young Achiever's Award in 2007.
                                            </p>                    
                    <div class="btn_more"><a href="sristi-workshops.php#ethicalhacking" style="font-size:12px"><span>+</span> Read More</a></div>
                    <br />
                    <div class="image_wrapper image_fl"><img src="images/greenadd.jpg" alt="GreenAdd+"  width="120" /></div>
                    <p align="justify"><b>Seminar on Sustainability Leadership</b> by <b>GreenAdd+</b><br />
                    			GREEN ADD+, a signatory of the University of Cambridge Program on Sustainability Leadership, 
                                Ministry of Germany Research & Education Initiative and various other bodies will be conducting an national level initiative focused 
                                on innovation, green technologies, advanced IT, autonomous systems & sustainable development.
                    <div class="btn_more"><a href="sristi-lectures.php#greenadd" style="font-size:12px"><span>+</span> Read More</a></div>
                    <br />
                    
                </div>
                
                <!-- end of content B -->
    
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


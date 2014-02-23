<?php
	require_once("sristi-session-info.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php
		require_once("sristi-module-head-tag.php");
	?>
    <title>Sristi '11 :: Contact Us</title>
</head>
<body>
	
    <!-- header -->
    <?php
		require_once("sristi-module-header.php");
	?>
    <script language="javascript" type="text/javascript">
		//document.getElementById("headermenu_hospitality").className="current";
	</script>
    <!-- end of header -->
    
    <!-- body main wrapper -->
    <div id="templatemo_wrapper">
    
           	
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
                    <h1>Contact Us</h1>
                    	<div class="content_box">
                            <p align="justify">
                                You can contact us through email or by phone. 
                            </p>
                            <p align="justify">
                            	Our email address is: <a href="mailto:mail@sristi.org.in">mail@sristi.org.in</a>. 
                            </p>
                            <p align="justify">    
                                You can also correspond with any of the given Sristi '11 Organizing Committee members 
                                <a href="sristi-ourteam.php">here</a>.
                            </p>
                        </div>
                        
                        <div class="content_box last_box">
                        	<h2>Quick Contact</h2>
                            <p align="justify">
                            	Please use this contact form to quickly leave us a message.
                            </p>
                            <p align="justify">
                            	Please fill in all the details (*)
                            </p>
                            <p align="justify">
                            	<form method="post" action="sristi-contactus-emailsend.php">
                                    <p>Your Name*<br /><input type="text" class="rtz_formitem" name="name" maxlength="256" value="" size="20" style="width: 500px" /></p>
                                    <p>Your Email Address*<br /><input type="text" class="rtz_formitem" name="email" maxlength="256" value="" size="20" style="width: 500px" /></p>
                                    <p>Subject*<br /><input type="text" class="rtz_formitem" name="subject" maxlength="256" value="" size="20" style="width: 500px" /></p>
                                    <p>Message*<br /><textarea class="rtz_formitem" name="message" style="width:500px; height: 150px; max-width: 500px;"></textarea></p>
                                    
                                    <p>
                                    	<input type="submit" class="rtz_formitem" name="send" id="button" value="Send" style="width: 60px"/>
                                        
                                        <input type="reset" class="rtz_formitem" name="reset" id="button" value="Clear" style="width: 60px"/>
                                    </p>
                                    
                                </form>
                            </p>
                            <?php
                           		$feedback_msg='';
                                if(isset($_GET['r']))
                                {
                                    switch($_GET['r'])
                                    {
                                        case 'incomplete':
                                            $feedback_msg='It seems that you have <b>not</b> filled in all the necessary details. Please provide all the details and then resend the mail.';
                                            break;
                                        case 'invalidemail':
                                            $feedback_msg='The Email ID you provided seems to be <b>invalid.</b> Please provide a valid Email ID.';
                                            break;
                                        case 'mailerror':
                                            $feedback_msg='Email sending <b>failed</b> due to a technical difficulty. Sorry for the inconvinience. Please try again later.';
                                            break;
                                        case 'success':
                                                $feedback_msg='Your email has been sent successfully.';
                                            break;
                                        default:
                                    }
                                }
								echo '<a name="fdbck"></a><p align="justify" style="color: #2d4173">' . $feedback_msg . '</p>';
							?>
                        </div>
                        
                </div>
    			
                
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


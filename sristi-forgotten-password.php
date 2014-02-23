<?php
	require_once("sristi-session-info.php");
	if($li_privilege!="GUEST")
	{
		header("location: sristi-user.php");
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php
		require_once("sristi-module-head-tag.php");
	?>
    <title>Sristi '11 :: Forgotten Password</title>
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
                    <h1>Forgotten Password</h1>
                    	 <div class="content_box last_box">
                           <p align="justify">
                            	To reset your password, provide your registered Email ID and click on 'Rest my Password'. This will send a newly generated password to
                                your email address using which you can log in to your account.
                            </p>
                            <p align="justify">
                            	<form method="post" action="sristi-forgotten-password-backend.php">
                                    <p>Please enter you registered Email ID<br /><input type="text" class="rtz_formitem" name="username" maxlength="256" value="" size="20" style="width: 300px" /></p>
                                    <p><input type="submit" class="rtz_formitem" id="button" name="submit" value="Reset my Password" style="width: 130px"/></p>
                                </form>
                            </p> 
                            
                            <?php
                           		$feedback_msg='';
                                if(isset($_GET['r']))
                                {
                                    switch($_GET['r'])
                                    {
                                        case 'wrong':
                                            $feedback_msg='The Email ID you provided <b>does not exist</b> in the database.';
                                            break;
                                        case 'sqlerror':
                                            $feedback_msg='Password Reset <b>failed</b> due to a technical difficulty. Sorry for the inconvinience. Please try again later.';
                                            break;
										case 'success':
                                            $feedback_msg='Password Reset <b>successful</b>. Your newly generated password has been sent to your account.';
                                            break;
                                        default:
                                    }
                                }
								echo '<br/><a name="fdbck"></a><p align="justify" style="color: #2d4173">' . $feedback_msg . '</p>';
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

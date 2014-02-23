<?php
	if(!isset($loginPage))
	{
?>
    <div class="sidebar_box">
        <?php
            require_once("sristi-session-info.php");
            if($li_privilege!="GUEST")
            {
        ?>
        <h2>Logged In</h2>
        <blockquote style="font-style: normal">
            <p><?php echo $li_user; ?></p>
            <a href="sristi-logout.php">Logout</a><br />        
        </blockquote>
        <?php
            }
            else
            {
        ?>
        <h2>User Login</h2>
        <blockquote style="font-style: normal">
            <form method="post" action="sristi-login-backend.php">
                <p>Username (Email ID)<br /><input type="text" class="rtz_formitem" name="username" maxlength="256" value="" size="20" style="width: 200px" /></p>
                <p>Password<br /><input type="password" class="rtz_formitem"  name="password" maxlength="32" value="" size="20" style="width: 200px" /></p>
                <p><input type="submit" class="rtz_formitem" id="button" name="submit" value="Login"  style="width: 60px"/></p>
            </form>
            <br />
            <a href="sristi-register.php">Create New Account</a><br />
            <a href="sristi-forgotten-password.php">Request New Password</a>
        </blockquote>
        <?php
            }
        ?>
    </div>
<?php
	}
?>

<div id="news_box">
    <h2>Quick Links</h2>
    <ul style="padding-left: 10px">
        <?php
			if(!isset($userPage))
			{
		?>
        <li>
            <div class="btn_more"><a href="sristi-register.php">Register/Login</a></div>
        </li>
        <?php
			}
			else
			{
		?>
        <li>
            <div class="btn_more"><a href="sristi-user.php">User Panel</a></div>
        </li>        
        <?php
			}
		?>
        <li>
            <div class="btn_more"><a href="sristi-schedule.php" target="_blank">Schedule</a></div>
        </li>        
        <li>
            <div class="btn_more"><a href="sristi-faqs.php">FAQs</a></div>
        </li>
        <li>
            <div class="btn_more"><a href="sristi-ourteam.php">Our Team</a></div>
        </li>
        <li style="border-bottom: none">
            <div class="btn_more"><a href="sristi-contactus.php">Contact Us</a></div>
        </li>
    </ul>
    <div class="cleaner"></div>     
</div>

<div class="sidebar_box" style="background-image: none">
    <h2 style="font-size: 27px">Sponsors &amp; Partners</h2>
    <blockquote>
        <script language="javascript" type="text/javascript">
             var carousel_1;
            function carousel_1_initCallback(carousel) {
                    carousel.selected=1
                jQuery('.carousel_1_control a').bind('click', function() {
                    carousel.startAuto(0);
                    carousel.scroll( this.className);
                    return false; 
                });
                jQuery('#box_carousel_next').bind('click', function() {
                    carousel.next();
                    carousel.startAuto(0);
                    return false;
                });
                jQuery('#box_carousel_prev').bind('click', function() {
                    carousel.prev();
                    carousel.startAuto(0);
                    return false;
                });
                carousel.clip.hover(function() {
                    carousel.stopAuto();
                }, function() {
                    carousel.startAuto();
                });
            };
            function carousel_1_beforeAnimation(carousel,element,i,status){
                    $('#carousel_1_slide_'+carousel.selected).attr("src","img/slide_off.gif");    
                var idx = carousel.index(i, carousel.options.size);
                    carousel.add(i,carousel.get(idx).html())
                }
            function carousel_1_afterAnimation(carousel,element,index,status){
                var idx = carousel.index(index, carousel.options.size);
                    carousel.selected=idx
                    $('#carousel_1_slide_'+idx).attr("src","img/slide_on.gif");
                    }
            function carousel_1_itemVisibleOutCallback(carousel, item, i, state, evt){
                if (i>carousel.options.size || i<0){
                    carousel.remove(i);
                    }
                carousel.startAuto();
                    };
            jQuery(document).ready(function() {
                jQuery("#carousel_1").jcarousel({
                    scroll: 1,
                    auto: 1,
                    wrap: 'circular',
                    initCallback: carousel_1_initCallback,
                    buttonNextHTML: null,
                    buttonPrevHTML: null,
                    itemVisibleInCallback: {
                                onBeforeAnimation: carousel_1_beforeAnimation,
                                onAfterAnimation: carousel_1_afterAnimation
                                    },
                            itemVisibleOutCallback:carousel_1_itemVisibleOutCallback
                });
            });
        </script>
        <ul id="carousel_1"> 
            <li><a href="http://www.freshersworld.com" target="_blank"><img src="images/sponsors/freshersworld.jpg" height="120" width="240" border="0" /></a></li>
            <li><a href="http://www.ablab.in" target="_blank"><img src="images/sponsors/ablab.jpg" height="120" width="240" border="0" /></a></li>     
            <li><a href="http://www.plugincampus.com" target="_blank"><img src="images/sponsors/plugincampus.jpg" height="120" width="240" border="0" /></a></li>  
            <li><a href="http://www.faadooengineers.com" target="_blank"><img src="images/sponsors/faadoo.jpg" height="120" width="240" border="0" /></a></li>  
            <li><a href="http://www.greenadd.in" target="_blank"><img src="images/sponsors/greenadd.jpg" height="120" width="240" border="0" /></a></li>  
            <li><a href="http://www.techdefence.com" target="_blank"><img src="images/sponsors/techdefence.jpg" height="120" width="240" border="0" /></a></li>  
            <li><a href="http://www.virscent.com" target="_blank"><img src="images/sponsors/virscent.jpg" height="120" width="240" border="0" /></a></li>  
        </ul>
    </blockquote>
</div>

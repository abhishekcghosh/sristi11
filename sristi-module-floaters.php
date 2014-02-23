<!-- 
	<script type="text/javascript" src="components/jquery-1.4.4.js"></script>
    borrowed from jcarousel... v1.2.3
-->
<table class="" id="rtztbl_sharethis" style="position: fixed; right: -116px; bottom: 350px; z-index: 1400;" cellpadding="0" cellspacing="0" border="0">
    <tr>
        <td>&nbsp;
                        
        </td>
        <td rowspan="2" style="background:#666; border: 1px solid #333; height: 100px; width: 114px">
            <span  class='st_facebook_large' ></span><span  class='st_twitter_large' ></span><span  class='st_blogger_large' ></span><br />
            <span  class='st_orkut_large' ></span><span  class='st_linkedin_large' ></span><span  class='st_stumbleupon_large' ></span><br />
            <span  class='st_yahoo_large' ></span><span  class='st_gbuzz_large' ></span><span  class='st_email_large' ></span><br />               
            <script type="text/javascript">
				var switchTo5x=true;</script>
			<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
			<script type="text/javascript">
				stLight.options({publisher:'271696b7-a5a5-4e4a-99bb-b25459fb8b0d'});
            </script>
        </td>
    </tr>
    <tr>
        <td valign="bottom" align="right">
            <img id="rtzimg_sharethis" src="images/rtz_sharethis.png" style="cursor: pointer; opacity: 0.9" onmouseover="this.style.opacity=1" onmouseout="this.style.opacity=0.9" />
        </td>
    </tr>
</table>


<table class="" id="rtztbl_shout" style="position: fixed; right: -250px; bottom: 250px; z-index: 1300;" cellpadding="0" cellspacing="0" border="0">
    <tr>
        <td>&nbsp;
                        
        </td>
        <td rowspan="2">
            <iframe title="sristicfi" src="http://www5.shoutmix.com/?sristicfi" width="250" height="360" frameborder="0" scrolling="auto">
            <a href="http://www5.shoutmix.com/?sristicfi">View shoutbox</a>
            </iframe>
        </td>
    </tr>
    <tr>
        <td valign="bottom" align="right">
            <img id="rtzimg_shout" src="images/rtz_shout.png" style="cursor: pointer; opacity: 0.9" onmouseover="this.style.opacity=1" onmouseout="this.style.opacity=0.9" />
        </td>
    </tr>
</table>
<table class="" id="rtztbl_twitter" style="position: fixed; right: -250px; bottom: 150px; z-index: 1200;" cellpadding="0" cellspacing="0" border="0">
    <tr>
        <td>&nbsp;
                        
        </td>
        <td rowspan="2" style="width: 250px; background: #6dcff6">
                <script src="http://widgets.twimg.com/j/2/widget.js"></script>
                <script>
                new TWTR.Widget({
                  version: 2,
                  type: 'profile',
                  rpp: 10,
                  interval: 6000,
                  width: 250,
                  height: 220,
                  theme: {
                    shell: {
                      background: '#2d4173',
                      color: '#ffffff'
                    },
                    tweets: {
                      background: '#f5f5f5',
                      color: '#423d42',
                      links: '#2d4173'
                    }
                  },
                  features: {
                    scrollbar: false,
                    loop: true,
                    live: true,
                    hashtags: true,
                    timestamp: true,
                    avatars: true,
                    behavior: 'default'
                  }
                }).render().setUser('sristi11').start();
                </script>
        </td>
    </tr>
    <tr>
        <td valign="bottom" align="right">
            <img id="rtzimg_twitter" src="images/rtz_twitter.png"  style="cursor: pointer; opacity: 0.9" onmouseover="this.style.opacity=1" onmouseout="this.style.opacity=0.9"  />
        </td>
    </tr>
</table>

<table class="" id="rtztbl_facebook" style="position: fixed; right: -250px; bottom: 50px; z-index: 1100;" cellpadding="0" cellspacing="0" border="0">
    <tr>
        <td>&nbsp;
                        
        </td>
        <td rowspan="2">
            <iframe src="http://www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fpages%2FSristi-11%2F105106892907339&amp;width=250&amp;colorscheme=light&amp;show_faces=true&amp;border_color&amp;stream=false&amp;header=true&amp;height=360" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:250px; height:360px; background-color: #f5f5f5" allowTransparency="true"></iframe>
        </td>
    </tr>
    <tr>
        <td valign="bottom" align="right">
            <img id="rtzimg_facebook" src="images/rtz_facebook.png" style="cursor: pointer; opacity: 0.9" onmouseover="this.style.opacity=1" onmouseout="this.style.opacity=0.9" />
        </td>
    </tr>
</table>



<script type="text/javascript"> 
    $(document).ready(function(){
      $("#rtzimg_facebook").click(function(){
        if(document.getElementById("rtztbl_facebook").style.right!="0px") { $("#rtztbl_facebook").animate({right:0},"slow"); }
        else { $("#rtztbl_facebook").animate({right:-250},"slow"); }
      });
      $("#rtzimg_twitter").click(function(){
        if(document.getElementById("rtztbl_twitter").style.right!="0px") { $("#rtztbl_twitter").animate({right:0},"slow"); }
        else { $("#rtztbl_twitter").animate({right:-250},"slow"); }
      });
      $("#rtzimg_shout").click(function(){
        if(document.getElementById("rtztbl_shout").style.right!="0px") { $("#rtztbl_shout").animate({right:0},"slow"); }
        else { $("#rtztbl_shout").animate({right:-250},"slow"); }
      });
	  $("#rtzimg_sharethis").click(function(){
        if(document.getElementById("rtztbl_sharethis").style.right!="0px") { $("#rtztbl_sharethis").animate({right:0},"slow"); }
        else { $("#rtztbl_sharethis").animate({right:-116},"slow"); }
      });
    });
</script>


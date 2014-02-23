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
    <title>Sristi '11 :: Register</title>
</head>
<body>
	
    <!-- header -->
    <?php
		require_once("sristi-module-header.php");
		$registerPage=1;
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
                    <h1>New User Registration</h1>
                    	 <div class="content_box last_box">
                         	<p align="justify">
                            	Please fill in all the necessary details below | <a href="sristi-login.php">I already have an account</a>
                            </p>
                            <p align="justify">
                            	<form method="post" action="sristi-register-backend.php">
                                    <p>Email ID*<br /><input type="text" class="rtz_formitem" name="email" maxlength="256" value="" style="width: 500px" /></p>
                                    <p>Full Name*<br /><input type="text" class="rtz_formitem" name="name" maxlength="256" value="" style="width: 500px" /></p>
                                    <p>College*<br />
                                    				<select class="rtz_formitem" name="college" id="register_college"  style="width: 510px; height: 26px" onchange="javascript: if(this.value=='other') { this.form.txtcollege.disabled=''; } else { this.form.txtcollege.disabled='disabled'; this.form.txtcollege.value=''; }">
                                                        <option>JALPAIGURI GOVT. ENGINEERING COLLEGE</option>
                                                        <option>JADAVPUR UNIVERSITY</option>
                                                        <option>BENGAL ENGG. AND SCIENCE UNIVERSITY, SHIBPUR</option>
                                                        <option>KALYANI GOVT. ENGINEERING COLLEGE</option>
                                                        <option>IIT KHARAGPUR</option>
                                                        <option>IIT GUWAHATI</option>
                                                        <option>NIT DURGAPUR</option>
                                                        <option>NIT SILCHAR</option>
                                                        <option>NIT AGARTALA</option>
                                                        <option>NIT PATNA</option>
                                                        <option>NIT ROURKELA</option>
                                                        <option>ISM DHANBAD</option>
                                                        <option>ABACUS INSTITUTE OF ENGINEERING & MANAGEMENT</option>
                                                        <option>ABSS INSTITUTE OF HIGHER EDUCATION, HOWRAH</option>
                                                        <option>ADAMAS INSTITUTE OF TECHNOLOGY</option>
                                                        <option>ADVANCED INFORMATION & MANAGEMENT STUDIES, DURGAPUR</option>
                                                        <option>ADVANCED INSTITUTE OF MODERN MANAGEMENT & TECHNOLOGY, DT 24PGS(N)</option>
                                                        <option>APEX MANAGEMENT INSTITUTE, </option>
                                                        <option>ARMY INSTITUTE OF MANAGEMENT, KOLKATA, ALIPORE KOLKATA</option>
                                                        <option>ASANSOL ENGINEERING COLLEGE, ASANSOL BURDWAN</option>
                                                        <option>B.C.D.A. COLLEGE OF PHARMACY & TECHNOLOGY, KOLKATA</option>
                                                        <option>B.P. PODDAR INSTITUTE OF MANAGEMENT & TECHNOLOGY, KOLKATA</option>
                                                        <option>BANKURA UNNAYANI INSTITUTE OF ENGINEERING, PS&DT BANKURA</option>
                                                        <option>BENGAL COLLEGE OF ENGINEERING & TECH. FOR WOMEN</option>
                                                        <option>BENGAL COLLEGE OF ENGINEERING & TECHNOLOGY, DURGAPUR</option>
                                                        <option>BENGAL COLLEGE OF PHARMACEUTICAL SCIENCE & RESEARCH</option>
                                                        <option>BENGAL INSTITUTE OF TECHNOLOGY, KOLKATA</option>
                                                        <option>BENGAL SCHOOL OF TECHNOLOGY & MANAGEMENT</option>
                                                        <option>BENGAL SCHOOL OF TECHNOLOGY, DISTT </option>
                                                        <option>BHARAT TECHNOLOGY, </option>109<option>DREAM INSTITUTE OF TECHNOLOGY, KOLKATA</option>
                                                        <option>BHARTIYA VIDYA  BHAVAN (INSTITUTE OF MANAGEMENT), SALT LAKE CITY,KOLKATA</option>
                                                        <option>BIRBHUM INSTITUTE OF ENGINEERING & TECHNOLOGY, DT BIRBHUM</option>
                                                        <option>BIRLA SCHOOL OF MANAGEMENT</option>
                                                        <option>BUDGE BUDGE INSTITUTE OF TECHNOLOGY, </option>157<option>CAMELLIA INSTITUTE OF TECHNOLOGY & MANAGEMENT</option>
                                                        <option>CALCUTTA INST. OF PHARMACEUTICAL TECH & ALLIED HEALTH SCIENCES, ULUBERIA HOWRAH</option>
                                                        <option>CAMELLIA INSTITUTE OF TECHNOLOGY</option>
                                                        <option>CAMELLIA SCHOOL OF BUSINESS MANAGEMENT</option>
                                                        <option>CAMELLIA SCHOOL OF ENGINEERING & TECHNOLOGY</option>
                                                        <option>CHINSURAH INSTITUTE OF MANAGEMENT & TECHNOLOGY, 2680-5802, 2631-7831</option>
                                                        <option>COLLEGE OF CERAMIC TECHNOLOGY, KOLKATA</option>
                                                        <option>COLLEGE OF ENGINEERING & MANAGEMENT, KOLAGHAT, DT MIDNAPORE,PS-MECHEDA</option>
                                                        <option>DINABANDHU ANDREWS INSTITUTE OF TECHNOLOGY & MANAGEMENT, KOLKATA</option>
                                                        <option>DOEACC SOCIETY</option>
                                                        <option>DOLPHIN SCHOOL OF HOTEL MANAGEMENT</option>
                                                        <option>DOOARS ACADEMY OF TECHNOLOGY AND MANAGEMENT, JALPAIGURI</option>
                                                        <option>DR. B. C. ROY COLLEGE OF PHARMACY & ALLIED HEALTH SCIENCES, DIST BURDWAN, W.B</option>
                                                        <option>DR. B. C. ROY ENGINEERING COLLEGE, DURGAPUR</option>
                                                        <option>DR. SUDHIR CHANDRA SUR DEGREE ENGINEERING COLLEGE AND SPORTS, WEST BENGAL</option>
                                                        <option>DSMS BUSINESS SCHOOL</option>
                                                        <option>DUMKAL INSTITUTE OF ENGINEERING & TECHNOLOGY, DT MURSHIDABAD</option>
                                                        <option>DURGAPUR INSTITUTE OF ADVANCED TECHNOLOGY & MANAGEMENT</option>
                                                        <option>DURGAPUR INSTITUTE OF MANAGEMENT & SCIENCE</option>
                                                        <option>DURGAPUR INSTITUTE OF MANAGEMENT AND SCIENCE, DURGAPUR</option>67<option>MANAGEMENT INSTITUTE OF DURGAPUR, DT BURDWAN</option>
                                                        <option>DURGAPUR INSTITUTE OF SCIENCE, TECHNOLOGY AND MANAGEMENT</option>
                                                        <option>DURGAPUR SOCIETY OF MANAGEMENT SCIENCE, DURGAPUR</option>63<option>BENGAL INSTITUTE OF TECHNOLOGY & MANAGEMENT</option>
                                                        <option>EASTERN INSTITUTE FOR INTEGRATED LEARNING IN MANAGEMENT, KOLKATA</option>
                                                        <option>FUTURE BUSINESS SCHOOL</option>
                                                        <option>FUTURE INSTITUTE OF ENGINEERING AND MANAGEMENT, NO P/7/2098 24 PGS(S)</option>
                                                        <option>GEORGE COLLEGE (DEPARTMENT OF MANAGEMENT STUDIES), KOLKATA</option>73<option>KINGSTON SCHOOL OF MANAGEMENT AND SCIENCE, 24 PGS(S)</option>
                                                        <option>GEORGE COLLEGE OF MANAGEMENT AND SCIENCE, </option>65<option>CALCUTTA INSTITUTE OF ENGINEERING AND MANAGEMENT, KOLKATA</option>
                                                        <option>GEORGE COLLEGE OF SCIENCE & MANAGEMENT, (NEAR THAKUPUKUR) 24 PGS(S)</option>
                                                        <option>GEORGE COLLEGE, KOLKATA</option>
                                                        <option>GITARAM ENGINEERING COLLEGE, PO BERHAMPORE  DT MURSHIDABAD</option>
                                                        <option>GLOBAL INSTITUTE OF SCIENCE & TECHNOLOGY, HALDIA PURBA MEDNIPUR</option>
                                                        <option>GOLDEN REGENCY INSTITUTE OF HOSPITALITY MANAGEMENT, MIDNAPORE EAST</option>
                                                        <option>GOVERNMENT COLLEGE OF ENGINEERING & TEXTILE TECHNOLOGY, BERHAMPORE, MURSHIDABAD</option>
                                                        <option>GOVT. COLLEGE OF ENGINEERING & LEATHER TECHNOLOGY, SALT LAKE KOLKATA</option>
                                                        <option>GOVT. COLLEGE OF ENGINEERING & TEXTILE TECHNOLOGY, SERAMPORE, SERAMPORE,HOOGHLY</option>
                                                        <option>GREATER KOLKATA COLLEGE OF ENGG. & MANAGEMENT</option>
                                                        <option>GUPTA COLLEGE OF TECHNOLOGICAL SCIENCES, ASANSOL  W.B.</option>
                                                        <option>GURUKUL MANAGEMENT STUDIES, </option>
                                                        <option>GURUNANAK INSTITUTE OF HOTEL MANAGEMENT</option>
                                                        <option>GURUNANAK INSTITUTE OF PHARMACEUTICAL SCIENCE & TECHNOLOGY</option>
                                                        <option>GURUNANAK INSTITUTE OF TECHNOLOGY, DIST 24 PGS(N)</option>
                                                        <option>H. C. GARG INSTITUTE OF SCIENCE & TECHNOLOGY</option>
                                                        <option>HALDIA INSTITUTE OF TECHNOLOGY, </option>
                                                        <option>HERITAGE INSTITUTE OF TECHNOLOGY, KOLKATA</option>
                                                        <option>HOOGHLY ENGINEERING & TECHNOLOGY COLLEGE, HOOGHLY</option>77<option>CALCUTTA INSTITUTE OF TECHNOLOGY, HOWRAH</option>
                                                        <option>HTE HERITAGE ACADEMY, </option>114<option>SEACOM MANAGEMENT COLLEGE</option>
                                                        <option>IBRAD SCHOOL OF MANAGEMENT AND SUSTAINABLE DEVELOPMENT</option>
                                                        <option>IERCEM INSTITUTE OF INFORMATION TECHNOLOGY</option>
                                                        <option>IMPS COLLEGE OF ENGINEERING & TECHNOLOGY, </option>71<option>ARYABHATTA INSTITUTE OF ENGINEERING & MANAGEMENT</option>
                                                        <option>INDIAN ASSOCIATION FOR THE CULTIVATION OF SCIENCE</option>
                                                        <option>INDIAN INSTITUTE OF INFORMATION MANAGEMENT & BUSINESS STUDIES</option>
                                                        <option>INDIAN INSTITUTE OF SCIENCE & TECHNOLOGY, PASCHIM MEDINIPUR</option>
                                                        <option>INDIAN INSTITUTE OF SOFTWARE TECHNOLOGY, 2280 0397,2283-2752</option>
                                                        <option>INSTITUTE OF BUSINESS MANAGEMENT & RESEARCH, KOLKATA</option>
                                                        <option>INSTITUTE OF ENGG. & INDUSTRIAL TECHNOLOGY</option>
                                                        <option>INSTITUTE OF ENGINEERING & MANAGEMENT, KOLKATA</option>
                                                        <option>INSTITUTE OF GENETIC ENGINEERING, </option>
                                                        <option>INSTITUTE OF INTERNATIONAL TRADE</option>
                                                        <option>INSTITUTE OF JUTE TECHNOLOGY, KOLKATA</option>
                                                        <option>INSTITUTE OF MANAGEMENT STUDY</option>
                                                        <option>INSTITUTE OF MODERN MANAGEMENT, KOLKATA</option>
                                                        <option>INSTITUTE OF TECHNOLOGY AND MARINE ENGINEERING, HARBOUR ROAD 24 PGS(SOUTH) </option>
                                                        <option>INTERNATIONAL INSTITUTE OF MANAGEMENT SCIENCES, HOWRAH</option>79<option>INTERNATIONAL INSTITUTE OF MARITIME STUDIES & RESEARCH, PURBA MEDINIPUR</option>
                                                        <option>JIS COLLEGE OF ENGINEERING, KALYANI NADIA</option>
                                                        <option>KANAD IEM</option>
                                                        <option>KANKSA ACADEMY OF TECHNOLOGY & MANAGEMENT, PO-PANAGARH BAZAR, BURDWAN</option>
                                                        <option>KINGSTON ENGINEERING COLLEGE</option>
                                                        <option>KOTIBARSHA INSTITUTE OF TECHNOLOGY AND MANAGEMENT</option>
                                                        <option>M.R.C.C. COLLEGE OF TECHNICAL EDUCATION, </option>
                                                        <option>MALLABHUM INSTITUTE OF TECHNOLOGY, DIST BANKURA</option>
                                                        <option>MCKV INSTITUTE OF ENGINEERING, LILUAH      HOWRAH</option>
                                                        <option>MEGHNAD SAHA INSTITUTE OF TECHNOLOGY, WB</option>
                                                        <option>MURSHIDABAD COLLEGE OF ENGINEERING & TECHNOLOGY, DT MURSHIDABAD</option>
                                                        <option>NARULA INSTITUTE OF MANAGEMENT, KOLKATA</option>
                                                        <option>NARULA INSTITUTE OF TECHNOLOGY, KOLKATA</option>
                                                        <option>NATIONAL INSTITUTE OF TECHNICAL TEACHERS' TRAINING AND RESEARCH, KOLKATA</option>
                                                        <option>NATIONAL POWER TRAINING INSTITUTE (E R), DURGAPUR 16</option>
                                                        <option>NATIONAL SCHOOL OF MANAGEMENT STUDIES, ZONAL MARKET,DURGAPUR</option>
                                                        <option>NETAJI SUBHASH CHANDRA BOSE INSTITUTE OF PHARMACY, DIST NADIA</option>75<option>HALDIA INSTITUTE OF MANAGEMENT, PO HATIBERIA</option>
                                                        <option>NETAJI SUBHASH ENGINEERING  COLLEGE, POLICE PARA,GARIA,KOLKATA</option>
                                                        <option>NEXGEN INSTITUTE OF BUSINESS & TECHNOLOGY</option>
                                                        <option>NIMAS, </option>116<option>ABS ACADEMY, </option>
                                                        <option>NIPCCO INSTITUTE OF BIOTECHNOLOGY</option>
                                                        <option>NIPS SCHOOL OF HOTEL MANAGEMENT, KOLKATA</option>
                                                        <option>NOPANY INSTITUTE OF MANAGEMENT STUDIES, KOLKATA</option>
                                                        <option>NOPANY INSTITUTE OF PROFESSIONAL STUDIES</option>
                                                        <option>NPC COLLEGE OF SCIENCE AND MANAGEMENT</option>
                                                        <option>NSHM-SCHOOL OF HOTEL MANAGEMENT, B ZONE, DURGAPUR</option>
                                                        <option>NSHM BUSINESS SCHOOL, DURGAPUR</option>
                                                        <option>NSHM BUSINESS SCHOOL</option>
                                                        <option>NSHM COLLEGE OF MANAGEMENT & TECHNOLOGY, DURGAPUR 12  </option>
                                                        <option>NSHM COLLEGE OF MANAGEMENT & TECHNOLOGY, KOLKATA</option>
                                                        <option>NSHM SCHOOL OF MEDIA & COMMUNICATION</option>
                                                        <option>PAILAN COLLEGE OF MANAGEMENT & TECHNOLOGY  , WEST BENGAL</option>
                                                        <option>PAILAN SCHOOL OF INTERNATIONAL STUDIES, KOLKATA</option>
                                                        <option>POST GRADUATE INSTITUTE OF HOSPITAL ADMINISTRATION</option>
                                                        <option>PRAJNANANANDA INSTITUTE OF TECHNOLOGY & MANAGEMENT</option>
                                                        <option>RAMAKRISHNA MISSION SEVA PRATISHTHAN V.I.M.S</option>
                                                        <option>RCC INSTITUTE OF INFORMATION TECHNOLOGY, CANAL(S)ROAD,PATLADNGA,KOLKATA</option>
                                                        <option>REGENT EDUCATION & RESEARCH FOUNDATION GROUP OF INSTITUTIONS</option>
                                                        <option>RINPOCHE ACADEMY OF MANAGEMENT AND TECHNOLOGY</option>
                                                        <option>RTG ANIMATE - ANIMATION ACADEMY</option>
                                                        <option>S. N. BOSE NATIONAL CENTRE FOR BASIC SCIENCES, SALT LAKE KOLKATA</option>
                                                        <option>SAROJ MOHAN INSTITUTE OF TECHNOLOGY, </option>69<option>ACADEMY OF TECHNOLOGY, </option>
                                                        <option>SCHOOL OF INFORMATION TECHNOLOGY, WBUT</option>
                                                        <option>SCHOOL OF MANAGEMENT, WBUT</option>
                                                        <option>SEACOM ENGINEERING COLLEGE, </option>
                                                        <option>SEACOM MARINE COLLEGE</option>
                                                        <option>SILIGURI INSTITUTE OF TECHNOLOGY, PO SUKHNA   DT DARJEELING</option>
                                                        <option>SOUTH-ASIAN MANAGEMENT TECHNOLOGIES</option>
                                                        <option>ST. THOMAS COLLEGE OF ENGINEERING & TECHNOLOGY, KOLKATA</option>
                                                        <option>SUPREME KNOWLEDGE FOUNDATION GROUP OF INSTITUTIONS, DIST.-HOOGHLY</option>
                                                        <option>SURENDRA INSTITUTE OF ENGINEERING & MANAGEMENT</option>
                                                        <option>SWAMI VIVEKANANDA COLLEGE FOR MANAGEMENT TECHNOLOGY</option>
                                                        <option>SWAMI VIVEKANANDA INSTITUTE OF MANAGEMENT & COMPUTER SCIENCE</option>
                                                        <option>SWAMI VIVEKANANDA INSTITUTE OF MODERN SCIENCE</option>
                                                        <option>SWAMI VIVEKANANDA INSTITUTE OF SCIENCE & TECHNOLOGY</option>
                                                        <option>SYAMAPRASAD INSTITUTE OF TECHNOLOGY & MANAGEMENT</option>
                                                        <option>TAMRALIPTA INSTITUTE OF MANAGEMENT AND TECHNOLOGY</option>
                                                        <option>TECHNO GLOBAL BALURGHAT, </option>159<option>GLOBAL INSTITUTE OF MANAGEMENT AND TECHNOLOGY</option>
                                                        <option>TECHNO INDIA-HOOGHLY, HOOGHLY</option>
                                                        <option>TECHNO INDIA - KOLKATA</option>
                                                        <option>TECHNO INDIA COLLEGE OF TECHNOLOGY, KOLKATA</option>
                                                        <option>TECHNO INDIA INSTITUTE OF TECHNOLOGY,  GARIA, HATISUR NEAR SIEMENS KOLKATA</option>
                                                        <option>TECHNO INDIA INSTITUTE OF TECHNOLOGY, KOLKATA </option>
                                                        <option>TECHNO INDIA, HOOGHLY CAMPUS, HOOGHLY</option>
                                                        <option>TECHNO INDIA, SEC-V SALT LAKE</option>
                                                        <option>THE CALCUTTA ANGLO GUJARATI COLLEGE</option>
                                                        <option>THE INSTITUTE OF COMPUTER ENGINEERS(INDIA) DURGAPUR, CITY CENTRE DURGAPUR</option>
                                                        <option>THE INSTITUTE OF PARAMEDICAL SCIENCES AND TECHNOLOGY, NHAI COMPLEX,DURGAPUR</option>
                                                        <option>VIDYASAGAR COLLEGE OF OPTOMETRY & VISION SCIENCE </option>
                                                        <option>VIDYASAGAR INSTITUTE OF EDUCATION TECHNOLOGY AND RESEARCH</option>
                                                        <option>VIVEKANANDA MISSION ASRAM INSTITUTE OF OPTHALMIC TRAINING</option>
                                                        <option>WBUT</option>
                                                        <option>WEST BENGAL STATE COUNCIL FOR SCIENCE & TECHNOLOGY</option>
                                                        <option value="other">Other (will enter the name myself...)</option>
                                                    </select>
                                    		   <p>
                                                    <input disabled="disabled" class="rtz_formitem" id="register_college" type="text" name="txtcollege" maxlength="1024" value="" style="width: 500px" />
                                                    <br />
                                                    <span style="color: #666666;">(No abbreviations please)</span>
                                               </p>
                                    </p> 
                                    <p>Year<br />
                                    			<select class="rtz_formitem" style="height:26px" id="register_year" name="year">
                                                    <option value="none">Please select your year...&nbsp;&nbsp;&nbsp;&nbsp;</option>
                                                    <option value="school">School</option>
                                                    <option value="ug1">Undergraduate 1st year</option>
                                                    <option value="ug2">Undergraduate 2nd year</option>
                                                    <option value="ug3">Undergraduate 3rd year</option>
                                                    <option value="ug4">Undergraduate 4th year</option>
                                                    <option value="pg1">Postgraduate 1st year</option>
                                                    <option value="pg2">Postgraduate 2nd year</option>
                                                    <option value="pg3">Postgraduate 3rd year</option>
                                                    <option value="other">Other</option>
                                                </select>
                                    </p>                                    
                                    <p>City<br /><input type="text" class="rtz_formitem" name="city" maxlength="256" value="" style="width: 200px" /></p> 
                                    <p>Address<br /><textarea class="rtz_formitem" name="address" style="width:500px; height: 40px; max-width: 500px;"></textarea></p>
                                    <p>Phone #*<br /><input type="text" class="rtz_formitem" name="phone" maxlength="20" value="" style="width: 200px" /></p> 
                                    <p align="justify">
                                    	I am interested in
                                        	<br />
                                            <blockquote style="font-style: normal">
                                            	<input class="rtz_formitem" type="checkbox" name="chkpicknplace"/>&nbsp;Robotix: Pick-n-place<br />
                                                <input class="rtz_formitem" type="checkbox" name="chkamphibian"/>&nbsp;Robotix: Amphibian<br />
                                                <input class="rtz_formitem" type="checkbox" name="chkvigilance"/>&nbsp;Robotix: Vigilance<br />
                                                <input class="rtz_formitem" type="checkbox" name="chkcoding"/>&nbsp;Coding &amp; Debugging<br />
                                                <input class="rtz_formitem" type="checkbox" name="chkbplan"/>&nbsp;Management: B-Plan<br />
                                                <input class="rtz_formitem" type="checkbox" name="chkmockparliament"/>&nbsp;Management: Mock Parliament<br />
                                                <input class="rtz_formitem" type="checkbox" name="chkdebate"/>&nbsp;Management: Debate<br />
                                                <input class="rtz_formitem" type="checkbox" name="chkflipflop"/>&nbsp;Management: Flip-flop<br />
                                                <input class="rtz_formitem" type="checkbox" name="chkcstrike"/>&nbsp;Gaming: Counter-Strike 1.6<br />
                                                <input class="rtz_formitem" type="checkbox" name="chknfsmw"/>&nbsp;Gaming: NFS Most Wanted<br />
                                                <input class="rtz_formitem" type="checkbox" name="chkfifa"/>&nbsp;Gaming: FIFA 08<br />
                                                <input class="rtz_formitem" type="checkbox" name="chkaoe"/>&nbsp;Gaming: Age of Empires II<br />
                                                <input class="rtz_formitem" type="checkbox" name="chkjunkyard"/>&nbsp;Junkyard Wars<br />
                                                <input class="rtz_formitem" type="checkbox" name="chkcad"/>&nbsp;CADathlon<br />
                                                <input class="rtz_formitem" type="checkbox" name="chkquiz"/>&nbsp;Tech Quiz<br />
                                                <input class="rtz_formitem" type="checkbox" name="chkaeromod"/>&nbsp;Workshop: AeroModelling<br />
                                                <input class="rtz_formitem" type="checkbox" name="chkautorobo"/>&nbsp;Workshop: Autonomous Robotics<br />
                                                <input class="rtz_formitem" type="checkbox" name="chkhacking"/>&nbsp;Workshop: Ethical Hacking<br />
                                                <input class="rtz_formitem" type="checkbox" name="chkwebdesign"/>&nbsp;Workshop: Webdesigning<br />
                                             </blockquote>   
                                    </p>
                                    <br />
                                    <p>
                                    	<input type="submit" class="rtz_formitem" name="send" id="button" value="Register" style="width: 100px"/>
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
                                            $feedback_msg='It seems that you have <b>not</b> filled in all the necessary details. Please provide all the details and retry.';
                                            break;
                                        case 'invalidemail':
                                            $feedback_msg='The Email ID you provided seems to be <b>invalid.</b> Please provide a valid Email ID.';
                                            break;
                                        case 'emailexists':
                                            $feedback_msg='A previous registration with same Email ID <b>already exists</b>. Please provide a unique Email ID.';
                                            break;                                        
										case 'sqlerror':
                                            $feedback_msg='Registration <b>failed</b> due to a technical difficulty. Sorry for the inconvinience. Please try again later.';
                                            break;
                                        case 'success':
                                                $feedback_msg='Registration <b>successful</b>. <br/><br /> Please check your email for the account password. In case you do not find an email in your Inbox, please <b>do not forget</b> to check the <b>Spam folder</b>.';
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


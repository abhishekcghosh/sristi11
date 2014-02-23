<?php
	require_once("sristi-session-info.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php
		require_once("sristi-module-head-tag.php");
	?>
    <title>Sristi '11 :: Events</title>
	<link rel="stylesheet" type="text/css" href="components/browsermenu/style.css" />
    <script language="javascript" type="text/javascript" src="components/browsermenu/browser-menu.js"></script>
</head>
<body>
	
    <!-- header -->
    <?php
		require_once("sristi-module-header.php");
	?>
    <script language="javascript" type="text/javascript">
		document.getElementById("headermenu_events").className="current";
	</script>
    <!-- end of header -->
    
    <!-- body main wrapper -->
    <div id="templatemo_wrapper">
    
        <!-- middle content (blue header) -->
        <div id="templatemo_middle">
            <p align="justify" style="width: 600px">
            	Sristi '11 brings out an array of events for you to tempt your foray. 
                The following events are the ones that will make you compete, bringing it 
                down to the wire and taking the bull by its horns.
            </p>
            <div class="wwu_btn"><a href="sristi-register.php"></a></div>
    	</div> 
        <!-- end of templatemo_middle -->
    	
        <!-- top content -->
        <div id="templatemo_content_top">
        </div>
        <!-- end of top content -->
    
        <!-- two paned content -->
        <div id="templatemo_content">
    
            <!-- main bar -->
            <div id="templatemo_main_content">
    
                <!-- content A: Sristi intro -->
                		
                		<!-- EVENT DETAILS ONE BY ONE -->
                        	<input type="hidden" id="edholder_current" value="ed_default"/>
                            <!-- DEFAULT -->
                            	<div class="content_box last_box" id="ed_default">
                                    <h1>Sristi '11 Events</h1>
                                    <div class="content_box">
                                        <!--<div class="image_wrapper image_fl"><img src="images/home_creation.jpg" alt="Sristi" height="70" /></div>-->
                                        <p align="justify">
                                        	Sristi '11 brings to you a set of 14 events:
                                            <ul class="tmo_list">
                                            	<li>Robotix (3 events) - LocoMotion, Amphibian and Vigilance.</li>
                                                <li>Programming - Coding &amp; Debugging.</li>
                                                <li>Management (4 events) - B-Plan, Mock Parliament, Mock Press-Conference and Debate.</li>
                                                <li>Gaming (3 events) - Counter-Strike 1.6, NFS Most Wanted and FIFA 08.</li>
                                                <li>Junkyard Wars - Grease Monkeyz.</li>
                                                <li>Designing - CADathlon.</li>
                                                <li>Quiz - Tech Quiz.</li>
                                            </ul>
                                            For more details, use the Event Browser on the right pane to navigate through individual events.
                                        </p>
                                    </div>                                    
                                </div>
                            <!-- ROBOTIX -->
                                <div class="content_box last_box" id="ed_picknplace" style="display:none">
                                    <h1>LocoMotion</h1>
                                    <div class="content_box">
                                        <!--<div class="image_wrapper image_fl"><img src="images/home_creation.jpg" alt="Sristi" height="70" /></div>-->
                                        <p align="justify">Design a mechanical robot capable of lifting objects and placing them at a destination following a specified path.</p>
                                    </div>
                                    <div class="content_box">
                                        <h2>Problem Statement</h2>
                                        <p align="justify">
                                        	<b>Round 1 (Prelims)</b><br />
                                            The team will be given a number and they must use the bot to place the binary equivalent of the given number and place 
                                            them from the most to least significant bit. There will be two boxes containing cubes of 0 and 1 respectively. 
                                            In this round, the binary number will be 3-bit. The time limit for this round will be 5 mins.
                                            
                                        </p>
                                        <p align="justify">
                                        	<b>Round 2 (Mains)</b><br />
                                            The rules are the same as in prelims. But in this round the bot has to generate a 4-bit binary number. 
                                            And there will be shortage of 0s and 1s. The 0s and 1s will be placed in the same box for this round.
                                        </p>  
                                        <p align="justify">
                                        	<b>The Arena</b><br />
                                            <img src="images/locomotion.jpg" />
                                        </p>  
                                                                    
                                    </div>
                                    <div class="content_box">
                                        <h2>Rules &amp; Regulations</h2>
                                        <p align="justify">
                                        	<ul>
                                            	<li>Each team can consist of maximum 5 participants.</li>
                                                <li>In case the bot does not fit into the box the team will be starting with a -50.</li>
                                                <li>The decisions of the co-ordinators will be final.</li>
                                                <li>220V AC supply will be provided. Teams have to bring there own adapters for bot.</li>
                                                <li>A maximum of 2 restarts will be given due to technical errors. After which there will be disqualification.</li>
                                                <li>The dimension of the blocks will be 4cm x 4cm x 4cm and they will have iron hooks on them.</li>
                                                <li>You can pick and place only one block at a time.</li>
                                                <li>Bot Specifications
                                                	<ul>
                                                    	<li>The bot must fit into a box of 25cm x 25cm x 25cm.</li>
														<li>The bot size can extend during gameplay.</li>
                                                    </ul>
                                                </li>
                                                <li>Scoring
                                                	<ul>
                                                    	<li>40 points for each boxes picked.</li>
                                                        <li>20 for each boxes placed.</li>
                                                        <li>30 bonus will be awarded for completing the task.</li>
                                                        <li>Time Bonus: 300 - Time taken by the bot (in seconds).</li>
                                                	</ul>
                                                </li>
                                            </ul>
                                        </p>
                                    </div>
                                    <div class="content_box">
                                        <h2>Prize Money</h2>
                                        <p align="justify">INR <strong>15,000</strong> to be won!</p>
                                    </div>
                                    <div class="content_box last_box">
                                        <h2>Event Managers</h2>
                                        <p align="justify">
                                        	Aniket Bhattacharya<br />(+91-9163653560)<br /><br />
											Ankan Dikpati<br />(+91-9732343876)<br /><br />
                                            Monalisa Mallick<br />(+91-9038008652)<br /><br />
                                        </p>	
                                    </div>
                                </div>
                                <div class="content_box last_box" id="ed_amphibian" style="display:none">
                                    <h1>Amphibian</h1>
                                    <div class="content_box">
                                        <!--<div class="image_wrapper image_fl"><img src="images/home_creation.jpg" alt="Sristi" height="70" /></div>-->
                                        <p align="justify">Design a mechanical robot capable of traversing different types of terrains.</p>
                                    </div>
                                    <div class="content_box">
                                        <h2>Problem Statement</h2>
                                        <p align="justify">
                                        	The task is to build a mechanical wired/wireless robot which is capable of travelling different terrains, 
                                            cross obstacles and move objects.
                                        </p>
                                        <p align="justify">
                                        <b>Qualifying Round</b>
                                        <ul>
                                            <li>Two robots manual or wireless controlled, selected by lottery would start from Start 1 and Start 2 positions. They both have to start from the first barrier side.</li>
                                            <li>The first thing to do is to cross the barrier in a zig-zag manner and then you would face a damaged road having a maximum depth of 2 cm.</li>
                                            <li>The bot has to change the side by crossing the two inclined planes maintaining a road width of 30cm. if you cross the middle line then you would be penalized.</li>
                                            <li>The bot then has to cross a tunnel having a 2 cm gap in the above surface for crossing wire.</li>
                                            <li>After  that the bot has  to cross the 2nd tunnel in the same way and then it has to go to the initial position in the same way as you changed your side.</li>
                                        </ul>
                                        <br /><img src="images/amphi1.jpg" />    
                                        </p>
                                        <p align="justify">
                                        <b>Final Round</b>
                                        <ul>
                                        	<li>After crossing a Normal Road a block of weight (maximum of 500gms) will be kept. You can pick and place it somewhere else or push it further to clear the road.</li>
                                            <li>After clearing the way, you would find a three way road: 
                                                    <ul>
                                                        <li>Sand (max points)</li>
                                                        <li>Gravel</li>
                                                        <li>Normal plain (min points)</li>
                                                    </ul>
                                            </li>
                                            <li>After the bot has crossed the above said path it has to travel through a water-way. Points will be deducted if the bot travels under water.</li>                                            
                                        </ul> 
                                        <br /><img src="images/amphi2.jpg" />   
                                        </p>
                                        
                                    </div>
                                    <div class="content_box">
                                        <h2>Rules &amp; Regulations</h2>
                                        <p align="justify">
                                        	<ul>
                                            	<li>You have to maintain the side in which you are driving. any devation will result in penalzation.</li>
                                                <li>The wires must remain slack throughout.</li>
                                                <li>The width of tunnel is 30 cm i.e. the two robots may not cross it at one time. So, the robot which crossed the tunnel first would be allowed to pass and the other would have to pause his robot in order to provide a path for the 2nd robot.</li>
                                                <li>The merit of the 1 round would be based on time. The robots for the 2nd round would be declared there.</li>
                                            	<li>Bot Specification: The bot must fit into a box of 25cm x 25xm x 25cm.</li>
                                                <li>You must choose the dimensions keeping in mind the width of the lanes. The narrowest possible width of a lane will be a minimum of 30 cm.</li>
                                                <li>For crossing boundaries, you would be given negative points.</li>
                                            </ul>
                                        </p>
                                    </div>
                                    <div class="content_box">
                                        <h2>Prize Money</h2>
                                        <p align="justify">INR <strong>15,000</strong> to be won!</p>
                                    </div>
                                    <div class="content_box last_box">
                                        <h2>Event Managers</h2>
                                        <p align="justify">
                                        	Prabhat Das<br />(+91-9062927980)<br /><br />
                                            Suman Ari<br />(+91-9531766925)<br /><br />
                                            Tanaya Bannerjee<br />(+91-9474774798)<br /><br />
                                        </p>
                                	</div>
                            	</div>
                                <div class="content_box last_box" id="ed_vigilance" style="display:none">
                                    <h1>Vigilance</h1>
                                    <div class="content_box">
                                        <!--<div class="image_wrapper image_fl"><img src="images/home_creation.jpg" alt="Sristi" height="70" /></div>
                                        <p align="justify">Further details will be available soon.</p>-->
                                    </div>
                                    <div class="content_box">
                                        <h2>Problem Statement</h2>
                                        <p align="justify">
                                        	<b>Round 1: Qualifier Round</b><br /><br />
                                            <img src="images/vigilance_round1.jpg" />
                                            <ul>
                                            	 <li>The Line Follower racetrack
                                                 	<ul>
                                                        <li>The track is laid out using BLACK 3-5 cm tape on a WHITE base.</li>
                                                        <li>The Line Follower should be start at the START LINE and go to the END LINE following the path from sector 1 to sector 5.</li>
                                                        <li>The racetrack shall comprise of straight lines and arcs within the confines of the base-board(s).</li>
                                                        <li>A track may have arcs with different curvatures linked continuously.</li>
                                                        <li>The radius of the arc shall be fixed at 15 cm,19 cm,30 cm and 45 cm. The angle of the arc shall be 90, 180 or 270 degrees. </li>
                                                        <li>A corner marker shall be affixed on the left side of the track in the direction of the race at each point where the curvature of the track changes (beginning and end of the arc).</li>
                                                        <li>Complaints about the track surface will not be entertained.</li>
                                                    </ul>
                                                 </li>
                                                 <li>Timing of Laps
                                                 	<ul>
                                                    	<li>The time it takes for a Line Follower to make the circuit of a track shall be the recorded lap time. </li>
                                                        <li>To determine the lap time of the Line Follower, the period from the time the sensor at the starting line detects part of the Line Follower body to the time the sensor at the finishing line detects part of the body of the same Line Follower shall be clocked. However, no measured lap time shall be regarded as valid unless the entire body of the Line Follower passes through the finishing line.</li>
                                                        <li>The Line Follower shall have a specified maximum number of attempts to run the track within a stipulated time limit (typically 5 to 10 minutes and from 3 to 4 attempts to be decided by the organizer on the day of the race). If the performance time limit is reached and the Line Follower is in the midst of a run, the Line Follower will be allowed to complete the run and the lap time will be valid if the run is successful. </li>
                                                        <li>Within the given performance time, the handler is allowed to replace batteries 
                                                        and/or upload new program parameters to the Line Follower. </li>
                                                        <li>Line Followers shall start anywhere within the defined start-finish area, and shall go in the specified direction. At the finishing line, the Line Follower must automatically come to a complete stop and remain stationary for at least five seconds, failing which the lap will be void. </li>
                                                        <li>If a Line Follower has crossed the finishing line, it will be considered to have gone off the track, and that run shall be invalid.</li>
                                                        <li>The Line Follower that goes off of the line for over 15 seconds will be disqualified.</li>
                                                        <li>The Line Follower shall be deemed to have left the arena when all wheels, legs, or tracks have
                                                        moved completely off the arena surface.</li>
                                                        <li>The organisers will ensure that the track is located within a typical indoor environment in so far as is feasible. No request to adjust the lighting shall be entertained. </li>
                                                        <li>The organisers may demand from handlers such explanation concerning their Line Followers as is deemed necessary, and they may use their discretion to direct handlers to give up racing, disqualify them, and take any other necessary measures.</li>
                                                    </ul>
                                                 </li>   
                                                 <li>Points and Conditions:
                                                 	<ul>
                                                 		<li>Complete the course as fast as possible. If there's a tie between the fastest, a run-off will determine the winner. If nobody finish the run, the farthest one run on tracks will wins.</li>
                                                    </ul>    
                                                 </li>

                                            </ul>	
                                        </p>
                                        <p align="justify">
                                        	<b>Round 2: Final Round</b><br /><br />
                                            <img src="images/vigilance_round2.jpg" />
                                            <ul>
                                            	<li>The Line Follower Racetrack
                                                	<ul>
                                                    	<li>The track is laid out using BLACK 3-5 cm tape on a WHITE base.</li>
                                                        <li>The Line Follower should be start at the START LINE and go to the END LINE.</li>
                                                        <li>The racetrack shall comprise of straight lines and arcs within the confines of the base-board(s).</li>
                                                        <li>A track may have arcs with different curvatures linked discontinuously.</li>
                                                        <li>The radius of the arc shall be fixed at 15 cm,19 cm,30 cm and 45 cm. The angle of the arc shall be 90 or 180 degrees. </li>
                                                        <li>A corner marker shall be affixed on the left side of the track in the direction of the race at each point where the curvature of the track changes (beginning and end of the arc).</li>
														<li>The line follower should count the number of discontinuity (number of the breaks at the track).Counting the number of discontinuity means while following the line if any discontinuity occurs at the track then the Line Follower should stop at that position for 1 second only.</li>
                                                        <li>The Line Follower can follow a loop or path more than one time but it should not cross the arc to which the END line is connected more than one time.</li>
                                                        <li>Complaints about the track surface will not be entertained.</li>

                                                    </ul>
                                                 </li>   
                                                 <li>Timing of Laps
                                                 	<ul>
                                                    	<li>The Line Follower should Complete the course within the specific given time.The time should be given the by organisers.Any complaints about the given time will not be entertained.</li>
                                                        <li>If the Line Follower is unable complete the track within the given time then the finish line will be consider as the point at which the Line Follower was when the given time finished. </li>
                                                        <li>To determine the specific given time of the Line Follower, the period from the time the sensor at the starting line detects part of the Line Follower body shall be clocked.</li>
                                                        <li>The Line Follower shall have a specified maximum number of attempts to run the track within a stipulated time limit (typically 5 to 10 minutes and from 3 to 4 attempts to be decided by the organizer on the day of the race).If the Line Follower is unable to start within the performance time then it will be disqualified.</li>
                                                        <li>It should be noted very carefully that the performance also includes the specific given time within which the Line Follower should complete its race.
																For example:If 15 minutes performance time is given to anyone and it is mentioned that the specific given time to complete tha race track is 5 minute then 5 minutes is given to that Line follower when it start its race to complete the track and total 15 minutes is given to perform that Line follower including those 5 minute and any changes.
                                                                Suppose if the Line follower start its race in the 13 minute of its performance time then only 2 minute is given to that Line Follower to complete its race.</li>
                                                        <li>Line Followers shall start anywhere within the defined start-finish area, and shall go in the specified direction. At the finishing line, the Line Follower must automatically come to a complete stop and remain stationary for at least five seconds, failing which the lap will be void. </li>
                                                        <li>If a Line Follower has crossed the finishing line, it will be considered to have gone off the track, and that run shall be invalid.</li>
                                                        <li>A robot that goes off of the line for over 15 seconds will be disqualified.
                                                        A robot shall be deemed to have left the arena when all wheels, legs, or tracks have
                                                        moved completely off the arena surface.</li>
                                                        <li>The organisers will ensure that the track is located within a typical indoor environment in so far as is feasible. No request to adjust the lighting shall be entertained. </li>
                                                        <li>The organisers may demand from handlers such explanation concerning their Line Followers as is deemed necessary, and they may use their discretion to direct handlers to give up racing, disqualify them, and take any other necessary measures.</li>
                                                    </ul>
                                                 </li>
                                                 <li>Points and Conditions
                                                 	<ul>
                                                    	<li>10 points extra will be given if the Line Follower complete the tracks within the given time.If it is unable to complete the track within the given time then no extra points will be given.</li>
                                                        <li>5 points will be given for counting each number of discontinuity at the track.For example there are 10 discontinuity at the track and if the Line Follower is able to count all the discontinuity when it finish its race 50 ponits will be given to that Line Follower.</li>
                                                        <li>The winner will be declared in the basis of total point collected by the Line Follower.</li>

                                                    </ul>
                                                 </li>
                                            </ul>
                                        </p>
                                    </div>
                                    <div class="content_box">
                                        <h2>Rules &amp; Regulations</h2>
                                        <p align="justify">
                                        	<ul>
                                        		<li>Line Followers must be self-contained, and not externally operated by wire or by remote radio control during the race.</li>
                                                <li>Except for the battery pack, the handler shall not make any addition, removal, replacement or change to the hardware of a Line Follower during a contest. It is however permissible to make minor repairs.</li>
                                                <li>A Line Follower shall not exceed 25 cm in overall length, 25 cm in overall width and 20 cm in overall height.</li>
                                                <li>Gas and Li-Po battery are not allowed.</li>
                                                <li>The organisers reserve the right to make changes to any of the rules and condition in the interest of fair play and sportsmanship, and to ensure that all competitors have an enjoyable competition. </li>
                                                <li>In the event of ambiguity, the organisers' interpretation of any clauses of the rules shall prevail.</li>
                                            </ul>
                                        </p>
                                    </div>
                                    <div class="content_box">
                                        <h2>Prize Money</h2>
                                        <p align="justify">INR <strong>24,000</strong> to be won!</p>
                                    </div>
                                    <div class="content_box last_box">
                                        <h2>Event Managers</h2>
                                        <p align="justify">
                                        	Suraj Das<br />(+91-9474066397)<br /><br />
                                            Debabrata Mondal<br />(+91-9547387407)<br /><br />
                                        </p>
                                    </div>
                                </div>
                            <!-- PROGRAMMING -->
                                <div class="content_box last_box" id="ed_coding" style="display:none">
                                    <h1>Coding &amp; Debugging</h1>
                                    <div class="content_box">
                                        <!--<div class="image_wrapper image_fl"><img src="images/home_creation.jpg" alt="Sristi" height="70" /></div>-->
                                        <p align="justify">An on-the-spot coding and debugging event that tests your programming skills and computing prowess.</p>
                                    </div>
                                    <!--<div class="content_box">
                                        <h2>Problem Statement</h2>
                                        <p align="justify">Further details will be available soon.</p>
                                    </div>-->
                                    <div class="content_box">
                                        <h2>Rules &amp; Regulations</h2>
                                        <p align="justify">
                                        	<ul>
                                                <li>A team must comprise of 3 members.</li>
                                                <li>Members of the team can be from different colleges.</li>
                                                <li>Programming will be done in "C" language.</li>
                                                <li>There will be two rounds:
                                                    <ul>
                                                    	<li>Prelims: A set of MCQ questions will be given to solve. 
                                                            <ul>
                                                                <li>Total number of questions: 30 (Aptitude Test)</li>
                                                                <li>Total Time: 30+5 Minutes. Extra 5 minutes will be provided to fill up their information like their team name and other info.</li>
                                                                <li>Marking scheme: +3 for every correct response, -1 for every incorrect response and 0 for unattempted questions.</li>
                                                                <li>To break the tie there will be 6 star mark questions.</li>
                                                                <li>Total number of teams to be qualified after first round: 6</li>
                                                             </ul>
                                                        </li>
                                                        <li>Mains: 6 Problem Statements will be provided to.
                                                            <ul> 
                                                                <li>Total Time: 2 Hrs.</li>
                                                                <li>The marking scheme covers all the prospects of the program. If someone does only a small part of the program he will be awarded the marks accordingly.</li>
                                                                <li>To break any ties teams will be judged on star mark questions and best solution.</li>
                                                            </ul>
                                                        </li>    
                                                    </ul>
                                                </li>
                                            </ul>
                                        </p>
                                    </div>
                                    <div class="content_box">
                                        <h2>Prize Money</h2>
                                        <p align="justify">INR <strong>10,000</strong> to be won!</p>
                                    </div>
                                    <div class="content_box last_box">
                                        <h2>Event Managers</h2>
                                        <p align="justify">
                                        	Abhishek Ghosh<br />(+91-9564910353)<br /><br />
                                        </p>
                                    </div>
                                </div>
							<!-- MANAGEMENT -->
                            	<div class="content_box last_box" id="ed_bplan" style="display:none">
                                    <h1>B-Plan</h1>
                                    <div class="content_box">
                                        <!--<div class="image_wrapper image_fl"><img src="images/home_creation.jpg" alt="Sristi" height="70" /></div>
                                        <p align="justify">Further details will be available soon.</p>-->
                                    </div>
                                    <div class="content_box">
                                        <h2>Procedure</h2>
                                        <p align="justify">
                                        	Following are the broad themes for this event and entries have to be submitted under these only:<br />
                                               <ul>
                                                <li>Social Entrepreneurship</li>
                                                <li>Bio-Business</li>
                                                <li>IT-Software</li>
                                                <li>Retail</li>
                                                <li>Power</li>
                                                <li>Banking/Finance </li>
                                                <li>Clean Energy</li>
                                                <li>Core Sciences</li>
                                                <li>Telecommunication</li>
                                                <li>Biotechnology</li>
                                                <li>Web Portals</li>
                                                <li>Electronics</li>
                                                <li>Manufacturing</li>
                                                <li>Service</li>
                                                <li>Entertainment</li>
                                                <li>Hospitality</li>
                                                <li>HRD</li>
                                                <li>Consultancy</li>
                                                <li>Food Processing</li>
                                                <li>Tourism</li>
                                               </ul>
                                        </p>
                                        <p align="justify">
                                        	<b>Round 1</b>
                                            <ol>
                                                <li>In this round participants will be submitting the Executive Summary of their B-Plan to the following email address of the Event Manager: <a href="mailto:bplan@sristi.org.in">bplan@sristi.org.in</a> with subject: <b>B-PLAN</b>.</li>
                                                <li>Last date for submission of executive summary is <b>4<sup>th</sup> September, 2011</b>.</li>
                                                <li>Based upon the Executive Summary, teams will be short-listed for <b>Round 2</b>.</li>
                                                <li>The decision of the judges will be final and binding on all contestants.</li>
                                                <li>The selected teams will be intimated by email/phone by <b>6<sup>th</sup> September, 2011</b> as well as their names will be announced on Sristi '11 website.</li>
                                            </ol>
                                        </p>
                                        <p align="justify">
                                            <b>Executive Summary/Abstract Format</b>
                                            <ul>
                                                <li>The abstract should be about 1000 words long (excluding annexure and introduction), stating briefly the purpose of the plan, opportunities, financial & marketing plan, etc.</li>
                                                <li>The document should be prepared in Times New Roman font sized 12 pt with 1.5 line spacing submitted in pdf format.</li>
                                                <li>The cover page of the abstract should contain name of the team members, college of the team members and contact details. This cover page shall be detached before papers are given for panel evaluation. The name of the author or their institute should not appear anywhere in the body of the paper.</li>
											</ul>
                                        </p>
                                        <p align="justify">
                                        	<b>Round 2</b>
                                            	<ol>
                                                    <li>The top 15 teams selected in round 1 will present their B-Plan in front of the judges in form of a Presentation at Sristi '11.</li>
                                                    <li>A maximum of 20 minutes will be given to each team to present their idea.</li>
                                                    <li>The 20 minutes presentation will be followed by a question and answer round of 10 minutes by the judges as well as the audience.</li>
                                                    <li>Points will be deducted for exceeding the time limit.</li>
                                                </ol>
                                         </p>
                                    </div>
                                    <div class="content_box">
                                        <h2>Rules &amp; Regulations</h2>
                                        <p align="justify">
                                        	<ul>
                                            	<li>A Team can be formed from any B-School or an engineering college.</li>
                                                <li>One team can submit only one entry.</li>
                                                <li>Any team or individual cannot be a part of more than one entry.</li>
                                                <li>Students from the same institute as well as different institutes can form a team.</li>
                                                <li>A Team can consist of a maximum of four students.</li>
                                                <li>There is no restriction on the number of teams from an institute.</li>
                                                <li>The organizers hold the right to disqualify a team if the idea is already implemented in the market.</li>
                                                <li>The decision of the judges is final.</li>
                                                <li>The organizers reserve unconditional right to disqualify an entry or cancel the participation of a team for any reason including presentation of inaccurate/incomplete information, plagiarism, late submission, violation of any intellectual property rights, or any other reason.</li>
                                            </ul>
                                        </p>
                                    </div>
                                    <div class="content_box">
                                        <h2>Prize Money</h2>
                                        <p align="justify">INR <strong>9,000</strong> to be won!</p>
                                    </div>
                                    <div class="content_box last_box">
                                        <h2>Event Managers</h2>
                                        <p align="justify">
                                                Saptarshi Sarkar<br />(+91-8013290978)<br /><br />
                                                Aniket Bhattacharya<br />(+91-9163653560)<br /><br />
                                        </p>
                                    </div>
                                </div>
                                <div class="content_box last_box" id="ed_mockparliament" style="display:none">
                                    <h1>Mock Parliament</h1>
                                    <div class="content_box">
                                        <!--<div class="image_wrapper image_fl"><img src="images/home_creation.jpg" alt="Sristi" height="70" /></div>-->
                                        <p align="justify">Mock parliament is a simulation of the parliamentary proceeding of a legislature or other deliberative assembly.</p>
                                    </div>
                                    <div class="content_box">
                                        <h2>Procedure</h2>
                                        <p align="justify">
                                        	<b>Round 1</b><br />
                                            Round 1 will be started with a Group Discussion. Where each participant has to be participating individually and 
                                            10 out of them will be selected. Those selected participants are called at final round of Mock Parliament.
                                        </p>
                                        <p align="justify">
											<b>Round 2 or Final Round</b><br />
                                            In this round, participants will be divided into the ruling party and the opposition party (5 each) under the discretion of the event managers. 
                                            Each team has to dominate over other with appropriate subject in case any  inappropriate argueing or 
                                            misbehaviour is exhibited then the team will be immediately disqualified. 
                                            The winner will be decided by the respected judges.
                                        </p>
                                        <p align="justify">
                                        	<b>Topics</b>
                                            <ul>
                                                <li>For the poorer sections of society, a state controlled economy is better than a liberalized economy.</li>
                                                <li>Introduction of New Trains in the 2011 Rail Budget.</li>
                                                <li>NAC's take on 'Protection of Women from Sexual Harassment at the Workplace Bill, 2010'.</li>
                                                <li>Developing nations get more voice in World Bank.</li>
                                                <li>Issue of Black Money.</li>
											</ul>
                                        </p>
                                    </div>
                                    <div class="content_box">
                                        <h2>Rules &amp; Regulations</h2>
                                        <p align="justify">
                                        	<ul>
                                                <li>Every participant has to perform individually. Any number of participants from a particular institute.</li>
                                                <li>The participants would be selected on the basis of a political questionnaire, knowledge, appearance, performance.</li>
                                                <li>The two shortlisted team would be representing ruling party and the opposition party (At the final round).</li>
                                                <li>The discussion should be accurate and up to the mark.</li>
                                                <li>Usage of indecent language is strictly discouraged. A gentle manner and good behavior with members and opposition is desire. Arguing with judge is not acceptable.</li>
											</ul>
                                        </p>
                                    </div>
                                    <div class="content_box">
                                        <h2>Prize Money</h2>
                                        <p align="justify">INR <strong>3,000</strong> to be won!</p>
                                    </div>
                                    <div class="content_box last_box">
                                        <h2>Event Managers</h2>
                                        <p align="justify">
                                        	Dhrubajit Choudhury<br />(+91-9933479866)<br /><br />
											Saptarshi Sarkar<br />(+91-9433808849)<br /><br />
                                        </p>
                                    </div>
                                </div>
                                <div class="content_box last_box" id="ed_debate" style="display:none">
                                    <h1>Debate</h1>
                                    <div class="content_box">
                                        <!--<div class="image_wrapper image_fl"><img src="images/home_creation.jpg" alt="Sristi" height="70" /></div>
                                        <p align="justify">Further details will be available soon.</p>-->
                                    </div>
                                    <div class="content_box">
                                        <h2>Topics</h2>
                                        <p align="justify">
                                        	<ul>
                                            	<li>Is torture justified for national security?</li>
                                                <li>Was Google's decision to stop censoring results in China justified?</li>
                                                <li>Birthright citizenship for children of illegal immigrants.</li>
                                                <li>Is Wikipedia a reliable and socially beneficial resource? </li>
                                                <li>Voters should be given a choice for 'None of the above'.</li>
                                                
                                            </ul>
                                        </p>
                                    </div>
                                    <div class="content_box">
                                        <h2>Rules &amp; Regulations</h2>
                                        <p align="justify">
                                        	<ul>
                                            	<li>A team of two participants is allowed.</li>
                                                <li>One participant speaks for the topic and the other against.</li>
                                                <li>Each participant is given a maximum time of 5 minutes.</li>
                                                <li>After the completion of debating of both the teams, 3 minutes are allotted for rebutting where the questions are posed by the judges and the audience.</li>
                                                <li>Judging will be based on the overall performance by a suitable panel of judges.</li>
                                                <li>Usage of abusive languages or comments made so as to upset any caste, creed, sex or religion is subject to immediate disqualification.</li>
                                                <li>There is no restriction on the number of teams from an institute.</li>
                                            </ul>
                                        </p>
                                    </div>
                                    <div class="content_box">
                                        <h2>Prize Money</h2>
                                        <p align="justify">INR <strong>3,000</strong> to be won!</p>
                                    </div>
                                    <div class="content_box last_box">
                                        <h2>Event Managers</h2>
                                        <p align="justify">
                                        	Shashank Gupta<br />(+91-9681291097)<br /><br />
                                            Bikiran Guha<br />(+91-9230631585)<br /><br />                                       
                                        </p>
                                    </div>
                                </div>
                                <div class="content_box last_box" id="ed_flipflop" style="display:none">
                                    <h1>Mock Press-Conference</h1>
                                    <div class="content_box">
                                        <!--<div class="image_wrapper image_fl"><img src="images/home_creation.jpg" alt="Sristi" height="70" /></div>-->
                                        <p align="justify">
                                        	Ever seen those celebrities being made to look like complete birdbrains by an aggressive bunch of press people and wondered, 
                                            "Hey! I could have done much better if I were him/her!" Well, this is your chance to be him/her. Mix élan with wit and take 
                                            your character through a gruelling press session... and don't let the press 'mock' you!
                                        </p>
                                    </div>
                                    <div class="content_box">
                                        <h2>Procedure</h2>
                                        <p align="justify">
                                        	<b>Round 1</b><br />
                                            You will be given a chance to act as a celebrity for five minutes. You will get the name of the celebrity on the spot.
                                        </p>
                                        <p align="justify">
                                            <b>Round 2</b><br />
                                            Now you will be given a chance to select one of the renowned names from the prepared list and again have a chance to per
                                            form and there will be questions from judges and audiences.
                                        </p>
                                    </div>
                                    <div class="content_box">
                                        <h2>Rules &amp; Regulations</h2>
                                        <p align="justify">
                                        	<ul>
                                            	<li>This event is a mock rendition of a press conference wherein the judges would pose as journalists invited by the newsmakers (public figures ranging from politicians to scientists to writers, singers or film stars) to hear them speak and raise questions.</li>
                                                <li>The participants would be assessed on their flair for dramatics-a convincing portrayal of the character would help them win accolades. The contestant would also be graded on their ability to effortlessly imbibe characteristic personality traits of the public figure they are enacting in their demeanour.</li>
                                                <li>The contestants acting prowess and the intensity with which they vehemently defend the stand they have taken up would fetch those marks.</li>
                                                <li>The event also invites active participation from the audience in the form of pertinent questions put up to the participants.</li>
                                            </ul>
                                        </p>
                                    </div>
                                    <div class="content_box">
                                        <h2>Prize Money</h2>
                                        <p align="justify">INR <strong>3,000</strong> to be won!</p>
                                    </div>
                                    <div class="content_box last_box">
                                        <h2>Event Managers</h2>
                                        <p align="justify">
                                        	Ritesh Prasad<br />(+91-9674077404)<br /><br />
                                            Angshuman Chatterjee<br />(+91-9432161180)<br /><br />
                                        </p>
                                    </div>
                                </div>
                            <!-- GAMING -->
                            	<div class="content_box last_box" id="ed_cstrike" style="display:none">
                                    <h1>Counter-Strike 1.6</h1>
                                    <div class="content_box">
                                        <!--<div class="image_wrapper image_fl"><img src="images/home_creation.jpg" alt="Sristi" height="70" /></div>-->
                                        <p align="justify">
                                        	Eagle eyes. Nerves of steel. Lightning reflexes. Sleek senses. And a strategically inclined mind to match. 
                                            If this describes you, then this one is for you. Race through mazes and be the first to pounce on your prey. 
                                            Or the prey might turn predator. And look after your team, for there is always safety in numbers. 
                                            Join us in this game of life and death, where you must kill or be killed. 
                                            So lock and load soldiers. And let the bullets rain!
                                        </p>
                                    </div>
                                    <!--<div class="content_box">
                                        <h2>Problem Statement</h2>
                                        <p align="justify">Further details will be available soon.</p>
                                    </div>-->
                                    <div class="content_box">
                                        <h2>Rules &amp; Regulations</h2>
                                        <p align="justify">
                                        	<ul>
                                            	<li>A team must comprise of 5 members.</li>
                                                <li>Shotguns, Bullpop, Krieg 552 commando, Automatic Sniper, Tactical Shield not allowed.</li>
                                                <li>In case of use of the above mentioned guns, the player will be suspended for one match and the opponent will be given the advantage.</li>
                                                <li>Each team will start with $800 as their initial balance.</li>
                                                <li>Map for the prelims (for all-knife fight, guns should be dropped at the starting point) is de_dustlong.</li>
                                                <li>In the prelims, there will be a total of 1 match. This will be selected by a toss.</li>
                                                <li>In the mains, the team can choose a chit containing de_dust2, the_inferno, the_train, nuke, de chateau maps.</li>
                                                <li>In the mains, there will be a total of 16 matches (8 Terrorists, 8 CT). In case of a draw, there will be 4 more matches, and the result will be the final.</li>
                                                <li>Silent C4 installation is considered bug play. Such an offense may result in a warning or loss of all remaining TR rounds at the sole discretion of the board of referees.</li>
                                                <li>After death, the players are not allowed to pass any commands to their teammates. In case they are found doing so, the team will be penalised a single match.</li>
                                                <li>Friendly Fire will be switched on in the match.</li>
                                                <li>Match Timing will be 1:30</li>
                                                <li>Participants must bring their personal headphones. Keyboard and Mouse will be provided but they can bring their personal too.</li>
                                                <li>Server master can and will check for the use of any unfair practice or script, even those not listed above, during each match.</li>
                                            </ul>
                                        </p>
                                    </div>
                                    <div class="content_box">
                                        <h2>Prize Money</h2>
                                        <p align="justify">INR <strong>20,000</strong> to be won!</p>
                                    </div>
                                    <div class="content_box last_box">
                                        <h2>Event Managers</h2>
                                        <p align="justify">
                                        	Soumen Das<br />(+91-9475314353)<br /><br />
                                            Arindam Roy<br />(+91-9432425354)<br /><br />
                                        </p>
                                    </div>
                                </div>
                                <div class="content_box last_box" id="ed_nfsmw" style="display:none">
                                    <h1>NFS Most Wanted</h1>
                                    <div class="content_box">
                                        <!--<div class="image_wrapper image_fl"><img src="images/home_creation.jpg" alt="Sristi" height="70" /></div>-->
                                        <p align="justify">
                                        	The smell of burning rubber fills the air, adrenaline pumps through racing hearts as nitrous hits the engine, 
                                            all the world is a blur, gears crank up another notch, the wind rushes past the aerodynamics - yes my man 
                                            you are made for racing. So if you're one who suffers from an acute Need For Speed, then here is your drive to fame.
                                        </p>
                                    </div>
                                    <!--<div class="content_box">
                                        <h2>Problem Statement</h2>
                                        <p align="justify">Further details will be available soon.</p>
                                    </div>-->
                                    <div class="content_box">
                                        <h2>Rules &amp; Regulations</h2>
                                        <p align="justify">
                                        	<ul>
                                                <li>Procedure of the game
                                                	<ul>
                                                        <li>1st round: The game will be of 2 laps. 32 players will be selected. Map: Omega &amp; Industries; Car: Porsche 911 turbo S</li>
                                                        <li>2nd round: 16 players will be selected. Map: Stadium &amp; Hwy 1; Car: Chevrolet Corvette C6/C6R</li>
                                                        <li>For the next 2 rounds any maps will be provided on-spot. Cars: Options/Restrictions will be provided on-spot.</li>
                                                        <li>For the final round, you can use any car of your choice. Map will be provided on-spot.</li>
                                                    </ul>
                                                </li>
                                                <li>Rules
                                                    <ul>
                                                        <li>N2O will be On.</li>
                                                        <li>Collision detection will be Off.</li>
                                                        <li>Performance Matching and Catch Up will be On.</li>
                                                        <li>Camera: Any</li>
                                                        <li>Junkman upgrades not allowed.</li>
                                                        <li>Gamepads or other controllers except standard desktop keyboard not allowed.</li>
                                                    </ul>
                                                </li>
                                                <li>You must bring your own keyboard, mouse, headphones or other accessories.</li>
                                            </ul>
                                        </p>
                                    </div>
                                    <div class="content_box">
                                        <h2>Prize Money</h2>
                                        <p align="justify">INR <strong>8,000</strong> to be won!</p>
                                    </div>
                                    <div class="content_box last_box">
                                        <h2>Event Managers</h2>
                                        <p align="justify">
                                        	Soumen Das<br />(+91-9475314353)<br /><br />
                                            Abhirup Bhattacharya<br />(+91-9434887497)<br /><br />
                                        </p>
                                    </div>
                                </div>
                                <div class="content_box last_box" id="ed_fifa" style="display:none">
                                    <h1>FIFA 08</h1>
                                    <div class="content_box">
                                        <!--<div class="image_wrapper image_fl"><img src="images/home_creation.jpg" alt="Sristi" height="70" /></div>-->
                                        <p align="justify">
                                        	All football fanatics report. It's time to show your skills with the ball. 
                                            Jump into the shoes of your favourite stars and teams and lead them (and yourself of-course!) to victory. 
                                            So don't wait another moment and join the line-up for you just might win the gold!
                                        </p>
                                    </div>
                                    <!--<div class="content_box">
                                        <h2>Problem Statement</h2>
                                        <p align="justify">Further details will be available soon.</p>
                                    </div>-->
                                    <div class="content_box">
                                        <h2>Rules &amp; Regulations</h2>
                                        <p align="justify">
                                        	<ul>
                                                <li>General Rules
                                                	<ul>
                                                        <li>Competition Method: 1 vs. 1</li>
                                                        <li>Game Mode: Club</li>
                                                        <li>Host/client will be announced before the match or decided by coin toss.</li>
                                                        <li>Player changes and strategy changes are limited to 3 times throughout the game. (The changes before the start of first and second half are not included in this count.)</li>
                                                        <li>Any two Teams throughout the Whole tournament</li>
                                                        <li>No two playing competetors in the tournament can have the same team.</li>
                                                        <li>At the end of each match, players must maintain the final screens and receive the score confirmation from a referee.</li>
                                                        <li>The tournament will be knock out and the structure of the tournament will be designed after the all competetors enlist their names.</li>
                                                        <li>Three yellow cards or two red cards will finalize the disqualification from the tournament(for each match) and the other player will get a walkover.</li>
                                                        <li>Team Sristi may install any third party programs and/or join as an observer for tournament operations purposes, such as verifying match results or gathering match data.</li>
                                                    </ul>
                                                </li>
                                                <!--<li>Points
                                                    <ul>    
                                                        <li>Win - 3 points</li>
                                                        <li>Draw - 1 point</li>
                                                        <li>Loss - 0 point</li>
                                                        <li>Goal difference included</li>
                                                    </ul>
                                                </li>        -->
                                                <li>Stadium Settings
                                                	<ul>
                                                        <li>Stadium: Any stadium but the homes of the two opponents</li>
                                                        <li>Weather: Sunny Day</li>
                                                    </ul>
                                                </li>        
                                                <li>Game Settings
                                                	<ul>
                                                        <li>Difficulty Level = World Class</li>
                                                        <li>Keeper Level = Professional</li>
                                                        <li>Half Length = 4 minutes</li>
                                                        <li>Injuries = OFF</li>
                                                        <li>Offside = ON</li>
                                                        <li>Bookings = ON</li>
                                                        <li>Radar = ON</li>
                                                        <li>Camera = Any</li>
                                                        <li>Time/Score Display = ON</li>
                                                        <li>Game Speed = Fast</li>
                                                        <li>Adidas Live Season = OFF</li>
                                                        <li>Number of subs = 5</li>
                                                        <li>Player auto switching = minimum</li>
                                                        <li>Manual Cross = ON</li>
                                                        <li>Manual Through-ball = ON</li>
                                                  	</ul>
                                               	</li>
                                                <li>Forbidden moves
                                                	<ul>
                                                        <li>Players must kick-off with a backward pass at the beginning of each half and after every goal is scored.</li>
                                                        <li>Prior to any changes in one's team, the player that wants to change must be in possession of the ball and be in his own half before they pause the game.</li>
                                                        <li>Players can't make a throw in directly into the opponent penalty box and offside areas.</li>
                                                        <li>Players can't hit the crossbar directly from the corner kicks.</li>
                                                        <li>Goals scored directly from own half are prohibited.</li>
                                                        <li>In any case, a goal scored due to the use of a 'forbidden move' shall be disallowed.</li>
                                                        <li>Should a player persist in playing with forbidden moves, he may be disqualified from the tournament.</li>
                                                        <li>All complaints shall be dealt with after the match has been completed.</li>
                                                   	</ul>
                                               	</li>     
                                                <li>Disconnections
                                                	<ul>
                                                        <li>A referee will confirm the exact score to that point (even if the ball is about to cross the goal line, the goal shall not count), and restart the match.</li>
                                                        <li>A referee will inform the players on exactly how many minutes must still be played in order to complete the match.</li>
                                                        <li>Intentional disconnection: Upon judgment by the referee, any offending player will be charged with a loss and a possible disqualification from the tournament.</li>
                                                   	</ul>
                                                </li>    
                                                <li>Unfair Play
                                                	<ul>
                                                        <li>Use of any cheat program.</li>
                                                        <li>Intentional disconnection.</li>
                                                        <li>Use of any settings exceeding the standard and permitted settings.</li>
                                                        <li>Any unnecessary chatting during the match.</li>
                                                        <li>If a referee decides that external conditions (Press, Team Leader, Player, Spectator, etc) are giving or have given an unfair advantage to a player, the player may be given a warning or lose by default at the referee's sole discretion.</li>
                                                        <li>Upon discovery of any player committing any violations regarded as unfair play, that player will be disqualified from the tournament.</li>
                                                        <li>During the course of any match, the operations staff and/or referee may determine other actions to embody unfair play at any time.</li>
                                                   	</ul>
                                                </li>
                                                <li>These rules are for Sristi '11 Grand Final and are subject to modification in the following aspects
                                                	<ul>
                                                        <li>Use of the most recent patch/version release of each official game is within the Team Sristi's own discretion.</li>
                                                        <li>Changes to in-game settings and options necessitated by the use of most recent patch version/release.</li>
                                                        <li>Cheat Protection Program release and/or cheat protection functions.</li>
                                                        <li>Game settings and/or operations guidelines dictated by differences between online and offline tournaments.</li>
                                                    </ul>
                                                </li>
											</ul>
                                        </p>
                                    </div>
                                    <div class="content_box">
                                        <h2>Prize Money</h2>
                                        <p align="justify">INR <strong>8,000</strong> to be won!</p>
                                    </div>
                                    <div class="content_box last_box">
                                        <h2>Event Managers</h2>
                                        <p align="justify">
                                        	Abhirup Ghatak<br />(+91-9804933154)<br /><br />
                                            Debjit Ghosh<br />(+91-9800567061)<br /><br />                                            
                                        </p>
                                    </div>
                                </div>
                                <div class="content_box last_box" id="ed_aoe" style="display:none">
                                    <h1>Age of Empires II</h1>
                                    <div class="content_box">
                                        <!--<div class="image_wrapper image_fl"><img src="images/home_creation.jpg" alt="Sristi" height="70" /></div>-->
                                        <p align="justify">Build your empire, thrive for your civilization and emerge victorious!</p>
                                    </div>
                                    <!--<div class="content_box">
                                        <h2>Problem Statement</h2>
                                        <p align="justify">Further details will be available soon.</p>
                                    </div>-->
                                    <div class="content_box">
                                        <h2>Rules &amp; Regulations</h2>
                                        <p align="justify">
                                        	<ul>
                                                <li>Game Version - Age of Empires II: Age of Conquerors Expansion</li>
                                                <li>Number of Players - 4 </li>
                                                <li>Game Type - Random</li>
                                                <li>Map Style - Standard</li>
                                                <li>Location - Random Land Map</li>
                                                <li>Size - Giant</li>
                                                <li>Difficulty - Hardest</li>
                                                <li>Resources - Standard</li>
                                                <li>Population - 200</li>
                                                <li>Game Speed - Fast</li>
                                                <li>Reveal Map - Standard</li>
                                                <li>Starting Age - Standard</li>
                                                <li>Victory - Time limit of 1100 years (1hr 30 min)</li>
                                                <li>Team together, Team locks, Locks speed, Record game - ON</li>
                                                <li>All techs, Allow cheats - OFF</li>
                                            </ul>
                                        </p>
                                    </div>
                                    <div class="content_box">
                                        <h2>Prize Money</h2>
                                        <p align="justify">Further details will be available soon.</p>
                                    </div>
                                    <div class="content_box last_box">
                                        <h2>Event Managers</h2>
                                        <p align="justify">
                                        	Soumen Das<br />(+91-9475314353)<br /><br />
                                            Arindam Roy<br />(+91-9432425354)<br /><br />
                                        </p>
                                    </div>
                                </div>
                            <!-- J WARS -->
                            	<div class="content_box last_box" id="ed_junkyard" style="display:none">
                                    <h1>Grease Monkeyz</h1> in association with <b><a href="http://www.greenadd.in">GreenAdd+</a></b> and <b>Renewable Energy Club, JGEC</b>.
                                    <div class="content_box">
                                        <!--<div class="image_wrapper image_fl"><img src="images/home_creation.jpg" alt="Sristi" height="70" /></div>
                                        <p align="justify">Further details will be available soon.</p>-->
                                    </div>
                                    <div class="content_box">
                                        <h2>Problem Statement</h2>
                                        <p align="justify">
                                        	You are dropped in
                                            the middle of a junkyard, with a goal to conceive and
                                            physically build a contraption as per the problem statement which will be given
                                            on the spot, in a stipulated amount of time, using the scrap material and the tools available.
                                        </p>
                                    </div>
                                    <div class="content_box">
                                        <h2>Rules &amp; Regulations</h2>
                                        <p align="justify">
                                        	<ul>
                                            	<li>Team of 4 members.</li>
                                                <li>Round 1 (Preliminary round) - 30 mins of MCQ (Aptitude Test)</li>
                                                <li>Number of teams to qualify prelims: 4</li>
                                                <li>Round 2 (Mains) - 5 hour hands-on work in the scrapyard/workshop to conceive and physically build a contraption for the given problem statement on the spot.</li>
                                                <li>All scrap and tools will be available. In case any team wants to use their own tools, they must be first consented by Team Sristi.</li>
                                                <li>Judging of the best contraption will be done on multiple parameters and the decision of the judges will be final.</li>
                                            </ul>
                                        </p>
                                    </div>
                                    <div class="content_box">
                                        <h2>Prize Money</h2>
                                        <p align="justify">INR <strong>10,000</strong> to be won!</p>
                                    </div>
                                    <div class="content_box last_box">
                                        <h2>Event Managers</h2>
                                        <p align="justify">
                                        	Somnath Bhattacharjee<br />(+91-9547138718)<br /><br />
                                            Abhishek Ghosh<br />(+91-9564910353)<br /><br />
                                        </p>
                                    </div>
                                </div>
                            <!-- CAD -->
                            	<div class="content_box last_box" id="ed_cad" style="display:none">
                                    <h1>CADathlon</h1>
                                    <div class="content_box">
                                        <!--<div class="image_wrapper image_fl"><img src="images/home_creation.jpg" alt="Sristi" height="70" /></div>-->
                                        <p align="justify">
                                        	An event that combines knowledge,
                                            aptitude, sense, vision and
                                            creativity. Requires technical skills regarding
                                            re-assembling of dismantled machine parts
                                            as well as the aptitude to re-design or
                                            modify an existing design using CAD.
                                        </p>
                                    </div>
                                    <!--<div class="content_box">
                                        <h2>Problem Statement</h2>
                                        <p align="justify">Further details will be available soon.</p>
                                    </div>-->
                                    <div class="content_box">
                                        <h2>Rules &amp; Regulations</h2>
                                        <p align="justify">
                                        	<ul>
                                            	<li>Team of 2</li>
                                                <li>Software: AutoCAD 2010 (or above)</li>
                                                <li>Round 1 (Preliminary round) - 30 mins of MCQ (Aptitude Test)</li>
                                                <li>Number of teams to qualify prelims: 6</li>
                                                <li>Round 2 (Mains): Practical designing or modifying of a machine part as per the given problem statement on the spot.</li>
                                                <li>For the mains, Team Sristi '11 will try to provide you with computers with AutoCAD 2011 installed but it is advised to bring your own laptops with AutoCAD 2010 (or above) installed.</li>                                                
                                            </ul>
                                        </p>
                                    </div>
                                    <div class="content_box">
                                        <h2>Prize Money</h2>
                                        <p align="justify">INR <strong>6,000</strong> to be won!</p>
                                    </div>
                                    <div class="content_box last_box">
                                        <h2>Event Managers</h2>
                                        <p align="justify">
                                        	Somnath Bhattacharjee<br />(+91-9547138718)<br /><br />
                                            Sk Samsuddin<br />(+91-9647975356)<br /><br />
                                        </p>
                                    </div>
                                </div>
                            <!-- QUIZ -->
                            	<div class="content_box last_box" id="ed_quiz" style="display:none">
                                    <h1>Tech Quiz</h1>
                                    <div class="content_box">
                                        <!--<div class="image_wrapper image_fl"><img src="images/home_creation.jpg" alt="Sristi" height="70" /></div>-->
                                        <p align="justify">
                                        	For those who take an active interest in
                                            science and technology and who will be
                                            building the technological infrastructure of
                                            our society in the future, here's a quiz that's
                                            particularly relevant to a tech-fest.
                                        </p>
                                    </div>
                                    <!--<div class="content_box">
                                        <h2>Problem Statement</h2>
                                        <p align="justify">Further details will be available soon.</p>
                                    </div>-->
                                    <div class="content_box">
                                        <h2>Rules &amp; Regulations</h2>
                                        <p align="justify">
                                        	On-the-spot quizzing event.
                                        </p>
                                    </div>
                                    <div class="content_box">
                                        <h2>Prize Money</h2>
                                        <p align="justify">INR <strong>3,500</strong> to be won!</p>
                                    </div>
                                    <div class="content_box last_box">
                                        <h2>Event Managers</h2>
                                        <p align="justify">
                                        	Mukesh Kumar Shah<br />(+91-9002705040)<br /><br />
                                        </p>
                                    </div>
                                </div>
						<!-- EVENT DETAILS ONE BY ONE -->



                <!-- end of content A. -->
                
    
    		</div>
            <!-- end of main bar -->
    
            
            <!-- side bar -->
            <div id="templatemo_sidebar">
				<?php
					require_once("sristi-module-sidebar-eventbrowser.php");
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
        //require_once("sristi-module-floaters.php");
    ?>
    <!-- end of floaters -->
    
</body>
</html>


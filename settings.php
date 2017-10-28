<!--    /** 
   Template Name: Settings 
   */ --> 

<?php get_header(); ?>
<!-- MAIN PAGE -->
<div class="page-wrap">
	<!-- MAIN CENTER CONTENT -->
	<div class="center">

		<!-- MENU STARTS -->
		<div class="g-20">
			<div class="smallprofile">
				<img id="profileavatar" src="http://localhost/201tutorial/wp-content/uploads/2017/10/profiledark.png">
				<h4><?php  global $current_user;
      										get_currentuserinfo(); echo $current_user->user_login . "\n"; ?></h4>
			</div>
			<ul>
				<a href="http://localhost/201tutorial/profile-2/">
					<li>
						<img src="http://localhost/201tutorial/wp-content/uploads/2017/10/uploaddark.png"/>My Uploads
					</li>
				</a>
				<a href="http://localhost/201tutorial/history-2/">
					<li>
						<img src="http://localhost/201tutorial/wp-content/uploads/2017/10/history.png"/>Veiwing History
					</li>
				</a>
				<a href="http://localhost/201tutorial/favourites-2/">
					<li>
						<img src="http://localhost/201tutorial/wp-content/uploads/2017/10/favourites.png">Favourites
					</li>
				</a>
				<a href="http://localhost/201tutorial/settings-2/">
					<li>
						<img src="http://localhost/201tutorial/wp-content/uploads/2017/10/settings.png"/>Settings
					</li>
				</a>
			</ul>
		</div>
		<!-- MENU END -->
<?php
$date1 = strtotime('<?php echo the_time("Y F j g:i"); ?>');
$date2 = strtotime(date('Y-m-d H:i'));
$seconds_diff = $date2 - $date1;
date_default_timezone_set('Pacific/Auckland');

?>
		
			<!-- SETTINGS BEGIN -->
		<div id="settings">
		 	<!-- SETTINGS CONTENT -->
			<div class="g-65">
			<h1>Settings</h1>
				<div class="g-half">
					<ul class="flex-containercolumn">
						<li onclick="editaccount()"class="settingoptions">Edit Account</li>
						<li onclick="password()" class="settingoptions">Password and Login</li>
						<li onclick="privacy()" class="settingoptions">Privacy</li>
						<li onclick="notifications()" class="settingoptions">Notifications								
							<label class="switch">
								<input type="checkbox">
								<span class="slider"></span>
							</label>
						</li>	  		
					</ul>
				</div>

				<!-- SETTINGS WINDOW -->
				<div id="settingswindow" class="g-half">

					<!-- EDIT ACCOUNT -->
					<div id="editaccount">
						<ul>
							<li>
								<b>User name:</b> Sandra Son <span class="edit"><i>edit</i></span>
							</li>
							<li>
								<b>Profile Image</b> <span class="edit"><i>edit</i></span>
							</li>
							<li>
								<b>Bio</b><span class="edit"><i>edit</i></span>
							</li>
							<li>
								<b>Country:</b> New Zealand <span class="edit"><i>edit</i></span>
							</li>
							<li>
								<b>Social Media Links:</b><br>					
								<i>www.facebook.com/sandrason
								www.twitter.com/sandrason</i></span>
								<span class="edit"><i>edit</i></span>
							</li>
						</ul>
					</div>
					<!-- EDIT ACCOUNT ENDS -->	

					<!-- PASSWORD -->
					<div id="password">
						<ul>
							<li>
								<b>Password:</b> ******* <span class="edit"><i>edit</i></span>
							</li>
							<li>
								<b>Security Questions</b> <span class="edit"><i>edit</i></span>
								<p>What is your mothers maiden name?</p>
								<p>What is the name of your childhood pet?</p>
								<p>What is the name of your first teacher?</p>
							</li>
						</ul>
					</div>
					<!-- PASSWORD ENDS -->

					<!-- PRIVACY -->
					<div id="privacy">
						<ul>
							<li>
								<b>Who can see my uploads?:</b> Everyone <span class="edit"><i>edit</i></span>
							</li>
							<li>
								<b>Who can see my favourited dreams/nightmares?:</b> Everyone<span class="edit"><i>edit</i></span>
							</li>
						</ul>
					</div>
					<!-- PRIVACY ENDS-->

				</div> 
				<!-- SETTINGS WINDOW END -->

			</div>
			<!-- SETTINGS CONTENT END -->

		</div>	
		<!-- SETTINGS END -->

	</div>		
	<!-- MAIN CENTER CONTENT ENDS -->

</div>
<!-- MAIN PAGE ENDS-->

<?php get_footer(); ?>

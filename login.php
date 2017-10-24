<!--    /** 
   Template Name: Login 
   */ --> 

   <?php get_header(); ?>
   <div class="page-wrap">	
   <div id="login-container" class="login">
				<form onsubmit="profile.php">
					<div class="imgcontainer">
						<img src="http://localhost/201tutorial/wp-content/uploads/2017/10/profiledark.png" alt="Avatar" class="avatar">
					</div>
					<label><b>Username</b><label>
					<input type="text" placeholder="Username" name="username">

					<label><b>Password</b></label>
					<input type="password" placeholder="Password" name="password">
				</form>
					<a href="profile.html"><div id="loginbutton">Login</div></a>
					<input type="checkbox" checked="checked"> Remember me
					<a href="#signup-box" onclick="signup()" class="signup">Sign Up</a>
			</div>

			<div id="signup-container" class="login">
				<h2>Sign Up</h2>
				<form >
					<label><b>First Name</b><label>
					<input type="text" placeholder="First Name" name="firstname">

					<label><b>Last Name</b></label>
					<input type="text" placeholder="Last Name" name="lastname">

					<label><b>Email</b><label>
					<input type="text" placeholder="E-mail" name="mail">

					<label><b>Username</b></label>
					<input type="text" placeholder="Username" name="username">
					<label><b>Password</b><label>
					<input type="password" placeholder="Password" name="password" >
				</form>
				<a href="profile.html"><button>Sign Up</button></a>
			</div>
		</div>	
   <?php get_footer(); ?>
<!--    /** 
   Template Name: Upload
   */ --> 
<?php get_header(); ?>

			<div class="page-wrap">
				<div class="center">
					<div class="upload">
						<div id="clickupload">
							<p>Click to browse your files.</p>
						</div>
					</div>
					<form id="uploadform">
						<input type="text" placeholder="Title">
						<input type="text" placeholder="Description">
						<select name="catagory" placeholder="Catagory">
							<option value="everyone" disabled selection>Catagory</option>
							<option value="dream">Dream</option>
							<option value="nightmare">Nightmare</option>
						</select>
						<input type="text" placeholder="Genre">
						<select name="privacy">
						
							<option value="everyone" disabled selection>Who can see this upload?</option>
							<option value="everyone">Everyone</option>
							<option value="nightmare">Only people who have the link</option>
							<option value="everyone">No one, this is a private upload</option>
						</select>
						<input type="text" placeholder="Tags  eg. Skiiing, Extreme, Sports, Snow">
						<button>Upload</button>

					</form>
					</div>
				</div>	


   <?php get_footer(); ?>
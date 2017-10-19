<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
		<title>project_2</title>
		<link rel="stylesheet" type="text/css" href="../css/project2.css">
		<link rel="stylesheet" type="text/css" href="../css/reset.css">
		<link rel="shortcut icon" href="../img/icon.jpg"/>
	</head>
	<body>
<!--The image header section/register
<frameset cols="*,*" frameborder="30" border="5" framespacing="70">
	  <frame src="img_trans.gif" name="leftFrame" id="leftFrame" title="leftFrame" />
	  <frame src="logo-2.png" name="mainFrame" id="mainFrame" title="mainFrame" />
</frameset>
-->
		<div class="the_header">
			<img src="../img/teamlogo.jpg" alt="header_small_image" height="55" width="70">
			<div class="login_user">
				<label for="userName">Username:</label>
				<input type="text" name="userName" placeholder="Username" required>
				<label for="passWord">Password:</label>
				<input type="text" name="passWord" placeholder="Password" required>
				<button id="btn" value="user_login">Log in</button> <br/>
				select color: <input type="color" name="">
			</div>
		</div>

<!--The sidebar navigation section-->
		<div class="container">
			<div class="container-page">
		<!--The navigation section-->
				<div class="sidebar">
					<nav>
						<ul>
							<li><a href="Project1.php">HOME</a></li>
							<li id="active"><a href="project2.php?id=77&name=Gabriel&value=omega">JOBS</a></li>
							<li><a href="project3.php">CAREER PATH</a></li>
							<li><a href="project4.php">PROJECTS </a></li>
							<li><a href="project5.php">LOCATE US</a></li>
						</ul>
					</nav>
				</div>
<!-- To Validate the form input using JS before it is sent to the server-->
	<script type="text/javascript">
		function validateForm() {
			var conditionAnswer = document.forms["form1"]["FirstName","LastName","email","department","phone","file","birth_year","gender","institution","degree","course","nysc","state","employment_status"].value;
			for (var i = 0; i < conditionAnswer.length; i++) {
				
				if(conditionAnswer[i] == ""){
					alert('input must be filled');
					return false;
				}
				else{return true;}
			}
		}
	</script>
			<!--The forms section-->
			<div class="form_container">
				<div class="first_form">
					<h2>Apply for this Job</h2>  
					<form method="post" action="processing.php" title="php_form" name="form1" onsubmit="return validateForm()">
							<label for="FirstName" id="label">First Name </label>
							<input type="text" name="FirstName"><br/>
							<label for="LastName" id="label">Last Name</label>
							<input type="text" name="LastName"><br/>
							<label for="email" id="label">Email </label>
							<input type="email" name="email"><br/>
							<label for="department" id="label">Choose Department</label>
							<select name="department">
								<option>Select</option><option>Design</option><option>Programming</option><option>ICT</option><option>Technical</option><option>Marketting</option><option>Engineering</option><option>Research/Practical</option>
							</select><br/>
							<label for="phone" id="label">Phone Number</label>
							<input type="text" name="phone"><br/>
							<label id="label">Resume/CV</label>
							<input type="file" name="file" value="Attach">
							
								<ul>
									<li>Cover Letter								
										<ul>
											<li><a href="#">Attach</a></li>
											<li><a href="#">Dropbox</a></li>
											<li><a href="#">Google Drive</a></li>
											<li><a href="#">Paste</a></li>
										</ul>
									</li>
								<nav>
				
							<label for="gender">What is your gender? <mark>*</mark> </label>
							<select name="gender">
								<option>Please Select</option><option>Male</option><option>Female</option>
							</select><br/>
							<label for="age">What year where you born? <mark>*</mark></label>
							<select name="birth_year">
								<script type="text/javascript">
									var tDate = new Date();
									var tYear = tDate.getFullYear();
									for (var i = 1970; i< tYear; i++) {
										document.write('<option value= '+i+'>'+i+'</option>');
									}						
								</script>
							</select><br/>
							<label for="education">Last Educational Institution Attended <mark>*</mark></label>
							<select name="institution">
								<option>Please Select</option>
								<option>Federal Unversity of Technology, Akure</option>
								<option>Federal University of Technology, Owerri</option>
								<option>Federal University of Technology, Minna</option>
								<option>Others</option>
							</select><br/>
							If other, please tell us the educational institution you attended<br/>
							<input type="text" name="texts" placeholder="other institution attended"> <br/>
							<label for="degree">What is the highest level of educational institution you have attended? <mark>*</mark> </label><br/>
							<select name="degree">
								<option>Please Select</option>
								<option>Secondary School Certificate</option>
								<option>Technical Institute</option>
								<option>OND</option><option>HND</option><option>Bachelor's Degree</option>
								<option>Master's Degree</option>
								<option>Other Profeesional Degree</option>
								<option>Others</option>
							</select><br/>
							If other, please tell us the highest level of educational institution you attended <br/><input type="text" name="text"><br/>
							<label for="course">What was your course of study? (If applicable) </label>
							<select name="course">
								<option>Please Select</option><option>Mathematics/Statistics</option><option>Economics</option><option>Physics</option>
								<option>Accounting</option><option>Computer science</option><option>Software Engineering</option><option>Electrical Engineering</option><option>Mechanical Engineering</option>
								<option>Chemistry/chemical Engineering</option><option>Management Information Systems</option>
							</select><br/>
							If other, what was your course of study<br/> <input type="text" name="text"><br/>
							<label>If you graduated from a tertiary institution, what year did you graduate?</label>
							<select>
								<script type="text/javascript">
									for (var i = 1900; i <=tDate; i++) {
										document.write('<option '+i+'>'+i+'</option>');
									}
								</script>
							</select><br/>
							<label>Have you completed the NYSC <mark>*</mark></label>
							<select name="nysc">
								<option>Please Select</option><option>Yes</option><option>No</option>
							</select><br/>
							<label>Which West African Country do you reside in? <mark>*</mark></label>
							<select name="state">
								<option>Please Select</option><option>Angola</option><option>Ghana</option><option>Nigeria</option>
							</select><br/>
							If other, which Country do you reside in? <br/><input type="text" name="text"><br/>
							<label>If you live in Nigeria, what state do you reside in? </label>
							<select>
								<option>Please select</option><option>Abia</option><option>Kaduna</option><option>Lagos</option><option>Akure</option>
							</select><br/>
							<label>Are you currently employed? <mark>*</mark> </label>
							<select name="employment_status">
								<option>Please Select</option><option>Yes</option><option>No</option>
							</select><br/>
							<p>If so, please describe your current employment situation.</p> 
							<textarea></textarea><br/>
							<label>Have you applied for this Job before? <mark>*</mark></label>
							<select>
								<option>Please Select</option><option>Yes</option><option>No</option>
							</select><br/>
							<label>Do you have a Linkedin profile? Enter URL </label>
							<input type="text" name="text">
							<input type="submit" name="Submit">
					</form>
				</div>
			</div>
		<!--Third Form Section-->
			<div class="second_form">
					<aside>
							<span>Select a service</span>
								<ul>
									<li><a href="#">some amazing service</a></li>
									<li><a href="#">And another one</a></li>
									<li><a href="#">A service no one else offers</a></li>
									<li><a href="#">some amazing service</a></li>
									<li><a href="#">And another one</a></li>
									<li><a href="#">A service no one else offers</a></li>
								</ul>
							<table border="2" cellpadding="5" cellspacing="5" class="tablebody">
								<tr><th colspan="3"> 
									Please rate our services
								</th></tr><!--"colspan" enables the word 'Please rate our services' to be the main header over 
								3 columns. Use rowspan if u want to make a caption over specific number of rows in a table-->
									<th>Rank</th>
									<th>Achievements</th>
									<thead></thead>
									<tr>
										<td>1</td>
										<td>Best in Html5 e-learning site</td>
										<td><input type="checkbox" name="checkbox"></td>
									</tr>
									<tr>
										<td>2</td>
										<td>Best in Javascript e-learning site</td>
										<td><input type="checkbox" name="checkbox"></td>
									</tr>
									<tr>
										<td>3</td>
										<td>Best in PHP e-learning site</td>
										<td><input type="checkbox" name="checkbox"></td>
									</tr>
							</table>
							<input type="Submit" name="ratings" value="Send" >
					</aside>
			</div>
		</div>
		
	<!--The footpage section-->
		<div class="foot-page">
			<footer>
				<section id="first">
					<p>About <em>Drugspool.org</em></p>
					<p>Drugspool is part of Media24; and member of the Naspers group.</p>
					<p>Known as one of the leading job portals in Nigeria, Drugspool brings<br/> two groups of people together - the job seeker and the recruiter.<br/> We provide job seekers with thousands of vacancies that are posted<br/> by hundreds of registered recruiters and employers. For top jobs<br/> and top candidates - join Drugspool.com now. &#169 All rights reserved.<br/> <a href="#">Terms &#38 Conditions</a></p>
				</section>
				<section id="second">
					<p>Company</p>
					<p>Contact Us</p>
					<p>Advertise with Us</p>
				</section>
				<section id="third">
					<p>Quick links</p>
					<p>FAQ</p><p>Mobile</p><p>Recruiter's Directory</p><p>Safe job searching</p><p>Site Map</p>
					<p>Testimonials</p><p>Widgets</p><p>Media24 Privacy Policy</p>
   				</section>
   				<section id="fourth">
   					<select>
   						<option></option>
   						<option><img src="../img/Nig.png" alt="Nig_logo" height="50" width="50">Nigeria</option>
   						<option><img src="../img/cisco.jpg" alt="cisco_logo" height="50" width="50">Cisco</option>
   						<option><img src="../img/california.gif" alt="california_logo" height="50" width="50">Carlifornia</option>
   					</select>
   					<h2>Follow us</h2>
   					<img src="../img/facebook.png" alt="" height="20" width="20">
   					<img src="../img/twitter.png" alt="" height="20" width="20">
   					<img src="../img/email.png" alt="" height="20" width="20">
   					<img src="../img/linkedin.png" alt="" height="20" width="20">
   					<img src="../img/fone.png" alt="" height="20" width="20">
   				</section>
   				<div class="fifth">
   					<p>Copyright © 2017 Jobgurus Services,<br/> all right reserved.</p>
   					<ol>
   						<li><a href="#">Privacy Policy </a></li>
   						<li><a href="#">Terms & Conditions</a></li>
   						<li><a href="#">Sitemap </a></li>
   						<li><a href="#">About us</a></li>
   					</ol>
   				</div>
			</footer>
		</div>
		
	</body>
</html>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml11/DTD/xhtml-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>Virtual Physics eLab</title>
		<meta name="description" content="Harware Shop where everybody can find what he needs for his house." />
		<meta name="keywords" content="my-hardwareshop, hardware, shop, building, equipment, home, house, online, order" />
		<meta name="author" content="My-HardwareShop" />
		<link rel="stylesheet" href="css/index.css" type="text/css" media="screen" />
		<link rel="stylesheet" type="text/css" href="css/style1.css" />
		<link rel="stylesheet" type="text/css" href="css/style2.css" />
		<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<script src="js/jquery-1.7.1.min.js"></script>
		<script src="js/jquery-signup.js"></script>
	</head>
	<body>
		<div id="site_header">
			<p class="site_banner">PKFokam Virtual Physics eLab</p>
			<p class="site_sub_banner">Our online platform for Physics Lab</p>
			<img id="logo" src="img/pkf_logo.png" alt="image not found"/>
		</div>
		<div id="main_container">
			<ul class="cb-slideshow">
				<li><span>Image 01</span></li>
				<li><span>Image 02</span></li>
				<li><span>Image 03</span></li>
				<li><span>Image 04</span></li>
				<li><span>Image 05</span></li>
				<li><span>Image 06</span></li>
			</ul>
			<div id="sign_up_box">
				<section class="af-wrapper">
					<h3>Student Form</h3>
					
					<input id="af-showreq" class="af-show-input" type="checkbox" name="showreq" />
					<label for="af-showreq" class="af-show">Enhance required fields</label>
					
					<form class="af-form" id="af-form" >
						
						<div class="af-outer af-required">
							<div class="af-inner">
								<label for="input-reg">Registration Number</label>
								<input type="text" name="reg_num" id="input-reg" required>
							</div>
						</div>
					
						<div class="af-outer af-required">
							<div class="af-inner">
								<label for="input-name">Name</label>
								<input type="text" name="name" id="input-name" required>
							</div>
						</div>
						
						<div class="af-outer af-required">
							<div class="af-inner">
								<label for="input-name">Surname</label>
								<input type="text" name="surname" id="input-surname" required>
							</div>
						</div>
						
						<div class="af-outer af-required">
							<div class="af-inner">
							  <label for="input-email">Email address</label>
							  <input type="email" name="email_address" id="input-email" required>
							</div>
						</div>
						
						<div class="af-outer af-required">
							<div class="af-inner">
							  <label for="input-passwrd">Password</label>
							  <input type="password" name="passwrd" id="input-passwrd" required>
							</div>
						</div>
						
						<div class="af-outer af-required">
							<div class="af-inner">
							  <label for="input-passwrd2">Confirm Password</label>
							  <input type="password" name="passwrd2" id="input-passwrd2" required>
							</div>
						</div>
						
						<div class="af-outer af-required">
							<div class="af-inner">
							  <label for="input-phone">Phone Number</label>
							  <input type="text" name="phone" id="input-phone" placeholder="XX-XX-XX-XX" required>
							</div>
						</div>
						
						<div class="af-outer">
							<div class="af-inner">
							  <label for="input-country">Address</label>
							  <input type="text" name="address" id="input-address" >
							</div>
						</div>
						
						<div class="af-outer af-required">
							<div class="af-inner">
							  <label for="input-country">Field of study</label>
							  <select name="field" id="input-field" >
								<option value="1">Computer Science</option>
								<option value="2">Information Technology</option>
								<option value="5">Economics</option>
								<option value="3">Electrical Engineering</option>
								<option value="4">Telecommunication Eng</option>
							  </select>
							</div>
						</div>
						
						<div class="af-outer af-required">
							<div class="af-inner">
							  <label for="input-country">Level</label>
							  <select name="level" id="input-level" >
								<option value="1">Sophomore</option>
								<option value="2">Junior</option>
							  </select>
							</div>
						</div>
						
						<div class="af-outer af-required">
							<div class="af-inner">
							  <label for="input-country">Apply for</label>
							  <select name="course" id="input-course" >
								<option value="1">PHYS 2211L</option>
								<option value="2">PHYS 2212L</option>
								<option value="3">PHYS 1111L</option>
								<option value="4">PHYS 1112L</option>
							  </select>
							</div>
						</div>
						
						<input type="submit" value="Send it over!" /> 
						
					</form>
				</section>
			</div>
		</div>
	</body>
</html>
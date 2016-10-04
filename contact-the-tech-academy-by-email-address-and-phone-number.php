<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<meta name="description" content="">
		<meta name="author" content="">
		<title>Contact The Tech Academy by Email Address and Phone Number</title>
		
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
			
			ga('create', 'UA-78792118-1', 'auto');
			ga('send', 'pageview');
			
		</script>
		
		<!--  Font Awesome  -->
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">
		
		<!--  Google Font  -->
		<link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet" type="text/css">
		<!-- Bootstrap core CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		
		<!--Bootstrap Datetime Picker CSS -->
		<link href="css/bootstrap-datetimepicker.css" rel="stylesheet">
		<!-- Custom CSS -->
		<link href="css/style.css" rel="stylesheet">
	</head>
	<body class="text-center">
		<div class="masthead">
            <?php include("testing---header.php");?>
		</div>
		
		<p/>
		<!-- Start Tiles -->
		<div>
			<div class="row">
				<div class="col-lg-7" id="contactForm">
					<br/><p/>
					<p class="contactUs">CONTACT US!</p>
					
					<form method="POST" action="http://plus.allforms.mailjol.net/u/b1749119.php">
						<div class="questions form-group">
							<div id="required"><p>* = required field</p></div>
						</div>
						<div class="questions form-group">
							<div id="selectBox">
								<input id="Name" type="text" name="Name" placeholder=" ENTER YOUR NAME *" class="sixty" required />
							</div>
						</div>
						<div class="questions form-group">
							<div id="selectBox">
								<input id="Email" type="text" name="Email" placeholder="    ENTER YOUR EMAIL you@yourdomain.com *" class="sixty" required />
							</div>
						</div>
						<div class="questions form-group">
							<div id="selectBox">
								<input id="Phone" type="text" name="Phone" placeholder=" ENTER YOUR PHONE NUMBER *" class="sixty" required />
							</div>
						</div>
						
						<div class="questions form-group">
							<select id="studyDropDown" name="studyDropDown" required>
								<option value="default"disabled selected hidden>HOW WILL YOU STUDY THE PROGRAM? *</option>
								<option value="online">ONLINE STUDY (REMOTE, FROM HOME, INTERNATIONAL)</option>
								<option value="in_person">IN-PERSON STUDY (STUDY AT OUR SCHOOL IN PORTLAND)</option>
								<option value="not_studying">I AM NOT CONTACTING YOU TO STUDY THE PROGRAM</option>
							</select>
						</div>
						<div class="questions form-group">
							<div id="selectBox" class="questions">
								<textarea id="Message" name="Message" placeholder=" ENTER YOUR MESSAGE" class="MessagePopUp"></textarea>
							</div>
						</div>
						<div class="questions form-group">
							<select id="hearDropDown" name="hearDropDown" required>
								<option value="default" disabled selected hidden>HOW DID YOU HEAR ABOUT US? *</option>
								<option value="radio">RADIO</option>
								<option value="online_search">ONLINE SEARCH</option>
								<option value="google">GOOGLE</option>
								<option value="friend">FRIEND</option>
								<option value="student">STUDENT</option>
								<option value="graduate">GRADUATE</option>
								<option value="course_report">COURSE REPORT</option>
								<option value="switchup">SWITCHUP</option>
								<option value="bootcamps.in">BOOTCAMPS.IN</option>
								<option value="other">OTHER</option>
							</select>
						</div>
						<div class="questions form-group">
							<div id="selectBox">
								<input id="otherchoice" type="text" name="otherchoice" placeholder="HOW DID YOU HEAR ABOUT US?" class="sixty" />
							</div>
						</div>
						<div class="text-center">
							<button type="submit" id="submitButton" class="btn btn-default">SUBMIT</button>
							<p></p><br/>
						</div>
					</form>
				</div>
				
				
				<!-- Contact Info -->
				<div class="col-lg-5 newTiledInfoBlack" id="contactInfo">
					<i class="fa fa-envelope fa-3x slideanim"></i>
					<a href="mailto:info@learncodinganywhere.com"><p>info@learncodinganywhere.com</p></a>
					<i class="fa fa-phone fa-3x slideanim"></i>
					<a href="tel:5032066915">503.206.6915</a>
					<div class="clickForContactForm">
						<i class="fa fa-building fa-3x slideanim"></i><br />
						<p>310 SW 4th Ave Suite 412<br />Portland, OR 97204</p>
					</div>
					<br>
					<div class="clickForContactForm">
						<p class="bottom">
							Are you in Portland?<br />
							Come in for a tour!<br />
							<em>
								(Fourth floor of the Board of Trade building)
							</em>
						</p><br/>
					</div>
				</div>
			</div>
		</div>
		<!--  Site footer  -->
		<footer class="footer">
			<?php include("testing---footer.php");?>
				</footer>		
				
		<div id="myModalPopUp" class="modal fade" role="dialog"> <!-- modal dialog box -->
			<div class="modal-dialog">
				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h3 class="modal-title">Hi there!</h3>
					</div>
					<div class="modal-body">
						<p>Would you like to learn more about The Tech Academy?</p>
					</div>
					<div class="modal-footer">
						<a class="btn modal-button-yes" id="yes-modal-btn">Yes</a>
						<a class="btn" data-dismiss="modal">No</a>
					</div>
				</div>
			</div>
		</div>
		
			<!-- Start Alexa Certify Javascript -->
			<script type="text/javascript">
				_atrk_opts = { atrk_acct:"jT90m1a8FRh2cN", domain:"learncodinganywhere.com",dynamic: true};
				(function() { var as = document.createElement('script'); as.type = 'text/javascript'; as.async = true; as.src = "https://d31qbv1cthcecs.cloudfront.net/atrk.js"; var s = document.getElementsByTagName('script')[0];s.parentNode.insertBefore(as, s); })();
			</script>
			<noscript><img src="https://d5nxst8fruw4z.cloudfront.net/atrk.gif?account=jT90m1a8FRh2cN" class="noscript" height="1" width="1" alt="" /></noscript>
			<!-- End Alexa Certify Javascript -->
			<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
			<script src="js/bootstrap.min.js"></script>
			<script src="js/npm.js"></script>
			<script src="js/bootstrap-datetimepicker.min.js"></script>
			<script src="js/contact.js" type="text/javascript">
			</script>
			<script src="js/testimonials.js" type="text/javascript">
			</script>
			<script src="js/main.js" type="text/javascript"></script>
		</body>
	</html>

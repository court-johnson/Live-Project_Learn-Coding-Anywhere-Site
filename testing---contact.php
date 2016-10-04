			<!-- modal dialog box -->
			<div class="modal-dialog">
				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-body-contact" id="contactForm">
						<a class="btn" id="closeBtn" data-dismiss="modal"><i class="fa fa-close" id="closeBtnX"></i></a>
						<p class="contactUs">CONTACT US!</p>
						<form method="POST" action="http://plus.allforms.mailjol.net/u/b1749119.php">
							<div class="questions form-group">
								<div id="required"><p>* = required field</p></div>
							</div>
							<div class="questions form-group">
								<div id="selectBox">
									<input id="Name" type="text" name="Name" placeholder="ENTER YOUR NAME *" class="sixty" required />
								</div>
							</div>
							<div class="questions form-group">
								<div id="selectBox">
									<input id="Email" type="text" name="Email" placeholder=" ENTER YOUR EMAIL you@yourdomain.com *" class="sixty" required />
								</div>
							</div>
							<div class="questions form-group">
								<div id="selectBox">
									<input id="Phone" type="text" name="Phone" placeholder="ENTER YOUR PHONE NUMBER *" class="sixty" required />
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
									<textarea id="Message" name="Message" placeholder="ENTER YOUR MESSAGE" class="MessagePopUp"></textarea>
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
							<div class="text-center">
								<button type="submit" id="submitButton" class="btn btn-default">SUBMIT</button>
								<p></p>
							</div>
						</form>
					</div>
				</div>
			</div>
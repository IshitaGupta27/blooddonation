<?php 

	//include header file
	include ('include/header.php');

?>


<div class="container-fluid header-img">
				<div class="row">
					<div class="col-md-6 offset-md-3">

						<div class="header">
							<h1 class="text-center">DONATE SMILES BY DONATING BLOOD</h1>
						<p class="text-center">Donate your blood to help others</p>
						</div>


						<h1 class="text-center">Search Donors</h1>
						<hr class="white-bar text-center">

						<form action="search.php" method="get" class="form-inline text-center" style="padding: 40px 0px 0px 5px;">
							<div class="form-group text-center justify-content-center">
							
								<select style="width: 220px; height: 45px;" name="city" id="city" class="form-control demo-default" required>
	<option value="">-- Select --</option><option value="AndhraPradesh" >Andhra Pradesh</option><option value="ArunachalPradesh" >Arunachal Pradesh</option><option value="Assam" >Assam</option><option value="Bihar" >Bihar</option><option value="Chhattisgarh" >Chhattisgarh</option><option value="Goa" >Goa</option><option value="Gujarat" >Gujarat</option><option value="Haryana" >Haryana</option><option value="HimachalPradesh" >Himachal Pradesh</option><option value="Jharkhand" >Jharkhand</option><option value="Karnataka" >Karnataka</option><option value="Kerala" >Kerala</option><option value="MadhyaPradesh" >Madhya Pradesh</option><option value="Maharashtra" >Maharashtra</option><option value="Manipur" >Manipur</option><option value="Meghalaya" >Meghalaya</option><option value="Mizoram" >Mizoram</option><option value="Nagaland" >Nagaland</option><option value="Orissa" >Orissa</option><option value="Punjab" >Punjab</option><option value="Rajasthan" >Rajasthan</option><option value="Sikkim" >Sikkim</option><option value="TamilNadu" >Tamil Nadu</option><option value="Telangana" >Telangana</option><option value="Tripura" >Tripura</option><option value="UttarPradesh" >Uttar Pradesh</option><option value="Uttarakhand" >Uttarakhand</option><option value="WestBengal" >West Bengal</option><option value="Andaman&Nicobar" >Andaman and Nicobar Islands</option><option value="Chandigarh" >Chandigarh</option><option value="Dadra" >Dadra and Nagar Haveli</option><option value="Daman" >Daman and Diu</option><option value="Delhi" >Delhi</option><option value="Jammu" >Jammu and Kashmir</option><option value="Ladakh" >Ladakh</option><option value="Lakshwadeep" >Lakshwadeep</option><option value="Puducherry" >Puducherry</option></select>
							</div>
							<div class="form-group center-aligned">
								<select name="blood_group" id="blood_group" style="padding: 0 20px; width: 220px; height: 45px;" class="form-control demo-default text-center margin10px">
									
									<option value="A+">A+</option>
									<option value="A-">A-</option>
									<option value="B+">B+</option>
									<option value="B-">B-</option>
									<option value="AB+">AB+</option>
									<option value="AB-">AB-</option>
									<option value="O+">O+</option>
									<option value="O-">O-</option>

								</select>
							</div>
							<div class="form-group center-aligned">
								<button type="submit" class="btn btn-lg btn-danger">Search</button>
							</div>
						</form>
					</div>
				</div>
			</div>
			<!-- header ends -->

			<!-- donate section -->
			<div class="container-fluid red-background">
				<div class="row">
					<div class="col-md-12">
						<h1 class="text-center"  style="color: white; font-weight: 700;padding: 10px 0 0 0;">THE GIFT OF BLOOD IS THE GIFT OF LIFE</h1>
						<hr class="white-bar">
						<p class="text-center pera-text">
							Our nation requires 4 crore units of blood while only 40 lakhs units are available. Every two seconds someone needs blood. There is no substitute for human blood. It cannot be manufactured. Blood donation is an extremely noble deed, yet there is a scarcity of regular blood donors across India. We focus on creating & expanding a virtual army of blood donating volunteers who could be searched and contacted by famiy of the patient in times of need.
						</p>
						<a href="donate.php" class="btn btn-default btn-lg text-center center-aligned">Become a Life Saver!</a>
					</div>
				</div>
			</div>
			<!-- end doante section -->
			

			<div class="container">
				<div class="row">
    				<div class="col">
    					<div class="card">
     						<h3 class="text-center red">Our Vision</h3>
								<img src="img/binoculars.png" alt="Our Vission" class="img img-responsive" width="168" height="168">
								<p class="text-center">
								To pave way for a safer and better tomorrow by bringing blood donors and those in need to a common platform.
								</p>
						</div>
    				</div>
    				
    				<div class="col">
    					<div class="card">
      							<h3 class="text-center red">Our Goal</h3>
								<img src="img/target.png" alt="Our Vission" class="img img-responsive" width="168" height="168">
								<p class="text-center">
								To increase our active donor base and satisfy the blood needs of as many people as possible.
								</p>
						</div>
    				</div>
    			
    				<div class="col">
    					<div class="card">
      						<h3 class="text-center red">Our Mission</h3>
								<img src="img/goal.png" alt="Our Vission" class="img img-responsive" width="168" height="168">
								<p class="text-center">
								To enhance the well being of patients in our service area by assuring a reliable supply of the safest possible blood.
								</p>
							</div>
   			 		</div>
 			</div>
 		</div>

			<!-- end aboutus section -->


<?php
//include footer file
include ('include/footer.php');
 ?>

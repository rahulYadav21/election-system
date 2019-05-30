<?php include("../election/pages/connection.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Online Election</title>
	<link rel="stylesheet" type="text/css" href="css/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/css/animate.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/jquery-3.4.1.js"></script>

	<style type="text/css">
		@font-face {
			  font-family: 'OpenSans-Light';
			  src:  url('css/Open-Sans/OpenSans-Light.ttf');
			}
		body{
			font-family: OpenSans-Light;
		}
	</style>
<?php 
  $q="select *from sstatus";

  $res=$conn->query($q);
    $row=$res->fetch_assoc();

      
?>
	 <script type="text/javascript">
        function tongleClass11() {
            
            
              if((<?php echo $row['sts'];?>)==0)
       {
          $("#sin").css("color", "red");
          $('#sin').off('click');
}
       else{
       	$("#sin").css("color", "blue");
       }
        
       } 
        window.addEventListener('load',tongleClass11);
        function fun(){
        	 if((<?php echo $row['sts'];?>)==0){

        	 	alert('sighnup is not available');
        	 	return false;
        	 }
        	 else
        	 	return true;
        }
    </script>
</head>
<body>
	<div class="wraper">

		<div class="header_bar">
		<div class="row">
			<div class="col-12 col-lg-12 col-md-12 col-sm-12 cols">
				<img class="logo" src="img/logo2.png">
			</div>
		</div>
    <nav class="navbar navbar-default navigation-clean navigation">
        <div class="container">
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav navbar-right">
                    <li role="presentation"><a href="index.php">Home</a></li>
                    <li role="presentation"><a href="#about">About</a></li>
										<li role="presentation"><a href="#contactus">Contact Us</a></li>
										<li role="presentation"><a href="pages/result.php">Election-Result</a></li>
                    <li role="presentation"><a href="pages/admin/admin.php">Admin</a></li>
                </ul>
        	</div>
		</div>
	</nav>
	</div>
	<div class="jumbotron midd">
                  <div class="col-12 col-md-12 col-lg-12 col-sm-12 cols voterbox">
                  <form action="pages/code/user_login_code.php" method="post" class="text-center border border-light p-5 forn">

					    <h2>For Voter</h2><hr>

					    <!-- Email -->
					    <input type="text" name="enrollment_no" id="defaultLoginFormEmail" class="form-control mb-4" placeholder="Enrollment No."><br/>

					    <!-- Password -->
					    <input type="password" id="defaultLoginFormPassword" name="password" class="form-control mb-4" placeholder="mobile number"><br/>

					    <!-- Sign in button -->
					    <button class="btn btn-info btn-block my-4" type="submit">Sign in</button><br/>

					    <!-- Register -->
					    <p>New Voter ?
					        <a href="pages/register.php" class="signup" id="sin" onclick="return fun()">Register</a>
					    </p>

					</form>
                  </div>
              </div>
              <div id="about">
              	<div class="jumbotron aboutjumbo">
              		<center><h1>About Us</h1></center><br/>
              	</div>
              	
              	<div class="all_About container">
		          	<div class="about_list">
		                  <ul class="list-group">
		                    <li class="list-group-item">Provide the best possible experience for both voters and election managers. Getting voters to vote is challenging so we provide a clean and simple user interface for voters. Online Election is fast and works great on mobile devices.</li>
		                    <li class="list-group-item">Provide top-notch security and reliability. Online Election encrypts voting pages with state-of-the-art encryption for security, runs on Google servers for fast responses, and sends voting emails using Sendgrid to make sure emails land in voter inboxes.</li>
		                    <li class="list-group-item">Maintain voter privacy. Voter emails are used ONLY for your election.</li>
		                    <li class="list-group-item">Be cost effective! Online Election is much less expensive than most other providers even though Online Election provides better services.</li>
		                    <li class="list-group-item">Promote the use of better voting techniques. Online Election specializes in ranked voting because ranked voting provides better outcomes than check-the-box voting.</li>
		                    <li class="list-group-item">Online Election System would have Candidate registration, document verification, auto-generated User ID and pass for candidate and Voters. Admin Login which will be handled by Election Commission .</li>
		                    <li class="list-group-item">The project is beneficial for Election Commission, Voters as the can get to know the candidate background and choose wisely, and even for Candidate.</li>
		                    <li class="list-group-item">That system allows the Candidate to login in to their profiles and upload all their details including their previous milestone onto the system.
</li>
		                    <li class="list-group-item">The admin can check each Candidate details and verify the documents, only after verifying Candidate’s ID and Password will be generated, and can remove faulty accounts.</li>
		                    <li class="list-group-item">Online Election System is a voting system by which any voter can use his/her voting rights from anywhere in the country.
</li>
		                    <li class="list-group-item">Voters can cast their votes from anywhere in the country without visiting to voting booths, in highly secured way.
</li>
		                    <li class="list-group-item"><b>Speed:</b> Hand counting votes is time consuming especially in most populated countries like India, where many candidates are for same position and voter has to cast vote for many races. 
</li>
		                    <li class="list-group-item"><b>Transparency:</b> Chances of manipulation of the results from influencing authorities will almost be finished.
</li>
		                  </ul>
		              </div>
		          </div>
              </div>

              <div id="contactus">
              	<div class="jumbotron contactjumbo">
              		<center><h1>Contact Us</h1></center><br/>	
              	</div>
              	<div class="container contact">
              		<div class="col-md-6 col-lg-6 col-sm-6 colss">
              			<h3>Your Message for Us</h3>
              			<hr>
              			<form action="pages/code/contact_code.php" method="post" class="form-horizontal">
							<div class="form-group">
							<label for="name" class="col-xs-3 control-label">Your Name</label>
							<div class="col-xs-9">
							<input type="text" class="form-control" id="name" name="name" placeholder="Your Name">
							</div>
							</div>
							<div class="form-group">
							<label for="email" class="col-xs-3 control-label">Your Email</label>
							<div class="col-xs-9">
							<input type="email" class="form-control" id="email" name="email" placeholder="Email">
							</div>
							</div>
							<div class="form-group">
							  <label for="Textarea" class="col-xs-3 control-label">Your Message</label>
							  <div class="col-xs-9">
							  <textarea class="form-control textarea" id="Textarea" rows="3" cols="40" name="message" placeholder="What do you want to say with us....."></textarea>
							</div>
							</div>
							<div class="form-group">
							<div class="col-xs-offset-3 col-xs-9">
							<button type="submit" class="btn btn-success">Send Us <span class="glyphicon glyphicon-send"></span></button>
							</div>
							</div>
						</form>
              		</div>
              		<div class="col-md-6 col-lg-6 col-sm-6 colsss">
              			<center><address>
							<b><span class="glyphicon glyphicon-user"></span> Created By:</b> Sadhana Singh, Chote Lal Gupta, Sant Baksh.<br><br>
							<b><span class="glyphicon glyphicon-map-marker"></span> Visit us at:</b> Govt. Polytechnic Adampur, Tarabganj, Gonda.<br><br>
							<b><span class=" glyphicon glyphicon-globe "></span> Web Link: </b><a>www.Onlineelection.com</a><br><br>
							<b><span class="glyphicon glyphicon-envelope"></span> Email:</b> <a>onlineelection@gmail.com</a><br><br>
							<span class="glyphicon glyphicon-phone-alt"></span> : +91-987654321, 1800-9090-90909<br>
							<span class="glyphicon glyphicon-home"></span> : Utter Pradesh, Gonda.
						</address></center>
              		</div>
              	</div>

              </div>
              	<div class="footer">
              		<div class="col-12 col-lg-12 col-md-12 col-sm-12">
              			<center>Onlineelection &copy; Copyright 2019</center>
              		</div>
              	</div>
	</div>
</body>
</html>
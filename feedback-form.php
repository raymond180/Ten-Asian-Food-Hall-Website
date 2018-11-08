<!doctype html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel="stylesheet" href="./styles/styles.css">
		<link rel="stylesheet" href="./styles/feedback.css">
		<title>Feedback Form</title>
	</head>
	<body>
	<!-- Navbar Start --><?php require_once'navbar.php'; ?><!-- Navbar End -->
		
        <!-- Main Content Start -->
        <main role="main">
        <!-- Carousel Start --><?php require_once'carousel.php'; ?><!-- Carousel End -->
		
		<!-- Content Start -->
		<div class="container">
            <div class="col-md-12 pt-4 text-center">
			     <h2>THANKS FOR VISTINING TEN ASIAN FOOD HALL</h2>
            </div>	
            <!-- start feedback form with filled in receipt number -->
            <form action="./feedback-submit.php" method="post" class="form-group">
				<fieldset>
					<label for='salesID '> <strong> Sales ID  </strong></label>
					<input type='text' id='salesID ' name='salesID' /> <br />
				</fieldset>
				<!-- how does customer feel  -->
				<fieldset>
					<legend>EXPERIENCE</legend>
					<!-- overall satisfation  -->
					<h5>Based on your experience, please rate your overall satisfaction with your visit</h5>		
						<?php
						// $label - array contains all the lables we need
						$label = array('Highly Dissatisfied','Dissatisfied','Neither Satisfied nor Dissatisfied','Satisfied','Highly Satisfied');
						// loop through creation input and label for overall
						for($i=5;$i>0;$i--){
							echo "<input type ='radio' Name='overall' value= ". $i ." required> &nbsp;";
							echo "<label for='overall'>". $label[$i-1]. "</label> <br />";
						}
						?>

					<!-- Do you want to return -->
					<h5>Based on this visit, how satisified are you with the speed your order was completed?</h5>
						<?php
						// loop through creation input and label for speed
						for($i=5;$i>0;$i--){
							echo "<input type ='radio' Name='speed' value= ". $i ." required> &nbsp;";
							echo "<label for='speed'>". $label[$i-1]. "</label> <br />";
						}
						?>

					<!-- ask customer they like to recommond to their friend  -->
					<h5>How satisfied were you with the accuracy of your order?</h5>
						<?php
						// loop through creation input and label for accuracy
						for($i=5;$i>0;$i--){
							echo "<input type ='radio' Name='accuracy' value= ". $i ." required> &nbsp;";
							echo "<label for='accuracy'>". $label[$i-1]. "</label> <br />";
						}
						?>

						<h5>How satisfied were you with the customer service?</h5>
						<?php
						// loop through creation input and label for service
						for($i=5;$i>0;$i--){
							echo "<input type ='radio' Name='service' value= ". $i ." required> &nbsp;";
							echo "<label for='service'>". $label[$i-1]. "</label> <br />";
						}
						?>
				 
				</fieldset>
				<!-- a common box ask for customer general idea  -->
				<fieldset>
					<legend>CUSTOMER NOTES</legend>
					<h5> If you have some addvice for us to improve our sevice, we are appreciate. (OPTIONAL) </h5>
					<textarea name = 'comment' class="form-control form-control-lg"></textarea>
				</fieldset><br /> <br />
			<!-- submit the feedback form  -->
            <button type='submit' value='Submit Feedback' class = "btn btn-primary"> Submit Feedback </button>
        </form>
        </div>
        </main>>
		<!-- Content End -->
		<hr class="featurette-divider">
        <!-- Footer Start --><?php require_once'footer.php'; ?><!-- Footer End -->
		
		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	</body>
</html>
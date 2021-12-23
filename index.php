<?php 
	include_once 'header.php';
?>

<!----- WARNING!!! THIS WEBSITE USES BOOTSTRAP MAKE SURE TO BE CONNECTED TO THE INTERNET OR IT WILL NOT LOAD CORRECTLY! ----->
<!----- homepage top ----->
<section id="top">
	<div class="container text-center">
		<div class="row">
			<div class="col-md-6">
				<p class="welcome">WELCOME TO ASTON EVENTS</p>
				<p>We hold various events at Aston University and we would encourage you to be involved!</p>
				<a href="events.php">
					<div class="row justify-content-center my-3 px-3">
						<button type="button" class="btn-block btn-white">Browse through events!</button>
					</div>
				</a>
			</div>
			<div class="col-md-6 text-center">
				<img src="images/events.png" style="border-radius:15px;" class="img-fluid">
			</div>
		</div>
	</div>
</section>
<img src="images/waves1.png" class="waves">

<!----- homepage content ----->
<section>
	<p class="content-title text-center"><u>Who are we?</u></p>
	<p class="content text-center">We are part of Aston university to host events as part of extra curriculum for students to get involved with us!</p>
	<p class="content-title text-center"><u>How does it work?</u></p>
	<p class="content text-center">To get started, you will need to browse through the events segment to get an idea of what to expect. Follow through to the <a href="events.php" class="content-link">events</a> page and once you understand and wish to participate you may check out the <a href="schedule.php" class="content-link">schedule</a> page to see which events are upcoming! Keep in mind you must be logged in to have access to the page if you wish to register yourself for getting involved.</p>
</section>


<?php 
	include_once 'footer.php';
?>
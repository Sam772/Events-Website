<?php 
  include_once 'header.php';
?>

<!----- events top ----->
<section id="top">
	<div class="container text-center">
		<div class="row">
			<div class="col-md-6">
				<p class="welcome">WELCOME TO ASTON EVENTS</p>
				<p>Now that you have had a look at the particular types of events you may book an event following this link!</p>
				<a href="schedule.php">
					<div class="row justify-content-center my-3 px-3">
						<button type="button" class="btn-block btn-white">Book an event here!</button>
					</div>
				</a>
			</div>
			<div class="col-md-6 text-center">
				<img src="images/events.png" style="border-radius:15px;" class="img-fluid">
			</div>
		</div>
	</div>
</section>


<!----- events content ----->
<section id="events">
	<div class="overflow-remove">
		<img src="images/waves1.png" class="waves">
		<div class="container">
			<p class="content-title text-center"><u>Event Information</u></p>
			<p class="content text-center">We have three different categories for all of our events which are sport, culture and other. Sport is self explanatory, culture contains events such as art, history and theatre. Other has events such as talks, museum and music. There is information here regarding what kind of things we do in these events but not specific to one as that is in the schedule so it is to be treated as an area for general information if you are confused how it is handled. We hope you will find an event that may interest you.</p>
			<div class="eventimage">
				<img src="images/cricket.png" style="border-radius:15px;" class="img-fluid float-left">
			</div>
			<p class="content-title text-center"><u>Sport</u></p>
			<p class="content text-center">We hold tournaments for our sports like cricket, football and rugby around the uk in the most famous stadiums for you to get into! They are generally matches with equal number of players on either side, make sure to bring the correct attire.</p>
			<br><br><br>
			<div class="eventimage2">
				<img src="images/history.png" style="border-radius:15px;" class="img-fluid float-right">
			</div>
			<p class="content-title text-center"><u>Culture</u></p>
			<p class="content text-center">We have a number of cultures to get involved with such as art, history, theatre! In these we may visit certain places such as art galleries or watch at theatres.</p>
			<br><br><br>
			<div class="eventimage">
				<img src="images/talks.png" style="border-radius:15px;" class="img-fluid float-left">
			</div>
			<br>
			<p class="content-title text-center"><u>Other</u></p>
			<p class="content text-center">If sports and culture aren't in your interest then perhaps you would enjoy our events in the other category ranging from music, talks, museum and much more! The events here can be anything unrelated to culture and sport such as music festivals.</p>
		</div>
	</div>
</section>

<?php
  include_once 'footer.php';
?>
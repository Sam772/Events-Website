<?php
// checks if user is logged in, if not then redirects them to login page
	include_once 'header.php';
	if (!$_SESSION['username']) {
 	header("location: login.php?error=notloggedin");
          exit;
  }
?>
<!---------- profile page ---------->
<section>
	<img src="images/waves1.png" class="waves">
	<div class="container">
		<div class="schedule-card">
			<div class="card-body">
				<div class="booking-title text-center">BOOKINGS</div>
					<div class="row">
						<div class="col-md-4">
							<div class="card-title text-center">
				    		<?php 
    							// database connection
								include_once 'includes/database.inc.php';

        						// displaying bookings onto page
								$userid = $_SESSION['userid'];
   								$stmt = $conn->prepare("SELECT events.eventId, events.eventName, bookings.userId, bookings.eventId 
   												  	FROM events
   												  	INNER JOIN bookings 
   												  	ON events.eventId = bookings.eventId
   												  	WHERE userId='$userid';");
   								$stmt->execute();
   								$resultData = $stmt->get_result();

   								if($resultData->num_rows > 0) {
   							
        						// fetching rows of data
        						echo "<u>Event Name </u><br><br>";
        						while ($row = $resultData->fetch_assoc()){
       	 						echo $row['eventName'] . "<br><br>";
        						}
        						} 		
        					?>
        					</div>
        				</div>
        				<div class="col-md-4">
							<div class="card-title text-center">
							<?php 
    							// database connection
								include_once 'includes/database.inc.php';
	
        						// displaying bookings onto page
								$userid = $_SESSION['userid'];
   								$stmt = $conn->prepare("SELECT events.eventId, events.eventTime, bookings.userId, bookings.eventId 
   												  	FROM events
   												  	INNER JOIN bookings 
   												 	ON events.eventId = bookings.eventId
   												  	WHERE userId='$userid';");
   								$stmt->execute();
   								$resultData = $stmt->get_result();

   								if($resultData->num_rows > 0) {
   							
        						// fetching rows of data
        						echo "<u>Time </u><br><br>";
        						while ($row = $resultData->fetch_assoc()){
       	 						echo $row['eventTime'] . "<br><br>";
        						}
        						}		
        					?>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card-title text-center">
							<?php 
    							// database connection
								include_once 'includes/database.inc.php';
	
        						// displaying bookings onto page
								$userid = $_SESSION['userid'];
   								$stmt = $conn->prepare("SELECT events.eventId, events.eventAddress, bookings.userId, bookings.eventId 
   												  		FROM events
   												  		INNER JOIN bookings 
   												  		ON events.eventId = bookings.eventId
   												  		WHERE userId='$userid';");
   								$stmt->execute();
   								$resultData = $stmt->get_result();

   								if($resultData->num_rows > 0) {
   							
        						// fetching rows of data
        						echo "<u>Address </u><br><br>";
        						while ($row = $resultData->fetch_assoc()){
       	 						echo $row['eventAddress'] . "<br><br>";
        						}
        						}		
        					?>
							</div>
						</div>
    				</div>
    		</div>
		</div>
	</div>
</section>

<section>
	<div class="container">
		<div class="schedule-card">
			<div class="card-body">
				<div class="booking-title text-center">LIKES</div>
					<div class="row">
						<div class="col-md-4">
							<div class="card-title text-center">
				    		<?php 
    							// database connection
								include_once 'includes/database.inc.php';

        						// displaying likes onto page
								$userid = $_SESSION['userid'];
   								$stmt = $conn->prepare("SELECT events.eventId, events.eventName, likes.userId, likes.eventId 
   												  	FROM events
   												  	INNER JOIN likes 
   												  	ON events.eventId = likes.eventId
   												  	WHERE userId='$userid';");
   								$stmt->execute();
   								$resultData = $stmt->get_result();

   								if($resultData->num_rows > 0) {
   							
        						// fetching rows of data
        						echo "<u>Event Name </u><br><br>";
        						while ($row = $resultData->fetch_assoc()){
       	 						echo $row['eventName'] . "<br><br>";
        						}
        						} 		
        					?>
        					</div>
        				</div>
        				<div class="col-md-4">
							<div class="card-title text-center">
							<?php 
    							// database connection
								include_once 'includes/database.inc.php';
	
        						// displaying likes onto page
								$userid = $_SESSION['userid'];
   								$stmt = $conn->prepare("SELECT events.eventId, events.eventTime, likes.userId, likes.eventId 
   												  	FROM events
   												  	INNER JOIN likes 
   												 	ON events.eventId = likes.eventId
   												  	WHERE userId='$userid';");
   								$stmt->execute();
   								$resultData = $stmt->get_result();

   								if($resultData->num_rows > 0) {
   							
        						// fetching rows of data
        						echo "<u>Time </u><br><br>";
        						while ($row = $resultData->fetch_assoc()){
       	 						echo $row['eventTime'] . "<br><br>";
        						}
        						}		
        					?>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card-title text-center">
							<?php 
    							// database connection
								include_once 'includes/database.inc.php';
	
        						// displaying likes onto page
								$userid = $_SESSION['userid'];
   								$stmt = $conn->prepare("SELECT events.eventId, events.eventAddress, likes.userId, likes.eventId 
   												  		FROM events
   												  		INNER JOIN likes 
   												  		ON events.eventId = likes.eventId
   												  		WHERE userId='$userid';");
   								$stmt->execute();
   								$resultData = $stmt->get_result();

   								if($resultData->num_rows > 0) {
   							
        						// fetching rows of data
        						echo "<u>Address </u><br><br>";
        						while ($row = $resultData->fetch_assoc()){
       	 						echo $row['eventAddress'] . "<br><br>";
        						}
        						}		
        					?>
							</div>
						</div>
    				</div>
    		</div>
		</div>
	</div>
</section>

<?php 
include_once 'footer.php'
?>
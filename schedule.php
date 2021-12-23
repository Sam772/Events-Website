<?php 
// checks if user is logged in, if not then redirects them to login page
  include_once 'header.php';
	if (!$_SESSION['username']) {
 	header("location: login.php?error=notloggedin");
          exit;
  }
?>

<!----- schedule introduction ----->
<section>
	<img src="images/waves1.png" class="waves">
	<p class="content-title text-center"><u>Schedule</u></p>
	<p class="content text-center">Here is where you may book an event you want to participate in, there is also a like feature if you are interested in the event.</p>
  <div class="container-fluid">
      <div class="row">
          <div class="col">
              <button class="btn-block btn-color filter-button" data-filter="all">All</button>
          </div>
          <div class="col">
              <button class="btn-block btn-color filter-button" data-filter="sport">Sport</button>
          </div>
          <div class="col">
              <button class="btn-block btn-color filter-button" data-filter="culture">Culture</button>
          </div>
          <div class="col">
              <button class="btn-block btn-color filter-button" data-filter="other">Other</button>
          </div>
      </div>
  </div>

	<!----- schedule section containing cards for event registeration ----->
	<div class="container-fluid">
	    <div class="schedule-box text-center">
			    <div class="row">
				      <div class="col-md-4 filter sport">
					        <div class="schedule-card">
						          <div class="card-body">
							            <h5 class="card-title">Sport</h5>
						          </div>
						          <img class="card-img-top" src="images/football.png" alt="Card image cap">
						          <div class="card-body">
							            <h5 class="card-title-bottom">Football Tournament</h5>
							            <button class="btn-block btn-white" data-toggle="modal" data-target="#FootballBook">Book Event</button>
							            <button class="btn-block btn-white" data-toggle="modal" data-target="#FootballInfo">Information</button>
							            <button class="btn-block btn-white" data-toggle="modal" data-target="#FootballLike">Like</button>
						          </div>
					        </div>
				      </div>
				      <div class="col-md-4 filter culture">
					        <div class="schedule-card">
						          <div class="card-body">
							            <h5 class="card-title">Culture</h5>
						          </div>
					            <img class="card-img-top" src="images/art.png" alt="Card image cap">
					            <div class="card-body">
							            <h5 class="card-title-bottom">Art Gallery</h5>
							            <button class="btn-block btn-white" data-toggle="modal" data-target="#ArtBook">Book Event</button>
							            <button class="btn-block btn-white" data-toggle="modal" data-target="#ArtInfo">Information</button>
							            <button class="btn-block btn-white" data-toggle="modal" data-target="#ArtLike">Like</button>
						          </div>
					        </div>
				      </div>
				      <div class="col-md-4 filter other">
					        <div class="schedule-card">
					            <div class="card-body">
							            <h5 class="card-title">Other</h5>
					            </div>
					            <img class="card-img-top" src="images/music.png" alt="Card image cap">
					            <div class="card-body">
							            <h5 class="card-title-bottom">Music Festival</h5>
							            <button class="btn-block btn-white" data-toggle="modal" data-target="#MusicBook">Book Event</button>
							            <button class="btn-block btn-white" data-toggle="modal" data-target="#MusicInfo">Information</button>
							            <button class="btn-block btn-white" data-toggle="modal" data-target="#MusicLike">Like</button>
						          </div>
					        </div>
				      </div>
				      <div class="col-md-4 filter sport">
					        <div class="schedule-card">
					            <div class="card-body">
							            <h5 class="card-title">Sport</h5>
					            </div>
					            <img class="card-img-top" src="images/rugby.png" alt="Card image cap">
					            <div class="card-body">
							            <h5 class="card-title-bottom">Rugby Match</h5>
							            <button class="btn-block btn-white" data-toggle="modal" data-target="#RugbyBook">Book Event</button>
							            <button class="btn-block btn-white" data-toggle="modal" data-target="#RugbyInfo">Information</button>
							            <button class="btn-block btn-white" data-toggle="modal" data-target="#RugbyLike">Like</button>
						          </div>
					        </div>
				      </div>
				      <div class="col-md-4 filter culture">
					        <div class="schedule-card">
					            <div class="card-body">
							            <h5 class="card-title">Culture</h5>
					            </div>
					            <img class="card-img-top" src="images/theatre.jfif" alt="Card image cap">
					            <div class="card-body">
							            <h5 class="card-title-bottom">Theatre</h5>
							            <button class="btn-block btn-white" data-toggle="modal" data-target="#TheatreBook">Book Event</button>
							            <button class="btn-block btn-white" data-toggle="modal" data-target="#TheatreInfo">Information</button>
							            <button class="btn-block btn-white" data-toggle="modal" data-target="#TheatreLike">Like</button>
						          </div>
					        </div>
				      </div>
				      <div class="col-md-4 filter other">
					        <div class="schedule-card">
					            <div class="card-body">
							            <h5 class="card-title">Other</h5>
					            </div>
					            <img class="card-img-top" src="images/museum.jfif" alt="Card image cap">
					            <div class="card-body">
							            <h5 class="card-title-bottom">Museum</h5>
							            <button class="btn-block btn-white" data-toggle="modal" data-target="#MuseumBook">Book Event</button>
							            <button class="btn-block btn-white" data-toggle="modal" data-target="#MuseumInfo">Information</button>
							            <button class="btn-block btn-white" data-toggle="modal" data-target="#MuseumLike">Like</button>
						          </div>
					        </div>
				      </div>
			    </div>
		  </div>
	</div>
</section>

<!----- modal section for information button ----->
<!----- first model ----->
<section>
    <div class="modal fade" id="FootballInfo" tabindex="-1" role="dialog" aria-labelledby="FootballInfo" aria-hidden="true">
  	    <div class="modal-dialog" role="document">
    		    <div class="modal-content">
     			      <div class="modal-header text-center">
        			      <h5 class="modal-title w-100" id="FootballInfo">Football Tournament</h5>
        			      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          				      <span aria-hidden="true">&times;</span>
        			      </button>
     			      </div>
      			    <div class="modal-body">
        			  <?php 
                    // database connection
						        include_once 'includes/database.inc.php';
	
                    // displaying data onto page

                    // prepare and execute statement
                    $stmt = $conn->prepare("SELECT * FROM events;");
                    $stmt->execute();

                    // getting data from database
                    $resultData = $stmt->get_result();

                    if ($resultData->num_rows > 0) {
                      // fetching rows of data
                    $row = $resultData->fetch_assoc();
                      // display data onto modal
                      echo "• " . $row['eventDesc'] ."<br><br> • Category: " . $row['eventCategory'] . "<br><br> • Address: " . $row['eventAddress'] . "<br><br> • Time: " . $row['eventTime'] . "<br><br> • Organiser: " . $row['eventOrganiser'] . "<br><br> • Contact: " . $row['eventContact'] . "<br><br> • URL: " . $row['eventURL'];
                  } 		
         			  ?>
      			    </div>
      			    <div class="modal-footer">
        			      <button type="button" class="btn-block btn-white" data-dismiss="modal">Close</button>
      			    </div>
    		    </div>
  		  </div>
	  </div>

<!----- second model ----->
	  <div class="modal fade" id="ArtInfo" tabindex="-1" role="dialog" aria-labelledby="ArtInfo" aria-hidden="true">
  	    <div class="modal-dialog" role="document">
    		    <div class="modal-content">
     			      <div class="modal-header text-center">
        			      <h5 class="modal-title w-100" id="ArtInfo">Art Gallery</h5>
        			      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          				      <span aria-hidden="true">&times;</span>
        			      </button>
     			      </div>
      			    <div class="modal-body">
        		    <?php 
                    // displaying data onto page

                    // prepare and execute statement
                    $stmt = $conn->prepare("SELECT * FROM events LIMIT 1,1;");
                    $stmt->execute();

                    // getting data from database
                    $resultData = $stmt->get_result();

                    if ($resultData->num_rows > 0) {
                      // fetching rows of data
                    $row = $resultData->fetch_assoc();
                      // display data onto modal
                      echo "• " . $row['eventDesc'] ."<br><br> • Category: " . $row['eventCategory'] . "<br><br> • Address: " . $row['eventAddress'] . "<br><br> • Time: " . $row['eventTime'] . "<br><br> • Organiser: " . $row['eventOrganiser'] . "<br><br> • Contact: " . $row['eventContact'] . "<br><br> • URL: " . $row['eventURL'];
   					      }		
         		    ?>
      			    </div>
      			    <div class="modal-footer">
        		        <button type="button" class="btn-block btn-white" data-dismiss="modal">Close</button>
      			    </div>
    		    </div>
  		  </div>
	  </div>

<!----- third model ----->
	  <div class="modal fade" id="MusicInfo" tabindex="-1" role="dialog" aria-labelledby="MusicInfo" aria-hidden="true">
  		  <div class="modal-dialog" role="document">
    		    <div class="modal-content">
     			      <div class="modal-header text-center">
        			      <h5 class="modal-title w-100" id="MusicInfo">Music Festival</h5>
        			      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          				      <span aria-hidden="true">&times;</span>
        			      </button>
     			      </div>
      			    <div class="modal-body">
        			  <?php 
                    // displaying data onto page

                    // prepare and execute statement
                    $stmt = $conn->prepare("SELECT * FROM events LIMIT 2,1;");
                    $stmt->execute();

                    // getting data from database
                    $resultData = $stmt->get_result();

                    if ($resultData->num_rows > 0) {
                      // fetching rows of data
                    $row = $resultData->fetch_assoc();
                      // display data onto modal
                      echo "• " . $row['eventDesc'] ."<br><br> • Category: " . $row['eventCategory'] . "<br><br> • Address: " . $row['eventAddress'] . "<br><br> • Time: " . $row['eventTime'] . "<br><br> • Organiser: " . $row['eventOrganiser'] . "<br><br> • Contact: " . $row['eventContact'] . "<br><br> • URL: " . $row['eventURL'];
                  }   
         			  ?>
      			    </div>
      			    <div class="modal-footer">
        			      <button type="button" class="btn-block btn-white" data-dismiss="modal">Close</button>
      			    </div>
    		    </div>
  		  </div>
	  </div>

	<!----- fourth model ----->
	  <div class="modal fade" id="RugbyInfo" tabindex="-1" role="dialog" aria-labelledby="RugbyInfo" aria-hidden="true">
  	    <div class="modal-dialog" role="document">
    		    <div class="modal-content">
     			      <div class="modal-header text-center">
        			      <h5 class="modal-title w-100" id="RugbyInfo">Rugby Match</h5>
        			      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          				      <span aria-hidden="true">&times;</span>
        			      </button>
     			      </div>
      			    <div class="modal-body">
        			  <?php 
                    // displaying data onto page

                    // prepare and execute statement
                    $stmt = $conn->prepare("SELECT * FROM events LIMIT 3,1;");
                    $stmt->execute();

                    // getting data from database
                    $resultData = $stmt->get_result();

                    if ($resultData->num_rows > 0) {
                      // fetching rows of data
                    $row = $resultData->fetch_assoc();
                      // display data onto modal
                      echo "• " . $row['eventDesc'] ."<br><br> • Category: " . $row['eventCategory'] . "<br><br> • Address: " . $row['eventAddress'] . "<br><br> • Time: " . $row['eventTime'] . "<br><br> • Organiser: " . $row['eventOrganiser'] . "<br><br> • Contact: " . $row['eventContact'] . "<br><br> • URL: " . $row['eventURL'];
                  }   	
         			  ?>
      			    </div>
      			    <div class="modal-footer">
        			      <button type="button" class="btn-block btn-white" data-dismiss="modal">Close</button>
      			    </div>
    		    </div>
  		  </div>
	  </div>

	<!----- fifth model ----->
	  <div class="modal fade" id="TheatreInfo" tabindex="-1" role="dialog" aria-labelledby="TheatreInfo" aria-hidden="true">
  		  <div class="modal-dialog" role="document">
    		    <div class="modal-content">
     			      <div class="modal-header text-center">
        			      <h5 class="modal-title w-100" id="TheatreInfo">Theatre</h5>
        			      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          				      <span aria-hidden="true">&times;</span>
        			      </button>
     			      </div>
      			    <div class="modal-body">
        			  <?php 
                    // displaying data onto page

                    // prepare and execute statement
                    $stmt = $conn->prepare("SELECT * FROM events LIMIT 4,1;");
                    $stmt->execute();

                    // getting data from database
                    $resultData = $stmt->get_result();

                    if ($resultData->num_rows > 0) {
                      // fetching rows of data
                    $row = $resultData->fetch_assoc();
                      // display data onto modal
                      echo "• " . $row['eventDesc'] ."<br><br> • Category: " . $row['eventCategory'] . "<br><br> • Address: " . $row['eventAddress'] . "<br><br> • Time: " . $row['eventTime'] . "<br><br> • Organiser: " . $row['eventOrganiser'] . "<br><br> • Contact: " . $row['eventContact'] . "<br><br> • URL: " . $row['eventURL'];
                  }   	
         			  ?>
      			    </div>
      			    <div class="modal-footer">
        			      <button type="button" class="btn-block btn-white" data-dismiss="modal">Close</button>
      			    </div>
    		    </div>
  		  </div>
	  </div>

	<!----- sixth model ----->
	  <div class="modal fade" id="MuseumInfo" tabindex="-1" role="dialog" aria-labelledby="MuseumInfo" aria-hidden="true">
  		  <div class="modal-dialog" role="document">
    		    <div class="modal-content">
     			      <div class="modal-header text-center">
        			      <h5 class="modal-title w-100" id="MuseumInfo">Museum</h5>
        			      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          				      <span aria-hidden="true">&times;</span>
        			      </button>
     			      </div>
      			    <div class="modal-body">
        			  <?php 
                    // displaying data onto page

                    // prepare and execute statement
                    $stmt = $conn->prepare("SELECT * FROM events LIMIT 5,1;");
                    $stmt->execute();

                    // getting data from database
                    $resultData = $stmt->get_result();

                    if ($resultData->num_rows > 0) {
                      // fetching rows of data
                    $row = $resultData->fetch_assoc();
                      // display data onto modal
                      echo "• " . $row['eventDesc'] ."<br><br> • Category: " . $row['eventCategory'] . "<br><br> • Address: " . $row['eventAddress'] . "<br><br> • Time: " . $row['eventTime'] . "<br><br> • Organiser: " . $row['eventOrganiser'] . "<br><br> • Contact: " . $row['eventContact'] . "<br><br> • URL: " . $row['eventURL'];
                  }   	
         			  ?>
      			    </div>
      			    <div class="modal-footer">
        			      <button type="button" class="btn-block btn-white" data-dismiss="modal">Close</button>
      			    </div>
    		    </div>
  		  </div>
	  </div>
</section>

<!----- modal section for book event button ----->
<!----- first modal ----->
<section>
    <div class="modal fade" id="FootballBook" tabindex="-1" role="dialog" aria-labelledby="FootballBook" aria-hidden="true">
  		  <div class="modal-dialog" role="document">
    		    <div class="modal-content">
     			      <div class="modal-header text-center">
        			      <h5 class="modal-title w-100" id="FootballBook">Football Tournament</h5>
        			      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          				      <span aria-hidden="true">&times;</span>
        			      </button>
     			      </div>
      			    <div class="modal-body text-center">
        			      Are you sure you want to book this event?
      			    </div>
      			    <div class="modal-footer">
      				      <form action="includes/booking.inc.php" method="post" style="width:100%;">
      					        <button type="submit" id="bookingOne" name="bookingOne" class="btn-block btn-white">Book Event</button>
      				      </form>
        			      <button type="button" class="btn-block btn-white" data-dismiss="modal">Close</button>
      			    </div>
    		    </div>
  		  </div>
	  </div>

<!----- second modal ----->
		<div class="modal fade" id="ArtBook" tabindex="-1" role="dialog" aria-labelledby="ArtBook" aria-hidden="true">
  		  <div class="modal-dialog" role="document">
    		    <div class="modal-content">
     			      <div class="modal-header text-center">
        			      <h5 class="modal-title w-100" id="ArtBook">Art Gallery</h5>
        			      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          				      <span aria-hidden="true">&times;</span>
        			      </button>
     			      </div>
      			    <div class="modal-body text-center">
        			      Are you sure you want to book this event?
      			    </div>
      			    <div class="modal-footer">
      				      <form action="includes/booking.inc.php" method="post" style="width:100%;">
      					        <button type="submit" id="submit" name="bookingTwo" class="btn-block btn-white">Book Event</button>
      				      </form>
        			      <button type="button" class="btn-block btn-white" data-dismiss="modal">Close</button>
      			    </div>
    		    </div>
  		  </div>
	  </div>

<!----- third modal ----->
	  <div class="modal fade" id="MusicBook" tabindex="-1" role="dialog" aria-labelledby="MusicBook" aria-hidden="true">
  		  <div class="modal-dialog" role="document">
    	  	  <div class="modal-content">
     			      <div class="modal-header text-center">
        			      <h5 class="modal-title w-100" id="MusicBook">Music Festival</h5>
        			      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          				      <span aria-hidden="true">&times;</span>
        			      </button>
     			      </div>
      			    <div class="modal-body text-center">
        			      Are you sure you want to book this event?
      			    </div>
      			    <div class="modal-footer">
      				      <form action="includes/booking.inc.php" method="post" style="width:100%;">
      					        <button type="submit" id="submit" name="bookingThree" class="btn-block btn-white">Book Event</button>
      				      </form>
        			      <button type="button" class="btn-block btn-white" data-dismiss="modal">Close</button>
      			    </div>
    		    </div>
  		  </div>
	  </div>

<!----- fourth modal ----->
	  <div class="modal fade" id="RugbyBook" tabindex="-1" role="dialog" aria-labelledby="RugbyBook" aria-hidden="true">
  		  <div class="modal-dialog" role="document">
    		    <div class="modal-content">
     			      <div class="modal-header text-center">
        			      <h5 class="modal-title w-100" id="RugbyBook">Rugby Match</h5>
        			      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          				      <span aria-hidden="true">&times;</span>
        			      </button>
     			      </div>
      			    <div class="modal-body text-center">
        		   	    Are you sure you want to book this event?
      			    </div>
      			    <div class="modal-footer">
      				      <form action="includes/booking.inc.php" method="post" style="width:100%;">
      					        <button type="submit" id="submit" name="bookingFour" class="btn-block btn-white">Book Event</button>
      				      </form>
        			      <button type="button" class="btn-block btn-white" data-dismiss="modal">Close</button>
      			    </div>
    		    </div>
  		  </div>
	  </div>

<!----- fifth modal ----->
	  <div class="modal fade" id="TheatreBook" tabindex="-1" role="dialog" aria-labelledby="TheatreBook" aria-hidden="true">
  		  <div class="modal-dialog" role="document">
    		    <div class="modal-content">
     			      <div class="modal-header text-center">
        			      <h5 class="modal-title w-100" id="TheatreBook">Theatre</h5>
        			      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          				      <span aria-hidden="true">&times;</span>
        			      </button>
     			      </div>
      			    <div class="modal-body text-center">
        			      Are you sure you want to book this event?
      			    </div>
      			    <div class="modal-footer">
      				      <form action="includes/booking.inc.php" method="post" style="width:100%;">
      					        <button type="submit" id="submit" name="bookingFive" class="btn-block btn-white">Book Event</button>
      				      </form>
        			      <button type="button" class="btn-block btn-white" data-dismiss="modal">Close</button>
      			    </div>
    		    </div>
  		  </div>
	  </div>

<!----- sixth modal ----->
	  <div class="modal fade" id="MuseumBook" tabindex="-1" role="dialog" aria-labelledby="MuseumBook" aria-hidden="true">
  		  <div class="modal-dialog" role="document">
    		    <div class="modal-content">
     			      <div class="modal-header text-center">
        			      <h5 class="modal-title w-100" id="MuseumBook">Museum</h5>
        			          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          				          <span aria-hidden="true">&times;</span>
        			          </button>
     			      </div>
      			    <div class="modal-body text-center">
        			      Are you sure you want to book this event?
      			    </div>
      			    <div class="modal-footer">
      				      <form action="includes/booking.inc.php" method="post" style="width:100%;">
      					        <button type="submit" id="submit" name="bookingSix" class="btn-block btn-white">Book Event</button>
      				      </form>
        			      <button type="button" class="btn-block btn-white" data-dismiss="modal">Close</button>
      			    </div>
    		    </div>
  		  </div>
	  </div>
</section>

<!----- modal section for liking event ----->
<!----- first modal ----->
<section>
	  <div class="modal fade" id="FootballLike" tabindex="-1" role="dialog" aria-labelledby="FootballLike" aria-hidden="true">
  		  <div class="modal-dialog" role="document">
    		    <div class="modal-content">
     			      <div class="modal-header text-center">
        			      <h5 class="modal-title w-100" id="FootballLike">Football Tournament</h5>
        			      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          				      <span aria-hidden="true">&times;</span>
        			      </button>
     			      </div>
      			    <div class="modal-body text-center">
        			      Are you sure you want to like this event?
      			    </div>
      			    <div class="modal-footer">
      				      <form action="includes/like.inc.php" method="post" style="width:100%;">
						            <button type="submit" name="likeOne" class="btn-block btn-white">Like</button>
					          </form>
        			      <button type="button" class="btn-block btn-white" data-dismiss="modal">Close</button>
      			    </div>
    		    </div>
  		  </div>
	  </div>

<!----- second modal ----->
	  <div class="modal fade" id="ArtLike" tabindex="-1" role="dialog" aria-labelledby="ArtLike" aria-hidden="true">
  		  <div class="modal-dialog" role="document">
    		    <div class="modal-content">
     			      <div class="modal-header text-center">
        			      <h5 class="modal-title w-100" id="ArtLike">Art Gallery</h5>
        			      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          				      <span aria-hidden="true">&times;</span>
        			      </button>
     			      </div>
      			    <div class="modal-body text-center">
        			      Are you sure you want to like this event?
      			    </div>
      			    <div class="modal-footer">
      				      <form action="includes/like.inc.php" method="post" style="width:100%;">
						            <button type="submit" name="likeTwo" class="btn-block btn-white">Like</button>
					          </form>
        			      <button type="button" class="btn-block btn-white" data-dismiss="modal">Close</button>
      			    </div>
    		    </div>
  		  </div>
	  </div>

<!----- third modal ----->
	  <div class="modal fade" id="MusicLike" tabindex="-1" role="dialog" aria-labelledby="MusicLike" aria-hidden="true">
  		  <div class="modal-dialog" role="document">
    		    <div class="modal-content">
     			      <div class="modal-header text-center">
        			      <h5 class="modal-title w-100" id="MusicLike">Music Festival</h5>
        			      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          				      <span aria-hidden="true">&times;</span>
        			      </button>
     			      </div>
      			    <div class="modal-body text-center">
        			      Are you sure you want to like this event?
      			    </div>
      			    <div class="modal-footer">
      				      <form action="includes/like.inc.php" method="post" style="width:100%;">
						            <button type="submit" name="likeThree" class="btn-block btn-white">Like</button>
					          </form>
        			      <button type="button" class="btn-block btn-white" data-dismiss="modal">Close</button>
      			    </div>
    		    </div>
  		  </div>
	  </div>

<!----- fourth modal ----->
	  <div class="modal fade" id="RugbyLike" tabindex="-1" role="dialog" aria-labelledby="RugbyLike" aria-hidden="true">
  		  <div class="modal-dialog" role="document">
    		    <div class="modal-content">
     			      <div class="modal-header text-center">
        			      <h5 class="modal-title w-100" id="RugbyLike">Rugby Match</h5>
        			      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          				      <span aria-hidden="true">&times;</span>
        			      </button>
     			      </div>
      			    <div class="modal-body text-center">
        			      Are you sure you want to like this event?
      			    </div>
      			    <div class="modal-footer">
      				      <form action="includes/like.inc.php" method="post" style="width:100%;">
						            <button type="submit" name="likeFour" class="btn-block btn-white">Like</button>
					          </form>
        			      <button type="button" class="btn-block btn-white" data-dismiss="modal">Close</button>
      			    </div>
    		    </div>
  		  </div>
	  </div>


<!----- fifth modal ----->
	  <div class="modal fade" id="TheatreLike" tabindex="-1" role="dialog" aria-labelledby="TheatreLike" aria-hidden="true">
  		  <div class="modal-dialog" role="document">
    		    <div class="modal-content">
     			      <div class="modal-header text-center">
        			      <h5 class="modal-title w-100" id="TheatreLike">Theatre</h5>
        			      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          				      <span aria-hidden="true">&times;</span>
        			      </button>
     			      </div>
      			    <div class="modal-body text-center">
        			      Are you sure you want to like this event?
      			    </div>
      			    <div class="modal-footer">
      				      <form action="includes/like.inc.php" method="post" style="width:100%;">
						            <button type="submit" name="likeFive" class="btn-block btn-white">Like</button>
					          </form>
        			      <button type="button" class="btn-block btn-white" data-dismiss="modal">Close</button>
      			    </div>
    		    </div>
  		  </div>
	  </div>


<!----- sixth modal ----->
	  <div class="modal fade" id="MuseumLike" tabindex="-1" role="dialog" aria-labelledby="MuseumLike" aria-hidden="true">
  		  <div class="modal-dialog" role="document">
    		    <div class="modal-content">
     			      <div class="modal-header text-center">
        			      <h5 class="modal-title w-100" id="MuseumLike">Museum</h5>
        			      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          				      <span aria-hidden="true">&times;</span>
        			      </button>
     			      </div>
      			    <div class="modal-body text-center">
        			      Are you sure you want to like this event?
      			    </div>
      			    <div class="modal-footer">
      				      <form action="includes/like.inc.php" method="post" style="width:100%;">
						            <button type="submit" name="likeSix" class="btn-block btn-white">Like</button>
					          </form>
        			      <button type="button" class="btn-block btn-white" data-dismiss="modal">Close</button>
      			    </div>
    		    </div>
  		  </div>
	  </div>
</section>

<?php 
  include_once 'footer.php';
?>
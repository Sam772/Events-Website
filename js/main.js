// alert messages with redirects
function alertBooking() {
  	alert("Booking Successful!");
 	history.back();
};

function alertLike(){
	alert("You liked this event!");
	history.back();
}

function alertBookingDone(){
    alert("You have already booked this event!");
    history.back();
}

function alertLikeDone(){
    alert("You have already liked this event!");
    history.back();
}

function loggedOut(){
	alert("You have logged out!");
	window.location.href = "../index.php";
}

// filter system for showing events by category
$(document).ready(function(){

    $(".filter-button").click(function(){
        var value = $(this).attr('data-filter');
        
        if(value == "all")
        {
            $('.filter').show();
        }
        else
        {
            $(".filter").not('.'+value).hide();
            $('.filter').filter('.'+value).show();
            
        }
    });
    
    if ($(".filter-button").removeClass("active")) {
$(this).removeClass("active");
}
$(this).addClass("active");

});
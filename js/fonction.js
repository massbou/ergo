function smoothScroll (duration) {
	$('a[href^="#"]').on('click', function(event) {

	    var target = $( $(this).attr('href') );

	    if( target.length ) {
	        event.preventDefault();
			if(window.innerWidth > 821)
			{
				$('html, body').animate({
		            scrollTop: target.offset().top - 70
		        }, duration);
			}
			else
			{
				$('html, body').animate({
		            scrollTop: target.offset().top - 49
		        }, duration);
			}

	    }
	});
}

function yScroll() {
    var head = document.getElementById('header');
    var y = window.pageYOffset;
    if(y> 50)
    {
      head.className= "head-scroll";
    }
    else
    {
      head.className="";
    }
}


$('.dropdown-btn').click(function() {
  $(".drop-nav").css({
      top: "0"
  });
  $('html, body').css({
	 "margin-top" : "185px",
	 "transition" : "margin 800ms ease-in-out"
  });
});

$('.dropup-btn').click(function() {
  $(".drop-nav").css({
      top: "-450px"
  });

  $('html, body').css({
	 "margin-top" : "0",
	 "transition" : "margin 0.1s linear"
  });
});

$('.lien').click(function() {
	$(".drop-nav").css({
		top: "-450px"
	});
});


window.addEventListener("scroll", yScroll);



$(document).ready(smoothScroll("swing"));

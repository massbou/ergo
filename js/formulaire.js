
var to_top = function()
{
    $('#monter').click(function() {
        $("html, body").animate({
            scrollTop: 0
        }, "swing");
        return false;
    });
}

function yScroll() {
    var top = document.getElementById('monter');
    var y = window.pageYOffset;
    if(y> 650)
    {
      top.style.visibility = "visible";
    }
    else
    {
      top.style.visibility = "hidden";
    }
}

$('.dropdown-btn').click(function() {
  $(".drop-nav").css({
      top: "0"
  });
  $(".drop-nav").css({
      top: "0"
  });
});

$('.dropup-btn').click(function() {
  $(".drop-nav").css({
      top: "-450px"
  });
});

window.addEventListener("scroll", yScroll);

$(document).ready(to_top);

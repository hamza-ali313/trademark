AOS.init({
  once: true,
});
$(document).ready(function () {
  var url = window.location.pathname;
  var filename = url.substring(url.lastIndexOf("/") + 1);
  if (filename == "") {
    filename = "index.php";
  }
  $("header .nav-item .nav-link").removeClass("active");
  $(`header .nav-item .nav-link[href="${filename}"]`).addClass("active");
});
$(window).scroll(function (e) {
  var scroll = $(window).scrollTop();
  if (scroll >= 100) {
    $("header").addClass("scroll");
  } else {
    $("header").removeClass("scroll");
  }
});

// vertical slider start
$(".vertical-slider").slick({
  slidesToShow: 3,
  slidesToScroll: 1,
  vertical:true,
  // autoplay:true,
  verticalSwiping:true,
  dots:false,
  arrows:false,
  infinite: true,
});
// vertical slider end

// step form start

$(document).ready(function () {
  $(".step .next").click(function () {
    let a = $(this).parents(".step");
    a.removeClass("active_step");
    a.next().addClass("active_step");
  });
  $(".step .prev").click(function () {
    let a = $(this).parents(".step");
    a.removeClass("active_step");
    a.prev().addClass("active_step");
  });
});
// step form end

// counter js start **********************************************************************

function updateCountdown() {
  var targetDate = new Date(jQuery(".count").first().data("target"));
  var currentDate = new Date();
  var timeDifference = targetDate - currentDate;
  console.log(timeDifference);
  if (timeDifference <= 0) {
    // Countdown has reached zero or negative, handle it as needed
    jQuery("#countdown").text("Countdown Ended");
    return;
  }

  var seconds = Math.floor(timeDifference / 1000); // Convert milliseconds to seconds

  var days = Math.floor(seconds / (24 * 60 * 60));
  seconds %= 24 * 60 * 60;
  var hours = Math.floor(seconds / (60 * 60));
  seconds %= 60 * 60;
  var minutes = Math.floor(seconds / 60);
  seconds %= 60;

  jQuery(".days").text(formatNumber(days));
  jQuery(".hours").text(formatNumber(hours));
  jQuery(".minutes").text(formatNumber(minutes));
  jQuery(".seconds").text(formatNumber(seconds));
}

function formatNumber(number) {
  return (number < 10 ? "0" : "") + number; // Add leading zero if number is less than 10
}

jQuery(document).ready(function () {
  updateCountdown(); // Update countdown on page load
  setInterval(updateCountdown, 1000); // Update countdown every second
});

// counter js end**********************************************************************

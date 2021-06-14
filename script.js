var parts = ["reachweber", "cottonseeds", "org", "&#46;", "&#64;"];
var email = parts[0] + parts[4] + parts[1] + parts[3] + parts[2];
document.getElementById("email-obs").innerHTML = email;

$("#myCarousel").carousel({
  interval: false,
});

$(document).ready(function () {
  var scrollLink = $(".scroll");

  // Smooth scrolling
  scrollLink.click(function (e) {
    e.preventDefault();
    $("body,html").animate(
      {
        scrollTop: $(this.hash).offset().top,
      },
      1000
    );
  });

  // Active link switching
  // $(window).scroll(function () {
  //   var scrollbarLocation = $(this).scrollTop();

  //   scrollLink.each(function () {
  //     var sectionOffset = $(this.hash).offset().top - 20;

  //     if (sectionOffset <= scrollbarLocation) {
  //       $(this).parent().addClass("active");
  //       $(this).parent().siblings().removeClass("active");
  //     }
  //   });
  // });
});

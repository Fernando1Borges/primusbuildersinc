jQuery(document).ready(function($){
  //you can now use $ as your jQuery object.
  var body = $( 'body' );


// collapse the larger navigation bar on scroll
$(window).scroll(function() {
    if ($(".navbar").offset().top > 50) {
        $(".line-top").addClass("top-nav-collapse");
        $(".navbar-brand").addClass("font-smaller");
    } else {
        $(".line-top").removeClass("top-nav-collapse");
        $(".navbar-brand").removeClass("font-smaller");
    }
});
// No longer needed
// // navigation bar toggle active function
// $(function() {
//    $(".navbar-right li").click(function() {
//
//       $("li").removeClass("active");
//
//       $(this).addClass("active");
//    });
// });


});

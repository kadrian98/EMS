var $ = jQuery;

$(document).ready(function () {
  $(".mobileIcon").click(function () {
    $(".navigation_list, .nav").toggleClass("activeNav");
  });
});

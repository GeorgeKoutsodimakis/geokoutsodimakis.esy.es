function openNav() {
    document.getElementById("mySidenav").style.width = "100%";
     document.getElementById("main").style.zIndex = "-1";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.zIndex = "1";

}


$(".menu>li>a").click(
    function(event) {
      document.getElementById("mySidenav").style.width = "0";
    }
 );


 var $root = $('html, body');
 $('a').click(function() {
     $root.animate({
         scrollTop: $( $.attr(this, 'href') ).offset().top
     }, 500);
     return false;
 });

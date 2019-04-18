$(function () {
  var url = window.location.pathname; 
  var activePage = url.substring(url.lastIndexOf('/') + 1);
      $('myNav topNav a').each(function () { 
          var linkPage = this.href.substring(this.href.lastIndexOf('/') + 1);

          if (activePage == linkPage) { 
              $(this).parent().addClass('active'); 
          }
      });
})




//Create a button and give it an ID of "hamburgerBtn"
//Attach an ID of "primaryNav" to the UL of the unordered list that holds your links
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
      x.className += " responsive";
    } else {
      x.className = "topnav";
    }
  }
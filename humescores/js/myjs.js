//  window.onload = function () {
//      if (window.jQuery) {
//          // jQuery is loaded  
//          alert("Yeah!");
//      } else {
//          // jQuery is not loaded
//          alert("Doesn't Work");
//      }
//  }

// ================ Menu page floating menu============================
var abcElements = document.querySelectorAll('.brm-menu ');
for (var i = 0; i < abcElements.length; i++){

    abcElements[i].id = 'el-' + i;
}




// =================Mau page tab menu =======================



var menu = document.getElementsByClassName("special-offer-menu");
var items = menu[0].getElementsByClassName("menu-item");
items[0].classList.add("active");
var special_dish_offer1 = document.getElementsByClassName("special-dish-offer1");
var menus = document.querySelectorAll(".special_dish_offer > .panel-layout");

for (var i = 0; i < menus.length; i++) {
  menus[i].classList.add("invisible"); 
}
menus[0].classList.add("visible");


for (var i = 0; i < items.length; i++) {
  items[i].addEventListener("click", function() {

  var current = document.getElementsByClassName("menu-item active");
  var current_menu = document.getElementsByClassName(" invisible visible");


  current[0].classList.remove("active");
  current_menu[0].classList.remove("visible");


  this.classList.add("active");
  if (this.firstChild.hash === "#el-1") {

    menus[0].classList.add("visible");
  }
  if (this.firstChild.hash === "#el-2") {
    menus[1].classList.add("visible");
  }
 

  });
}
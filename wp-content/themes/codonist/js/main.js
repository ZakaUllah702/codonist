
/*---------------------------DIGIT SECTION---------------------------*/

filterSelection("all")
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("column");
  if (c == "all") c = "";
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
  }
}

function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);     
    }
  }
  element.className = arr1.join(" ");
}


// Add active class to the current button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}

/*---------------------------Skill Section------------------------------*/
$('.first').owlCarousel({
  rtl:false,
  loop:true,
  margin:10,
  autoplay:true,
  autoplayTimeout:3000,
  smartSpeed:1000,
  nav:false,
  responsive:{
      0:{
          items:3
      },
      600:{
          items:3
      },
      1000:{
          items:6
      }
  }
})


$('.second').owlCarousel({
  rtl:true,
  loop:true,
  margin:10,
  nav:false,
  smartSpeed:1000,
  autoplay:true,
  autoplayTimeout:3000,
  responsive:{
      0:{
          items:3
      },
      600:{
          items:3
      },
      1000:{
          items:6
      }
  }
})



/*---------------------------Testimonial Section------------------------------*/


$('.owl-carousel').owlCarousel({
  loop:true,
  margin:10,
  nav:false,
  smartSpeed:1000,
  autoplay:true,
  autoplayTimeout:4000,
  responsive:{
      0:{
          items:1
      },
      600:{
          items:1
      },
      1000:{
          items:1
      }
  }
})


/*---------------------------Scroll Button------------------------------*/

//Get the button
var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
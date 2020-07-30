document.addEventListener("DOMContentLoaded", function() {
  console.log('lazy load working');
  var lazyloadImages;

  if ("IntersectionObserver" in window) {
    lazyloadImages = document.querySelectorAll("[data-lazyload]");
    console.log(lazyloadImages);
    var imageObserver = new IntersectionObserver(function(entries, observer) {
      entries.forEach(function(entry) {
        if (entry.isIntersecting) {
          var image = entry.target;
          image.src = image.getAttribute('data-lazyload');
          imageObserver.unobserve(image);
        }
      });
    });

    lazyloadImages.forEach(function(image) {
      imageObserver.observe(image);
    });
  } else {
    var lazyloadThrottleTimeout;
    lazyloadImages = document.querySelectorAll("[data-lazyload]");

    function lazyload () {
      if(lazyloadThrottleTimeout) {
        clearTimeout(lazyloadThrottleTimeout);
      }

      lazyloadThrottleTimeout = setTimeout(function() {
        var scrollTop = window.pageYOffset;
        lazyloadImages.forEach(function(img) {
            if(img.offsetTop < (window.innerHeight + scrollTop)) {
              image.src = image.getAttribute('data-lazyload');
            }
        });
        if(lazyloadImages.length == 0) {
          document.removeEventListener("scroll", lazyload);
          window.removeEventListener("resize", lazyload);
          window.removeEventListener("orientationChange", lazyload);
        }
      }, 20);
    }

    document.addEventListener("scroll", lazyload);
    window.addEventListener("resize", lazyload);
    window.addEventListener("orientationChange", lazyload);
  }
})

/*Menu Animation*/
var allUls = document.querySelectorAll("li > ul");
var firstHeight;
var secondHeight;
var microMenu= 0;
var collapsed = false;
for (var i = 0; i < allUls.length; i++) {
  allUls[i].style.height = '0px';
}

var myitems = document.querySelectorAll('.item');
var mybtn = document.querySelector('.menubtn');
var expanded = 'False';
var mysubitems = document.querySelectorAll('ul .subitem');
var sub_expanded = 'False';
var me = document.querySelector('.item-4');
console.log(myitems);
function expand_me (){
  if (expanded == 'False') {
    for (var i = 0; i < myitems.length; i++) {
      myitems[i].classList.remove('collapsed');
      myitems[i].classList.add('expanded');
      mybtn.classList.add('clpBtn');
      mybtn.classList.remove('expBtn');
    }
    expanded = 'True';
  } else if (expanded == 'True' ) {
    for (var i = 0; i < myitems.length; i++) {
      myitems[i].classList.add('collapsed');
      myitems[i].classList.remove('expanded');
      mybtn.classList.remove('clpBtn');
      mybtn.classList.add('expBtn');
    }
    expanded = 'False';
  }
  collapse_me();
  sub_expanded = "False";
}
function sub_expand_me (){
  console.log(me);
  if (sub_expanded == 'False') {
    for (var i = 0; i < mysubitems.length; i++) {
      mysubitems[i].classList.remove('collapsed');
      mysubitems[i].classList.add('expanded');
    }
    me.classList.add('extra_expanded');
    me.classList.remove('expanded');
    sub_expanded = 'True';
  } else if (sub_expanded == 'True' ) {
    for (var i = 0; i < mysubitems.length; i++) {
      mysubitems[i].classList.add('collapsed');
      mysubitems[i].classList.remove('expanded');
    }
    me.classList.remove('extra_expanded');
    me.classList.add('expanded');
    sub_expanded = 'False';
  }
}
function collapse_me(){
    me.classList.remove('extra_expanded');
    me.classList.add('expanded');
    sub_expanded = "False";
}

/* let items = document.querySelectorAll(".carousel .carousel-item");

items.forEach((el) => {
  const minPerSlide = 3;
  let next = el.nextElementSibling;
  for (var i = 1; i < minPerSlide; i++) {
    if (!next) {
      // wrap carousel by using first child
      next = items[0];
    }
    let cloneChild = next.cloneNode(true);
    el.appendChild(cloneChild.children[0]);
    next = next.nextElementSibling;
  }
});
*/
/* When the user scrolls down 80px from the top of the document, resize the navbar's padding and the logo's font size */
window.onscroll = function () {
  scrollFunction();
};

function scrollFunction() {
  if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
    document.getElementById("navbar").style.height = "40px";
    document.getElementById("navbrand").style.width = "80px";
    document.getElementById("navbrand").style.height = "28px";
    document.getElementById("navbrand").style.top = "0px";
    document.getElementById("navbrand").style.marginLeft = "40px";
    document.getElementById("bookBtn").style.top = "0px";
    document.getElementById("bookBtn").style.transitionDelay = "0s";
    document.getElementById("menuToggle").style.top = "10px";
    document.getElementById("menuToggle").style.transitionDelay = "0s";
  } else {
    document.getElementById("navbar").style.height = "80px";
    document.getElementById("navbrand").style.width = "160px";
    document.getElementById("navbrand").style.height = "23px";
    document.getElementById("navbrand").style.marginLeft = "0px";
    document.getElementById("navbrand").style.top = "10px";
    document.getElementById("bookBtn").style.top = "20px";
    document.getElementById("menuToggle").style.top = "30px";
    document.getElementById("bookBtn").style.transitionDelay = "0.1s";
    document.getElementById("menuToggle").style.transitionDelay = "0.1s";
  }
}

$("#loginModal").on("show.bs.modal", function (e) {
  $("body").addClass("test");
});

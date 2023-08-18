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
/*When the user scrolls down 80px from the top of the document, resize the navbar's padding and the logo's font size */
window.onscroll = function () {
  scrollFunction();
};

function scrollFunction() {
  if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
    document.getElementById("navbar").style.height = "40px";
    document.getElementById("navbrand").style.width = "80px";
    document.getElementById("navbrand").style.height = "28px";
    document.getElementById("navbrand").style.marginTop = "0px";
    document.getElementById("bookBtn").style.marginTop = "0px";
    document.getElementById("bookBtn").style.transitionDelay = "0s";
    document.getElementById("menuIcon").style.marginTop = "8px";
    document.getElementById("menuIcon").style.transitionDelay = "0s";
  } else {
    document.getElementById("navbar").style.height = "80px";
    document.getElementById("navbrand").style.width = "160px";
    document.getElementById("navbrand").style.height = "23px";
    document.getElementById("navbrand").style.marginTop = "8px";
    document.getElementById("bookBtn").style.marginTop = "18px";
    document.getElementById("menuIcon").style.marginTop = "27px";
    document.getElementById("bookBtn").style.transitionDelay = "0.1s";
    document.getElementById("menuIcon").style.transitionDelay = "0.1s";
  }
}

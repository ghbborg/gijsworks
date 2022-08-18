/**
 * Observer for simulating hover effects on mobile
 */
 const mobileHoverElements = document.querySelectorAll(".mobile-hover");

 function isScrolledIntoView(el) {
    var rect = el.getBoundingClientRect();
    var elemTop = rect.top;
    var elemBottom = rect.bottom;

    // Only completely visible elements return true:
    var isVisible = (elemTop >= 0) && (elemBottom <= window.innerHeight);
    // Partially visible elements return true:
    //isVisible = elemTop < window.innerHeight && elemBottom >= 0;
    return isVisible;
}

if ($('.mobile-hover')[0]) {
  if (!$('.mobile-hover')[1]) {
    mobileHoverElements[0].classList.add("hovered");
  }
}

 const displayMobileElement = (element) => {
   element.classList.add("hovered");
 };
 
 const hideMobileElement = (element) => {
   element.classList.remove("hovered");
 };
 
 const handleMobileAnimation = () => {
   mobileHoverElements.forEach((el) => {
     if (isScrolledIntoView(el)) {
       displayMobileElement(el);
     } else {
       hideMobileElement(el)
     }
   })
 }
 
 window.addEventListener("scroll", () => { 
   handleMobileAnimation();
 });

 handleMobileAnimation();

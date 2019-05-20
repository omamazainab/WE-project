var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {  //for making all the images invisible
    slides[i].style.display = "none"; 
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1} //checking if it is last index or not
  slides[slideIndex-1].style.display = "block"; //displaying images according to slideindex
  setTimeout(showSlides, 1000); // Change image every 2 seconds
}

// Get the modal
var modal = document.getElementById('sign-up');
var modal2 =document.getElementById('sign-in');
var modal3 =document.getElementById('id03');
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
    else if (event.target == modal2) {
        modal2.style.display = "none";
    }
    else if (event.target == modal3) {
        modal3.style.display = "none";
    }
}
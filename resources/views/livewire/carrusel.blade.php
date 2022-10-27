
<div class=" mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="https://www.cinemacenter.com.ar/img_movies/2553_img2.jpg" style="width:100%">
  <div class="text1"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="https://www.cinemacenter.com.ar/img_movies/2544_img2.jpg" style="width:100%">
  <div class="text1"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="https://www.cinemacenter.com.ar/img_movies/2512_img2.jpg" style="width:100%">
  <div class="text1"></div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); 
}
</script>
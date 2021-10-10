<footer class="site-footer">
<div class="container">
<div class="row">
<div class="col-12">
<figure class="footer-logo">
<a href="index"><!-- <img src="images/xlogo.png.pagespeed.ic.aefxuP-M8k.png" alt="logo"> -->
<img src="images/logo.png" alt="Summar Music" class="footerlogo">
</a>
</figure>
<nav class="footer-navigation">
<ul class="flex flex-wrap justify-content-center align-items-center">
<li><a href="index">Home</a></li>
<li><a href="about-us">About us</a></li>
<li><a href="faq-s">Faq's</a></li>
<li><a href="privacy-policy">Privacy Policy</a></li>
<li><a href="contact-us">Contact</a></li>
</ul>
</nav>

Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Developed By &nbsp;<i class="fa fa-heart-o" aria-hidden="true"></i> &nbsp; <a href="#"> Summar Media</a>

<div class="mobilemenulang">
<ul class="flex flex-wrap justify-content-center align-items-center">
  <li ><a class="" href="<?=$pageName?>?lang=eng" style="font-weight: <?=$eng_Bld?>;">English</a> | </li>
  <li><a class="" href="<?=$pageName?>?lang=guj" style="font-weight: <?=$guj_Bld?>;"> ગુજરાતી</a></li>	
</ul>
</div>

<div class="footer-social">
<ul class="flex flex-wrap justify-content-center align-items-center">
<li><a href="<?=$res_social['youtube_link']?>"><i class="fa fa-youtube"></i></a></li>
  <li><a href="<?=$res_social['face_link']?>"><i class="fa fa-facebook"></i></a></li>
  <li><a href="<?=$res_social['insta_link']?>"><i class="fa fa-instagram"></i></a></li>
  <li><a href="<?=$res_social['twiter_link']?>"><i class="fa fa-twitter"></i></a></li>
  <li><a href="<?=$res_social['linkedin_link']?>"><i class="fa fa-linkedin"></i></a></li>
</ul>
</div>
</div>
</div>
</div>
</footer>
<div class="back-to-top flex justify-content-center align-items-center">
<span><svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1395 1184q0 13-10 23l-50 50q-10 10-23 10t-23-10l-393-393-393 393q-10 10-23 10t-23-10l-50-50q-10-10-10-23t10-23l466-466q10-10 23-10t23 10l466 466q10 10 10 23z" /></svg></span>
</div>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>

<script src='js/jquery.js'></script>
<script src="js/masonry.pkgd.min.js%2bjquery.collapsible.min.js.pagespeed.jc.0bjWaZmgDr.js"></script><script>eval(mod_pagespeed_QBcyBtFHTJ);</script>
<script>eval(mod_pagespeed_iUAWeIQ045);</script>
<!-- <script src='js/swiper.min.js'></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.min.js"></script>

<script src="js/jquery.countdown.min.js%2bcircle-progress.min.js%2bjquery.countTo.min.js%2bcustom.js.pagespeed.jc.eftl1IG-Jy.js"></script>

<script>eval(mod_pagespeed_tAqhTksdv2);</script>
<script>eval(mod_pagespeed_wGP_Aws4lH);</script>
<script>eval(mod_pagespeed_k8lg9k1kSV);</script>
<script>eval(mod_pagespeed_OxG_FhlEHt);</script>


<script async src="js/jquery-3.6.0.min.js"></script>
<!-- <script src="https://cdn.ckeditor.com/ckeditor5/11.1.1/classic/ckeditor.js"></script> -->

<script>


</script>
<script>
// ClassicEditor
// .create( document.querySelector( '#editor1' ) )
// .then( editor => {
//   console.log( editor );
// } )
// .catch( error => {
//   console.error( error );
// } );

//$('#register').text('working');
// console.log('hello');
$('#myModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
})

var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
// btn.onclick = function() {
//   modal.style.display = "block";
// }

// When the user clicks on <span> (x), close the modal
// span.onclick = function() {
//   modal.style.display = "none";
// }

// When the user clicks anywhere outside of the modal, close it
// window.onclick = function(event) {
//   if (event.target == modal) {
//     modal.style.display = "none";
//   }
// }
		
$(function () {


    var mySwiper = new Swiper('.swiper-container', {
        // Optional parameters
        direction: 'horizontal',
        loop: true,

        // If we need pagination
        pagination: '.swiper-pagination',

        // Navigation arrows
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',

        // And if we need scrollbar
        // scrollbar: '.swiper-scrollbar',

       // autoplay: 3000
    });


    var v = document.getElementsByTagName("video")[0];

    // v.addEventListener("canplay", function () {
    //     mySwiper.stopAutoplay();
    // }, true);

    // v.addEventListener("ended", function () {
    //     mySwiper.startAutoplay();
    // }, true);

  var divlen =  $('.contentbg').width();
  console.log('divlen0',divlen);
  var numItem = (divlen < 680) ? 1 : 4;

    var swiper = new Swiper('.swiper-item', {
      slidesPerView: numItem,
      //spaceBetween: 30,
              pagination: '.swiper-pagination',

        // Navigation arrows
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',

        // And if we need scrollbar
        // scrollbar: '.swiper-scrollbar',

        //autoplay: 5000,

      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
    });

let items = document.querySelectorAll('.carousel .carousel-item')

items.forEach((el) => {
    // number of slides per carousel-item
    const minPerSlide = 4
    let next = el.nextElementSibling
    for (var i=1; i<minPerSlide; i++) {
        if (!next) {
            // wrap carousel by using first child
            next = items[0]
        }
        let cloneChild = next.cloneNode(true)
        el.appendChild(cloneChild.children[0])
        next = next.nextElementSibling
    }
})


});	



</script>
</body>

</html>
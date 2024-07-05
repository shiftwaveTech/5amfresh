<!--Get in touch-->
<section class="get-in-touch">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8 text-center text-lg-start">
                <h2 class="title">Get in touch with us</h2>
            </div>
            <div class="col-12 col-lg-4 text-center text-lg-end">
                <span class="btn btn-white" data-bs-toggle="modal" data-bs-target="#get-enquiry">Enquire Now</span>
            </div>
        </div>
    </div>
</section>
   
<!--Toll free-->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-md-8 text-center pt-4 pb-4">
            <img src="<?= base_url('assets/images/logo.png')?>" style="max-width:60%; width:300px;" class="mb-2 d-block m-auto" alt="Birth Right by Rainbow Hospitals">
            <a href="http://www.rainbowhospitals.in" target="_blank">www.rainbowhospitals.in </a> | <span class="d-inline-block">Toll free number: <a href="tel:18002122">1800 2122</a></span>
        </div>
    </div>
</div>
   
<!--social-->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-10 col-md-8 text-center pt-3 pb-3" style="border-top:1px solid #f1f1f1;">
            <a href="https://www.facebook.com/birthrightbyrainbow" target="_blank" class="social-links"><i class="fab fa-facebook-f"></i></a>
            <a href="https://www.instagram.com/birthrightbyrainbow_ind/" target="_blank" class="social-links"><i class="fab fa-instagram"></i></a>
        </div>
    </div>
</div>
  

   
<!--footer-->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">Copyright &copy; 2022 Birth Right. <span class="d-inline-block">All Rights Reserved.</span></div>
<!--            <div class="col-lg-6 text-center text-lg-end">Designed by <a href="https://www.shiftwave.com/" target="_blank">Shiftwave</a></div>-->
        </div>
    </div>
</footer>
  
  
<!--fixed NAVBAR-->
<div class="fixed-nav d-md-none d-lg-none">
    <div class="container">
        <div class="row">
            <div class="col-6" style="border-right: 1px solid #fff;">
                <a href="#contact-mob">Enquire Now</a>
            </div>
            <div class="col-6">
                <a style="padding: 10px 36px;" href="tel:18002122">Call Now</a>
            </div>
        </div>
    </div>
</div>  

<!--Get enquiry Form Modal-->

<div class="modal fade" id="get-enquiry">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content contact-bg">
            <div class="modal-body">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="far fa-times"></i></button>
                <div class="contact-form"><?php include 'forms/form-popup.php' ?></div>
            </div>
        </div>
    </div>
</div>
   
   
<!-- <script src="js/jquery.js"></script>
<script src="js/main.js"></script>
<script src="owlcarousel/owl.carousel.min.js"></script> -->
<!-- <script src="<?= base_url('js/jquery.js') ?>"></script>
<script src="<?= base_url('js/main.js') ?>"></script>
<script src="<?= base_url('owlcarousel/owl.carousel.min.js') ?>"></script> -->

   
<script>
    
    var btn = $('#top-scrollbutton');

    $(window).scroll(function() {
      if ($(window).scrollTop() > 250) {
        btn.addClass('show');
      } else {
        btn.removeClass('show');
      }
    });

    $('#top-scrollbutton').click(function(){  
      window.scrollTo(0,0);
    });
    
</script>


<script>"use strict";document.addEventListener('DOMContentLoaded',function(){if(window.hideYTActivated)return;if(typeof YT==='undefined'){let tag=document.createElement('script');tag.src="https://www.youtube.com/iframe_api";let firstScriptTag=document.getElementsByTagName('script')[0];firstScriptTag.parentNode.insertBefore(tag,firstScriptTag);} let onYouTubeIframeAPIReadyCallbacks=[];for(let playerWrap of document.querySelectorAll(".hytPlayerWrap")){let playerFrame=playerWrap.querySelector("iframe");let onPlayerStateChange=function(event){if(event.data==YT.PlayerState.ENDED){playerWrap.classList.add("ended");}else if(event.data==YT.PlayerState.PAUSED){playerWrap.classList.add("paused");}else if(event.data==YT.PlayerState.PLAYING){playerWrap.classList.remove("ended");playerWrap.classList.remove("paused");}};let player;onYouTubeIframeAPIReadyCallbacks.push(function(){player=new YT.Player(playerFrame,{events:{'onStateChange':onPlayerStateChange}});});playerWrap.addEventListener("click",function(){let playerState=player.getPlayerState();if(playerState==YT.PlayerState.ENDED){player.seekTo(0);}else if(playerState==YT.PlayerState.PAUSED){player.playVideo();}});} window.onYouTubeIframeAPIReady=function(){for(let callback of onYouTubeIframeAPIReadyCallbacks){callback();}};window.hideYTActivated=true;});</script>


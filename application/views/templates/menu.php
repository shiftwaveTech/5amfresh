<span id="top-scrollbutton"><i class="fas fa-chevron-up"></i></span>
   
<header>

<!--    Desktop Menu-->

    <div class="container-fluid bottom-header">
        <div class="container">
            <div class="row">
               <div class="col-7 col-lg-3">
                   <div class="logo">
                       <a href="index.php"><img src="<?= base_url('assets/images/logo.png') ?>" alt="5am Fresh"></a>
                    </div>
               </div>
                <div class="col-9 d-none d-lg-block">
                    <div class="nav-bar">
                       <a class="what-button" href="https://www.whatsapp.com/"><i class="fa-brands fa-whatsapp"></i></a>
                          <a class="call-button call-desk" href="tel:+911234567890"><i class="fa-solid fa-phone-volume"></i>9876543210</a>
                          
                          <i class="fal fa-solid fa-bars mob-bar-icon" data-bs-toggle="modal" data-bs-target="#mob-menu"></i>
                    </div>
                </div>
                <div class="col-5 d-block d-lg-none text-end">
                      <div class="menu-button">
                          <a class="what-button" href="https://www.whatsapp.com/"><i class="fa-brands fa-whatsapp"></i></a>
                          <a class="call-button" href="tel:+911234567890"><i class="fa-solid fa-phone-volume"></i></a>
                          
                          <i class="fal fa-solid fa-bars mob-bar-icon" data-bs-toggle="modal" data-bs-target="#mob-menu"></i>
                      </div>
                    
                </div>
            </div>
        </div>
    </div>
</header>

<script>
    
$('.navlink-close').click(function(){
    $('.btn-close').trigger('click');
} )  

$('#menu-toggle4').click(function(){
$('#menu4').toggle();
})     
    

</script>
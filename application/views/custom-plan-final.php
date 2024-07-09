<html>
    <head>
       <title>Freshoo</title>
       <meta name="description" content="">
        <?php //include 'include/header.php' ?>
        <link rel="stylesheet" href="<?= base_url('assets/css/sub-plan-screen.css')?>">
        <style>
   .btn-next{ font-family: "Costa Ptf Demi";border-radius:20px;background-color: #fd632f; color: #fff; border-color:#fd632f;padding: .75rem 120px; border:none;justify-content: center;font-size: 18px;letter-spacing: 1px;}

    .new-compare{
    border: none;
    border-radius: 0px 30px 30px 0px;
    color: white;
    background-color: #005e1a;
    font-size: 22px;
    font-family: "Costa Ptf Demi";
    font-weight: 700;
    padding: 6px 20px;
}
.compare-button {
    background-color: #109B4A;
    font-family: "Costa Ptf Demi";
    font-size: 24px;
    border-radius: 0px 30px 30px 0px;
}
.compare-button {
    width: 100%;
    padding: 4px 35px;
}
.compare-button span {
    font-size: 20px;
    color: white;
    display: block;
    margin-top: -6px;
}
@media only screen and (device-width: 412px){
    .btn-next{
        padding: 0.75rem 128px !important;
    }
}
@media only screen and (device-width: 414px){
    .btn-next{
        padding: 0.75rem 128px !important;
    }
}
@media only screen and (device-width: 390px){
    .btn-next{
        padding: 0.75rem 128px !important;
    }
}
@media only screen and (device-width: 430px){
    .btn-next{
        padding: 0.75rem 128px !important;
    }
}
@media (max-width: 767px){
.create-plan-button {
    padding: 10px 18px;
}
.compare-button {
    padding: 8px 30px !important;
    width: 100%;
 
}
.compare-button {
    font-size: 18px !important;
}
.new-compare{
    font-size:15px;
}
.compare-button span{
    font-size:15px !important;
    color:white;
    display: block;
    margin-top:-6px;
}
}
    </style>
    </head>
    <body>
    <div>
<?php include 'include/menu-sec.php' ?>
</div>
       <section class="plan-1">
           <div class="container">
               <div class="row">
                   <div class="col-7 custom-plan">
                       <h3><span>Custom Plan  </span></h3>
                       <p>Recommended for 2 adults</p>
                   </div>
                   <div class="col-5 text-center">
                       <div class="plan-price-1 custom-plan">
                        <h3><span> ₹ 1599 </span> </h3>
                       <p>Per Week, Billed Monthly</p>
                       </div>
                   </div>
               </div>
           </div>
       </section> 
       <div class="margins-of-sec-1">
                <div class="container button-style-1 mb-4">                   
                <a href="index.php" class="btn-next text-white text-decoration-none">                             
                                PAY NOW                             
                </a>
                </div>
            </div>
     <section>
         <div class="container mt-4">           
            <div class="d-flex align-items-center justify-content-center text-center">
                    <div class="custom-plan">
                        <h2>Must Have <span>Vegetables</span></h2>
                        <h5>(All Included)</h5>
                    </div>
                </div>   
            <div class="row mt-2">
                    <div class="col-3 col-md-3 card-pd-style">
                        <div class="card border-0 shadow-lg bg-white border-radius-style">
                            <div class="padding-tex">
                                <p class="card-title text-center">Onion</p>
                            </div>
                            <img src="<?= base_url('assets/images/plan-a-screen/onion.png')?>" class="card-img-bottom" alt="Image 1">
                            <button type="button" class="btn-kgs">2kgs</button>
                        </div>
                    </div>
                    <div class="col-3 col-md-3 card-pd-style">
                        <div class="card border-0 shadow bg-white border-radius-style">
                            <div class="padding-tex">
                                <p class="card-title text-center">Tomatoes</p>
                            </div>
                            <img src="<?= base_url('assets/images/plan-a-screen/tomatoes.png')?>" class="card-img-bottom" alt="Image 2">
                            <button type="button" class="btn-kgs">1kgs</button>
                        </div>
                    </div>
                    <div class="col-3 col-md-3 card-pd-style">
                        <div class="card border-0 shadow bg-white border-radius-style">
                            <div class="padding-tex">
                                <p class="card-title text-center">Potatoes</p>
                            </div>
                            <img src="<?= base_url('assets/images/plan-a-screen/potatoes.png')?>" class="card-img-bottom" alt="Image 2">
                            <button type="button" class="btn-kgs">1/2kgs</button>
                        </div>
                    </div>
                    <div class="col-3 col-md-3 card-pd-style">
                        <div class="card border-0 shadow bg-white border-radius-style">
                            <div class="padding-tex">
                                <p class="card-title text-center">Garlic</p>
                            </div>
                            <img src="<?= base_url('assets/images/plan-a-screen/garlic.png')?>" class="card-img-bottom" alt="Image 2">
                            <button type="button" class="btn-kgs">100gms</button>
                        </div>
                    </div>
                    <!-- Repeat the above card structure for the remaining cards -->
            </div>   
            <div class="row mt-4">
                    <div class="col-3 col-md-3 card-pd-style">
                        <div class="card border-0 shadow-lg bg-white border-radius-style">
                            <div class="padding-tex">
                                <p class="card-title text-center">Ginger</p>
                            </div>
                            <img src="<?= base_url('assets/images/plan-a-screen/ginger.png')?>" class="card-img-bottom" alt="Image 1">
                            <button type="button" class="btn-kgs">100gms</button>
                        </div>
                    </div>
                    <div class="col-3 col-md-3 card-pd-style">
                        <div class="card border-0 shadow bg-white border-radius-style">
                            <div class="padding-tex">
                                <p class="card-title text-center">Curry leaf</p>
                            </div>
                            <img src="<?= base_url('assets/images/plan-a-screen/curry-leaf.png')?>" class="card-img-bottom" alt="Image 2">
                            <button type="button" class="btn-kgs">50gms</button>
                        </div>
                    </div>
                    <div class="col-3 col-md-3 card-pd-style">
                        <div class="card border-0 shadow bg-white border-radius-style">
                            <div class="padding-tex">
                                <p class="card-title text-center">Green Chilli</p>
                            </div>
                            <img src="<?= base_url('assets/images/plan-a-screen/green-chilli.png')?>" class="card-img-bottom" alt="Image 2">
                            <button type="button" class="btn-kgs">100gms</button>
                        </div>
                    </div>
                    <div class="col-3 col-md-3 card-pd-style">
                        <div class="card border-0 shadow bg-white border-radius-style">
                            <div class="padding-tex">
                                <p class="card-title text-center">Coriander</p>
                            </div>
                            <img src="<?= base_url('assets/images/plan-a-screen/coriander.png')?>" class="card-img-bottom" alt="Image 2">
                            <button type="button" class="btn-kgs">100gms</button>
                        </div>
                    </div>
                    <!-- Repeat the above card structure for the remaining cards -->
            </div>               
            <div class="container button-style-1">
                <button class="plus-button-style rounded-circle border-0 shadow-lg bg-white">
                    <i class="fa-solid fa-plus plus-icon-style"></i>
                </button>               
            </div>
         </div>
     </section>
     <section>
                <div class="container mt-3">
                    <div class="d-flex align-items-center justify-content-center text-center">
                        <div class="custom-plan">
                            <h2>Other <span>Vegetables</span></h2>
                            <h5>(Three Included - 250 gms Each)</h5>
                        </div>
                    </div>    
                    <div class="row mt-2 mb-4">
                        <div class="col-3 col-md-3 card-pd-style">
                            <div class="card border-0 shadow-lg bg-white border-radius-style">
                                <div class="padding-tex">
                                    <p class="card-title text-center">Cabbage</p>
                                </div>
                                <img src="<?= base_url('assets/images/Cabbage.png')?>" class="card-img-bottom" alt="Image 1">
                            </div>
                        </div>
                        <div class="col-3 col-md-3 card-pd-style">
                            <div class="card border-0 shadow bg-white border-radius-style">
                                <div class="padding-tex">
                                    <p class="card-title text-center">Cauliflower</p>
                                </div>
                                <img src="<?= base_url('assets/images/Cauliflower.png')?>" class="card-img-bottom" alt="Image 2">
                            </div>
                        </div>
                        <div class="col-3 col-md-3 card-pd-style">
                            <div class="card border-0 shadow bg-white border-radius-style">
                                <div class="padding-tex">
                                    <p class="card-title text-center">Brinjal</p>
                                </div>
                                <img src="<?= base_url('assets/images/Brinjal.png')?>" class="card-img-bottom" alt="Image 2">
                            </div>
                        </div>
                        <div class="col-3 col-md-3 card-pd-style">
                            <div class="card border-0 shadow bg-white border-radius-style">
                                <div class="padding-tex">
                                    <p class="card-title text-center">Black Eggplant</p>
                                </div>
                                <img src="<?= base_url('assets/images/Black Eggplant.png')?>" class="card-img-bottom" alt="Image 2">
                            </div>
                        </div>
                        <!-- Repeat the above card structure for the remaining cards -->
                    </div>
                    <div class="row mt-2">
                        <div class="col-3 col-md-3 card-pd-style">
                            <div class="card border-0 shadow-lg bg-white border-radius-style">
                                <div class="padding-tex">
                                    <p class="card-title text-center">Raw Banana</p>
                                </div>
                                <img src="<?= base_url('assets/images/Raw Banana.png')?>" class="card-img-bottom" alt="Image 1">
                            </div>
                        </div>
                        <div class="col-3 col-md-3 card-pd-style">
                            <div class="card border-0 shadow bg-white border-radius-style">
                                <div class="padding-tex">
                                    <p class="card-title text-center">Okra</p>
                                </div>
                                <img src="<?= base_url('assets/images/Okra.png')?>" class="card-img-bottom" alt="Image 2">
                            </div>
                        </div>
                        <div class="col-3 col-md-3 card-pd-style">
                            <div class="card border-0 shadow bg-white border-radius-style">
                                <div class="padding-tex">
                                    <p class="card-title text-center">Ivy Gourd</p>
                                </div>
                                <img src="<?= base_url('assets/images/Ivy Gourd.png')?>" class="card-img-bottom" alt="Image 2">
                            </div>
                        </div>
                        <div class="col-3 col-md-3 card-pd-style">
                            <div class="card border-0 shadow bg-white border-radius-style">
                                <div class="padding-tex">
                                    <p class="card-title text-center">Drumstick</p>
                                </div>
                                <img src="<?= base_url('assets/images/Drumstick.png')?>" class="card-img-bottom" alt="Image 2">
                            </div>
                        </div>
                        <!-- Repeat the above card structure for the remaining cards -->
                    </div>
                    <div class="container button-style-1">
                <button class="plus-button-style rounded-circle border-0 shadow-lg bg-white">
                    <i class="fa-solid fa-plus plus-icon-style"></i>
                </button>               
            </div>
                </div>
        </section>
       <section>
            <div class="container mt-3">
                
                <div class="d-flex align-items-center justify-content-center text-center">
                    <div class="custom-plan">
                        <h2>leafy <span>Vegetables</span></h2>
                        <h5>(One Included - 250gms)</h5>
                    </div>
                </div>       
                <div class="row mt-2">
                    <div class="col-3 col-md-3 card-pd-style">
                        <div class="card border-0 shadow-lg bg-white border-radius-style">
                            <div class="padding-tex">
                                <p class="card-title text-center">Spinach</p>
                            </div>
                            <img src="<?= base_url('assets/images/spinach.png')?>" class="card-img-bottom" alt="Image 1">
                        </div>
                    </div>

                    <div class="col-3 col-md-3 card-pd-style">
                        <div class="card border-0 shadow bg-white border-radius-style">
                            <div class="padding-tex">
                                <p class="card-title text-center">Mint Leaves</p>
                            </div>
                            <img src="<?= base_url('assets/images/mint.png')?>" class="card-img-bottom" alt="Image 2">
                        </div>
                    </div>

                    <div class="col-3 col-md-3 card-pd-style">
                        <div class="card border-0 shadow bg-white border-radius-style">
                            <div class="padding-tex">
                                <p class="card-title text-center">Amaranth</p>
                            </div>
                            <img src="<?= base_url('assets/images/amaranth.png')?>" class="card-img-bottom" alt="Image 2">
                        </div>
                    </div>

                    <div class="col-3 col-md-3 card-pd-style">
                        <div class="card border-0 shadow bg-white border-radius-style">
                            <div class="padding-tex">
                                <p class="card-title text-center">Sorrel Leaves</p>
                            </div>
                            <img src="<?= base_url('assets/images/sorel.png')?>" class="card-img-bottom" alt="Image 2">
                        </div>
                    </div>

                <!-- Repeat the above card structure for the remaining cards -->
                
                </div>
                <div class="container button-style-1">
                <button class="plus-button-style rounded-circle border-0 shadow-lg bg-white">
                    <i class="fa-solid fa-plus plus-icon-style"></i>
                </button>
            </div>
            </div>
        </section>  
        <section>
            <div class="container mt-3">
                <div class="d-flex align-items-center justify-content-center text-center">
                    <div class="custom-plan">
                        <h2>Root <span>Vegetables</span></h2>
                        <h5>(One Included - 250gms)</h5>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-3 col-md-3 card-pd-style">
                        <div class="card border-0 shadow-lg bg-white border-radius-style">
                            <div class="padding-tex">
                                <p class="card-title text-center">Carrot</p>
                            </div>
                            <img src="<?= base_url('assets/images/carrot.png')?>" class="card-img-bottom" alt="Image 1">
                        </div>
                    </div>
                    <div class="col-3 col-md-3 card-pd-style">
                        <div class="card border-0 shadow bg-white border-radius-style">
                            <div class="padding-tex">
                                <p class="card-title text-center">Sweet Potato</p>
                            </div>
                            <img src="<?= base_url('assets/images/potato.png')?>" class="card-img-bottom" alt="Image 2">
                        </div>
                    </div>
                    <div class="col-3 col-md-3 card-pd-style">
                        <div class="card border-0 shadow bg-white border-radius-style">
                            <div class="padding-tex">
                                <p class="card-title text-center">Radish</p>
                            </div>
                            <img src="<?= base_url('assets/images/radish.png')?>" class="card-img-bottom" alt="Image 2">
                        </div>
                    </div>
                    <div class="col-3 col-md-3 card-pd-style">
                        <div class="card border-0 shadow bg-white border-radius-style">
                            <div class="padding-tex">
                                <p class="card-title text-center">Beetroot</p>
                            </div>
                            <img src="<?= base_url('assets/images/beetroot.png')?>" class="card-img-bottom" alt="Image 2">
                        </div>
                    </div>
                    <!-- Repeat the above card structure for the remaining cards -->
                </div>
                <div class="container button-style-1">
                <button class="plus-button-style rounded-circle border-0 shadow-lg bg-white">
                    <i class="fa-solid fa-plus plus-icon-style"></i>
                </button>       
            </div>
            </div>
        </section>   
        <section>
            <div class="container mt-3">
                    <div class="d-flex align-items-center justify-content-center text-center">
                        <div class="custom-plan">
                                <h2>Squash <span>Vegetables</span></h2>
                                <h5>(One Included - 250gms)</h5>
                            </div>
                    </div>   
                    <div class="row mt-2">
                        <div class="col-3 col-md-3 card-pd-style">
                            <div class="card border-0 shadow-lg bg-white border-radius-style">
                                <div class="padding-tex">
                                    <p class="card-title text-center">Bitter Gourd</p>
                                </div>
                                <img src="<?= base_url('assets/images/bitter.png')?>" class="card-img-bottom" alt="Image 1">
                            </div>
                        </div>
                        <div class="col-3 col-md-3 card-pd-style">
                            <div class="card border-0 shadow bg-white border-radius-style">
                                <div class="padding-tex">
                                    <p class="card-title text-center">Bottle Gourd</p>
                                </div>
                                <img src="<?= base_url('assets/images/bottle.png')?>" class="card-img-bottom" alt="Image 2">
                            </div>
                        </div>
                        <div class="col-3 col-md-3 card-pd-style">
                            <div class="card border-0 shadow bg-white border-radius-style">
                                <div class="padding-tex">
                                    <p class="card-title text-center">Ridge Gourd</p>
                                </div>
                                <img src="<?= base_url('assets/images/ridge.png')?>" class="card-img-bottom" alt="Image 2">
                            </div>
                        </div>
                        <div class="col-3 col-md-3 card-pd-style">
                            <div class="card border-0 shadow bg-white border-radius-style">
                                <div class="padding-tex">
                                    <p class="card-title text-center">Pointed Gourd</p>
                                </div>
                                <img src="<?= base_url('assets/images/pointed.png')?>" class="card-img-bottom" alt="Image 2">
                            </div>
                        </div>
                        <!-- Repeat the above card structure for the remaining cards -->
                    </div>  
                    <div class="container button-style-1">
                <button class="plus-button-style rounded-circle border-0 shadow-lg bg-white">
                    <i class="fa-solid fa-plus plus-icon-style"></i>
                </button>
               
            </div>        
            </div>
        </section> 
        <section>
            <div class="container mt-3">
                <div class="d-flex align-items-center justify-content-center text-center">
                    <div class="custom-plan">
                        <h2>Podded <span>Vegetables</span></h2>
                        <h5>(One Included - 250gms)</h5>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-3 col-md-3 card-pd-style">
                        <div class="card border-0 shadow-lg bg-white border-radius-style">
                            <div class="padding-tex">
                                <p class="card-title text-center">Peas</p>
                            </div>
                            <img src="<?= base_url('assets/images/plan-a-screen/peas.png')?>" class="card-img-bottom" alt="Image 1">
                        </div>
                    </div>

                    <div class="col-3 col-md-3 card-pd-style">
                        <div class="card border-0 shadow bg-white border-radius-style">
                            <div class="padding-tex">
                                <p class="card-title text-center">White Beans</p>
                            </div>
                            <img src="<?= base_url('assets/images/plan-a-screen/white-beans.png')?>" class="card-img-bottom" alt="Image 2">
                        </div>
                    </div>

                    <div class="col-3 col-md-3 card-pd-style">
                        <div class="card border-0 shadow bg-white border-radius-style">
                            <div class="padding-tex">
                                <p class="card-title text-center">Hyacinth</p>
                            </div>
                            <img src="<?= base_url('assets/images/plan-a-screen/hyacinth-beans.png')?>" class="card-img-bottom" alt="Image 2">
                        </div>
                    </div>

                    <div class="col-3 col-md-3 card-pd-style">
                        <div class="card border-0 shadow bg-white border-radius-style">
                            <div class="padding-tex">
                                <p class="card-title text-center">Long Beans</p>
                            </div>
                            <img src="<?= base_url('assets/images/plan-a-screen/long-beans.png')?>" class="card-img-bottom" alt="Image 2">
                        </div>
                    </div>

                    <!-- Repeat the above card structure for the remaining cards -->

                </div>
            </div>
        </section>  
        <div class="margins-of-sec " >
            <div>
                <div class="why-freshoo">
                    <div class="container">
                        <div class="row">                  
                            <div class="col-md-5">
                                <!-- Text content -->
                                <h2>Why <span>Freshoo ?</span></h2>
                                <div class="mt-4">
                                    <div class="d-flex flex-row justify-content-start">
                                        <i class='fa fa-check-circle why-icon-style'></i>
                                        <p class="why-sec-content">Fresh Vegetables </p>
                                    </div>
                                    <!-- icon 1  -->

                                    <div class="d-flex flex-row justify-content-start">
                                        <i class='fa fa-check-circle why-icon-style'></i>
                                        <p class="why-sec-content">Cleaned and packed</p>
                                    </div>

                                    <!-- icon 2  -->

                                    <div class="d-flex flex-row justify-content-start">
                                        <i class='fa fa-check-circle why-icon-style'></i>
                                        <p class="why-sec-content">Free door delivery</p>
                                    </div>

                                    <!-- icon 3  -->

                                    <div class="d-flex flex-row justify-content-start">
                                        <i class='fa fa-check-circle why-icon-style'></i>
                                        <p class="why-sec-content">Lowest price in the town</p>
                                    </div>

                                    <!-- icon 4  -->

                                    <div class="d-flex flex-row justify-content-start">
                                        <i class='fa fa-check-circle why-icon-style'></i>
                                        <p class="why-sec-content">No surcharge no hidden charge</p>
                                    </div>
                                    <!-- icon 5 -->

                                    <div class="d-flex flex-row justify-content-start">
                                        <i class='fa fa-check-circle why-icon-style'></i>
                                        <p class="why-sec-content">100% quality guarentee</p>
                                    </div>

                                    <!-- icon 6 -->
                            
                                    <div class="d-flex flex-row justify-content-start">
                                        <i class='fa fa-check-circle why-icon-style'></i>
                                        <p class="why-sec-content">Cancel any time</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <!-- Image -->
                                    <img src="<?= base_url('assets/images/why-img.png')?>" alt="Responsive Image" class="why-container-side-img">
                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

       <!-- accordions  -->

            <div class="accord-sec">
                <div class="container">
            
                    <div id="accordion" class="py-4">
                    <h2>FAQ's</h2>
                    
                        <div class="card border-0 wow fadeInUp accord-inner">
                            <div class="card-header p-0 border-0" id="heading-240">
                                <button class="btn btn-link accordion-title border-0 collapsed" data-toggle="collapse" data-target="#collapse-240" aria-expanded="false" aria-controls="#collapse-240"><i class="fas fa-plus text-center d-flex align-items-center justify-content-center h-100"></i>Is there a 24/7 response for emergencies?                        </button>
                            </div>
                            <div id="collapse-240" class="collapse " aria-labelledby="heading-240" data-parent="#accordion">
                                <div class="card-body accordion-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card accord-card border-0 wow fadeInUp accord-inner">
                            <div class="card-header p-0 border-0" id="heading-241">
                                <button class="btn btn-link accordion-title border-0 collapsed" data-toggle="collapse" data-target="#collapse-241" aria-expanded="false" aria-controls="#collapse-241"><i class="fas fa-plus text-center d-flex align-items-center justify-content-center h-100"></i>How are owners’ concerns handled?                        </button>
                            </div>
                            <div id="collapse-241" class="collapse " aria-labelledby="heading-241" data-parent="#accordion">
                                <div class="card-body accordion-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card border-0 wow fadeInUp accord-inner">
                            <div class="card-header p-0 border-0" id="heading-242">
                                <button class="btn btn-link accordion-title border-0 collapsed" data-toggle="collapse" data-target="#collapse-242" aria-expanded="false" aria-controls="#collapse-242"><i class="fas fa-plus text-center d-flex align-items-center justify-content-center h-100"></i>How do I get repairs completed to my unit?                        </button>
                            </div>
                            <div id="collapse-242" class="collapse " aria-labelledby="heading-242" data-parent="#accordion">
                                <div class="card-body accordion-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card border-0 wow fadeInUp accord-inner">
                            <div class="card-header p-0 border-0" id="heading-243">
                                <button class="btn btn-link accordion-title border-0 collapsed" data-toggle="collapse" data-target="#collapse-243" aria-expanded="false" aria-controls="#collapse-243"><i class="fas fa-plus text-center d-flex align-items-center justify-content-center h-100"></i>What are the duties of a property manager?                        </button>
                            </div>
                            <div id="collapse-243" class="collapse " aria-labelledby="heading-243" data-parent="#accordion">
                                <div class="card-body accordion-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card border-0 wow fadeInUp accord-inner">
                            <div class="card-header p-0 border-0" id="heading-244">
                                <button class="btn btn-link accordion-title border-0 collapsed" data-toggle="collapse" data-target="#collapse-244" aria-expanded="false" aria-controls="#collapse-244"><i class="fas fa-plus text-center d-flex align-items-center justify-content-center h-100"></i>Do we receive copies of all invoices paid?                        </button>
                            </div>
                            <div id="collapse-244" class="collapse " aria-labelledby="heading-244" data-parent="#accordion">
                                <div class="card-body accordion-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card border-0 wow fadeInUp accord-inner">
                            <div class="card-header p-0 border-0" id="heading-245">
                                <button class="btn btn-link accordion-title border-0 collapsed" data-toggle="collapse" data-target="#collapse-245" aria-expanded="false" aria-controls="#collapse-245"><i class="fas fa-plus text-center d-flex align-items-center justify-content-center h-100"></i>How are arrears handled?                        </button>
                            </div>
                            <div id="collapse-245" class="collapse " aria-labelledby="heading-245" data-parent="#accordion">
                                <div class="card-body accordion-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="">
                <div class="container button-style-1  mb-4">
                    
                        <a id="create-custom-plan" style="cursor:pointer;" class="create-plan-button text-white text-decoration-none">  Create Your Own Plan<p> Minimum Value ₹1000 per Week</p></a>
<!--
                        <a href="compare-plan.php" class="new-compare text-white text-center text-decoration-none">
                  
                        Compare Plans</a>
-->
                    
                </div>
            </div>
        <!-- footer above section  -->
        <div class="footer-above-sec">
            <div class="mb-2">
                <div class="container">
                    <div class="d-flex flex-row">  
                        <div>                                       
                            <!-- Image -->
                            <img src="<?= base_url('assets/images/footer2.png')?>" alt="Desktop Image" class="desktop-image pt-4">
                            <img src="<?= base_url('assets/images/footer-phn.png')?>" alt="Mobile Image" class="mobile-image">                             
                        </div>  
                        <div class="footer-above-cont">              
                            <div class="d-flex flex-column align-items-center justify-content-center">
                                <!-- Text content -->
                                <h2>Sign Up Now</h2> 
                                <h3>Get One Week</h3> 
                                <h1>FREE</h1>   
                                <button class="click-here-btn">Click Here</button>   
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
        <?php include 'include/footer-main.php' ?>
    </div>
    </body>
    <script>
    var acc = document.getElementsByClassName("accordion");
var i;
for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    /* Toggle between adding and removing the "active" class,
    to highlight the button that controls the panel */
    this.classList.toggle("active");

    /* Toggle between hiding and showing the active panel */
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}
</script>
</html>


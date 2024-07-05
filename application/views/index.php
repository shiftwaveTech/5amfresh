<html>
    <head>
       <title>Freshoo</title>
       <meta name="description" content="">
    </head>
    <body>
        <div class="modal mobMenu animate__animated animate__slideInLeft" id="mob-menu">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">  
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fas fa-times"></i></button>
                        <div class="nav-bar">
                        <div class="link-1"><a href="#about_calling" class="navlink navlink-close">About</a></div>
                        <div class="link-1"><a href="#plan_calling" class="navlink navlink-close">Plans</a></div>
                        <div class="link-1"><a href="#contact_calling" class="navlink navlink-close">Contact</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
        <div class="banner-section">
          <div class="banner-content">
              <h1>Tomatoes Price<span class="banner-text">as on 27 Feb 2024, Vizag</span></h1>
             <div class="price-plate">
                 <span>OUR PRICE</span>
                 <span>₹18/KG*</span>
             </div>
             <div class="price-plate2">
                 <span>Instamart</span>
                 <span>₹22/KG*</span>
             </div>
             <div class="price-plate2">
                 <span>Bigbasket</span>
                 <span>₹24/KG*</span>
             </div>
             <div class="price-plate2">
                 <span>Rythu Bazaar</span>
                 <span>₹20/KG*</span>
             </div>
             
              
          </div>
        </div>
       
        <div class="ab-freshoo">
            <div class="container" id="about_calling">
                    <div class="ab-content">
                        <h2>About <span>Freshoo</span></h2>
                        <p>Welcome to Freshoo, a Vizag startup connecting farmers directly to your home, cutting out unnecessary intermediaries. Our weekly plans offer a variety of fresh vegetables for all household sizes, promoting a healthy lifestyle with competitive prices by eliminating middlemen.</p>
                    </div>
            </div>
            <div>
            <img class="leaf1" src="<?= base_url('assets/images/leaf1.png')?>" alt="">
            </div>
            <div class="plan-section" id="plan_calling">
                <h2>Pick a plan that <span> suits your family</span></h2>
                <br>
                <div class="row">
                
                    <div class="col-6 col-md-3 plan-main">
                    <a class="text-decoration-none"> 
                       <div class="plan">
                        <?php $plan1 = $this->data['plans'][0];
                        $plan_name = $plan1->plan_name;
                        if (preg_match('/([a-zA-Z\s]+)(\d+)/', $plan_name, $matches)) {
                            $plan_text = trim($matches[1]);
                            $plan_number = $matches[2];
                        }
                      ?>
                           <h3><?=$plan_text?> <span class=""><?=$plan_number?></span><img src="<?= base_url('assets/images/icon-399.png') ?>" class="icon-399"></h3>
                            <p class="pg-1"><?=$plan1->plan_varaities_veggies?> Varieties of Veggies</p>
                            <p class="pg-2">Approx weight around <?=$plan1->veggies_weight?></p>
                            <div class="plan-price">
                                <h3>₹<?=$plan_number?><p>Per Week</p></h3>
                                <p class="mt-1 text-dark">Recommended for 2 adults</p>
                            </div>
                            <img src="<?= base_url('assets/images/veg-plan1.png')?>" width="100%" alt="">
                       </div>
                       <a class="text-white text-decoration-none"> 
                       <button data-id="1" plan-cost="<?=$plan_number?>" class="selOfferDiv">
                          CLICK HERE<span>For more information</span>
                       </button>
                       </a>
                       </a>
                    </div>
                
              
                    <div class="col-6 col-md-3 plan-main plan-main-2">
                    <a class="text-decoration-none">
                       <div class="plan plan2">
                       <?php $plan2 = $this->data['plans'][1];
                        $plan_name = $plan2->plan_name;
                        if (preg_match('/([a-zA-Z\s]+)(\d+)/', $plan_name, $matches)) {
                            $plan_text = trim($matches[1]);
                            $plan_number = $matches[2];
                        }
                      ?>
                           <h3><?=$plan_text?><span class=""><?=$plan_number?></span><img src="<?= base_url('assets/images/icon-599.png') ?>" class="icon-599"></h3>
                            <p class="pg-1"><?=$plan2->plan_varaities_veggies?> Varieties of Veggies</p>
                            <p class="pg-2">Approx weight around <?=$plan2->veggies_weight?></p>
                            <div class="plan-price plan-price-2">
                                <h3>₹<?=$plan_number?><p>Per Week</p></h3>
                                <p class="mt-1 text-dark">Recommended for 2 adults</p>
                            </div>
                            <img src="<?= base_url('assets/images/veg-plan2.png')?>" width="100%" alt="">
                       </div>
                       <a class="text-white text-decoration-none">
                        <button  data-id="2" plan-cost="<?=$plan_number?>" class="selOfferDiv">
                                CLICK HERE<span>For more information</span>

                        </button>
                       </a>
                       </a>
                    </div>
               
             
                    <div class="col-6 col-md-3 plan-main plan-main-3">
                    <aclass="text-decoration-none">
                       <div class="plan plan3">
                       <?php $plan3 = $this->data['plans'][2];
                        $plan_name = $plan3->plan_name;
                        if (preg_match('/([a-zA-Z\s]+)(\d+)/', $plan_name, $matches)) {
                            $plan_text = trim($matches[1]);
                            $plan_number = $matches[2];
                        }
                      ?>
                           <h3><?=$plan_text?> <span class=""><?=$plan_number?></span><img src="<?= base_url('assets/images/icon-799.png')?>" class="icon-799"></h3>
                            <p class="pg-1"><?=$plan3->plan_varaities_veggies?> Varieties of Veggies</p>
                            <p class="pg-2">Approx weight around <?=$plan3->veggies_weight?></p>
                            <div class="plan-price plan-price-3">
                                <h3>₹<?=$plan_number?><p>Per Week</p></h3>
                                <p class="mt-1 text-dark">Recommended for 2 adults</p>
                            </div>
                            <img src="<?= base_url('assets/images/veg-plan3.png')?>" width="100%" alt="">
                       </div>
                       <a class="text-white text-decoration-none">
                        <button data-id="3" plan-cost="<?=$plan_number?>" class="selOfferDiv">
                                CLICK HERE<span>For more information</span>

                        </button>
                       </a>
                       </a>
                    </div>
                
            
                    <div class="col-6 col-md-3 plan-main plan-main-4">
                    <a class="text-decoration-none">
                       <div class="plan plan4">
                       <?php $plan4 = $this->data['plans'][3];
                        $plan_name = $plan4->plan_name;
                        if (preg_match('/([a-zA-Z\s]+)(\d+)/', $plan_name, $matches)) {
                            $plan_text = trim($matches[1]);
                            $plan_number = $matches[2];
                        }
                      ?>
                           <h3><?=$plan_text?> <span class=""><?=$plan_number?></span><img src="<?= base_url('assets/images/icon-999.png') ?>"
 class="icon-999"></h3>
                            <p class="pg-1"><?=$plan4->plan_varaities_veggies?> Varieties of Veggies</p>
                            <p class="pg-2">Approx weight around <?=$plan4->veggies_weight?></p>
                            <div class="plan-price plan-price-4">
                                <h3>₹<?=$plan_number?><p>Per Week</p></h3>
                                <p class="mt-1 text-dark">Recommended for 2 adults</p>
                            </div>
                            <img src="<?= base_url('assets/images/veg-plan4.png')?>" width="100%" alt="">
                       </div>
                       <a class="text-white text-decoration-none">
                        <button data-id="1" plan-cost="<?=$plan_number?>" class="selOfferDiv">
                                CLICK HERE<span>For more information</span>

                        </button>
                       </a>
                       </a>
                    </div>
                
                
                </div>        
            </div>
        <div>
       
                <img class="leaf2" src="<?= base_url('assets/images/leaf2.png')?>" alt="">
             </div> 
        </div>

        <div class="margins-of-sec">
            <div class="container button-style-1 mt-4 mb-4">             
                <a id="create-custom-plan" style="cursor:pointer;" class="create-plan-button text-white text-decoration-none">  Create Your Own Plan<p> Minimum Value ₹1000 per Week</p></a>              
                <a class="compare-button text-white text-center text-decoration-none pt-3"> Compare Plans</a>                
            </div>
        </div>

        <div class="margins-of-sec">
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
            <div class="container pb-3">
           
                <div id="accordion">
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


        <!-- footer above section  -->
        <div class="footer-above-sec" id="contact_calling">
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



            
    <!-- <?php include 'include/footer-main.php' ?> -->
        
    <script>
    
    $('.navlink-close').click(function(){
        $('.btn-close').trigger('click');
    } )  
    
    $('#menu-toggle4').click(function(){
    $('#menu4').toggle();
    }) 
        
        
    
    </script>
    </body>
</html>
<link rel="stylesheet" href="<?= base_url('assets/css/sub-plan-screen.css')?>">
<?php 

    $selOfferId = $this->session->userdata('logged_offerDivId');
    $cost = $this->session->userdata('logged_offerCost') ? $this->session->userdata('logged_offerCost') : '399'; 
    $weight = $this->session->userdata('logged_plan_weight')? $this->session->userdata('logged_plan_weight') : '7';
    $recommended = $this->session->userdata('logged_recommended')? $this->session->userdata('logged_recommended') : 'family 2+1';
    $varieties = $this->session->userdata('logged_varieties')? $this->session->userdata('logged_varieties') : '15';

?>

       <section class="plan-1">
           <div class="container">
               <div class="row align-items-center">
                  
                   <div class="col-md-3 col-6 order-2 order-md-1 text-center custom-plan">
                     <img src="<?= base_url('assets/images/icon') ?>-<?=$cost?>.png"  style="height:60px;"> 
                   </div>
                   
                       <div class=" col-md-6 col-12 order-1 order-md-2 text-center pb-3 pt-3 plan-btns-1">
                         <a href="" class="plan-btn selOfferDiv" varieties="15" data-id="1" recommended="family 2+1" plan-weight="7" plan-cost="399">₹399</a>
                         <a href="" class="plan-btn selOfferDiv" varieties="17" data-id="2" recommended="family 4+1" plan-weight="11" plan-cost="599">₹599</a>
                         <a href="" class="plan-btn selOfferDiv" varieties="17" data-id="3" recommended="family 4+2" plan-weight="17" plan-cost="799">₹799</a>
                         <a href="" class="plan-btn selOfferDiv" varieties="17" data-id="4" recommended="large family" plan-weight="23" plan-cost="999">₹999</a>
                         <a href="<?= base_url('custom-plan')?>" class="plan-btn">Custom</a>
                      </div>
                   
                   <div class="col-md-3 col-6 order-3 text-center plans">
                       <div class="plan-price-1 custom-plan ">
                        <h3><span style="font-family: 'Arial';"> ₹</span><?=$cost?> </h3>
                       <p>Per Week, Billed Monthly</p>
                       </div>
                   </div>
                  
               </div>
           </div>
       </section> 
	   
       <div class="container">
			<div class="d-flex align-items-center justify-content-center text-center pt-4">
				<div class="custom-plan">
					<h2><?=$varieties?> Varieties of	<span>Vegetables</span></h2>
					<h5>(Approx Weight : <?=$weight?>kgs)</h5>
					<p>Experience the freshest and highest quality vegetables with our Plan <?=$cost?>. Perfectly designed for a <?=$recommended?> or more, this plan includes a diverse selection of <?=$varieties?> varieties of vegetables with a total approximate weight of <?=$weight?> kgs. Enjoy the convenience of having fresh vegetables delivered to your doorstep every week.</p>
				</div>
			</div> 
		</div>
		
       <!-- subscribe-page-select-plan-1 -->
       <div class="margins-of-sec-1">
            <div class="container button-style-1 subscribe">
            <a  class="text-white text-decoration-none"> 
                <button class="create-plan-button create-plan-button-1">
                   SUBSCRIBE NOW<p> and get one week free</p>
                </button>
            </a>
            </div>
        </div>
		
     <section class="plan-padd">
         <div class="container mt-4">
            
            <div class="d-flex align-items-center justify-content-center text-center">
                    <div class="custom-plan">
                        <h2>Must Have <span>Vegetables</span></h2>
                        <h5>(All Included)</h5>
                        <p>Our plan ensures you get a complete mix of essential vegetables that are a staple in every kitchen.</p>
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
	 
     <section  class="plan-padd">
                <div class="container mt-3">
                    <div class="d-flex align-items-center justify-content-center text-center">
                        <div class="custom-plan">
                            <h2>Other <span>Vegetables</span></h2>
                            <h5>(Three Included - 250 gms Each)</h5>
                            <p>Vegetables are selected based on seasonal availability. We will ensure to include any 3 varieties from this category.</p>
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
		
       <section  class="plan-padd">
            <div class="container mt-3">
                
                <div class="d-flex align-items-center justify-content-center text-center">
                    <div class="custom-plan">
                        <h2>leafy <span>Vegetables</span></h2>
                        <h5>(One Included - 250gms)</h5>
                        <p>Get a dose of fresh leafy greens to keep your meals healthy and vibrant.</p>
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
		
        <section  class="plan-padd">
            <div class="container mt-3">
                <div class="d-flex align-items-center justify-content-center text-center">
                    <div class="custom-plan">
                        <h2>Root <span>Vegetables</span></h2>
                        <h5>(One Included - 250gms)</h5>
                        <p>Add a crunchy and nutritious touch to your dishes with root vegetables.</p>
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
        
        <section  class="plan-padd">
            <div class="container mt-3">
                    <div class="d-flex align-items-center justify-content-center text-center">
                        <div class="custom-plan">
                                <h2>Squash <span>Vegetables</span></h2>
                                <h5>(One Included - 250gms)</h5>
                                <p>Enhance your culinary creations with versatile squash vegetables.</p>
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
		
        <section  class="plan-padd">
            <div class="container mt-3">
                <div class="d-flex align-items-center justify-content-center text-center">
                    <div class="custom-plan">
                        <h2>Podded <span>Vegetables</span></h2>
                        <h5>(One Included - 250gms) Each</h5>
                        <p>Incorporate the freshness of podded vegetables into your weekly meals.</p>
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
                            <div class="col-md-6" >
                                <!-- Text content -->
                                <h2><span>Why Choose Plan <?=$cost?>?</span></h2>
                                
                        <div class="mt-4">
                           <div class="d-flex flex-row justify-content-start">
                             <i class='fa fa-check-circle why-icon-style'></i>
                             <p class=""><b>Convenient Weekly Deliveries:</b> Fresh vegetables delivered to your doorstep every week.</p>
                          </div>
                          <div class="d-flex flex-row justify-content-start">
                             <i class='fa fa-check-circle why-icon-style'></i>
                             <p class=""><b>High-Quality Produce:</b> Sourced directly from farmers and wholesalers to ensure freshness and quality.</p>
                          </div>
                          <div class="d-flex flex-row justify-content-start">
                             <i class='fa fa-check-circle why-icon-style'></i>
                             <p class=""><b>Diverse Selection:</b> <?=$varieties?> varieties of vegetables to meet all your dietary needs.</p>
                          </div>
                          <div class="d-flex flex-row justify-content-start">
                             <i class='fa fa-check-circle why-icon-style'></i>
                             <p class=""><b>Affordable Pricing:</b> Get premium vegetables at an economical price of ₹<?=$cost?> per week, billed monthly.</p>
                          </div>
                        </div>
                                
                                
                                
                            </div>
                            <div class="col-md-6">
                    
            
                                <!-- Image -->
                                    <img src="<?= base_url('assets/images/why-img.png')?>" alt="Responsive Image" class="why-container-side-img">
                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>             

            <div>
              <div class="col-12 text-center">
                  <h3>Start enjoying fresh, nutritious vegetables with Plan <?=$cost?> today!</h3>
              </div>
                

                <div class="container button-style-1 mt-4 mb-4 pb-3">
                    <a href="<?= base_url('custom-plan')?>" class="create-plan-button text-white text-decoration-none">  Create Your Own Plan<p> Minimum Value ₹1000 per Week</p></a> 
                    
                </div>
            </div>

        <!-- footer above section  -->
             <div class="footer-above-sec" id="contact_calling">
            <div>
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

    var loggedOfferCost = <?php echo json_encode($cost); ?>;
    document.addEventListener("DOMContentLoaded", function() {
        var plans = document.querySelectorAll('.plan-btn.selOfferDiv');
        
        plans.forEach(function(plan) {
            var planCost = plan.getAttribute('plan-cost');
            
            if (loggedOfferCost == 399 && (planCost == 399)) {
                plan.style.display = 'none';
            } else if (loggedOfferCost == 599 && (planCost == 599)) {
                plan.style.display = 'none';
            } else if (loggedOfferCost == 799 && (planCost == 799)) {
                plan.style.display = 'none';
            }else if (loggedOfferCost == 999 && (planCost == 999)) {
                plan.style.display = 'none';
            }
        });
    });

</script>

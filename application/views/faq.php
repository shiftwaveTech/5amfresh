<html>
    <head>
       <title>Freshoo</title>
       <meta name="description" content="">
        <?php //include 'include/header.php' ?>
        <link rel="stylesheet" href="<?= base_url('assets/css/sub-plan-screen.css')?>">
    </head>
   
    <body>
     <?php $selOfferId = $this->session->userdata('logged_offerDivId');
      $cost = $this->session->userdata('logged_offerCost'); ?>
    <div>
<?php //include 'include/menu-sec.php' ?>
</div>
       

       <!-- accordions  -->

            <div class="accord-sec faq-acc">
                <div class="container">
            
                    <div id="accordion" class="pb-2">
                    <h2>FAQ's</h2>
                    
                        <div class="card border-0 wow fadeInUp accord-inner">
                            <div class="card-header p-0 border-0" id="heading-240">
                                <button class="btn btn-link accordion-title border-0 collapsed" data-toggle="collapse" data-target="#collapse-240" aria-expanded="false" aria-controls="#collapse-240"><i class="fas fa-plus text-center d-flex align-items-center justify-content-center h-100"></i> What are the different weekly plans available at 5am Fresh?                      </button>
                            </div>
                            <div id="collapse-240" class="collapse " aria-labelledby="heading-240" data-parent="#accordion">
                                <div class="card-body accordion-body">
                                    <p>At 5am Fresh, we offer four weekly plans:</p>
                                    <ol>
                                        <li> ₹399 per week: Includes 15 varieties of vegetables totaling 7kgs, recommended for a family of 2+1</li>
                                        <li> ₹599 per week: Includes 17 varieties of vegetables totaling 11kgs, recommended for a family of 2+2.</li>
                                        <li> ₹799 per week: Includes 17 varieties of vegetables totaling 17kgs, recommended for a family of 4+2.</li>
                                        <li>₹999 per week: Includes 17 varieties of vegetables totaling 23kgs, recommended for large families.</li>
                                    </ol>                                    
                                    <p>Total weights are approximate.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card accord-card border-0 wow fadeInUp accord-inner">
                            <div class="card-header p-0 border-0" id="heading-241">
                                <button class="btn btn-link accordion-title border-0 collapsed" data-toggle="collapse" data-target="#collapse-241" aria-expanded="false" aria-controls="#collapse-241"><i class="fas fa-plus text-center d-flex align-items-center justify-content-center h-100"></i>What vegetables are included in each plan? </button>
                            </div>
                            <div id="collapse-241" class="collapse " aria-labelledby="heading-241" data-parent="#accordion">
                                <div class="card-body accordion-body">
                                    <p>Each plan includes essential vegetables like Onion, Garlic, Ginger, Tomatoes, Potatoes, Curry Leaves, Green Chillies, and Coriander. Additionally, specific categories such as Leafy Vegetables, Root Vegetables, Squash Vegetables, Podded Vegetables, and Other Vegetables contain a variety of options tailored to each plan.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card border-0 wow fadeInUp accord-inner">
                            <div class="card-header p-0 border-0" id="heading-242">
                                <button class="btn btn-link accordion-title border-0 collapsed" data-toggle="collapse" data-target="#collapse-242" aria-expanded="false" aria-controls="#collapse-242"><i class="fas fa-plus text-center d-flex align-items-center justify-content-center h-100"></i>Can I choose the vegetables in my delivery? </button>
                            </div>
                            <div id="collapse-242" class="collapse " aria-labelledby="heading-242" data-parent="#accordion">
                                <div class="card-body accordion-body">
                                <p>No, customers do not select specific vegetables. We pack the vegetables according to the chosen plan and deliver them on the selected day. You can change your delivery day up to one day before your scheduled delivery.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card border-0 wow fadeInUp accord-inner">
                            <div class="card-header p-0 border-0" id="heading-243">
                                <button class="btn btn-link accordion-title border-0 collapsed" data-toggle="collapse" data-target="#collapse-243" aria-expanded="false" aria-controls="#collapse-243"><i class="fas fa-plus text-center d-flex align-items-center justify-content-center h-100"></i> What if I need a custom vegetable plan? </button>
                            </div>
                            <div id="collapse-243" class="collapse " aria-labelledby="heading-243" data-parent="#accordion">
                                <div class="card-body accordion-body">
                                    <p>Customers with special requirements can create a custom plan with a weekly value exceeding ₹1000. In this plan, you can choose the number of varieties and weight from each category, and the price will be calculated accordingly.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card border-0 wow fadeInUp accord-inner">
                            <div class="card-header p-0 border-0" id="heading-244">
                                <button class="btn btn-link accordion-title border-0 collapsed" data-toggle="collapse" data-target="#collapse-244" aria-expanded="false" aria-controls="#collapse-244"><i class="fas fa-plus text-center d-flex align-items-center justify-content-center h-100"></i>How does delivery and billing work?</button>
                            </div>
                            <div id="collapse-244" class="collapse " aria-labelledby="heading-244" data-parent="#accordion">
                                <div class="card-body accordion-body">
                                    <p>We procure fresh vegetables daily at 5am, clean and pack them thoroughly, and deliver them on the same day. If you are unavailable for delivery, we will deliver your order the next day. Billing is done monthly based on the chosen weekly plan.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card border-0 wow fadeInUp accord-inner">
                            <div class="card-header p-0 border-0" id="heading-245">
                                <button class="btn btn-link accordion-title border-0 collapsed" data-toggle="collapse" data-target="#collapse-245" aria-expanded="false" aria-controls="#collapse-245"><i class="fas fa-plus text-center d-flex align-items-center justify-content-center h-100"></i>What if I want to cancel my subscription?</button>
                            </div>
                            <div id="collapse-245" class="collapse " aria-labelledby="heading-245" data-parent="#accordion">
                                <div class="card-body accordion-body">
                                    <p>You can cancel your subscription at any time, and the balance amount will be credited back to you without any questions asked.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card border-0 wow fadeInUp accord-inner">
                            <div class="card-header p-0 border-0" id="heading-246">
                                <button class="btn btn-link accordion-title border-0 collapsed" data-toggle="collapse" data-target="#collapse-246" aria-expanded="false" aria-controls="#collapse-246"><i class="fas fa-plus text-center d-flex align-items-center justify-content-center h-100"></i>Are there any additional charges like GST, packing charges, or delivery fees?</button>
                            </div>
                            <div id="collapse-246" class="collapse " aria-labelledby="heading-246" data-parent="#accordion">
                                <div class="card-body accordion-body">
                                    <p>No, there are no additional charges such as GST, packing fees, or delivery charges. The price you see for the weekly plans is allinclusive.</p>
                                </div>
                            </div>
                        </div>
                         <div class="card border-0 wow fadeInUp accord-inner">
                            <div class="card-header p-0 border-0" id="heading-247">
                                <button class="btn btn-link accordion-title border-0 collapsed" data-toggle="collapse" data-target="#collapse-247" aria-expanded="false" aria-controls="#collapse-247"><i class="fas fa-plus text-center d-flex align-items-center justify-content-center h-100"></i>How do you ensure the freshness of the vegetables?</button>
                            </div>
                            <div id="collapse-247" class="collapse " aria-labelledby="heading-247" data-parent="#accordion">
                                <div class="card-body accordion-body">
                                    <p>We maintain a warehouse temperature of 5 degrees Celsius to ensure the vegetables remain fresh until delivery.</p>
                                </div>
                            </div>
                        </div>
                         <div class="card border-0 wow fadeInUp accord-inner">
                            <div class="card-header p-0 border-0" id="heading-248">
                                <button class="btn btn-link accordion-title border-0 collapsed" data-toggle="collapse" data-target="#collapse-248" aria-expanded="false" aria-controls="#collapse-248"><i class="fas fa-plus text-center d-flex align-items-center justify-content-center h-100"></i>What if the vegetables delivered are not up to the mark?</button>
                            </div>
                            <div id="collapse-248" class="collapse " aria-labelledby="heading-248" data-parent="#accordion">
                                <div class="card-body accordion-body">
                                    <p>At 5am Fresh, we prioritize delivering fresh and highquality vegetables. We conduct multiple quality checks to ensure that only the best produce reaches your doorstep. In the rare event that you receive vegetables that do not meet our standards, we offer a replacement on the same day or the following day. Your satisfaction is paramount to us, and we take your feedback seriously to ensure any issues are promptly addressed and prevented in the future.</p>
                                </div>
                            </div>
                        </div>
                         <div class="card border-0 wow fadeInUp accord-inner">
                            <div class="card-header p-0 border-0" id="heading-249">
                                <button class="btn btn-link accordion-title border-0 collapsed" data-toggle="collapse" data-target="#collapse-249" aria-expanded="false" aria-controls="#collapse-249"><i class="fas fa-plus text-center d-flex align-items-center justify-content-center h-100"></i>What if vegetable prices increase significantly in the market?</button>
                            </div>
                            <div id="collapse-249" class="collapse " aria-labelledby="heading-249" data-parent="#accordion">
                                <div class="card-body accordion-body">
                                    <p>Occasionally, vegetable prices may rise sharply due to fluctuations in demand or other factors. In such cases, we will still fulfill your order, but the quantity of certain vegetables may be adjusted based on the current market price. For example, if your plan includes 2 kg of tomatoes per week and the price of tomatoes increases from Rs 30 to Rs 100 per kg, we may adjust your delivery to include 1 kg of tomatoes while maintaining the overall value and variety of your selected plan.</p>
                                </div>
                            </div>
                        </div>
                         <div class="card border-0 wow fadeInUp accord-inner">
                            <div class="card-header p-0 border-0" id="heading-250">
                                <button class="btn btn-link accordion-title border-0 collapsed" data-toggle="collapse" data-target="#collapse-250" aria-expanded="false" aria-controls="#collapse-250"><i class="fas fa-plus text-center d-flex align-items-center justify-content-center h-100"></i>What if some vegetables are not available due to being out of season?</button>
                            </div>
                            <div id="collapse-250" class="collapse " aria-labelledby="heading-250" data-parent="#accordion">
                                <div class="card-body accordion-body">51
                                    <p>Seasonal variations affect the availability of certain vegetables. Since our plans are designed to offer a variety of vegetables, if a specific vegetable is not available due to being out of season, we will substitute it with other available vegetables that are in season. Each plan includes multiple types of vegetables to ensure you receive a diverse and fresh selection based on seasonal availability.</p>
                                </div>
                            </div>
                        </div>
                         <div class="card border-0 wow fadeInUp accord-inner">
                            <div class="card-header p-0 border-0" id="heading-251">
                                <button class="btn btn-link accordion-title border-0 collapsed" data-toggle="collapse" data-target="#collapse-251" aria-expanded="false" aria-controls="#collapse-251"><i class="fas fa-plus text-center d-flex align-items-center justify-content-center h-100"></i>Can I change my delivery day?</button>
                            </div>
                            <div id="collapse-251" class="collapse " aria-labelledby="heading-251" data-parent="#accordion">
                                <div class="card-body accordion-body">
                                    <p>Yes, you can change your delivery day by notifying us at least 12 hours in advance. Simply select your new preferred delivery day, and we will ensure your order is delivered accordingly. Your subsequent weekly deliveries will also be scheduled for the new chosen day.</p>
                                </div>
                            </div>
                        </div>
                         <div class="card border-0 wow fadeInUp accord-inner">
                            <div class="card-header p-0 border-0" id="heading-252">
                                <button class="btn btn-link accordion-title border-0 collapsed" data-toggle="collapse" data-target="#collapse-252" aria-expanded="false" aria-controls="#collapse-252"><i class="fas fa-plus text-center d-flex align-items-center justify-content-center h-100"></i>What if I don't eat specific vegetables?</button>
                            </div>
                            <div id="collapse-252" class="collapse " aria-labelledby="heading-252" data-parent="#accordion">
                                <div class="card-body accordion-body">
                                    <p>During signup, you have the option to specify any vegetables that you do not eat. We will ensure that those vegetables are not included in your weekly deliveries.</p>
                                </div>
                            </div>
                        </div>
                         <div class="card border-0 wow fadeInUp accord-inner">
                            <div class="card-header p-0 border-0" id="heading-253">
                                <button class="btn btn-link accordion-title border-0 collapsed" data-toggle="collapse" data-target="#collapse-253" aria-expanded="false" aria-controls="#collapse-253"><i class="fas fa-plus text-center d-flex align-items-center justify-content-center h-100"></i>What time of the day do you deliver?</button>
                            </div>
                            <div id="collapse-253" class="collapse " aria-labelledby="heading-253" data-parent="#accordion">
                                <div class="card-body accordion-body">
                                    <p>We deliver fresh vegetables in the morning to ensure you receive the freshest produce possible. Deliveries typically occur between 6 AM and 9 AM, allowing you to start your day with fresh, highquality vegetables.</p>
                                </div>
                            </div>
                        </div>
                         
                        
                        
                    </div>
                
                </div>
            </div>

            <div>
                <div class="container button-style-1 mt-4 mb-4">
                    <a id="create-custom-plan" style="cursor:pointer;"  class="create-plan-button text-white text-decoration-none">  Create Your Own Plan<p> Minimum Value ₹1000 per Week</p></a>                   
                    <a  class="new-compare text-center padding-top-compare text-white text-decoration-none"> Compare Plans</a>
                    
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
        <?php //include 'include/footer-main.php' ?>
        
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
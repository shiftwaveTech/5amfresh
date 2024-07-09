<link rel="stylesheet" href="<?= base_url('assets/css/plan-style.css')?>">
<?php $selOfferId = $this->session->userdata('logged_offerDivId');
    $cost = $this->session->userdata('logged_offerCost'); ?>

        <section class="plan-1">
            <div class="custom-plan">
                <h2 class="text-center">Subscribe <span>Plan</span></h2>
                <p class="text-center">Fresh Picks Every Day: Join Our Veggie Revolution Now</p>
                <div class="container">
                <div class="row pt-3"  style=" text-align: center;">
                    <h3>Collecting Personal Details and<span> Delivery Information</span></h3>
                    <p>To ensure smooth delivery of your fresh vegetables, please provide us with your personal details and delivery address. We take your privacy seriously and maintain strict confidentiality of your information.</p>
                </div>
                </div>    
                <div class="row plan-sub"> 
                    
                        <div class="col-8 custom-plan">
                            <h2><span>Plan <?=$cost ?></span>  </h2>
                            <p>Recommended for 2 adults</p>
                        </div>
                        <div class="col-4">
                            <div class="plan-price-1 custom-plan">
                                <h2><span> ₹ <?=$cost ?>  </span></h2>
                                <p>(Per Week)</p>
                            </div>
                        </div>                         
                </div>
            </div>
        </section>
        <section >
            <div class="container custom-plan">
                <h4>Personal <span>Details</span></h4>
                <div class="row">
                    <div  class="col-12 col-lg-6">
                    <input id="customer_name" type="text" name="name" placeholder="Name" pattern="[A-Za-z]+"  oninput="this.style.borderColor = '' " onkeypress="return /[a-zA-Z]/.test(event.key)">
                        
                    </div>
                    <div class="  col-12 col-lg-6">
                    <input id="customer_email" type="text" name="email" placeholder="Email" onblur="this.style.borderColor = (this.value === '' || !isValidEmail(this.value)) ? 'red' : ''" oninput="this.style.borderColor = ''">

                    </div>

                    <div  class=" col-12  col-lg-6">
                        <div>                            
                        <input id="customer_phone" maxlength="10" type="text" name="number" placeholder="Phone" pattern="[0-9]*" inputmode="numeric" oninput="this.value = this.value.replace(/[^0-9]/g, ''); this.style.borderColor = ''" onblur="fetchUserData()" onkeypress="if(this.value === '' || this.value.length < 10 || /^[0]{0,3}$/.test(this.value) || /^[0]{10}$/.test(this.value)) { this.style.borderColor = 'red'; }">
                        <label class="d-flex flex-row justify-content-end"><p id="sendOtp" style="cursor:pointer;color:green;margin-top: -51px;z-index: 99;">Send OTP</p></label>
                        <p style="color:green;text-align:center;" id="otpsent"><p>                            
                        </div>
                        
                            <label>(OTP Verification Required)</label>                           
                    </div>
                    <div id="otpDiv" style="display:none;" class=" col-12  col-lg-6">
                            <input id="otpcode" type="text" name="otp" placeholder="Enter OTP"  oninput="this.style.borderColor = ''" required>
                            <label class="d-flex flex-row justify-content-end"><p id="verifyOtp" style="cursor:pointer;color:green;margin-top: -51px;z-index: 99;" >Verify OTP</p></label>
                            <p style="color:green;text-align:center;" id="otpverified"></p>     
                    </div>  
                </div>
            </div>
        </section>
        <section >
            <div  id="addressDiv" style="display:none;" class="container justify-center mt-3">
                <h4>Delivery <span>Address</span></h4>
                <div class="row">
                    <div  class="col-12 col-lg-6">
                        <select class="form-select drp-style" id="validationCustomDropdown" name="leave_type" required="" onblur="if(this.value === 'Select') { this.style.borderColor = 'red'; }" oninput="this.style.borderColor = ''">
                            <option value="Select">Select</option>
                            <option value="Complex">Complex</option>
                            <option value="Siripuram">Siripuram</option>
                            <option value="Allipuram">Allipuram</option>
                            <option value="Jagadamba">Jagadamba</option>
                        </select>

                        <label>(At the moment, our deliveries are limited to these areas)</label>
                    </div>
                    <div  class="  col-12 col-lg-6">
                    <input id="house_no" type="text" name="house" placeholder="House / Apt No" onblur="if(this.value === '') { this.style.borderColor = 'red'; }" oninput="this.style.borderColor = ''">
                    </div>
                    <div  class=" col-12  col-lg-6">
                        <input id="street" type="text" name="Apt" placeholder="Apt Name / Street Details" onblur="if(this.value === '') { this.style.borderColor = 'red'; }" oninput="this.style.borderColor = ''">   
                    </div>
                    <div  class=" col-12  col-lg-6">
                        <input id="landmark" type="text" name="Landmark" placeholder="Landmark" onblur="if(this.value === '') { this.style.borderColor = 'red'; }" oninput="this.style.borderColor = ''">
                    </div>
                        <div  class=" col-12  col-lg-6">
                        <input id="whatsapp_num" type="text" maxlength="10" name="Whatsapp" placeholder="WhatsApp Number" pattern="[0-9]*" inputmode="numeric" oninput="this.value = this.value.replace(/[^0-9]/g, ''); this.style.borderColor = ''" onblur="if(this.value === '' || this.value.length < 10 || /^[0]{0,3}$/.test(this.value) || /^[0]{10}$/.test(this.value)) { this.style.borderColor = 'red'; }">
                    </div>
                    
                </div>
            </div>
            
        </section>
        <div style="display:none" id="detailsButton" class="margins-of-sec">
            <div class="container button-style-1 mt-3 mb-4">
            <!-- subscribe-page-select-day.php   -->
            <a class="text-white text-decoration-none">
                            <button onclick="userDetailsValidation()" class="btn-next"> 
                            NEXT
                            </button>
            </a>
            </div>
        </div>            

    <div class="fresh-bg d-none d-md-block mt-3">
            <div class="why-freshoo">
                <div class="container-fulid">
                    <div class="row align-items-center">                  
                        <div class="col-md-6">
                            <div class="exper-content">
                            <!-- Text content -->
                            <h2 class="heading2">The 5am Fresh <br class="d-none d-md-block">Experience</h2>
                                <div class="icon-content-1">
                                    <div class="icon-exp">
                                        <img src="./assets/images/on-time.png">
                                        <p>Procured <br>5am Daily</p>
                                    </div>
                                        <div class="icon-exp">
                                        <img src="./assets/images/doorstep.png">
                                        <p>Delivered to<br> Doorstep (Free)</p>
                                    </div>
                                        <div class="icon-exp">
                                        <img src="./assets/images/quality-1.png">
                                        <p>100% Cleaned<br> and packed</p>
                                    </div>
                                        <div class="icon-exp">
                                        <img src="./assets/images/live.png">
                                        <p>Live a Healthy<br> Lifestyle</p>
                                    </div>
                                        <div class="icon-exp">
                                        <img src="./assets/images/ethcial.png">
                                            <p>Ethical<br> Sourcing</p>
                                    </div>
                                    <div class="icon-exp">
                                        <img src="./assets/images/price.png">
                                            <p>Lowest<br> Price</p>
                                    </div>
                                    </div> 
                                </div>        
                            
                        </div>
                        <div class="col-md-6">
                            <!-- Image -->
                                <img src="https://www.5amfresh.com/assets/images/exper-fresh.jpg" alt="Responsive Image" class="container-side-img">
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <div>
        <div class="exper-content d-md-none">
                            <!-- Text content -->
            <h2 class="heading2">The 5am Fresh <br>Experience</h2>
                                <div class="icon-content-1">
                                    <div class="icon-exp">
                                        <img src="./assets/images/on-time.png">
                                        <p class="why-sec-content">Procured 5am Daily</p>
                                    </div>
                                        <div class="icon-exp">
                                        <img src="./assets/images/doorstep.png">
                                        <p class="why-sec-content">Delivered to Doorstep (Free)</p>
                                    </div>
                                        <div class="icon-exp">
                                        <img src="./assets/images/quality-1.png">
                                        <p class="why-sec-content">100% Cleaned and packed</p>
                                    </div>
                                        <div class="icon-exp">
                                        <img src="./assets/images/live.png">
                                        <p class="why-sec-content">Live a Healthy Lifestyle</p>
                                    </div>
                                        <div class="icon-exp">
                                        <img src="./assets/images/ethcial.png">
                                            <p class="why-sec-content">Ethical Sourcing</p>
                                    </div>
                                    <div class="icon-exp">
                                        <img src="./assets/images/price.png">
                                            <p class="why-sec-content">Lowest Price</p>
                                    </div>
                                    </div>  
                                    
                                </div>                   
        
    </div>

        <div class="accord-sec">
            <div class="container">
        
                <div id="accordion" class="py-4">
                <h2>FAQ's</h2>
                    <div class="card border-0 wow fadeInUp accord-inner">
                        <div class="card-header p-0 border-0" id="heading-240">
                            <button class="btn btn-link accordion-title border-0 collapsed" data-toggle="collapse" data-target="#collapse-240" aria-expanded="false" aria-controls="#collapse-240"><i class="fas fa-plus text-center d-flex align-items-center justify-content-center h-100"></i>What are the different weekly plans available at 5am Fresh? </button>
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
                            <button class="btn btn-link accordion-title border-0 collapsed" data-toggle="collapse" data-target="#collapse-242" aria-expanded="false" aria-controls="#collapse-242"><i class="fas fa-plus text-center d-flex align-items-center justify-content-center h-100"></i>Can I choose the vegetables in my delivery?</button>
                        </div>
                        <div id="collapse-242" class="collapse " aria-labelledby="heading-242" data-parent="#accordion">
                            <div class="card-body accordion-body">
                                <p>No, customers do not select specific vegetables. We pack the vegetables according to the chosen plan and deliver them on the selected day. You can change your delivery day up to one day before your scheduled delivery.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card border-0 wow fadeInUp accord-inner">
                        <div class="card-header p-0 border-0" id="heading-243">
                            <button class="btn btn-link accordion-title border-0 collapsed" data-toggle="collapse" data-target="#collapse-243" aria-expanded="false" aria-controls="#collapse-243"><i class="fas fa-plus text-center d-flex align-items-center justify-content-center h-100"></i>What if I need a custom vegetable plan?</button>
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
                </div>                
            </div>
        </div>

<script>
    function isValidEmail(email) {
        var regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return regex.test(email);
    }
</script>

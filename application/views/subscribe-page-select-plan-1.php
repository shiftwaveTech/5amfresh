<html>
    <head>
       <title>Freshoo</title>
       <meta name="description" content="">
        <link rel="stylesheet" href="<?= base_url('assets/css/plan-style.css')?>">
    </head>
    <div>
    </div>
    <?php $selOfferId = $this->session->userdata('logged_offerDivId');
      $cost = $this->session->userdata('logged_offerCost'); ?>
    <body>    
            <section class="plan-1">
                <div class="custom-plan">
                   <h2 class="text-center">Subscribe <span>Plan</span></h2>
                    <p class="text-center">Fresh Picks Every Day: Join Our Veggie Revolution Now</p>
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
                                        <img src="<?=base_url('assets/images/why-img.png')?>" alt="Responsive Image" class="why-container-side-img">
                                
                                </div>
                            </div>
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
            <?php //include 'include/footer-main.php' ?>
    <script>
        function isValidEmail(email) {
            var regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return regex.test(email);
        }
    </script>
    </body>
</html>
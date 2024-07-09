    <style>
   .btn-next{ font-family: "Costa Ptf Demi";border-radius:20px;background-color: #fd632f; color: #fff; border-color:#fd632f;padding: .75rem 7rem; border:none;justify-content: center;font-size: 18px;letter-spacing: 1px;}

    @media (max-width:767px){
            .icon-text p{
                font-size:17px !important;
            }
            .row-new-style{
                display:flex;
                flex-direction:column;
            }
            .pd-style{
            padding: 0 !important;
            }
            .square-icon-style {
            margin-left: 10px;
            flex: 15% !important;
            text-align: center;
           
            padding-top: 7px !important;
        }
        .icon-text p span{
            /* color:#0f9b49; */
            display: block;
            font-size:17px !important;
        }
      
      
        }
        .square-icon-style {
            margin-left: 10px;
            flex: 0%;
            text-align: center;
            padding-top: 14px;
        }
        .drp-style{
            border-radius:30px;
            font-family: "Costa Ptf Demi";
            background-color:white;
            padding:8px 15px;
            border:2px solid grey;
            
        }
        .icon-text p{
            border-radius: 10px 0px 0px 10px !important;
            text-align:left;
            font-size:19px;
            color:#666666;
            
        }
        .icon-text span{
            font-size:20px;
            
        }
       
        
       
        .icon-text p.active{
            border-radius: 10px 0px 0px 10px !important;
            background-color: rgb(15, 155, 73);
            color: white;
            border: none;
        }
        
        .active {
            background-color: rgb(15, 155, 73);
            color: white !important;
            opacity: 1;
            margin: 0;
            /* padding-top: 15px !important; */
            border-radius: 10px;
        }

        .pd-style{
            padding: 2px 50px ;
        }
        .custom-plan h4{
            font-size:21px;
            color:#666666;
            font-family:"Costa Ptf Demi";
            margin-bottom:0;
        }
    </style>
</head>
<body style="backgorund-color:hsl(0deg 0% 95.69%)">
<div>
</div>

<section>
    <div class="mt-4">
        <div class="container">
        <div class="d-flex align-items-center justify-content-center text-center">
            <div class="custom-plan">
                <h2>Select<span> Offer</span></h2>
                <p>To make your experience with 5am Fresh even more rewarding, we are pleased to offer special discounts for first time customers. Choose an offer below that best suits your needs:</p>
            </div>
        </div>
        </div>    
        <?php $cost = $this->session->userdata('logged_offerCost'); ?>
        <div class="">
            <div class="button-style-1 mb-4 mt-2 row-new-style pd-style">
                <div class="col-12 col-md-6 custom-plan">             
                    <h2>Your Selected <span> Plan</span></h2>   
                </div> 
                <input id="dummyWeeklyPlan" type="hidden" value="<?=$cost?>">               
                <div class="col-8 col-md-4" style="padding: 0 14px;">
                    <select class="form-select drp-style offerpageWeeklyPlan" id="validationCustomDropdown" name="leave_type" required="">                    
                        <option value="399" <?=($cost == "399") ? "selected" : ""?>>Weekly ₹399</option>
                        <option value="599" <?=($cost == "599") ? "selected" : ""?>>Weekly ₹599</option>
                        <option value="799" <?=($cost == "799") ? "selected" : ""?>>Weekly ₹799</option>
                        <option value="999" <?=($cost == "999") ? "selected" : ""?>>
                        Weekly ₹999
                        </option>
                    </select>
                </div>
            </div>
        </div>
        

    </div>
</section>

<section>
    <div class="d-flex align-items-center justify-content-center text-center">
        <div class="col-12 col-md-4 custom-plan">             
            <h2>Available <span> Offers </span></h2>   
        </div>
    </div>
    <div class="row mb-3 d-flex align-items-center justify-content-center text-center">              
        <div class="col-12 col-md-9 mt-2">
            <div class="input-group-text-style">
                <div class="icon-text selectOfferPlan" id="iconText1">
                    <input type="hidden" value="Monthly">
                    <p>Subscribe for a Monthly Plan <br><span id='monthlyofferPrice'>Get One Week Free(Worth ₹<?=$cost?>)</span></p>
                    <i class="fas fa-check-square square-icon-style" id="colorChangeIcon"></i>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-9 mt-2">
            <div class="input-group-text-style">
                <div class="icon-text selectOfferPlan" id="iconText2">
                    <input type="hidden" value="6 Months">
                    <p>Subscribe for a 6 Months Plan <br><span id='sixmonthsofferPrice'>Get One Week Free(Worth ₹<?=$cost*4?>)</span></p>
                    <i class="fas fa-check-square square-icon-style" id="colorChangeIcon"></i>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-9 mt-2">
            <div class="input-group-text-style">
                <div class="icon-text selectOfferPlan" id="iconText3">
                    <input type="hidden" value="Yearly">
                    <p>Subscribe for a Yearly Plan <br><span id='yearlyofferPrice'>Get One Week Free(Worth ₹<?=$cost*8?>)</span></p>
                    <i class="fas fa-check-square square-icon-style" id="colorChangeIcon"></i>
                </div>
            </div>
        </div>                 
    </div>

    
    <div class="d-flex align-items-center justify-content-center pd-style">
        <div class="col-8 col-md-4 custom-plan">             
            <h4>Price Per Week</h4>   
        </div>
        <div class="col-4 col-md-6 custom-plan text-end">             
            <h2 id='weeklyPlanPrice'>₹<?=$cost?></h2>   
        </div>
    </div>

    <div class="d-flex align-items-center justify-content-center pd-style">
        <div class="col-8 col-md-4 custom-plan">             
            <h4>Plan Total Price</h4>   
            <p id="offerDiscountWeeks"></p>
        </div>
        <div class="col-4 col-md-6 custom-plan text-end" style="margin-top:-15px">             
            <h2 id="totalPrice"></h2>   
        </div>
    </div>
          
    <div class="margins-of-sec">
    <p id="notSelectOffer-error" style="color:red; text-align:center;"></p>
                <div class="container button-style-1 mb-4">
                <a class="text-white text-decoration-none">
                                <button onclick="selectedOfferPage()" class="btn-next"> 
                                NEXT
                                </button>
                </a>
                </div>
            </div>

    </section>

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
                            <button class="btn btn-link accordion-title border-0 collapsed" data-toggle="collapse" data-target="#collapse-241" aria-expanded="false" aria-controls="#collapse-241"><i class="fas fa-plus text-center d-flex align-items-center justify-content-center h-100"></i>What vegetables are included in each plan?</button>
                        </div>
                        <div id="collapse-241" class="collapse " aria-labelledby="heading-241" data-parent="#accordion">
                            <div class="card-body accordion-body">
                                 <p>Each plan includes essential vegetables like Onion, Garlic, Ginger, Tomatoes, Potatoes, Curry Leaves, Green Chillies, and Coriander. Additionally, specific categories such as Leafy Vegetables, Root Vegetables, Squash Vegetables, Podded Vegetables, and Other Vegetables contain a variety of options tailored to each plan.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card border-0 wow fadeInUp accord-inner">
                        <div class="card-header p-0 border-0" id="heading-242">
                            <button class="btn btn-link accordion-title border-0 collapsed" data-toggle="collapse" data-target="#collapse-242" aria-expanded="false" aria-controls="#collapse-242"><i class="fas fa-plus text-center d-flex align-items-center justify-content-center h-100"></i>What if I need a custom vegetable plan?</button>
                        </div>
                        <div id="collapse-242" class="collapse " aria-labelledby="heading-242" data-parent="#accordion">
                            <div class="card-body accordion-body">
                            <p>Customers with special requirements can create a custom plan with a weekly value exceeding ₹1000. In this plan, you can choose the number of varieties and weight from each category, and the price will be calculated accordingly.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card border-0 wow fadeInUp accord-inner">
                        <div class="card-header p-0 border-0" id="heading-243">
                            <button class="btn btn-link accordion-title border-0 collapsed" data-toggle="collapse" data-target="#collapse-243" aria-expanded="false" aria-controls="#collapse-243"><i class="fas fa-plus text-center d-flex align-items-center justify-content-center h-100"></i>How does delivery and billing work?</button>
                        </div>
                        <div id="collapse-243" class="collapse " aria-labelledby="heading-243" data-parent="#accordion">
                            <div class="card-body accordion-body">
                                <p>We procure fresh vegetables daily at 5am, clean and pack them thoroughly, and deliver them on the same day. If you are unavailable for delivery, we will deliver your order the next day. Billing is done monthly based on the chosen weekly plan.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card border-0 wow fadeInUp accord-inner">
                        <div class="card-header p-0 border-0" id="heading-244">
                            <button class="btn btn-link accordion-title border-0 collapsed" data-toggle="collapse" data-target="#collapse-244" aria-expanded="false" aria-controls="#collapse-244"><i class="fas fa-plus text-center d-flex align-items-center justify-content-center h-100"></i>What if I want to cancel my subscription? </button>
                        </div>
                        <div id="collapse-244" class="collapse " aria-labelledby="heading-244" data-parent="#accordion">
                            <div class="card-body accordion-body">
                                 <p>You can cancel your subscription at any time, and the balance amount will be credited back to you without any questions asked.</p>
                            </div>
                        </div>
                    </div>
               
                </div>
            
            </div>
        </div>       


<?php //include 'include/footer-main.php' ?>
<script>
    var selectedIcon = null;

    // Loop through each div with the class 'icon-text'
    for (var i = 1; i <= 3; i++) {
        var divId = 'iconText' + i;
        var iconTextDiv = document.getElementById(divId);

        // Add a click event listener to each 'icon-text' div
        iconTextDiv.addEventListener('click', function () {
            // Remove 'active' class from previously selected icon and reset its styles
            if (selectedIcon) {
                selectedIcon.classList.remove('active');
                var selectedText = selectedIcon.closest('.icon-text').querySelector('.icon-text p');
                if (selectedText) {
                    selectedText.style.backgroundColor = '';
                    selectedText.style.color = '';
                    selectedText.style.border = '';
                }
            }

            // Toggle the 'active' class on the clicked icon
            var icon = this.querySelector('.fas');
            icon.classList.toggle('active');

            // Update the selected icon
            selectedIcon = icon;

            // Change the text color based on the icon's state
            var text = this.querySelector('.icon-text p');
            if (text) {
                text.style.backgroundColor = icon.classList.contains('active') ? '#0f9b49' : ''; // Empty string resets to default color
                text.style.color = icon.classList.contains('active') ? 'white' : '';
                text.style.border = icon.classList.contains('active') ? 'none' : '';
            }
        });
    }

$(document).ready(function() {
    var weeklyPlanValue = parseInt($('#dummyWeeklyPlan').val());

    function updatePrices(weeklyPlanValue) {
        $('#monthlyofferPrice').text('Get One Week Free (Worth ₹' + weeklyPlanValue + ')');
        $('#sixmonthsofferPrice').text('Get Four Weeks Free (Worth ₹' + (weeklyPlanValue * 4) + ')');
        $('#yearlyofferPrice').text('Get Eight Weeks Free (Worth ₹' + (weeklyPlanValue * 8) + ')');

        $('#weeklyPlanPrice').text('₹' + weeklyPlanValue);
    }

    $('#validationCustomDropdown').change(function() {
        weeklyPlanValue = parseInt($(this).val());
        updatePrices(weeklyPlanValue);
        
        // Update total price based on the selected offer
        var offer = $('.selectOfferPlan.active').find('input').val();
        if (offer == 'Monthly') {
            $('#totalPrice').text('₹' + (weeklyPlanValue * 4));
        } else if (offer == '6 Months') {
            $('#totalPrice').text('₹' + (weeklyPlanValue * 26));
        } else if (offer == 'Yearly') {
            $('#totalPrice').text('₹' + (weeklyPlanValue * 52));
        }
    });

    $('.selectOfferPlan').click(function() {
        $('.selectOfferPlan').removeClass('active');
        $(this).addClass('active');

        var offer = $(this).find('input').val();
        var offerDiscountWeeks = '';
        var totalPrice = 0;

        if (offer == 'Monthly') {
            offerDiscountWeeks = ' 4 weeks + One Free Week ';
            totalPrice = weeklyPlanValue * 4;
        } else if (offer == '6 Months') {
            offerDiscountWeeks = ' 26 weeks + Four Free Weeks ';
            totalPrice = weeklyPlanValue * 26;
        } else if (offer == 'Yearly') {
            offerDiscountWeeks = ' 52 weeks + Eight Free Weeks ';
            totalPrice = weeklyPlanValue * 52;
        }

        $('#offerDiscountWeeks').text(offerDiscountWeeks);
        $('#totalPrice').text('₹' + totalPrice);
    });

    // Trigger change event initially to set prices based on default weekly plan
    $('#validationCustomDropdown').change();
});
</script>

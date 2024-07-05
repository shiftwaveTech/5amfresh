<!DOCTYPE html>
<html lang="en">
<head>
    <title>Freshoo</title>
    <meta name="description" content="">
    <?php //include 'include/header.php' ?>
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
<?php //include 'include/menu-sec.php' ?>
</div>

<section>
    <div class="mt-4">
        <div class="d-flex align-items-center justify-content-center text-center">
            <div class="custom-plan">
                <h2>Select<span> Offer</span></h2>
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
            <h2>Choose a <span> Offer</span></h2>   
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

        
        <div class="accord-sec">
            <div class="container">
           
                <div id="accordion" class="py-4">
                <h2>FAQ's</h2>
                    <!-- <div class="card border-0">
                        <div class="card-header p-0 border-0" id="heading-239">
                        <button class="btn btn-link accordion-title border-0 collapse" data-toggle="collapse" data-target="#collapse-239" aria-expanded="true" aria-controls="#collapse-239"><i class="fas fa-plus text-center d-flex align-items-center justify-content-center h-100"></i>lorem header  1 </button>
                        </div>
                        <div id="collapse-239" class="collapse show" aria-labelledby="heading-239" data-parent="#accordion">
                            <div class="card-body accordion-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            </div>
                        </div>
                    </div> -->
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
</script>

<script>
// $(document).ready(function() {
//         var weeklyPlanValue = $('#dummyWeeklyPlan').val();
//     $('#validationCustomDropdown').change(function() {
//          var weeklyPlanValue = parseInt($(this).val());

//         $('#monthlyofferPrice').text('Get One Week Free (Worth ₹' + (weeklyPlanValue  ) + ')');
//         $('#sixmonthsofferPrice').text('Get Four Weeks Free (Worth ₹' + (weeklyPlanValue * 4) + ')');
//         $('#yearlyofferPrice').text('Get Eight Weeks Free (Worth ₹' + (weeklyPlanValue * 8) + ')');

//         $('#weeklyPlanPrice').text('₹' + weeklyPlanValue);
           
    
//     });
        
//     $('.selectOfferPlan').click(function() {
//         var offer = $(this).find('input').val(); 
//         if(offer == 'Monthly') {
//             $('#offerDiscountWeeks').text(' 4 weeks + One  Free  Week ');
//             $('#totalPrice').text('₹' + (weeklyPlanValue * 4 ));
//         } else if(offer == '6 Months') {
//             $('#offerDiscountWeeks').text(' 26 weeks + Four  Free  Weeks ');
//             $('#totalPrice').text('₹' + (weeklyPlanValue * 26 ));
//         } else if(offer == 'Yearly') {
//             $('#offerDiscountWeeks').text(' 52 weeks + Eight  Free  Weeks ');
//             $('#totalPrice').text('₹' + (weeklyPlanValue * 52 ));
//         }
    
//     });

// });


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


</body>
</html>
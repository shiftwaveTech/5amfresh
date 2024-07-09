<!DOCTYPE html>
<html lang="en">
<head>
    <title>Freshoo</title>
    <meta name="description" content="">
    <?php //include 'include/header.php' ?>
    <style>
   .btn-next{ font-family: "Costa Ptf Demi";border-radius:20px;background-color: #fd632f; color: #fff; border-color:#fd632f;padding: .75rem 7rem; border:none;justify-content: center;font-size: 18px;letter-spacing: 1px;}

        .filter-container {
            display: flex;
            flex-wrap: wrap;
            justify-content:center;
            gap: 10px;
        }
        .icon-text{
            border:1px solid #0f9b49;
            border-radius:50px;  
            text-align:center;  
            padding: 0;
        }
        .icon-text p {
            font-size: 21px;
            opacity: 1;
            text-align:center;
            padding: 4px 0px 4px 0px;
            font-family: 'open sans';
            font-weight: normal;
            margin-bottom: 0px !important;
        }
        .icon-text.active{
            border:none;
        }
        .active {
            background-color: #0f9b49 !important;
            color:white !important;
            opacity: 1 !important;
            border-radius:50px;
            min-width:100%;
            padding: 4px 0px 4px 0px !important;
       
            
        }
        .disabled {
       
        opacity: 0.5; 
        pointer-events: none;
            padding: 0px 0px 0px 0px;
            border:1px solid grey;
      
        }
        .col-3 {
            -ms-flex: 0 0 25%;
            flex: 0 0 24%;
            max-width: 24%;
            margin-right: 1%;
            margin-bottom: 2%;
        }
        .drp-style{
            border-radius:30px;
            font-family: "Costa Ptf Demi";
            background-color:white;
            padding:8px 15px;
            border:2px solid grey;
            
        }
        @media (max-width:767px){
            .icon-text p{
                font-size:12px;
            }
            .row-new-style{
                display:flex;
                flex-direction:column;
            }
            .icon-text p {
                font-size: 12px;
                opacity: 1;
                text-align: center;
                padding: 4px 2px 4px 3px;
                font-family: 'open sans';
                font-weight: normal;
                margin-bottom: 0px !important;
            }
        }
        .icon-text input[type="radio"] {
        position: absolute;
        opacity: 0;
        width: 0;
        height: 0;
    }
    .days{
        border-radius:50px;
    }
    </style>
</head>
<body style="backgorund-color:hsl(0deg 0% 95.69%)">
<div>
<?php //include 'include/menu-sec.php' ?>
</div>
<section>
    <div class="container mt-4">
        <div class="d-flex align-items-center justify-content-center text-center">
            <div class="custom-plan">
                <h2>Pick a <span> Day Page</span></h2>
                <p class="text-dark">Choose a specific day of the week, and  we will ensure weekly deliveries on your selected day.</p>
            </div>
        </div>
        <!-- <div class="container">
        <div class="filter-container">
            <div class="row justify-content-center ">
                <div class="col-3 icon-text" id="iconText1">                    
                    <p class="days" id="colorChangeIcon"> Monday</p>
                </div>
                <div class="col-3 icon-text" id="iconText2">                    
                    <p class="days" id="colorChangeIcon">Tuesday</p>
                </div>
                <div class="col-3 icon-text disabled" id="iconText3">
                    <p class="days" id="colorChangeIcon">Wednesday</p>
                </div>
                <div class="col-3 icon-text" id="iconText4">                    
                    <p class="days" id="colorChangeIcon"> Thursday</p>
                </div>
                <div class="col-3 icon-text" id="iconText5">                    
                    <p class="days" id="colorChangeIcon"> Friday</p>
                </div>
                <div class="col-3 icon-text" id="iconText6">                    
                    <p class="days" id="colorChangeIcon"> Saturday</p>
                </div>
                <div class="col-3 icon-text" id="iconText7">                    
                    <p class="days" id="colorChangeIcon">Sunday</p>
                </div>
             </div>
        </div> -->
        <div class="container">
    <!-- <div class="filter-container">
        <div class="row justify-content-center">
            <label class="col-3 icon-text">
                <input type="radio" name="day" value="Monday"> Sunday
            </label>
            
            <label class="col-3 icon-text">
                <input type="radio" name="day" value="Tuesday"> Tuesday
            </label>
            
            <label class="col-3 icon-text">
                <input type="radio" name="day" value="Wednesday" > Wednesday
            </label>
            
            <label class="col-3 icon-text">
                <input type="radio" name="day" value="Thursday"> Thursday
            </label>
            
            <label class="col-3 icon-text">
                <input type="radio" name="day" value="Friday"> Friday
            </label>
            
            <label class="col-3 icon-text">
                <input type="radio" name="day" value="Saturday"> Saturday
            </label>
            
            <label class="col-3 icon-text">
                <input type="radio" name="day" value="Sunday"> Sunday
            </label>
        </div>
    </div> -->

    <div class="filter-container">
         <div class="custom-plan" style="text-align:center;">
                 <h3>Choose Your Preferred Delivery Day</h3>
                <p>Choose a specific day of the week, and we will ensure that you receive fresh weekly vegetables on your selected day.</p>
            </div>
        <div class="row justify-content-center">
            <label class="col-3 icon-text">
                <input type="radio" name="day" value="Monday"> <p class="days" id="Monday">Monday</p>
            </label>
            <label class="col-3 icon-text">
                <input type="radio" name="day" value="Tuesday"> <p class="days" id="Sunday">Tuesday</p>
            </label>
            <label class="col-3 icon-text">
                <input type="radio" name="day" value="Wednesday"> <p class="days" id="Sunday">Wednesday</p>
            </label><label class="col-3 icon-text">
                <input type="radio" name="day" value="Thursday"> <p class="days" id="Sunday">Thursday</p>
            </label>
            <label class="col-3 icon-text">
                <input type="radio" name="day" value="Friday"> <p class="days" id="Sunday">Friday</p>
            </label>
            <label class="col-3 icon-text">
                <input type="radio" name="day" value="Saturday"> <p class="days" id="Sunday">Saturday</p>
            </label>            
            <label class="col-3 icon-text">
                <input type="radio" name="day" value="Sunday"> <p class="days" id="Sunday">Sunday</p>
            </label>
        </div>
    </div>
</div>

        <div class="d-flex align-items-center justify-content-center text-center mt-3">
            <div class="custom-plan">
                <p id="notSelectDay-error" style="color:red;"></p>
                <p class="text-dark"><b>Note: </b>You can change this day later</p>
            </div>
            
        </div>
        <?php $cost = $this->session->userdata('logged_offerCost'); ?>

        <div class="">
            <div class="button-style-1 mb-4 row-new-style">
                <div class="col-12 col-md-4 custom-plan">             
                    <h2>Your Selected <span> Plan</span></h2>   
                </div>                
                <div class="col-12 col-md-4" style="padding: 0 14px;">
                    <select class="form-select drp-style WeeklyPlan" id="validationCustomDropdown" name="leave_type" required="">
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

        
        <div class="margins-of-sec">
                <div class="container button-style-1 mb-4">
                   
                <a id="selectDayButton" class="text-white text-decoration-none">
                                <button class="btn-next"> 
                                NEXT
                                </button>
                </a>
                </div>
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
<!--
                                        <div class="icon-exp" >
                                            <img src="./assets/images/live.png">
                                             <p class="why-sec-content">No GST, No Packing Charges, No Handling Charges you just pay for vegetables</p>
                                        </div>
-->
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
                            <button class="btn btn-link accordion-title border-0 collapsed" data-toggle="collapse" data-target="#collapse-241" aria-expanded="false" aria-controls="#collapse-241"><i class="fas fa-plus text-center d-flex align-items-center justify-content-center h-100"></i>Can I choose the vegetables in my delivery?</button>
                        </div>
                        <div id="collapse-241" class="collapse " aria-labelledby="heading-241" data-parent="#accordion">
                            <div class="card-body accordion-body">
                                <p>No, customers do not select specific vegetables. We pack the vegetables according to the chosen plan and deliver them on the selected day. You can change your delivery day up to one day before your scheduled delivery.</p>
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
                            <button class="btn btn-link accordion-title border-0 collapsed" data-toggle="collapse" data-target="#collapse-244" aria-expanded="false" aria-controls="#collapse-244"><i class="fas fa-plus text-center d-flex align-items-center justify-content-center h-100"></i>What if I want to cancel my subscription?</button>
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
<script>
            function filterSelection(category) {
                // Implement your filter logic here
                console.log('Filtering by category:', category);
            }
        </script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var days = document.querySelectorAll('.days');
        
        days.forEach(function(day) {
            day.addEventListener('click', function() {
                // Reset background color and text color for all days
                days.forEach(function(d) {
                    d.style.backgroundColor = ''; // Reset to default background color
                    d.style.color = ''; // Reset to default text color
                });
                
                // Set background color and text color for the clicked day
                this.style.backgroundColor = '#0f9b49'; // Set background color to green
                this.style.color = 'white'; // Set text color to white
                
                // Uncheck all radio buttons
                document.querySelectorAll('input[type="radio"][name="day"]').forEach(function(radio) {
                    radio.checked = false;
                });
                
                // Check the corresponding radio button
                var radioButton = this.parentElement.querySelector('input[type="radio"]');
                if (radioButton) {
                    radioButton.checked = true;
                }
            });
        });
    });
</script>
</body>
</html>
<html>
    <head>
       <title>Freshoo</title>
       <meta name="description" content="">
        <?php //include 'include/header.php' ?>
        <link rel="stylesheet" href="<?= base_url('assets/css/plan-style.css')?>">
        <style>
            .icon-text p{
            border-radius: 10px 0px 0px 10px !important;
            text-align:left;
            font-size:18px;
            color:white;           
        }
        .icon-text span{
            color:white;
        }
        .input-group-text-style{
            padding:6px 0px;
            background-color:#0f9b49;
            border: 1px solid #E5E4E2;
        }
        .square-icon-style{
            margin: 4px 10px 0px 5px;
            text-align:right;
            font-size: 30px;
            color: white;
            
            opacity: 1;
        }
        @media (max-width:768px){
            .icon-text p {
                font-size:15px;
            }
            .square-icon-style{
            margin: 11px 10px 0px 5px !important;
            text-align:right;
            font-size: 35px;
            color: white;
            
            opacity: 1;
        }
        .margin-top-style-new{
            margin-top:5px;
            margin-left:0px;
        }
        .new-margin-left-style{
            margin-left:5px

        }
        }

        .mob-views{
            display:none;
        }
        @media (max-width:991px){
            .desk-view{
                display:none;
            }
            .mob-views{
            display:block;
        }
        }
        .border-btm-style{
            border-bottom:1px solid #0f9b49;
            margin-top: -5px;
        }
        .review-container{
            max-width:950px;

        }
        .margin-top-style-new{
            margin-top:35px;
            margin-left:70px;
        }
        .new-margin-left-style{
            margin-left:55px

        }

        </style>
    </head>
    <div>
    <?php //include 'include/menu-sec.php' ?>
    </div>
    <body>
    <?php
        foreach ($results as $row) {
    ?>    
             <!-- <section class="plan-1">
                <div class="custom-plan">
                   
                  
                </div>
            </section>  --> 

            <section class="desk-view">
                <div class="button-style-1 mb-4 mt-2 row-new-style pd-style">
                
                        <div class="col-12 col-md-5 custom-plan margin-top-style-new">             
                            <h2 class="">Review Your<span> Plan</span></h2>  
                        
                        </div>
                                
                    <div class="col-8 col-md-4">
                    <div >
                                <div class="container button-style-1 mb-4  new-margin-left-style">
                                
                                <a class="text-white text-decoration-none">
                                    <button onclick="window.history.back();" class="btn-next" style="padding:0.75rem 4rem"> 
                                        Back
                                    </button>
                                </a>
                                </div>
                    </div>
                    </div>
                </div>
            </section>

            <section class="mob-views">
                <div class="">
                
                        <div class="col-12 col-md-5 custom-plan margin-top-style-new">             
                            <h2 class="">Review Your<span> Plan</span></h2>  
                        
                        </div>
                                
                    <div class="col-8 col-md-4">
                    <div >
                                <div class="container button-style-1 mb-4  new-margin-left-style">
                                
                                <a class="text-white text-decoration-none">
                                    <button class="btn-next" style="padding:0.75rem 4rem"> 
                                        Back
                                    </button>
                                </a>
                                </div>
                    </div>
                    </div>
                </div>
            </section>


            <section class="mt-3">
            <div class="container">
                <div class="d-flex align-items-center justify-content-center text-center">
                    <div class="col-12 col-md-4 custom-plan">             
                        <h4>Choosen <span> Offer</span></h4>   
                    </div>
                </div>
                <div class="row mb-3 d-flex align-items-center justify-content-center">              
                    <div class="col-12 col-md-10 mt-2">
                        <div class="input-group-text-style">
                            <div class="icon-text" id="iconText1">
                                <p>Subscribe for a <?= $row->selected_offer ?> Plan <span id="reviewFree">Get One Week Free(Worth ₹<?= $row->selected_plan ?>)</span></p>
                                <i class="fas fa-check-square square-icon-style" id="colorChangeIcon"></i>
                            </div>
                        </div>
                    </div>
                 
                                
                </div>
            </div>
            <div class="container custom-plan">
            <h4 class="text-center"><span>Details</span></h4>
            </div>
                <div class="container review-container custom-plan">
                
                    <div class="row mt-3">
                        <div  class="col-12 col-lg-4 mb-2 ">
                            <h5>Name</h5>
                            <p id="userName"><?=$row->name?></p>
                            <p class="border-btm-style"></p>
		                    
	                    </div>
	                    <div  class="  col-12 col-lg-4 mb-2">
                            <h5>Email</h5>
                            <p id="userMail"><?=$row->email?></p>
                            <p class="border-btm-style"></p>
		                    
	                    </div>
	                    <div  class=" col-12  col-lg-4 mb-2">
                            <h5>Phone</h5>
                            <p id="userPhone"><?=$row->mobile?></p>
                            <p class="border-btm-style"></p>
                            
		                    
	                    </div>
                        <div  class="col-12 col-lg-4 mb-2">
                            <h5>WhatsApp Number</h5>
                            <p id="whatsapp_number"><?=$row->whatsapp_number?></p>
                            <p class="border-btm-style"></p>
		                    
	                    </div>
                        <div  class="col-12 col-lg-8 mb-2">
                            <h5>Confirm Address</h5>
                            <p>D-No: <?= $row->house_no ?>,<?= $row->address ?> , <?= $row->landmark ?>, <?= $row->area ?>, Visakhapatnam</p>
                            <p class="border-btm-style"></p>
                            
	                    </div>
                        
	                   
	                    
                    </div>
                </div>
            </section>
            <section >
                
                <div class="container review-container mt-2">
                    <div class="row">                       
                            <div class="col-8 custom-plan">
                                <h4>Selected <span>Day</span></h4>
                             
                            </div>
                           <div class="col-4">
                               <div class="plan-price-1 custom-plan">
                                   <p><b><?= $row->selected_day ?></b></p>
                                   
                               </div>
                           </div>                         
                    </div>
                </div>
                <div class="container review-container mt-2">
                    <div class="row">                       
                            <div class="col-8 custom-plan">
                                <h4>Price Per Week</h4>
                             
                            </div>
                           <div class="col-4">
                               <div class="plan-price-1 custom-plan">
                               <h4 style="color:#0f9b49">₹<?= $row->selected_plan ?></h4>
                               <input id="weeklyPlanValue" type='hidden' value="<?= $row->selected_plan ?>">
                               <input id="offerPlanData" type='hidden' value="<?= $row->selected_offer ?>">
                                   
                               </div>
                           </div>                         
                    </div>
                </div>
                <div class="container review-container mt-2">
                    <div class="row">                       
                            <div class="col-8 custom-plan">
                                <h4>Plan Total Price</h4>
                                <p id="offerDiscountWeeks">( 4 weeks + One  Free  Week )</p>
                             
                            </div>
                           <div class="col-4">
                               <div class="plan-price-1 custom-plan">
                               <h4 id="totalPrice" style="color:#0f9b49">₹1596</h4>   
                                   
                               </div>
                           </div>                         
                    </div>
                </div>
                
            </section>

            <section>
              
                <div class="margins-of-sec">
                            <div class="container button-style-1 mb-4">
                            
                            <a class="text-white text-decoration-none">
                                <button onclick="payNow()" class="btn-next"> 
                                    PAY NOW
                                </button>
                            </a>
                            </div>
                </div>

            </section>
           <?php }?>

           <script>
            $(document).ready(function() {
                
                var weeklyPlanValue = parseInt($('#weeklyPlanValue').val());

                $('#weeklyPlanPrice').text('₹' + weeklyPlanValue);
                var offer = $('#offerPlanData').val();
                    if(offer == 'Monthly')
                    {
                        $('#totalPrice').text('₹' + (weeklyPlanValue * 4 ));
                        $('#reviewFree').text('Get One Week Free (Worth ₹' + (weeklyPlanValue  ) + ')');
                        $('#offerDiscountWeeks').text(' 4 weeks + One  Free  Week ');
                    }
                    if(offer == '6 Months'){
                        $('#totalPrice').text('₹' + (weeklyPlanValue * 26 ));
                        $('#reviewFree').text('Get Four Weeks Free (Worth ₹' + (weeklyPlanValue * 4 ) + ')');
                        $('#offerDiscountWeeks').text(' 26 weeks + Four  Free  Weeks ');
                    }
                    if(offer == 'Yearly'){
                        $('#totalPrice').text('₹' + (weeklyPlanValue * 52 ));
                        $('#reviewFree').text('Get One Eight Weeks Free (Worth ₹' + (weeklyPlanValue * 8 ) + ')');
                        $('#offerDiscountWeeks').text(' 52 weeks + Eight  Free  Weeks ');
                    }
            });
            </script>
            <script src="https://checkout.razorpay.com/v1/checkout.js"></script>

            <?php //include 'include/footer-main.php'?>
    </body>
</html>
<html>
    <head>
        <link rel="stylesheet" href="<?= base_url('assets/css/custom-plan.css')?>">
    </head>
    <style>
        .square-icon-style {
            cursor: pointer;
        }
        .checked {
            color: #0f9b49 !important;
            opacity: 1 !important;
        }
        
        .plan-btn {
    border-radius: 20px;
    background-color: #109B4A;
    color: #fff !important;
    padding: 8px 22px;
    text-decoration: none;
    font-size: 20px;
    font-weight: 400;
    line-height: 26px;
    letter-spacing: 0.01em;
    text-align: center;
}
        a {
    text-decoration: none !important;
}
        ol{text-align: left;}
       .sub-list li{list-style: auto !important;}
        .sub-list li:before{display: none;}
        .myulcheck {
    list-style: none;
    padding: 0;
    margin: 10px 0px;
    display: inline-block;
    padding-right: 5px;
    padding-left: 20px;
    vertical-align: top;
            text-align: left;
}
        .myulcheck li {
    position: relative;
    list-style: none;
    padding: 5px 10px;
    color: #666;
    font-size: 16px;
    line-height: 26px;
}
        .myulcheck li:before {
    content: '';
    width: 14px;
    height: 6px;
    position: absolute;
    top: 13px;
    left: -20px;
    border: 2px solid #109b4a;
    border-top: none;
    border-right: none;
    background: transparent;
    -webkit-transform: rotate(-45deg);
    transform: rotate(-45deg);
}
        .work-plan{text-align: left;}
        
        @media(max-width:768px){.plan-padd{padding: 5px;}}
    </style>

    <body>
        <div>
        <?php //include 'include/menu-sec.php' ?>
        </div>
        <section class="plan-1 mt-4">
           <div class="container">
               <div class="row">
                       <div class="col-12 text-center pb-3 pt-3 plan-btns-1">
                       <a href="" class="plan-btn selOfferDiv" varieties="15" data-id="1" recommended="family 2+1" plan-weight="7" plan-cost="399">₹399</a>
                         <a href="" class="plan-btn selOfferDiv" varieties="17" data-id="2" recommended="family 4+1" plan-weight="11" plan-cost="599">₹599</a>
                         <a href="" class="plan-btn selOfferDiv" varieties="17" data-id="3" recommended="family 4+2" plan-weight="17" plan-cost="799">₹799</a>
                         <a href="" class="plan-btn selOfferDiv" varieties="17" data-id="4" recommended="large family" plan-weight="23" plan-cost="999">₹999</a>                         
                      </div>
               </div>
        <section class="custom-plan">
            <div class="container">
                <div class="row">
                   <h2 class="text-center">Tailored to Your <span>Preferences</span></h2>
                   <div class="text-center">                       
                        <p>At 5am Fresh, we understand that every family has unique dietary preferences and needs. Our Custom Plan allows you to personalize your vegetable deliveries based on the varieties and quantities that best suit your lifestyle.</p>
                    </div>
                    <div  class="work-plan">
                    <h3 class="text-center"> How It Works</h3>
                        <ul class="myulcheck">
                        <li><strong>Minimum Order Value:</strong> ₹1000 per week</li>
                        <li><strong>Customize Your Plan:</strong>
                            <ol class="sub-list">
                                <li>Select Varieties: Choose the number of vegetable varieties you want from each category. </li>
                                <li>Choose Quantities: Specify the weight you need for each selected category.</li>
                            </ol>
                            
                        </li>
                        <li><strong>Pricing:</strong> The total price of your custom plan will be calculated based on the selected varieties and quantities.</li>
                        </ul>
                        
                    </div>
                    <div class="col-12">
                      <div class="essential-veg">
                      <h2 class="text-center">Essential  <span>Vegetables</span></h2>
                      <div class="text-center">
                       
                        <p>We’ll make sure to send all of these every week</p>
                    </div>
                     
                   
                        <ul class="list-group list-group-horizontal margin-btm-style">
                          <li class="list-group-item"></li>
                          <li class="list-group-item"></li>
                          <li class="list-group-item list-header">
                          <h6 class="text-center margin-lft-style">Check Veggies You want</h6></li>
                           <li class="list-group-item list-header"><h6 class="text-center margin-lft-style-2">Required Weight</h6></li>
                       </ul>
                       <div id="itemList">
                       <ul class="list-group list-group-horizontal item" data-item="Onion">
                          <li class="list-group-item"><img src="<?= base_url('assets/images/onion.jpg')?>"/></li>
                          <li class="list-group-item">Onion</li>
                          <li class="list-group-item">
                          <div class="icon-text" id="iconText1">
                                <i class="fas fa-check-square square-icon-style" style="margin-left: 10px;" id="colorChangeIcon"></i>
                          </div>
                           </li>
                           
                           <li class="list-group-item">
                            <div class="d-flex">                        
                                <div>
                                    <div class="input-group">
                                        <input
                                            type="text"
                                            class="form-control zero-btn-style-2 margin-right-style"
                                            placeholder="Kg"
                                            oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 2); this.style.borderColor = ''"
                                            maxlength="3" 
                                            id="kgInput"                                         
                                        />
                                    </div>
                                </div>
                                <div>
                                    <div class="input-group">
                                            <input type="text" class="form-control zero-btn-style-2"
                                            placeholder="Gms"
                                            oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 3); this.style.borderColor = ''"
                                            maxlength="3"
                                            id="gmInput"
                                            >
                                    </div>
                                </div>
                            </div>
                         </li>
                       </ul>
                       <ul class="list-group list-group-horizontal item" data-item="Tomatoes" >
                          <li class="list-group-item"><img src="<?= base_url('assets/images/tomatoes.jpg')?>"/></li>
                          <li class="list-group-item">Tomatoes</li>
                          <li class="list-group-item">
                          <div class="icon-text" id="iconText2">
                                <i class="fas fa-check-square square-icon-style"  id="colorChangeIcon"></i>
                          </div>
                           </li>
                          
                           <li class="list-group-item">
                            <div class="d-flex">                        
                                <div>
                                    <div class="input-group">
                                        <input
                                            id="tomatokg"
                                            type="text"
                                            class="form-control zero-btn-style-2 margin-right-style"
                                            placeholder="Kg"
                                            oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 2); this.style.borderColor = ''"
                                            maxlength="3"
                                        />
                                    </div>
                                </div>
                                <div>
                                    <div class="input-group">
                                        <input type="text" class="form-control zero-btn-style-2"
                                            id="tomatogrms" 
                                            placeholder="Gms"
                                            oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 3); this.style.borderColor = ''"
                                            maxlength="3"
                                        >
                                    </div>
                                </div>
                            </div>
                         </li>
                       </ul>
                       <ul class="list-group list-group-horizontal item" data-item="potatoes">
                          <li class="list-group-item"><img src="<?= base_url('assets/images/Potatoes.jpg')?>"/></li>
                          <li class="list-group-item">Potatoes</li>
                          <li class="list-group-item">
                          <div class="icon-text" id="iconText3">
                                <i class="fas fa-check-square square-icon-style" style="margin-left: 10px;" id="colorChangeIcon"></i>
                          </div>
                           </li>
                           
                           <li class="list-group-item">
                            <div class="d-flex">                        
                                <div>
                                    <div class="input-group">
                                            <input
                                                type="text"
                                                class="form-control zero-btn-style-2 margin-right-style"
                                                placeholder="Kg"
                                                oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 2); this.style.borderColor = ''"
                                                maxlength="3"
                                            />

                                    </div>
                                </div>
                                <div>
                                    <div class="input-group">
                                        <input type="text" class="form-control zero-btn-style-2" 
                                            placeholder="Gms"
                                            oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 3); this.style.borderColor = ''"
                                            maxlength="3"
                                        >
                                    </div>
                                </div>
                            </div>
                         </li>
                       </ul> 
                        <ul class="list-group list-group-horizontal item" data-item="Garlic">
                          <li class="list-group-item"><img src="<?= base_url('assets/images/garlic.jpg')?>"/></li>
                          <li class="list-group-item">Garlic</li>
                          <li class="list-group-item">
                          <div class="icon-text" id="iconText4">
                                <i class="fas fa-check-square square-icon-style" id="colorChangeIcon"></i>
                          </div>
                           </li>
                          
                           <li class="list-group-item">
                            <div class="d-flex">                        
                                <div>
                                    <div class="input-group">
                                        <input
                                            type="text"
                                            class="form-control zero-btn-style-2 margin-right-style"
                                            placeholder="Kg"
                                            oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 2); this.style.borderColor = ''"
                                            maxlength="3"
                                        />
                                    </div>
                                </div>
                                <div>
                                    <div class="input-group">
                                        <input type="text" class="form-control zero-btn-style-2" 
                                            placeholder="Gms"
                                            oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 3); this.style.borderColor = ''"
                                            maxlength="3"
                                        >
                                    </div>
                                </div>
                            </div>
                         </li>
                       </ul>
                        <ul class="list-group list-group-horizontal item" data-item="Ginger">
                          <li class="list-group-item"><img src="<?= base_url('assets/images/ginger.jpg')?>"/></li>
                          <li class="list-group-item">Ginger</li>
                          <li class="list-group-item">
                          <div class="icon-text" id="iconText5">
                                <i class="fas fa-check-square square-icon-style" style="margin-left: 10px;" id="colorChangeIcon"></i>
                          </div>
                           </li>
                          
                           <li class="list-group-item">
                            <div class="d-flex">                        
                                <div>
                                    <div class="input-group">
                                        <input
                                            type="text"
                                            class="form-control zero-btn-style-2 margin-right-style"
                                            placeholder="Kg"
                                            oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 2); this.style.borderColor = ''"
                                            maxlength="3"
                                        />
                                    </div>
                                </div>
                                <div>
                                    <div class="input-group">
                                        <input type="text" class="form-control zero-btn-style-2" 
                                            placeholder="Gms"
                                            oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 3); this.style.borderColor = ''"
                                            maxlength="3"
                                        >
                                    </div>
                                </div>
                            </div>
                         </li>
                       </ul>
                       <ul class="list-group list-group-horizontal item" data-item="Curry Leaf">
                          <li class="list-group-item"><img src="<?= base_url('assets/images/curry-leaves.jpg')?>"/></li>
                          <li class="list-group-item">Curry Leaf</li>
                          <li class="list-group-item">
                          <div class="icon-text" id="iconText6">
                                <i class="fas fa-check-square square-icon-style" id="colorChangeIcon"></i>
                          </div>
                           </li>
                          
                           <li class="list-group-item">
                            <div class="d-flex">                        
                                <div>
                                    <div class="input-group">
                                        <input
                                            type="text"
                                            class="form-control zero-btn-style-2 margin-right-style"
                                            placeholder="Kg"
                                            oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 2); this.style.borderColor = ''"
                                            maxlength="3"
                                        />
                                    </div>
                                </div>
                                <div>
                                    <div class="input-group">
                                        <input type="text" class="form-control zero-btn-style-2" 
                                            placeholder="Gms"
                                            oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 3); this.style.borderColor = ''"
                                            maxlength="3"
                                        >
                                    </div>
                                </div>
                            </div>
                         </li>
                       </ul>
                          <ul class="list-group list-group-horizontal item" data-item="Green Chilli">
                          <li class="list-group-item"><img src="<?= base_url('assets/images/green-chilli.jpg')?>"/></li>
                          <li class="list-group-item">Green Chilli</li>
                          <li class="list-group-item">
                          <div class="icon-text" id="iconText7">
                                <i class="fas fa-check-square square-icon-style" style="margin-left: 10px;" id="colorChangeIcon"></i>
                          </div>
                           </li>
                       
                           <li class="list-group-item">
                            <div class="d-flex">                        
                                <div>
                                    <div class="input-group">
                                        <input
                                            type="text"
                                            class="form-control zero-btn-style-2 margin-right-style"
                                            placeholder="Kg"
                                            oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 2); this.style.borderColor = ''"
                                            maxlength="3"
                                        />
                                    </div>
                                </div>
                                <div>
                                    <div class="input-group">
                                        <input type="text" class="form-control zero-btn-style-2" 
                                            placeholder="Gms"
                                            oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 3); this.style.borderColor = ''"
                                            maxlength="3"
                                        >
                                    </div>
                                </div>
                            </div>
                         </li>
                       </ul>
                          <ul class="list-group list-group-horizontal item" data-item="Coriander">
                          <li class="list-group-item"><img src="<?= base_url('assets/images/coriander.jpg')?>"/></li>
                          <li class="list-group-item">Coriander</li>
                          <li class="list-group-item">
                          <div class="icon-text" id="iconText8">
                                <i class="fas fa-check-square square-icon-style" id="colorChangeIcon"></i>
                          </div>
                           </li>
                           <li class="list-group-item">
                            <div class="d-flex">                        
                                <div>
                                    <div class="input-group">
                                        <input
                                            type="text"
                                            class="form-control zero-btn-style-2 margin-right-style"
                                            placeholder="Kg"
                                            oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 2); this.style.borderColor = ''"
                                            maxlength="3"
                                        />
                                    </div>
                                </div>
                                <div>
                                    <div class="input-group">
                                        <input type="text" class="form-control zero-btn-style-2" 
                                            placeholder="Gms"
                                            oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 3); this.style.borderColor = ''"
                                            maxlength="3"
                                        >
                                    </div>
                                </div>
                            </div>
                         </li>
                       </ul>
                       </div>
                    </div>
                    <p id="errortext" style="color:red"></p>
                       <a id="custom-plan-1" style="cursor:pointer;" class="text-white text-decoration-none">
                            <button id="validateButton" onclick="customPlanValidation()" class="btn-next"> 
                               NEXT
                            </button>
                        </a>
                       
                    </div>
                </div>
            </div>
        </section>
        <?php //include 'include/footer-main.php' ?>
        <script>
    // Loop through each div with the class 'icon-text'
    // for (var i = 1; i <= 8; i++) {
    //     var divId = 'iconText' + i;
    //     var iconTextDiv = document.getElementById(divId);

    //     // Add a click event listener to each 'icon-text' div
    //     iconTextDiv.addEventListener('click', function () {
    //         // Toggle the 'active' class on the icon to switch between colors
    //         var icon = this.querySelector('.fas');
            // icon.classList.toggle('active');

    //         // Change the text color based on the icon's state
    //         // Note: Update this part based on your actual structure
    //         var text = this.querySelector('.icon-text p');
            // if (text) {
            //     text.style.color = icon.classList.contains('active') ? '#0f9b49' : ''; // Empty string resets to default color
            // }
    //     });
    // }
</script>  
    </body>
</html>
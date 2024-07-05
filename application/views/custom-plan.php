<html>
    <head>
       <title>Freshoo</title>
       <meta name="description" content="">
        <?php //include 'include/header.php' ?>
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
    </style>

    <body>
        <div>
        <?php //include 'include/menu-sec.php' ?>
        </div>
      
        <section class="custom-plan">
            <div class="container">
                <div class="row">
                   <h2 class="text-center">Custom <span>Plan</span></h2>
                   <div class="text-center">
                       
                        <p>Make Your Own Plan Minimum value should be ₹1200 per week</p>
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
                           </li>
                           <li class="list-group-item">
                            <div class="d-flex">                        
                                <div>
                                    <div class="input-group">
                                        <input
                                            type="text"
                                            class="form-control zero-btn-style-2 margin-right-style"
                                            placeholder="Kg"
                                            oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 3); this.style.borderColor = ''"
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
                                            oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 3); this.style.borderColor = ''"
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
                          <li class="list-group-item"><img src="<?= base_url('assets/images/potatoes.jpg')?>"/></li>
                          <li class="list-group-item">Potatoes</li>
                          <li class="list-group-item">
                          <div class="icon-text" id="iconText3">
                                <i class="fas fa-check-square square-icon-style" style="margin-left: 10px;" id="colorChangeIcon"></i>
                          </div>
                           </li>
                           </li>
                           <li class="list-group-item">
                            <div class="d-flex">                        
                                <div>
                                    <div class="input-group">
                                            <input
                                                type="text"
                                                class="form-control zero-btn-style-2 margin-right-style"
                                                placeholder="Kg"
                                                oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 3); this.style.borderColor = ''"
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
                           </li>
                           <li class="list-group-item">
                            <div class="d-flex">                        
                                <div>
                                    <div class="input-group">
                                        <input
                                            type="text"
                                            class="form-control zero-btn-style-2 margin-right-style"
                                            placeholder="Kg"
                                            oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 3); this.style.borderColor = ''"
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
                           </li>
                           <li class="list-group-item">
                            <div class="d-flex">                        
                                <div>
                                    <div class="input-group">
                                        <input
                                            type="text"
                                            class="form-control zero-btn-style-2 margin-right-style"
                                            placeholder="Kg"
                                            oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 3); this.style.borderColor = ''"
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
                           </li>
                           <li class="list-group-item">
                            <div class="d-flex">                        
                                <div>
                                    <div class="input-group">
                                        <input
                                            type="text"
                                            class="form-control zero-btn-style-2 margin-right-style"
                                            placeholder="Kg"
                                            oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 3); this.style.borderColor = ''"
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
                           </li>
                           <li class="list-group-item">
                            <div class="d-flex">                        
                                <div>
                                    <div class="input-group">
                                        <input
                                            type="text"
                                            class="form-control zero-btn-style-2 margin-right-style"
                                            placeholder="Kg"
                                            oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 3); this.style.borderColor = ''"
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
                                            oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 3); this.style.borderColor = ''"
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
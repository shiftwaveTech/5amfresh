<!DOCTYPE html>
<html lang="en">
<head>
    <title>Freshoo</title>
    <meta name="description" content="">
    <?php //include 'include/header.php' ?>
</head>
<body style="backgorund-color:hsl(0deg 0% 95.69%)">
<div>
<?php //include 'include/menu-sec.php' ?>
</div>
        <style>
         @media(max-width:768px){.plan-padd{padding: 5px;}}
    
    </style>
<section>
<div class="container mt-4">
    <div>
        <div class="row mb-3">
                <div class="col-12 col-md-8 d-flex">
                    <div class="custom-plan custom-center">
                        <h2>Custom <span>Plan</span></h2>
                        <p>Make Your Own Plan Minimum value should be ₹1200 per week</p>
                    </div>
                </div>
<!--
                
                        <div class="col-12 col-md-4">
                            <div class="input-group-text-style" style="cursor:pointer;">
                                <div class="icon-text" id="iconText">
                                    <p>I don't Need</p>
                                   <i class="fas fa-check-square square-icon-style" id="dontNeedIcon"></i>
                                </div>
                            </div>
                        </div>
-->
                      
        </div>
    </div>


    <div class="d-flex align-items-center justify-content-center text-center">
        <div class="custom-plan">
            <h2>Squash <span>Vegetables</span></h2>
            <p>Squash vegetables provide a nutrient-dense source of vitamins, minerals, and antioxidants, promoting overall health and vitality.</p>
        </div>
    </div>

    
    <div class="row mt-2 plan-padd">
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



    <div class="row mb-2 mt-4">
        <div class="col-9 col-md-10 custom-plan">
            <p>How many Squash veggie varieties you need per week</p>
        </div>
        <div class="col-3 col-md-2" style="padding: 0 14px;">
            <select class="form-select" id="Selectsquashvegetable" name="leave_type" required="">
               
            <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>

            </select>
        </div>
    </div>
  



    <div class="row no-gutters">
        <div class="col-8 col-md-10 custom-plan">
            <p>Required weight per variety</p>
        </div>
        <div class="col-2 col-md-1">
            <div class="input-group">
                    <input type="text" class="form-control zero-btn-style-2 margin-right-style"
                         placeholder="Kg"
                         oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 2)"
                         maxlength="3"
                         oninput="this.style.borderColor = ''"
                         id = "kgInput"
                         >
            </div>
        </div>
        <div class="col-2 col-md-1">
            <div class="input-group">
                    <input type="text" class="form-control zero-btn-style-2"
                        placeholder="Gms"
                        oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 3)"
                        maxlength="3"
                        oninput="this.style.borderColor = ''"
                        id = "gmInput"
                        >
            </div>
        </div>
    </div>

    <div class="margins-of-sec">
    <p id="errortext" style="color:red;display:flex;justify-content: center;"></p><br>
        <div class="container button-style-1 mt-3 mb-4">
            <a href="<?= base_url('custom-plan-2')?>" class="text-white text-decoration-none mr-1">
            <button class="btn create-plan-button prev-btn-style">PREVIOUS</button></a>
            <a id="custom-plan-4" style="cursor:pointer;" class="text-white text-decoration-none">
            <button onclick = "SquashVegetablesValidation()" class="btn create-plan-button prev-btn-style">NEXT</button></a>
        </div>
    </div>
</div>
</section>

<?php //include 'include/footer-main.php' ?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
        // Add a click event listener to the icon-text div
        document.getElementById('iconText').addEventListener('click', function() {
            // Toggle the 'active' class on the icon to switch between colors
            var icon = document.getElementById('dontNeedIcon');
            icon.classList.toggle('active');
            // Change the text color based on the icon's state
            var text = document.querySelector('.icon-text p');
            text.style.color = icon.classList.contains('active') ? '#0f9b49' : ''; // Empty string resets to default color
        });
</script>

</body>
</html>

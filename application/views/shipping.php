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
        
      <section class="custom-plan shipping-sec">
            <div class="container">
                <div class="row">
                    <h2 class="text-center">Shipping <span>& Delivery</span></h2>
                    <p>At 5am Fresh, we are committed to delivering the freshest and highest quality vegetables directly to your doorstep. Here’s everything you need to know about our shipping and delivery process:</p>
                    <h3>Delivery Schedule</h3>
                    <p>We deliver fresh vegetables every morning to ensure you receive the freshest produce possible. Our delivery window is between 6 AM and 9 AM, allowing you to start your day with topquality vegetables.</p>
                    <h3>Delivery Areas</h3>
                    <p>We currently serve the Vizag area and are continually expanding to reach more customers. Please check our service area map or enter your location during signup to confirm if we deliver to your area.</p>
                    <h3>Changing Your Delivery Day</h3>
                    <p>Flexibility is important to us. You can change your delivery day by notifying us at least 12 hours in advance. Simply update your delivery preferences in your account, and we will ensure your order is delivered on the new chosen day. Your subsequent weekly deliveries will also be scheduled for the new day.</p>
                    <h3>Handling Price Fluctuations</h3>
                    <p>In the event of significant price increases in the market, we will adjust the quantity of the affected vegetables while maintaining the overall value of your plan. For example, if the price of tomatoes rises drastically, we might reduce the quantity delivered but ensure you receive a balanced variety of other vegetables.</p>
                    <h3>Seasonal Availability</h3>
                    <p>Certain vegetables are seasonal and may not be available year round. To ensure you always receive a full and diverse selection, we will substitute out of season vegetables with other fresh and available options. During signup, you can specify any vegetables you do not eat, and we will make sure to exclude them from your deliveries.</p>
                    <h3>Quality Assurance</h3>
                    <p>We take pride in our rigorous quality control process. Our vegetables are procured fresh every day at 5 AM, cleaned, and packed meticulously before delivery. We store our vegetables at a constant temperature of 5 degrees Celsius to maintain freshness. If you ever receive vegetables that do not meet our quality standards, we will replace them on the same day or the following day.</p>
                    <h3>Custom Plans</h3>
                    <p>For customers with special requirements, we offer custom plans for orders exceeding ₹1000 per week. You can choose the number of varieties and the weight of each category, and the price will be calculated accordingly.</p>
                    <h3> No Additional Charges</h3>
                    <p>We believe in transparency. Our prices include all costs—no GST, no packing charges, and no delivery fees.</p>
                    <h3>Cancellation Policy</h3>
                    <p>You can cancel your subscription at any time, and the balance amount will be credited back to you without any questions asked.</p>
                    <p>Thank you for choosing 5am Fresh. We are dedicated to providing you with the best vegetables and the best service possible. If you have any questions or need further assistance, please do not hesitate to contact us.</p>
                </div>  
            </div>
        </section>
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
    </body>
</html>
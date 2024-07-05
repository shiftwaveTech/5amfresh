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
                <h2 class="text-center">Terms  <span>& Conditions</span></h2>
                    <p>Welcome to 5am Fresh! By using our website and services, you agree to comply with and be bound by the following terms and conditions. Please review them carefully.</p>
                <h3>1. Acceptance of Terms</h3>
                    <p>By accessing and using the 5am Fresh website, you accept and agree to be bound by these terms and conditions. If you do not agree to these terms, you should not use our services.</p>
                <h3>2. Services Provided</h3>
                    <p>5am Fresh provides fresh vegetable delivery services based on the weekly plans you select. Our plans are designed to offer a variety of vegetables tailored to your preferences and seasonal availability.</p>
                <h3> 3. Subscription Plans</h3>
                    <p><b> Billing:</b> Subscription plans are billed monthly based on the weekly plan selected. 
                    Plan Details: Each plan includes specific varieties and quantities of vegetables, as detailed on our website.</p>
                    <p><b>Customization:</b> You can create a custom plan if your order exceeds ₹1000 per week. Custom plans allow you to select the number of varieties and weight from each category.</p>
                <h3>4. Payment Terms</h3>
                    <p><b>Payment Methods:</b> We accept major credit/debit cards and other payment methods as specified on our website.</p>
                    <p><b>Billing Cycle:</b>Subscriptions are billed on a monthly basis. You will be charged at the beginning of each billing cycle.</p>
                    <p><b>Cancellation:</b>You can cancel your subscription at any time. The balance amount will be credited back to you without any questions asked.</p>
                <h3> 5. Delivery Terms</h3>
                    <p><b>Delivery Schedule:</b> Deliveries are made between 6 AM and 9 AM on the selected delivery day.</p>
                    <p><b>Changing Delivery Day:</b> You can change your delivery day by notifying us at least 12 hours in advance.</p>
                    <p><b>Missed Deliveries:</b>  If you are not available to receive the delivery, we will attempt to deliver it the next day.</p>
                <h3> 6. Quality Assurance</h3>
                    <p><b>Freshness Guarantee:</b> We ensure that all vegetables are fresh and of high quality. If you receive vegetables that do not meet our standards, we will replace them on the same day or the following day.</p>
                    <p><b>Seasonal Availability:</b>  If certain vegetables are out of season, we will substitute them with other available vegetables.</p>
                <h3> 7. Pricing and Availability</h3>   
                    <p><b>Price Fluctuations: </b> In case of significant market price increases, the quantity of affected vegetables may be adjusted while maintaining the overall value of your plan.
                    No Additional Charges: Our prices are inclusive of all costs. There are no additional GST, packing, or delivery charges.</p>
                <h3>8. User Conduct</h3> 
                   <p>You agree to use our services for lawful purposes only. You must not use our website or services for any illegal or unauthorized activities.</p>  
                <h3>9. Intellectual Property</h3>
                   <p>All content on the 5am Fresh website, including text, graphics, logos, and images, is the property of 5am Fresh and is protected by applicable copyright and trademark laws.</p> 
                <h3> 10. Privacy Policy</h3> 
                   <p>Your privacy is important to us. Please refer to our Privacy Policy for information on how we collect, use, and protect your personal data.</p> 
                <h3>11. Limitation of Liability</h3>  
                   <p>5am Fresh is not liable for any indirect, incidental, special, or consequential damages arising from the use of our services. Our liability is limited to the amount paid by you for the services.</p> 
                <h3> 12. Changes to Terms</h3>  
                    <p>We reserve the right to modify these terms and conditions at any time. Any changes will be effective immediately upon posting on our website. Your continued use of our services constitutes acceptance of the revised terms.</p>  
                <h3>13. Governing Law</h3>   
                    <p>These terms and conditions are governed by and construed in accordance with the laws of India. Any disputes arising from these terms will be subject to the exclusive jurisdiction of the courts of Vizag</p> 
                <h3>14. Contact Information</h3>
                    <p>If you have any questions or concerns about these terms and conditions, please contact us at <a href="mailto:info@5amfresh.com"> info@5amfresh.com</a> or 9246733161.</p>
                    <p>Thank you for choosing 5am Fresh. We look forward to serving you with the freshest vegetables and exceptional service.</p>            
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
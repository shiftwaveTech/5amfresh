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
                <h2 class="text-center">Refund <span>Policy</span></h2>
                    <p>At 5am Fresh, we strive to provide the highest quality vegetables and exceptional customer service. We understand that there may be situations where you need to request a refund. This Refund Policy outlines the conditions under which refunds are granted and the process for requesting a refund</p>
                <h3> 1. Satisfaction Guarantee</h3>
                    <p>We are committed to ensuring your satisfaction with our products. If you receive vegetables that do not meet our quality standards, please contact us immediately, and we will arrange for a replacement on the same day or the following day.</p>
                <h3> 2. Eligibility for Refunds</h3>
                    <p><b>Refunds are generally issued under the following conditions:</b></p>
                    <p><b>Quality Issues:</b> If the vegetables you receive are damaged, spoiled, or otherwise not up to standard, you are eligible for a refund or replacement.</p>
                    <p><b>Incorrect Orders:</b>If you receive an incorrect order, you can request a refund or have the correct order delivered at no additional cost.</p>
                    <p><b>Service Cancellation:</b>If you cancel your subscription, any balance amount for the remaining weeks will be credited back to you without any questions asked.</p>
                <h3>  3. Refund Process</h3>
                    <p><b>To request a refund, please follow these steps:</b> </p>
                    <p><b>Contact Customer Service:</b> Reach out to our customer service team at <a href="mailto:info@5amfresh.com">info@5amfresh.com </a>  or 9246733161 within 24 hours of receiving your order. Provide your order details and a brief explanation of the issue.</p>
                     <p><b>Review and Approval:</b>Our team will review your request and may ask for additional information or photos of the issue. Once your request is approved, we will process your refund or arrange for a replacement.</p>
                     <p><b>Refund Method:</b>Refunds will be issued using the original payment method. Please allow 4-5 business days for the refund to appear in your account.</p>
                <h3>4. Exceptions</h3> 
                     <p><b>Refunds will not be issued under the following conditions:</b></p> 
                     <p><b>Change of Mind:</b>If you change your mind after the vegetables have been delivered, we cannot offer a refund.</p>       
                     <p><b>Late Requests:</b>Refund requests made more than 24 hours after delivery will not be eligible.</p>
                     <p><b>NonSubscription Orders:</b>One time purchases are not covered by this refund policy. These are handled on a case by case basis.</p>
                <h3>5. Cancellation Policy</h3> 
                    <p><b> Subscription Cancellation: </b>You can cancel your subscription at any time through your account settings or by contacting customer service. The balance amount for the remaining weeks will be credited back to you without any questions asked.</p> 
                   <p><b>Custom Plan Cancellation: </b>Custom plans can be canceled, and the remaining balance will be refunded as long as the cancellation is made before the start of the next delivery cycle.</p>      
                <h3> 6. Contact Us</h3>  
                    <p>If you have any questions or concerns about our Refund Policy or need assistance with a refund request, please contact us at:</p>    
                  <p> <b>Email:</b> info@5amfresh.com<br>
                   <b>Phone:</b> 924673311<br>    
                   <b> Address:</b> CBM Compound, Vizag, Andhra Pradesh</p>
                    <p>Thank you for choosing 5am Fresh. We value your business and are dedicated to providing you with the best possible service and support.</p>    
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
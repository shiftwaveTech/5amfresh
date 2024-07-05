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
                <h2 class="text-center">Privacy <span>Policy</span></h2>
                    <p>At 5am Fresh, we are committed to protecting your privacy and ensuring the security of your personal information. This Privacy Policy outlines how we collect, use, and safeguard your data when you use our website and services.</p>
                <h3>  1. Information We Collect</h3>
                    <p><b>Personal Information:</b>When you sign up for our services, we collect personal information such as your name, address, email address, phone number, and payment information.</p>
                    <p><b>Usage Data:</b>We collect information about your interactions with our website, including IP address, browser type, pages visited, and the date and time of your visit.</p>
                    <p><b>Cookies: </b>We use cookies and similar technologies to enhance your browsing experience and gather information about how you use our website.</p>
                <h3> 2. How We Use Your Information</h3>        
                   <p><b> To Provide Services:</b>We use your personal information to process your orders, deliver vegetables, and manage your subscription</p>
                   <p><b> To Improve Services:</b>We analyze usage data to improve our website, products, and services</p>
                   <p><b> To Communicate:</b>We use your contact information to send you updates, promotional materials, and respond to your inquiries.</p>
                   <p><b> For Payments:</b>We use your payment information to process transactions securely</p>
                <h3> 3. Sharing Your Information</h3>  
                   <p><b>ThirdParty Service Providers:</b>We may share your information with thirdparty service providers who assist us in delivering our services, such as payment processors and delivery partners. These providers are required to protect your information and use it only for the purposes specified by us.</p> 
                   <p><b>Legal Requirements: </b>We may disclose your information if required by law or in response to legal requests to protect our rights, safety, or property, or that of others.</p>
                <h3>4. Data Security</h3> 
                    <p>We implement appropriate technical and organizational measures to protect your personal information from unauthorized access, disclosure, alteration, and destruction. While we strive to protect your data, no method of transmission over the internet or electronic storage is completely secure, and we cannot guarantee absolute security.</p> 
                <h3> 5. Your Rights</h3> 
                    <p><b>Access and Update: </b>You have the right to access and update your personal information. You can do this by logging into your account or contacting us directly.</p>    
                    <p><b> OptOut:</b>You can opt out of receiving promotional communications from us by following the unsubscribe instructions in the emails or contacting us directly.</p>
                    <p><b> Delete:</b>You can request the deletion of your personal information by contacting us. We will comply with your request, subject to legal obligations to retain certain data.</p>
                <h3> 6. Cookies and Tracking Technologies</h3>
                    <p>We use cookies and similar technologies to enhance your experience on our website. You can control cookies through your browser settings. However, disabling cookies may affect your ability to use certain features of our website.</p>    
                <h3> 7. Children’s Privacy</h3>   
                   <p>Our services are not intended for children under the age of 13. We do not knowingly collect personal information from children under 13. If we become aware that we have collected personal information from a child under 13, we will take steps to delete such information.</p> 
                <h3> 8. Changes to This Privacy Policy</h3>  
                   <p>We may update this Privacy Policy from time to time. Any changes will be posted on this page with an updated revision date. Your continued use of our services after the posting of changes constitutes your acceptance of such changes.</p>
                <h3>9. Contact Us</h3>
                 <p>If you have any questions or concerns about this Privacy Policy, please contact us at:</p>
                  <p> <b>Email:</b> info@5amfresh.com<br>
                   <b>Phone:</b> 924673311<br>    
                   <b> Address:</b> CBM Compound, Vizag, Andhra Pradesh</p>
                    <p>Thank you for trusting 5am Fresh with your personal information. We are committed to safeguarding your privacy and providing you with the best service possible.</p>    
                  
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
<form>
    <h2 class="text-center fw-bold color-white">Get in Touch</h2>
    <input type="text" placeholder="Name*" id="ppname" onfocus="this.style.border=''" maxlength="40">
    <input type="email" placeholder="Email*" id="ppemail" maxlength="50" onfocus="this.style.border=''">
    <input type="tel" placeholder="Phone Number*" maxlength="10" onkeypress="return numbersOnly(event)"  onkeyup="numberOnly()" onfocus="this.style.border=''" id="ppPhone_number">
    <input type="text" placeholder="City*" maxlength="30" id="ppcity" onfocus="this.style.border=''">
    <input type="text" placeholder="Subject*" maxlength="30" id="ppsubject" onfocus="this.style.border=''">
    <textarea rows="5" placeholder="Message*" id="ppmessage" onfocus="this.style.border=''"></textarea>
    <div id="pp_error" style="color:#ff6206;margin-top: 20px;font-size: 18px;font-weight: 500;text-transform: capitalize;text-align:center"></div>
    <button type="button" onclick="PPformvalid()" >Submit</button>
</form>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>


// setInterval(function () {
// 	 var firstName = $("#firstname").val().trim();
// 	 var lastName = $("#lastname").val().trim();
//      var email = $("#email").val();
// 	 var phoneNumber = $("#Phone").val();
//      var message = $("#message").val().trim();
// if(firstName!='' && lastName!='' && email!='' && phoneNumber!='' && message!=''){
// 	$("#error").html("");
// }});


function numbersOnly(element){
		var element=element.keyCode;
		
			if(element<48||element>57){
				return false;
			}else{
				return true;
			}
		}

 function numberOnly(){
        var phone=$('#ppPhone_number').val();
        $('#ppPhone_number').val(phone.replace(/[^0-9 ]/g, ""));
        $('#ppPhone_number').val(phone.replace(/\s/g, ""));
        $('#ppPhone_number').val(phone.replace(/[&\/\\#N;, +()$~%.'":*?<>{}]/g, ''));
 }

	function PPformvalid(){
        
           var ppname = $("#ppname").val().trim();		   
           var ppemail = $("#ppemail").val();
		   var ppPhone_number = $("#ppPhone_number").val();
           var pp_subject = $("#ppsubject").val().trim();
           var pp_city = $("#ppcity").val().trim();
           var pp_message = $("#ppmessage").val().trim();
		   var numbers= /^\d+$/;		   
		   var mail = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
			
		if( ppname=='' || ppemail=='' || (ppemail!=='' && mail.test(ppemail)==false) || ppPhone_number=='' || (ppPhone_number.length<10) || (ppPhone_number!='' && numbers.test(ppPhone_number)==false) || pp_message=="" || pp_subject=='' || pp_city=='' ){

			if(ppname==''){
				$("#ppname").css("border","2px solid #ff6206");
			}else{
				$("#ppname").css("border","");
			}
			if(ppemail=='' || ppemail!=='' && mail.test(ppemail)==false){
				$("#ppemail").css("border","2px solid #ff6206");
			}else{
				$("#ppemail").css("border","");
			}
			if(ppPhone_number=='' || ppPhone_number.length<10 || (ppPhone_number!='' && numbers.test(ppPhone_number)==false)){
				$("#ppPhone_number").css("border","2px solid #ff6206");
			}else{
				$("#ppPhone_number").css("border","");
			}
			if(pp_message==''){
				$("#ppmessage").css("border","2px solid #ff6206");
			}else{
				$("#ppmessage").css("border","");
			}
			if(pp_city==''){
				$("#ppcity").css("border","2px solid #ff6206");
			}else{
				$("#ppcity").css("border","");
			}
			if(pp_subject==''){
				$("#ppsubject").css("border","2px solid #ff6206");
			}else{
				$("#ppsubject").css("border","");
			}
			$("#pp_error").html("Please fill all the Mandatory Fields");
				return false;
		}else{
			var details={ppname,ppemail,ppPhone_number,pp_message,pp_subject,pp_city};
			$("#pp_error").html("");
			$.ajax({
			type:'POST',
			url:'submit-enquiry-form.php',
			data:details,
			success:function(data){ 
			    window.location.href ="thankyou.php";
				}
			});
		} 
	}
</script>
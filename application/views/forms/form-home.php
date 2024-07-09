<form>
    <h3 class="text-center fw-bold mb-3" style="color:#3c3c3c;">Do you have a query?<br>We can help.</h3>
    <div class="line m-auto d-block"></div>
    <input type="text" placeholder="Name*" id="name" onfocus="this.style.border=''" maxlength="60">
    <input type="email" placeholder="Email*" id="email_address" maxlength="50" onfocus="this.style.border=''">
    <input type="tel" placeholder="Phone Number*" id="Phone_number" maxlength="10" onkeypress="return numbersOnly(event)"  onkeyup="numberOnly()" onfocus="this.style.border=''">
    <input type="text" placeholder="City*" maxlength="30" id="city" onfocus="this.style.border=''">
    <textarea rows="3" placeholder="Query*" maxlength="50" id="query" onfocus="this.style.border=''"></textarea>
    <div id="error_home" style="color:#ff6206;margin-top: 20px;font-size: 18px;font-weight: 500;text-transform: capitalize;text-align:center"></div>
    <button type="button" onclick="formvalidation()">Submit</button>
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
var phones=$('#Phone_number').val();
$('#Phone_number').val(phones.replace(/[^0-9 ]/g, ""));
$('#Phone_number').val(phones.replace(/\s/g, ""));
$('#Phone_number').val(phones.replace(/[&\/\\#N;, +()$~%.'":*?<>{}]/g, ''));
}


// function TextOnly(){
//         var phone=$('#query').val();
//         $('#query').val(phone.replace(/[^a-zA-Z ]/g, ""));
//  }

	function formvalidation(){
           var name = $("#name").val().trim();
           var email_address = $("#email_address").val();
		   var Phone_number = $("#Phone_number").val();
           var query = $("#query").val().trim();
           var city = $("#city").val().trim();
		   var numbers= /^\d+$/;		   
		   var mailing = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
			
		if(name=='' ||  email_address=='' || (email_address!=='' && mailing.test(email_address)==false) || Phone_number=='' || (Phone_number!='' && numbers.test(Phone_number)== false ) || (Phone_number.length<10) || query=='' || city== '')
		{
			if(name==''){
				$("#name").css("border","1px solid #ff6206");
			}else{
				$("#name").css("border","");
			}
			if(email_address=='' || email_address!=='' && mailing.test(email_address)==false){
				$("#email_address").css("border","1px solid #ff6206");
			}else{
				$("#email_address").css("border","");
			}
			if(Phone_number=='' || Phone_number.length<10 || (Phone_number!='' && numbers.test(Phone_number)== false )){
				$("#Phone_number").css("border","1px solid #ff6206");
			}else{
				$("#Phone_number").css("border","");
			}
			if(city==''){
				$("#city").css("border","1px solid #ff6206");
			}else{
				$("#city").css("border","");
			}
			if(query==''){
				$("#query").css("border","1px solid #ff6206");
			}else{
				$("#query").css("border","");
			}
			$("#error_home").html("Please fill all the Mandatory Fields");
				return false;
		}else{
			var details={name,email_address,Phone_number,query,city};
			$("#error_home").html("");
			$.ajax({
			type:'POST',
			url:'submit-home-form.php',
			data:details,
			success:function(data){ 
			    window.location.href ="thankyou.php";
				}
			});
		} 
	}
</script>
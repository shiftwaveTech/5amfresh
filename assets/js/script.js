var baseurl = 'http://localhost/Freshoo/';
// var baseurl = 'http://52.9.131.111/mockups/des-12/freshoo/';


var offerDivId = '';
var offerCost = '';

$(document).on('click', '.selOfferDiv', function(){
    offerDivId = $(this).attr('data-id');
    offerCost = $(this).attr('plan-cost');
	$.ajax({
			type: 'POST',
			data: {seloffer : offerDivId , offerCost : offerCost},
			url: baseurl+'welcome/userSelOffer', 
			success:function(data){
				console.log(data);
				var url = baseurl + 'plans'; 
			    window.location.href=url;
				
			}
	});
});

$(document).on('click', '.subscribe', function(){
    var url = baseurl + 'subscribe'; 
	window.location.href=url;
});



$(document).on('click', '#sendOtp', function(){
    var customer_name = $("#customer_name").val();
	var customer_email = $("#customer_email").val().trim();
    var customer_phone = $('#customer_phone').val();
    const emailRegex = /^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}$/;

    if(customer_name === "" || customer_email === "" || !emailRegex.test(customer_email) || customer_phone === "" || customer_phone.length<10)
    {
        if(customer_name === "")
        {
            $('#customer_name').css('border-color','red'); 
        }
        if(customer_email === "")
        {
            $('#customer_email').css('border-color','red');
        }
        else if(!emailRegex.test(customer_email)){
            $('#customer_email').css('border-color','red');
        }
        if(customer_phone === "" || customer_phone.length<10)
        {
            $('#customer_phone').css('border-color','red');
        }
    }
    else
    {
        $('#sendOtp').text('Resend OTP');
        $('#otpsent').text('The OTP has Delivered').fadeIn(1000, function() {
            document.getElementById("customer_phone").disabled = true;
            $('#otpDiv').fadeIn(1000).css({ 
                'opacity': '0',
                'marginTop': '10px'
            }).animate({
                'opacity': '1',
                'marginTop': '0'
            }, 1000);
            
            setTimeout(function() {
                $('#otpsent').slideUp(1000).fadeOut(1000);
            }, 2000);
        });
        
        
        
    $(document).on('click', '#verifyOtp', function(){
        var otp_code = $("#otpcode").val();
        var customer_name = $("#customer_name").val();
        var customer_email = $("#customer_email").val();
        var customer_phone = $("#customer_phone").val();
        if(otp_code === ''){
            $('#otpcode').css('border-color','red');
        }
        else{
            if(otp_code === "1234"){
                $('#sendOtp').text('');
                $('#verifyOtp').text('');
                document.getElementById("otpcode").disabled = true;
                //otp verified
                $('#otpverified').text('OTP verified').css('color', 'green').fadeIn(1000, function() {
                    setTimeout(function() {
                        $('#otpsent').slideUp(1000, function() {
                            $('#otpverified').fadeOut(1000);
                        });
                    }, 2000);
                });                
                //end
                var dataString = {userName:customer_name,userMail:customer_email,userPhone:customer_phone};
                $.ajax({
                    type: "POST",
                    data: dataString,
                    url: baseurl + 'Welcome/verifyOTP',
                    success: function(data) {
                        var result = $.parseJSON(data);
                        console.log(result);
                        var status = result.status; 
                        if(status == 'success'){
                            $('#addressDiv').fadeIn(2000).css({ 
                                'opacity': '0',
                                'marginTop': '30px'
                            }).animate({
                                'opacity': '1',
                                'marginTop': '0'
                            }, 1000);
                            $('#detailsButton').css('display', 'block');
                        }                    
                    }

                });
            }else{
                $('#otpverified').text('Invalid OTP').css('color', 'red').fadeIn(1000, function() {
                    setTimeout(function() {
                        $('#otpsent').slideUp(1000).fadeOut(1000);
                    }, 2000);
                });
            }
    }
    });
    }   
});

function fetchUserData() {
    var mobile = $('#customer_phone').val();
    if (mobile.length === 10) {
        $.ajax({
            type: 'POST',
            url: baseurl +'Welcome/get_user_data',
            data: { mobile: mobile },
            success: function(response) {
                var data = JSON.parse(response);
                if(data.area == '' || data.area == null){
                    data.area == 'Select';
                }
                if (data) {
                    $('#customer_name').val(data.name);
                    $('#customer_email').val(data.email);
                    $('#validationCustomDropdown').val(data.area);
                    $('#house_no').val(data.house_no);
                    $('#street').val(data.address);
                    $('#landmark').val(data.landmark);
                    $('#whatsapp_num').val(data.mobile);
                    // $('#addressDiv').fadeIn(1000);
                    // $('#detailsButton').show();
                } else {
                    // Clear fields if no data found
                    $('#customer_name').val('');
                    $('#customer_email').val('');
                    $('#validationCustomDropdown').val('Select');
                    $('#house_no').val('');
                    $('#street').val('');
                    $('#landmark').val('');
                    $('#whatsapp_num').val('');
                    // $('#addressDiv').fadeOut(1000);
                    // $('#detailsButton').hide();
                }
            }
        });
    }
}
// user details validation
function userDetailsValidation(){
    var customer_phone = $('#customer_phone').val();
    var area = $('#validationCustomDropdown').val();
    var house_no= $('#house_no').val();
    var street= $('#street').val();
    var landmark= $('#landmark').val();
    var whatsapp_num = $('#whatsapp_num').val();

    if(area === "Select" || house_no === "" || street === "" || landmark === "" || whatsapp_num === "")
    {
        if(area === "Select"){
            $('#validationCustomDropdown').css('border-color','red');
        }
        if(house_no === ""){
            $('#house_no').css('border-color','red');
        }
        if(street === ""){
            $('#street').css('border-color','red');
        }
        if(landmark === ""){
            $('#landmark').css('border-color','red');
        }
        if(whatsapp_num === ""){
            $('#whatsapp_num').css('border-color','red');
        }
    }
    else{
        var dataString = {area:area,house_no:house_no,street:street,landmark:landmark,whatsapp_num:whatsapp_num,customer_phone:customer_phone};
        $.ajax({
            type: "POST",
            data: dataString,
            url: baseurl + 'Welcome/userAddress',
            success: function(data) {
                console.log(data);
                var result = $.parseJSON(data);
                    //console.log(result);
                    var status = result.status; 
                    console.log(status);
                    if(status == 'success'){
                        var url = baseurl+ 'chooseday'; 
                        window.location.href=url; 
                    }   
            }

        });
    }
}

// select a day
$(document).ready(function(){
    $(document).on('click', '#selectDayButton', function(){
        var selectedDay = $('input[name="day"]:checked').val();
        var selectedPlan = $('.WeeklyPlan').val();
        if (!selectedDay) {
            $('#notSelectDay-error').text("Please Select Day");
        } else {
            $('#notSelectDay-error').text("");
            $.ajax({
                type: "POST",
                data: {selectedDay: selectedDay, selectedPlan: selectedPlan},
                url: baseurl + 'Welcome/selectedDay',
                success: function(data) {
                    console.log(data);
                    var result = $.parseJSON(data);
                    var status = result.status; 
                    console.log(status);
                    if (status == 'success') {
                        var url = baseurl + 'selectoffer'; 
                        window.location.href = url; 
                    }
                }
            });
        }
    });
    $('input[name="day"]').change(function() {
        $('#notSelectDay-error').text(""); 
    });
});

// SelectedOffer Plan
function selectedOfferPage() {
    var selectedOffer = "";
    var selectedPlan = $('.offerpageWeeklyPlan').val();
    $('.selectOfferPlan').each(function() {
        if ($(this).find('i').hasClass('active')) { 
            selectedOffer = $(this).find('input').val(); 
        }
    });
    if (selectedOffer === "") {
        $('#notSelectOffer-error').text("Please select an offer");
    } else {
        $('#notSelectOffer-error').text("");
        $.ajax({
            type : 'POST',
            data : {selectedOffer : selectedOffer ,selectedPlan : selectedPlan },
            url : baseurl + 'Welcome/selectedOffer',
            success: function(data) {
                
                var result = $.parseJSON(data);
                var status = result.status; 
              
                if (status == 'success') {
                    var url = baseurl + 'preview'; 
                    window.location.href = url;
                }
            }
        });
        
    }
}


function payNow() {
    var weeklyPlanValue = $('#weeklyPlanValue').val();
    var offerPlanData = $('#offerPlanData').val();
    var totalPrice = $("#totalPrice").text().replace('₹', '');
    let numericValue = parseFloat(totalPrice.replace(/[^\d.-]/g, ''));
	var userNumber = $("#userPhone").text();
	var userMail = $("#userMail").text().trim();
    var userName = $('#userName').text();   
    var options = {
      // "key": "rzp_test_1j4jfeF4uLcpDl",
        "key": "rzp_test_1j4jfeF4uLcpDl",
        "amount": numericValue * 100,
        "currency": "INR",
        "image": baseurl + "assets/images/razorpay.png",
        "prefill": {
            "contact": userNumber,
            "email": userMail,
            "name" : userName
        },
        "handler": function (response) {
            var paymentDetails = {
                paymentId: response.razorpay_payment_id,
                paymentAmount: parseFloat(response.amount) / 100 ,// Assuming the amount is in paisa
                contact : userNumber,
                email : userMail ,
                name : userName ,
                amount : numericValue,
                weeklyPlan : weeklyPlanValue,
                offerPlanData : offerPlanData
            };
    
            // Check if status exists in the response
            if (response.status) {
                paymentDetails.status = response.status;
            }
    
            // Check if method exists in the response
            if (response.method) {
                paymentDetails.type = response.method;
            }
    
            // Check if card information exists
            if (response.card && response.card.number) {
                paymentDetails.cardNumber = response.card.number;
            }
            if (response.card && response.card.name) {
                paymentDetails.cardName = response.card.name;
            }
    
            // console.log("Response:", response);
            // console.log("Payment Details:", paymentDetails);
    
            saveUserData(response, paymentDetails);
        }
    };

    var rzp1 = new Razorpay(options);

    rzp1.on('payment.failed', function (response) {
        // Handle payment failure
		saveUserData(response);
    });

    rzp1.on('payment.canceled', function (response) {
        console.log('cancel');
			saveUserData(response);
    });

    rzp1.open();
}

function saveUserData(response, paymentDetails){
    $.ajax({
        type: "POST",
        url: baseurl + "Welcome/save_payment_data",
        data: {
            response: response,
            paymentDetails: paymentDetails
        },
        success: function(data){
             console.log(data);
        }
    });
}






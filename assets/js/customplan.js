var baseurl = 'http://localhost/5amfresh/';

$(document).on('click', '#create-custom-plan', function(){
    var url = baseurl + 'custom-plan'; 
    window.location.href = url;
});
///

$(document).ready(function() {
    let savedValues = localStorage.getItem('customPlanData');
    if (savedValues) {
        try {
            savedValues = JSON.parse(savedValues);
            savedValues.forEach(function(item) {
                let $item = $(`.item[data-item="${item.item}"]`);
                if ($item.length) {
                    $item.find('.square-icon-style').addClass('checked');
                    $item.find('input[placeholder="Kg"]').val(item.kg);
                    $item.find('input[placeholder="Gms"]').val(item.gms);
                }
            });
        } catch (e) {
            console.error('Error parsing customPlanData from localStorage', e);
            localStorage.removeItem('customPlanData');
        }
    }
//Custom Plan Page Check Box Validation

// $(document).ready(function() {
//     let savedValues = JSON.parse(localStorage.getItem('customPlanData'));
//         if (savedValues) {
//             savedValues.forEach(function(item) {
//                 let $item = $(`.item[data-item="${item.item}"]`);
//                 if ($item.length) {
//                     $item.find('.square-icon-style').addClass('checked');
//                     $item.find('input[placeholder="Kg"]').val(item.kg);
//                     $item.find('input[placeholder="Gms"]').val(item.gms);
//                 }
//             });
//         }
    // Handle the click event on checkboxes for all items
    $('.square-icon-style').click(function() {
        $(this).toggleClass('checked');
        var text = this.querySelector('.icon-text p');
        if (text) {
            text.style.color = icon.classList.contains('active') ? '#0f9b49' : ''; // Empty string resets to default color
        }
        $('#errortext').text('');
        // $('.icon-text p').css('color','#0f9b49'); 
        let $item = $(this).closest('.item');
        let $kgInput = $item.find('input[placeholder="Kg"]');
        let $gmInput = $item.find('input[placeholder="Gms"]');
        let kgValue = $kgInput.val();
        let gmValue = $gmInput.val();

        if ($(this).hasClass('checked')) {
            if (!kgValue && !gmValue) {
                $kgInput.css('border-color', 'red');
                $gmInput.css('border-color', 'red');
            } else {
                $kgInput.css('border-color', '');
                $gmInput.css('border-color', '');
            }
            if (gmValue || kgValue) {
                $kgInput.css('border-color', '');
                $gmInput.css('border-color', '');
            }
        } else {
            $kgInput.css('border-color', '');
            $gmInput.css('border-color', '');
        }
    });

    
    $('input[placeholder="Kg"], input[placeholder="Gms"]').on('input', function() {
        $('input[placeholder="Kg"]').css('border-color', ''); 
        $('input[placeholder="Gms').css('border-color', '');
        $('#errortext').text('');
    });
});

//Custom Plan Page Function 

function customPlanValidation() {
    let valuesArray = [];
    let hasCheckedItem = false;
    let inputMissing = false;
    let checkboxMissing = false;

    $('.item').each(function() {
        let $kgInput = $(this).find('input[placeholder="Kg"]');
        let $gmInput = $(this).find('input[placeholder="Gms"]');
        let kgValue = $kgInput.val();
        let gmValue = $gmInput.val();
        let itemName = $(this).find('.list-group-item:nth-child(2)').text();
        if ($(this).find('.square-icon-style').hasClass('checked')) {
            if (kgValue || gmValue) {
                hasCheckedItem = true;
                valuesArray.push({ item: itemName, kg: kgValue, gms: gmValue });
                $kgInput.css('border-color', '');
                $gmInput.css('border-color', '');
            } else {
                $kgInput.css('border-color', 'red');
                $gmInput.css('border-color', 'red');
                inputMissing = true;
            }
        }
        else{
            if(kgValue || gmValue)
            {
                checkboxMissing =true;
            }
        }
    });
    if (inputMissing) {
        $('#errortext').text('Please enter Kg or Gms for the selected items').fadeIn(1000, function() {
            setTimeout(function() {
                $('#errortext').slideUp(1000).fadeOut(1000);
            }, 1000);
        });
        return false;
    }
    if(checkboxMissing)
        {
            $('#errortext').text('Please check the checkbox').fadeIn(1000, function() {
                setTimeout(function() {
                    $('#errortext').slideUp(1000).fadeOut(1000);
                }, 1000);
            });
            return false;            
        }
    if (!hasCheckedItem) {
        $('#errortext').text('Please select at least one item').fadeIn(1000, function() {
            setTimeout(function() {
                $('#errortext').slideUp(1000).fadeOut(1000);
            }, 1000);
        });
        return false;
    }
    localStorage.setItem('customPlanData', JSON.stringify(valuesArray));
    $.ajax({
        type: 'POST',
        data: JSON.stringify(valuesArray), 
        contentType: 'application/json',   
        url: baseurl + 'CustomPlanController/saveEssentialVegetables',
        success: function(data) {
            // var trim = data.trim();
            // if(trim == 'success')
            //     {
                    var url = baseurl + 'custom-plan-1'; 
                    window.location.href = url;
                // }
            // localStorage.removeItem('customPlanData');
            // var url = baseurl + 'custom-plan-1'; 
            // window.location.href = url;
        }
    });
}

//leafy Vegetable Validation

$(document).ready(function() {
    // $('#dontNeedIcon').click(function() {
    //     $(this).toggleClass('active');
    // });
    // Remove red border when user types
    $('#kgInput, #gmInput').on('input', function() {
        $(this).css('border-color', '');
    });
});

function LeafyVegetablesValidation() {
    let dontNeedChecked = $('#dontNeedIcon').hasClass('active');
    let leafyitems = $('#Selectleafyvegetable').val();
    let kgValue = $('#kgInput').val();
    let gmValue = $('#gmInput').val();
    let selected = false;
    let chekedAndInput = false; 
    if(!dontNeedChecked && (!kgValue && !gmValue)) {
        $('#kgInput').css('border-color', 'red');
        $('#gmInput').css('border-color', 'red');
    } else if(dontNeedChecked && (kgValue || gmValue)) {
        selected = true;
        chekedAndInput = true;
    } else {
        selected = true;
    }
    if(!selected) {
        $('#errortext').text('Please select at least one option').fadeIn(1000, function() {
            setTimeout(function() {
                $('#errortext').slideUp(1000).fadeOut(1000);
            }, 2000);
        });
        return false;
    }
    if(chekedAndInput) {
        $('#errortext').text('Please select only one option').fadeIn(1000, function() {
            setTimeout(function() {
                $('#errortext').slideUp(1000).fadeOut(1000);
            }, 2000);
        });
        return false;
    }
    $.ajax({
        type: 'POST',
        data: { leafyitems: leafyitems, kgValue: kgValue, gmValue: gmValue },
        url: baseurl + 'CustomPlanController/saveLeafyVegetables',
        success: function(data) {
            var url = baseurl + 'custom-plan-3'; 
            window.location.href = url;
        }
    });
}
   
//Root Vegetables Validation

function RootVegetablesValidation() {  
    let dontNeedChecked = $('#dontNeedIcon').hasClass('active');
    let rootitems = $('#Selectrootvegetable').val();
    let kgValue = $('#kgInput').val();
    let gmValue = $('#gmInput').val();
    let selected = false;
    let chekedAndInput = false; 

    if(!dontNeedChecked && (!kgValue && !gmValue)) {
        $('#kgInput').css('border-color', 'red');
        $('#gmInput').css('border-color', 'red');
    } else if(dontNeedChecked && (kgValue || gmValue)) {
        selected = true;
        chekedAndInput = true;
    } else {
        selected = true;
    }
    if(!selected) {
        $('#errortext').text('Please select at least one option').fadeIn(1000, function() {
            setTimeout(function() {
                $('#errortext').slideUp(1000).fadeOut(1000);
            }, 2000);
        });
        return false;
    }
    if(chekedAndInput) {
        $('#errortext').text('Please select only one option').fadeIn(1000, function() {
            setTimeout(function() {
                $('#errortext').slideUp(1000).fadeOut(1000);
            }, 2000);
        });
        return false;
    }
    $.ajax({
        type: 'POST',
        data: { rootitems: rootitems, kgValue: kgValue, gmValue: gmValue },
        url: baseurl + 'CustomPlanController/saveRootVegetables',
        success: function(data) {
            var url = baseurl+'custom-plan-4'; 
	        window.location.href=url;
        }
    });
}

// Squash Vegetables Validation
function SquashVegetablesValidation() {
    let dontNeedChecked = $('#dontNeedIcon').hasClass('active');
    let squashitems = $('#Selectsquashvegetable').val();
    let kgValue = $('#kgInput').val();
    let gmValue = $('#gmInput').val();
    let selected = false;
    let chekedAndInput = false; 

    if(!dontNeedChecked && (!kgValue && !gmValue)) {
        $('#kgInput').css('border-color', 'red');
        $('#gmInput').css('border-color', 'red');
    } else if(dontNeedChecked && (kgValue || gmValue)) {
        selected = true;
        chekedAndInput = true;
    } else {
        selected = true;
    }
    if(!selected) {
        $('#errortext').text('Please select at least one option').fadeIn(1000, function() {
            setTimeout(function() {
                $('#errortext').slideUp(1000).fadeOut(1000);
            }, 2000);
        });
        return false;
    }
    if(chekedAndInput) {
        $('#errortext').text('Please select only one option').fadeIn(1000, function() {
            setTimeout(function() {
                $('#errortext').slideUp(1000).fadeOut(1000);
            }, 2000);
        });
        return false;
    }
    $.ajax({
        type: 'POST',
        data: { squashitems: squashitems, kgValue: kgValue, gmValue: gmValue },
        url: baseurl + 'CustomPlanController/saveSquashVegetables',
        success: function(data) {
            var url = baseurl+'custom-plan-5'; 
	        window.location.href=url;
        }
    });
}

// Podded Vegetables Validation
function PoddedVegetablesValidation() {
    let dontNeedChecked = $('#dontNeedIcon').hasClass('active');
    let poddeditems = $('#Selectpoddedvegetable').val();
    let kgValue = $('#kgInput').val();
    let gmValue = $('#gmInput').val();
    let selected = false;
    let chekedAndInput = false; 

    if(!dontNeedChecked && (!kgValue && !gmValue)) {
        $('#kgInput').css('border-color', 'red');
        $('#gmInput').css('border-color', 'red');
    } else if(dontNeedChecked && (kgValue || gmValue)) {
        selected = true;
        chekedAndInput = true;
    } else {
        selected = true;
    }
    if(!selected) {
        $('#errortext').text('Please select at least one option').fadeIn(1000, function() {
            setTimeout(function() {
                $('#errortext').slideUp(1000).fadeOut(1000);
            }, 2000);
        });
        return false;
    }
    if(chekedAndInput) {
        $('#errortext').text('Please select only one option').fadeIn(1000, function() {
            setTimeout(function() {
                $('#errortext').slideUp(1000).fadeOut(1000);
            }, 2000);
        });
        return false;
    }
    $.ajax({
        type: 'POST',
        data: { poddeditems: poddeditems, kgValue: kgValue, gmValue: gmValue },
        url: baseurl + 'CustomPlanController/savePoddedVegetables',
        success: function(data) {
            var url = baseurl+'custom_review'; 
	        window.location.href=url;
        }
    });
}

// Other Vegetables Validation 
function OtherVegetablesValidation() {
    let dontNeedChecked = $('#dontNeedIcon').hasClass('active');
    let otheritems = $('#Selectothervegetable').val();
    let kgValue = $('#kgInput').val();
    let gmValue = $('#gmInput').val();
    let selected = false;
    let chekedAndInput = false; ;

    if(!dontNeedChecked && (!kgValue && !gmValue)) {
        $('#kgInput').css('border-color', 'red');
        $('#gmInput').css('border-color', 'red');
    } else if(dontNeedChecked && (kgValue || gmValue)) {
        selected = true;
        chekedAndInput = true;
    } else {
        selected = true;
    }
    if(!selected) {
        $('#errortext').text('Please select at least one option').fadeIn(1000, function() {
            setTimeout(function() {
                $('#errortext').slideUp(1000).fadeOut(1000);
            }, 2000);
        });
        return false;
    }
    if(chekedAndInput) {
        $('#errortext').text('Please select only one option').fadeIn(1000, function() {
            setTimeout(function() {
                $('#errortext').slideUp(1000).fadeOut(1000);
            }, 2000);
        });
        return false;
    }
    var valuesArray = { otheritems: otheritems, kgValue: kgValue, gmValue: gmValue };
    localStorage.setItem('customPlanData', valuesArray);
    $.ajax({
        type: 'POST',
        data: { otheritems: otheritems, kgValue: kgValue, gmValue: gmValue },
        url: baseurl + 'CustomPlanController/saveOtherVegetables',
        success: function(data) {
            var url = baseurl+'custom-plan-2'; 
	        window.location.href=url;
        }
    });
// $.ajax({
//     type: 'POST',
//     data: valuesArray ,
//     url: baseurl + 'CustomPlanController/saveOtherVegetables',
//     success: function(data) {
//         window.location.href = baseurl + 'custom_review';
//     }
// });
}
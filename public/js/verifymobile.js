


















    $("#submitBtn").click(function () {
       //$("input").val('');
       $(this).hide();
       $("#sendform").hide();
        $("#mobile").hide();
       $("#verifyBtn").show();
        $("#otp").show();
    });







    $(function() {
        $('#mobile').keyup(function() {
            if (this.value.match(/[^0-9]/g)) {
                this.value = this.value.replace(/[^0-9]/g, '');
            }
        });
        
        $('#otp').keyup(function() {
            if (this.value.match(/[^0-9]/g)) {
                this.value = this.value.replace(/[^0-9]/g, '');
            }
        });
      
        
    });


/*
<script type="text/javascript"> //use for verify code length
$("#otp").keydown(function(event) {
k = event.which;
if ((k >= 96 && k <= 105) || k == 8) {
if ($(this).val().length == 6) {
if (k == 8) {
return true;
} else {
event.preventDefault();
return false;

}
}
} else {
event.preventDefault();
return false;
}

});


*/





function check()
{

var pass1 = document.getElementById('mobile');
var message = document.getElementById('message');

var goodColor = "#0C6";
var badColor = "#FF9B37";
var fColor = "#FFFFFF";

if(mobile.value.length!=10){

mobile.style.borderColor = badColor;
message.style.color = badColor;
//message.innerHTML = "required 10 digits mobile number."
}

if(mobile.value.length==10){

mobile.style.borderColor = goodColor;
message.style.color = goodColor;
//message.innerHTML = "Valid Mobile Number"
}


if(mobile.value.length>=11){

//mobile.style.backgroundColor = badColor;
mobile.style.borderColor = badColor;
message.style.color = badColor;
message.innerHTML = "Invalid Mobile Number format"
}
}

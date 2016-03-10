$(document).ready(function(){
$("#info").hide();
$("#resend_otp").hide();
/////Function for sending otp code
$("#otpform").submit(function(){

	var filter = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		var email_chk=$("#otpemail").val();
							
		if(!(email_chk.match(filter)) || $("#otpemail").val()=="")
		{
			alert("Please Insert Proper Email");									
		}
		else
		{		
	
		$.ajax({
				type:"POST",
				url:"index.php?r=site/otp-verify",
				data:"otpemail="+$("#otpemail").val(),
				
				beforeSend:function()
				{
					$("#submit_email").val("Sending ...");
				},
				
				success:function(data)
				{	
                                        $("#resend_otp").show();
                                        $("#info").show();
                                        $("#resend_email").val($("#otpemail").val());
					$("#submit_email").val("Send One-time Password(OTP) »");
                                        $('#otpcode_check').attr("readonly", false);
				}	
		
			});
			return false;
		}
		return false;
	
	});

/////Function for re-sending otp code
$("#resend_otp").submit(function(){

    if($('#count').val()>5)
    {
        alert("Resend Limit Exceed");
        return false;
    }
    else
    {
    var filter = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		var email_chk=$("#otpemail").val();
							
		if(!(email_chk.match(filter)) || $("#otpemail").val()=="")
		{
			alert("Please Insert Proper Email");									
		}
		else
		{		
	
		$.ajax({
				type:"POST",
				url:"index.php?r=site/otp-verify",
				data:"resend_email="+$("#resend_email").val(),
				
				beforeSend:function()
				{
					$("#resend_code").val("Sending ...");
				},
				
				success:function(data)
				{	
                                        $("#resend_otp").show();
					$("#resend_code").val("Resend OTP");
				}	
		
			});
			return false;
		}
		return false;
    }	
	});

        
///////// Function for verifing OTP code

$("#otpcodeform").submit(function(){

		if($("#otpcode_check").val()=="")
		{
			alert("Please Insert OTP Code");
		}
		else
		{
	
		$.ajax({
				type:"POST",
				url:"index.php?r=site/otp-verify",
				data:"otpcode_check="+$("#otpcode_check").val(),
				
				beforeSend:function()
				{
					$("#otp_code").val("Checking ...");
				},
				
				success:function(data)
				{
					if(data=="wrongotp")
					{						
						alert("Wrong OTP Code.");
						$("#otp_code").val("Check");
					}
					else if(data)
					{
                                                $("#otp").hide();						
                                                document.getElementById('myviewer').style.display = "block";
                                                
					}
					else
					{
						alert("5 mins Over");
						$("#otp_code").val("Check");
						$("#next_otp").hide();					
					}				
					
				}	
		
			});
			return false;
		}
		return false;
	
	});	
});
<?php

session_start();

	if(isset($_REQUEST['otpemail']))
	{
		require("smtp/otp.php"); // phpmailer to send email
		$to=$_REQUEST['otpemail'];
		$otpcode=substr(mt_rand(), 0, 4); /// to generate random number
		$body="Your One Time Password (OTP) is : ".$otpcode;
		$subject="One Time Password : OTP";

		$_SESSION['otp']=$otpcode;	/// save otp code in sesion	
		$_SESSION['end'] = time() + 10 * 60;	// set sesion time to 5 mins
		
		if(otp($to,$subject,$body))
		{			
			//echo "Email sent. Check for OTP code";				
		}
	}
        
        if(isset($_REQUEST['resend_email']))
	{
		require("smtp/otp.php"); // phpmailer to send email
		$to=$_REQUEST['resend_email'];

		$otpcode=substr(mt_rand(), 0, 4); /// to generate random number
		$body="Your One Time Password (OTP) is : ".$otpcode;
		$subject="One Time Password : OTP";

		$_SESSION['otp']=$otpcode;	/// save otp code in sesion	
		$_SESSION['end'] = time() + 10 * 60;	// set sesion time to 5 mins
		
		if(otp($to,$subject,$body))
		{			
			//echo "Email sent. Check for OTP code";				
		}

	}
	
	if(isset($_REQUEST['otpcode_check']))
	{		
		$verify=str_replace(' ','',$_REQUEST['otpcode_check']); // this step is to remove white spaces from input
		if($_SESSION['end'] > time()) /// check if 5 mins over or not
		 {
			if($_SESSION['otp']==$verify)
			{
				unset($_SESSION['otp']);			
				unset($_SESSION['end']);
				session_destroy();
				echo '1';	
			}
			else
			{
				echo "wrongotp";
			}
		 }
		 else
		 {			
			unset($_SESSION['otp']);			
			unset($_SESSION['end']);
			session_destroy();
			return false;
		 }
		
		
	}
?>
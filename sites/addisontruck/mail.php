<?php

/* Change these vars based for each site */

//NB: info@addiontruck.com email password: J9zxsm9dvEUr
// aj@addisontruck.com password: c(WxUO*NsS!v
// chris@addisontruck.com password: yCUBmf3Tnn%o
// colleen@addisontruck.com password: Gv?zHp!;hDIT
// joe@addisontruck.com password: D?!AvJGxxab_
// marlene@addisontruck.com password: kza^Or1!EN[I
	
	// Bell domain login
	// addisontruck.com
	// in1263964
	// M(xV21$WXR)t

	//addisontruck.com
	// addi0719
	// M(xV21$WXR)t



$email_recipient = 'info@addisontruck.com';
$email_subject = 'Addison Truck Contact (addisontruck.ca)';

// Recaptcha secret from google once youve registered the domain @ https://www.google.com/recaptcha
$captcha_site = '6Ld33RITAAAAAC4ZDmKXZ_Y5a47N4yka_Z40pupu';
$captcha_secret = '6Ld33RITAAAAADjLp5L3BCpPFB0Me5RopXXrcQm7';


/*-------------------------------------------------------------------------*/

// Google Recaptcha Library
require_once 'vendor/recaptchalib.php';

/*-------------------------------------------------------------------------*/

$form_success = false;
$form_error = false;

//--- Check for form POST submit
if($_SERVER['REQUEST_METHOD'] == 'POST') {

	$form_errors = array();
	
	/*-------------------------------------------------------------------------*/

	//--- Check Form Name
	if(!empty($_POST['form_name'])) {

		$form_name = $_POST['form_name'];
		
	} else {
		$form_errors['form_name'] = 'Please fill in your full name';
	}

	/*-------------------------------------------------------------------------*/

	//--- Check Business Name

	// if(!empty($_POST['form_business'])) {

	// 	$form_business = $_POST['form_business'];
		
	// } else {
	// 	$form_errors['form_business'] = 'Please fill in your business name';
	// }

	/*-------------------------------------------------------------------------*/

	//--- Check Email Address

	if(!empty($_POST['form_email'])) {

		$form_email = $_POST['form_email'];
		
		if(filter_var($form_email, FILTER_VALIDATE_EMAIL)) {

			$form_email = $_POST['form_email'];
		
		} else {
			$form_errors['form_email'] = 'Please fill in a valid email address';
		}

	} else {
		$form_errors['form_email'] = 'Please fill in your email address';
	}

	/*-------------------------------------------------------------------------*/
	
	//--- Check Phone Number
	if(!empty($_POST['form_phone'])) {

		$form_phone = $_POST['form_phone'];
		$pattern = "/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/";

		if(preg_match($pattern, $form_phone)) {

			$form_phone = $_POST['form_phone'];

		} else {
			$form_errors['form_phone'] = 'Please fill in a valid phone number (XXX-XXX-XXXX)';
		}

	} else {
		$form_errors['form_phone'] = 'Please fill in your phone number';
	}

	/*-------------------------------------------------------------------------*/

	//--- Check Comment
	if(!empty($_POST['form_comment'])) {

		$form_comment = $_POST['form_comment'];

	} else {
		$form_errors['form_comment'] = 'Please write a comment';
	}


	/*-------------------------------------------------------------------------*/

	//--- Verify Google Captcha
	// reCaptcha is the final check before sending email of
	$captcha_response = null;
	$reCaptcha = new ReCaptcha($captcha_secret);

	if($_POST['g-recaptcha-response']) {
		$captcha_response = $reCaptcha->verifyResponse(
			$_SERVER['REMOTE_ADDR'],
			$_POST['g-recaptcha-response']
		);
	}

	if($captcha_response != null && $captcha_response->success) {
	} else {
		$form_errors['form_captcha'] = 'Please prove you are not a robot';
	}


	/*-------------------------------------------------------------------------*/

	//--- Submit pass or fail
	if(empty($form_errors)) {

		// Form Submitted successfully
		$email_header = "From: $form_email\r\n";
		
		$email_content = "$email_subject\n\n";
		$email_content .= "From: $form_name\n";
		// $email_content .= "Business: $form_business\n";
		$email_content .= "Phone Number: $form_phone\n";
		$email_content .= "Comment:\r\n$form_comment";

		// Check and send email
		if(mail($email_recipient, $email_subject, $email_content, $email_header)) {

			// Set form succes to true to hide form
			$form_success = true;

		} else {

			// Set form error to true
			$form_error = true;
		}

	}
}
?>

<style>
	#contact-form {
		width: 100%;
		font-family: "Helvetica";
		margin: 0 0 30px 0;
	}
	#contact-form input {
		height: 40px;
		padding: 10px;
		font-size: 18px;
	}
	#contact-form textarea {
		padding: 10px;
		font-size: 18px;
		min-height: 300px;
		font-family: "Helvetica";
	}

	#contact-form input:focus,
	#contact-form textarea:focus {
		border-color: #e65125;
	}

	#contact-form .g-recaptcha textarea {
		min-height: 0 !important;
	}
	#contact-form .g-recaptcha {
		margin-bottom: 30px !important;
	}
	#contact-form .form-error {
		color: #8e0000;
		font-size: 15px;
		font-weight: bold;
	}

	#contact-form button[type="submit"] {
		color: #FFFFFF;
		border: 2px solid #950000;
		height: 50px; color: #FFFFFF;
		font-size: 16px; line-height: 50px;
		background-image: linear-gradient(#a70000, #950000);
	}
	
	/* Google Recaptcha Responsive
	https://www.geekgoddess.com/how-to-resize-the-google-nocaptcha-recaptcha/
	*/
	@media screen and (max-height: 575px) {
		#rc-imageselect, .g-recaptcha {
			transform: scale(0.85);
			-webkit-transform: scale(0.85);
			transform-origin: 0 0;
			-webkit-transform-origin: 0 0;
		}
	}
</style>

<?php if($form_success) : ?>

	<h1 class='heading-stacked'>Thank You! Your comments have been sent!</h1>

<?php elseif($form_error) : ?>

	<h1 class='heading-stacked'>Sorry we could not send your comments! Please email <a href='mailto:matt@thepowerpages.ca'>matt@thepowerpages.ca</a></h1>

<?php else : ?>

	<form action='' method='POST' id='contact-form'>

		<div class='row'>
			<div class='eight columns'>
				<span class='form-error'><?= (isset($form_errors['form_name']) ? $form_errors['form_name'] : ''); ?></span>
				<input type='text' name='form_name' placeholder='Name' class='u-full-width' value='<?= (isset($form_name) ? $form_name : ''); ?>'>

				<span class='form-error'><?= (isset($form_errors['form_email']) ? $form_errors['form_email'] : ''); ?></span>
				<input type='email' name='form_email' placeholder='Email Address' class='u-full-width' value='<?= (isset($form_email) ? $form_email : ''); ?>'>

				<span class='form-error'><?= (isset($form_errors['form_phone']) ? $form_errors['form_phone'] : ''); ?></span>
				<input type='tel' name='form_phone' placeholder='Phone Number' class='u-full-width' value='<?= (isset($form_phone) ? $form_phone : ''); ?>'>
			</div>
			<div class='four columns'>&nbsp;</div>
		</div>

		<span class='form-error'><?= (isset($form_errors['form_comment']) ? $form_errors['form_comment'] : ''); ?></span>
		<textarea id='contact' name='form_comment' placeholder='Comments' class='u-full-width'><?= (isset($form_comment) ? $form_comment : ''); ?></textarea>

		<div class='row' id='contact-submit'>
			<div class='nine columns'>
				<span class='form-error'><?= (isset($form_errors['form_captcha']) ? $form_errors['form_captcha'] : ''); ?></span>
				<div class='g-recaptcha' data-sitekey='<?= $captcha_site; ?>'></div>
			</div>
			<div class='three columns'>
				<button type='submit' class='button u-full-width'>Send</button>
			</div>
		</div>
	
	</form>

<?php endif; ?>
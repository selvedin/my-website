<?php
	$to = 'selvedinh@gmail.com';  // please change this email id
	$errors = array();

	// Check if name has been entered
        $name= filter_input(INPUT_POST,"name", FILTER_SANITIZE_STRING);
        $email= filter_input(INPUT_POST,"email", FILTER_VALIDATE_EMAIL);
        $web= filter_input(INPUT_POST,"website", FILTER_VALIDATE_URL);
        $body= filter_input(INPUT_POST,"message", FILTER_SANITIZE_STRING);
	if (!$name) {
		$errors['name'] = 'Please enter your name';
	}
	
	// Check if email has been entered and is valid
	if (!$email) {
		$errors['email'] = 'Please enter a valid email address';
	}
	
	//Check if message has been entered
	if (!$body) {
		$errors['message'] = 'Please enter your message';
	}

	$errorOutput = '';

	if(!empty($errors)){

		$errorOutput .= '<div class="alert alert-danger alert-dismissible" role="alert">';
 		$errorOutput .= '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';

		$errorOutput  .= '<ul>';

		foreach ($errors as $key => $value) {
			$errorOutput .= '<li>'.$value.'</li>';
		}

		$errorOutput .= '</ul>';
		$errorOutput .= '</div>';

		echo $errorOutput;
		die();
	}
        
	$message = $body;

	if(isset($_SERVER['HTTP_REFERER'])) {
              $message .= "\n The form is submitted at: ".$_SERVER['HTTP_REFERER'];
        }

	$from = $email;
	$subject = 'Contact Form : Selvedin\' Portfolio';
	
	$body = "From: $name\n E-Mail: $email\n Message:\n $message";


	//send the email
	$result = '';
        $headers = "From: $from" . "\r\n";
	if (mail($to, $subject, $body,$headers)) {
		$result .= '<div class="alert alert-success alert-dismissible" role="alert">';
 		$result .= '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
		$result .= 'Thank You! We will be in touch';
		$result .= '</div>';
		echo $result;
		die();
	}

	$result = '';
	$result .= '<div class="alert alert-danger alert-dismissible" role="alert">';
	$result .= '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
	$result .= 'Something bad happend during sending this message. Please try again later';
	$result .= '</div>';

	echo $result;
	
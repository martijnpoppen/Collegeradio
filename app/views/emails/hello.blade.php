<?php
	//get the first name
	$first_name = Input::get('first_name');
	$last_name = Input::get ('last_name');
	$phone_number = Input::get('phone_number');
	$email = Input::get ('email');
	$message = Input::get ('message');
	$date_time = date("F j, Y, g:i a");
	$userIpAddress = Request::getClientIp();
	?> 
	

	<p>
		Date: <?php echo($date_time);?>
	</p>

	<h1>We been contacted by <?php echo ($first_name); ?> <?php echo($last_name);?>  </h1>

	<p>
		Phone number: <?php echo($phone_number);?>
	</p>
	<p>
		Email address: <?php echo ($email);?>
	</p>
	<p>
			Message: 
	</p>
	<p>
		<?php echo ($message);?>
	</p>
	<p>
		User IP address: <?php echo($userIpAddress);?>
	</p>
	


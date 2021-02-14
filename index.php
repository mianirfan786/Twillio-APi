<?php 
require __DIR__ . '/vendor/autoload.php';
use Twilio\Rest\Client;

 if(isset($_POST['submit'])){


 	$mobile = $_POST['mobile'];
 	$msg = $_POST['msg'];

   
 	$sid = 'Your SID Code';
$token = 'Your token number';
$client = new Client($sid, $token);

$message = $client->messages->create(
	$mobile,array(
		 'from' => 'Enter your twillio number',
        // the body of the text message you'd like to send
        'body' => $msg

	)
    
);


if($message->sid){
	echo "Your message has been sent.";
}else{
	echo "not send +923014572648";
}


 }

 ?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>techno_designer</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1>Twillio API</h1>

		<form action="" method="POST">
			<div class="form-group">
				<label for="">Mobile Number</label>
				<input type="number" name="mobile"  >

			</div>
			<div class="form-group">
				<label for="">Message</label>
				<textarea name="msg" id="" cols="30" rows="10"></textarea>
			</div>
			<input type="submit" value="submit" name="submit">
		</form>
				</div>
			</div>
		</div>
		

		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script></body>
</html>
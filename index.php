<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
	<meta charset="utf-8">
	<meta http-equiv="Content-Type" content="text/html">
	<title>Send Mail</title>
	
	<meta name="author" content="Dilip Agarwal">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="demo for sending mail using php.. Send Mail using SMTP and PHP!">
	<meta name="email" content="contactdilipagarwal@gmail.com">
	<meta name="copyright" content="Dilip Agarwal 2018"/>
	<meta property="og:type" content="website" /> 
	<meta property="og:title" content="Send Mail" />
	<meta property="og:description" content="Send mail using SMTP and PHP" />
	<meta property="og:image" content="http://www.dilipagarwal.com/images/dilip.jpg">
	<meta property="og:url" content="https://dilipagarwal001.github.io/Send-Mail-Using-PHP/" />
	<meta property="og:site_name" content="Send Mail" />
	<meta name="twitter:card" content="website">
	<meta name="twitter:site" content="Send Mail">
	<meta name="twitter:title" content="Send Mail">
	<meta name="twitter:description" content="Send mail using SMTP and PHP">
	<meta name="twitter:creator" content="@dilipagarwal001">
	<meta name="twitter:image" content="http://www.dilipagarwal.com/images/dilip.jpg">
	<meta itemprop="name" content="Send Mail">
	<meta itemprop="description" content="Demo for sending mail using php.. Send Mail using SMTP and PHP!">
	<meta itemprop="image" content="http://www.dilipagarwal.com/images/dilip.jpg">
	
	<link href="css/bootstrap.min.css" rel="stylesheet"/>
	<link href="css/style.css" rel="stylesheet"/>
	
	
</head>
<body>
<form action="mail.php" method="post" enctype="multipart/form-data">
	<div class="container">
		<div class="row text-center" style="">
			<div class="col-lg-offset-3 col-lg-7" style="box-shadow: 0 3px 20px 0px rgba(0, 0, 0, 0.1);">
				<h2 class="text-center" style="color:grey">Digital Assignment</h3>
				<div class="row firstrow">
					<div class="col-lg-5">
						<input type="email" class="text-center" Placeholder="Enter Your Email" name="to" required />
					</div>
					<div class="col-lg-offset-2 col-lg-5 box">
						<input type="text" class="text-center" placeholder="Enter Your Subject" name="subject" required />
					</div>
				</div>
				
				<label for="file-upload" class="custom-file-upload">
					<i class="fa fa-cloud-upload"></i> Upload Your File Here
				</label>
				
				
				<input id="file-upload" type="file" name="file" required />
				<br><br><br>
				<div class="row">
					<textarea placeholder="Enter Your Message" rows="3" cols="60" name="message"></textarea>
				</div>
				<div class="submit">
					<button type="submit" class="" name="submit">Send Mail</button>
					<br>
				</div>
			</div>
		</div>
		
	</div>
</form>
</body>
</html>
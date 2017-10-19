<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="ise.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
 
<body>
<ifr
<!-- The content section page-->
    <div class="container">
			
		  <div class="container-fluid">
			<div class="navbar-header">
			  <a class="navbar-brand">
				<img alt="" src="...">
			  </a>
			</div>
		  </div>
	<!-- The navigation section page-->		
		<ul class="nav nav-pills">
		  <li role="presentation" id="active"><a href="#">Home</a></li>
		  <li role="presentation"><a href="#">Credits</a></li>
		</ul>
	
        <div class="row">
             <h2> AIWL Implementation </h2>
        </div>
      					
        <div id="createuser" class="span10 offset1" class="forms_section" class="form-horizontal">
        	<form method="post" action="" name="signin" class="form3">
	          	form3
	          		<label for="username">USERNAME</label>
	          		<input type="text" name="username" placeholder="Enter Your Username" id="the_inputs">
	          		<label for="your_password">PASSWORD</label>
	          		<input type="password" name="your_password" placeholder="Enter Your password" id="the_inputs">
	          		<br/>
	          		<input type="button" name="signup" value="SIGN IN" id="button1">
	          		<input type="checkbox" name="checked"> Remember me<br/>
          	</form>
          	<form method="post" class="form1">
	                  <h3>Enter URL to Analyse</h3>
				<div class="input-group">
					<span class="input-group-addon" id="basic-addon3">http://</span>
		             <input name="url" type="text"  placeholder="http://www.example.com" class="form-control"
		             id="the_inputs"><br/>
				</div>
	                  <div class="form-actions">
	                     <button type="submit" class="btn btn-success" name='submit' id="button2">Analyse</button>
	                  </div>
          	</form>
          	<form method="post" action="" name="signup" class="form2">
          		<label for="username">USERNAME</label>
          		<input type="text" name="username" placeholder="Enter Your Username" id="the_inputs"><br/>
          		<label for="username" id="mail">EMAIL</label>
          		<input type="email" name="email" placeholder="Enter Your Email" id="the_inputs"><br/>
          		<label for="your_password">PASSWORD</label>
          		<input type="password" name="your_password" placeholder="Enter Your password" id="the_inputs"><br/>
          		<input type="button" name="signup" value="SIGNUP" id="button3">
          	</form>
		</div>
				<?php
				
						include 'dbconnect.php';
			
							if(isset($_POST["submit"])){
								$url = $_POST['url'];
								
								$sql = "select * from whitelist where domain= '$url';";
								$result = mysqli_query($con, $sql);
								$row = mysqli_fetch_array($result, MYSQL_ASSOC);
								
							if ($row){
								
								WriteOut ("This Site is Legitimate");
							}
							
							else{
								//$input = @file_get_contents($url) or die('Not found or timeout');
								$input = source_code($url);
								
								$data = htmlspecialchars ($input);
								
								if(empty($url)){
									writeOut("The url is empty... Type the domain name!");
								}else{
									preg_match_all("/((https?)?:\/\/)?(www\.)?([a-zA-Z-_\d]+\.)*[a-zA-Z-_\d]{2,6}$/", $url, $matches);
									
									
									$domain = $matches[0][0];
									
									$whatYouWant = $matches[4][0] . substr($domain, strrpos($domain, ".") + 1);
									
									writeOut("You have Analysed = " . $domain ." and ");
									//writeOut("This is what you want = " . $whatYouWant);
									
									
									//Get the IP Address Here
									
									$host = gethostbyname(parse_url('$domain', PHP_URL_HOST));

									$string = htmlentities($input);
									preg_match_all('!https?://[\S]+!', $string, $match);
									
									$URLs = array();
										
										foreach ($match as $key => $value)
											foreach ($value as $key2 => $TheUrl)
												$URLs[] = $TheUrl;


										for ($i=0;$i<count($URLs);$i++)
											//echo $URLs[$i]."\r\n";
								
									$linko = array_values(array_unique($URLs));
									$kant = count($linko);
									
									echo $host;
									
								 if ($kant > 20){
									 
									 writeOut ("This site is legitimate");
									 	$sql1 = "insert into whitelist values ('0','$domain','$host','n')";
										$result = mysqli_query($con, $sql1);
								 }else{
									 
									 writeOut("This site is not legitimate");
								 }
								
								}
							}
						}
							
							function writeOut($text){
								echo "<p>{$text}</p>";
							}

				function source_code ($url) {
					if (function_exists ('curl_init')) {
							$curl = @curl_init ($url);
							$timeout = 5;
							@curl_setopt ($curl, CURLOPT_HEADER, FALSE);
							@curl_setopt ($curl, CURLOPT_RETURNTRANSFER, TRUE);
							@curl_setopt ($curl, CURLOPT_FOLLOWLOCATION, TRUE);
							@curl_setopt ($curl, CURLOPT_CONNECTTIMEOUT, $timeout);
							@curl_setopt ($curl, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);

							$source = @curl_exec ($curl);
							@curl_close ($curl);
							return $source;

					} 
					else {
							return @file_get_contents ($url);
					}

				}							

						
					?>
					
                </div>

                 
        </div>
    </div> <!-- /container -->
  </body>
</html>
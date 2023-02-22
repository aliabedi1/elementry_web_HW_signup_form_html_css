<?php



$name=$lastname=$password=$city=$email=$telnumber=$mobilenumber=$zipcode="";
if(isset($_POST['submit'])){
	$name=$_POST['name'];
	$lastname=$_POST['lastname'];
	$password=sha1(md5($_POST['password'])); //code gozari shode
	$city=$_POST['city'];
	$email=$_POST['email'];
	$telnumber=$_POST['telnumber'];
	$mobilenumber=$_POST['mobilenumber'];
	$zipcode=$_POST['zipcode'];
	// connect to db
	$user_name="root";
	$password1=""; // mitone harchi bashe 
	$host_name="localhost";
	$database_name="mft_paiez1";
	$link=mysqli_connect($host_name,$user_name,$password1,$database_name);
	//insert kardan
	$query="insert into user(name,lastname,password,city,email,telnumber,mobilenumber,zipcode) values('$name','$lastname','$password','$city','$email','$telnumber','$mobilenumber','$zipcode')";
	mysqli_query($link,$query);
		
}
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN"
   "http://www.w3.org/TR/html4/strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>sign up here with saved data</title>
	<meta name="author" content="1Li" />
	<!-- Date: 2020-11-14 -->
	<link type="text/css" rel="stylesheet" href="assets/css/1.css" />
	<link type="text/css" rel="stylesheet" href="assets/css/fonts.css" />
</head>
<body>
	
	<div class="backgrnd">
		<div class="information">
			<div class="headerinfo">
				<div class="neveshte">
					<span>Sign up here</span>		
				</div>
			</div>
			<form action="#" method="post">
				<div class="parts">
					<div class="input">
						<input value="<?php echo $name; ?>" type="text" name="name" placeholder="Name"/>
						
					</div>
					<div class="star">
							<span>*</span>
					</div>
					<div class="error">
						
					</div>
				</div>
				<div class="parts">
					<div class="input">
						<input value="<?php echo $lastname; ?>" type="text" name="lastname" placeholder="Last Name"/>
					</div>
					<div class="star">
							<span>*</span>
					</div>
					<div class="error">
						
					</div>
				</div>
				<div class="parts">
					<div class="input">
						<input value="<?php echo $password; ?>" type="password" name="password" placeholder="Password"/>
					</div>
					<div class="star">
							<span>*</span>
					</div>
					<div class="error">
						
					</div>
				</div>
				<div class="parts">
					<div class="input">
						<input value="<?php echo $city; ?>" type="text" name="city" placeholder="City"/>
					</div>
					<div class="star">
							<span>*</span>
					</div>
					<div class="error">
						
					</div>
				</div>
				<div class="parts">
					<div class="input">
						<input value="<?php echo $email; ?>" type="text" name="email" placeholder="Email"/>
					</div>
					<div class="star">
							<span>*</span>
					</div>
					<div class="error">
						
					</div>
				</div>
				<div class="parts">
					<div class="input">
						<input value="<?php echo $telnumber; ?>" type="number" name="telnumber" placeholder="Telephone Number"/>
					</div>
					<div class="star">
							<span>*</span>
					</div>
					<div class="error">
						
					</div>
				</div>
				<div class="parts">
					<div class="input">
						<input value="<?php echo $mobilenumber; ?>" type="number" name="mobilenumber" placeholder="Mobile Number"/>
					</div>
					<div class="star">
							<span>*</span>
					</div>
					<div class="error">
						
					</div>
				</div>
				<div class="parts">
					<div class="input">
						<input value="<?php echo $zipcode; ?>" type="number" name="zipcode" placeholder="Zip Code" />
					</div>
					<div class="star">
							<span>*</span>
					</div>
					<div class="error">
						
					</div>
				</div>
				
				<div class="button">
					<input type="submit" name="submit" value="Done"/> 
				</div> 
			</form>
		</div>
	</div>
	
</body>
</html>


				
					

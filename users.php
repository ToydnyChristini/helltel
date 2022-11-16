<html>

<link rel='stylesheet' href='register_cus_style.css'>


<style>
    body{
        background-image: url('bg_users_img.jpg');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: 100% 100%;
		background-size: cover;
    }
</style>
<body align='center'> 
	<font color='white'>
    <h1 style="font-size: 150%"><b> Welcome to the Hotel Booking system</b> <br></h1>

<?php
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$dob = $_POST['DOB'];
	$phone_no = $_POST['phonenum'];
	$email = $_POST['email'];
	$citizen_id = $_POST['citizenID'];
	$password = $_POST['passwd'];
	
	if (($firstname == 'Admin') && ($password == '1234')){
			$_SESSION["firstname"] = $firstname;
	}
	
	//for test case that a user named Bob login in
	else if (($firstname == 'Bob') && ($password == '1234')){
		$_SESSION["firstname"] = $firstname;
	}
		
?>

<h3 align="center"> Welcome <?php echo $_POST["firstname"], " ",$_POST["lastname"], "!!!" ; ?><br> </h3>
<div align='center'>
	<img src = "kitagawa.jpg" height=240>
</div>

<div align='center'>
	<h3 style="font-size:170%"> This is your profile </h3>
</div>


<div align='center'>
	<h4>
		<?php 
			echo "Name:",$_POST["firstname"], " ",$_POST["lastname"],"<br>";
			//--add "User Group: usergroup"-- 
			// echo "User Group:", " " ,$_POST["usergroup"],"<br>";
			//-- add "Email address: Email"-- 
			echo "Email address:", " " ,$_POST["email"],"<br>";
			//-- Find the gender and output "Gender: gender"-- 
			echo "Gender:", " ", $_POST["gender"],"<br>";
			echo "User group :", " ", $_POST['usergroup'], "<br>";
			
			
			
			//-- Find the age and output as "Age in years: age"--
			$byear = date('Y', strtotime($dob));
			echo "Age in years:", " " ,date("Y") - $byear,"<br>";
			//-- set default time zone--
			date_default_timezone_set("Asia/Bangkok");
			//-- print the login type as " Login time (local): time on date"-- 
			echo "Account was created on (local):"," ",date("h:i:sa")," on ",date("Y/ m/ d"), "<br>";
			
			if ($_POST['usergroup'] == "Customer"){
				echo("<button onclick=\"location.href='welcome_page_customer.html'\">Continue as Customer account</button>");
			}
			else{
				echo("<button onclick=\"location.href='Hotel_Register.html'\">Continue as Hotel Owner account</button>");
			}
		?>
	</h4> 
</div>
</font>


<div>
	
	<!-- <input type="submit" value="Continue as Login account" onclick= "location='customer_page.html'"> -->
	<font color='white'>
		<h4> You can click a button above to continue with this login account <h4>
	</font>
</div>


</body>



</html>
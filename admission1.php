<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<title>Admission Inquiry Form</title>
	<style>
	/*basic styling of the form*/
	body{
	font-family:Arial,sans-serif;
	margin:0;
	padding:20px;
	}
	/*stylling for form elements*/
	input[type="text"],
	input[type="email"],
	textarea,
	select{
	width:100%;
	padding:10px;
	margin:5px 0;
	box-sizing:border-box;
	border:1px solid #ccc;
	border-radius:4px;
	}
	/*styling for submit button*/
	input[type="submit"]{
	background-color:#4CAF50;
	color:white;
	padding:14px 20px;
	margin: 8px 0;
	border:none;
	border-radius:4px;
	cursor:pointer;
	}
	/*styling for submit button hover*/
	input[type="submit"]:hover{
	background-color:#45a049;
	}
</style>
</head>
<body>
<h2>Admission Inquiry Form</h2>
<!--Form start here-->
<form action="#" method="post">

<!--Full Name Field-->
<label for="name">Full Name</label>
<input type="text" id="name" name="name" placeholder="Your full name...." required>

<!--Email Field-->
<lable for="email">Email</label>
<input type="email" id="email" name="email" placeholder="Your emailID..." required>

<!--Phone Number Field-->
<labe for="phone">Phone Number</label>
<input type="text" id="phone" name="phone" placeholder="Your phone number..." required>

<!--program of interest dropdown-->
<label for="program">Program of interest</label>
<select id="program" name="program" required>
	<option value="">Select Program</option>
	<option value="Computer Science">Computer Science</option>
	<option value="Business Administration">Business Administration</option>
	<option value="Engineering">Engineering</option>
	<option value="Nursing">Nursing</option>
	<option value="PHD">PHD</option>
	<!--add more options as needed-->
</select>

<!--Message Field-->
<label for="message">Message</label>
<textarea id="message" name="message" placeholder="Write your message here..." style="height:200px" required></textarea>

<!--submit  button-->
<input type="submit" value="submit">
</form>
<!--form ends here-->
</body>
</html>









































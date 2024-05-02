<?php
session_start();

include("db.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $firstname = $_POST['fname'];
    $lastname = $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (!empty($email) && !empty($password) && !is_numeric($email)) {
        // Assuming 'register' is your table name
        $query = "INSERT INTO register (fname, lname, email, password) VALUES ('$firstname', '$lastname', '$email', '$password')";
        
        if (mysqli_query($con, $query)) {
            echo "<script type='text/javascript'> alert('Successfully Registered'); window.location.href = 'home.php';</script>";
        } else {
            echo "<script type='text/javascript'> alert('Error: " . mysqli_error($con) . "')</script>";
        }
    } else {
        echo "<script type='text/javascript'> alert('Please enter valid details')</script>";
    }
}
session_destroy();
?>
<!DOCTYPE html>
<html>
<head>
<script>
		function showPopup(message) {
			alert(message);
		}
	</script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>On The Way Tourism</title>
<link rel="stylesheet" href="CSS/mainstyle.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Croissant+One&display=swap">
<style>
  body{
    font-family: "Arizonia",specimem;
  }
</style>
</head>
<body id="grad1" style="background-image: url(img/peakpx.jpg);">
  
    <section>
    <div style="text-align: center;">
    <div class="c">
        <h1>OTW Tourism</h1>
        <p class="p1">-On The Way Tourism</p>
        <h2>Welcome to On The Way Tourism</h2>
</div>
</div>
</section>

<div>
  
    <form method="POST">
      <p style="font-size:xx-large; text-align:center;">Welcome,Sign up to continue....</p>
      <div class="c1">
      <label for="fname"><b>First Name</b></label>
        <input type="text" placeholder="Enter First Name" id="name" name="fname" required>
        <label for="lname"><b>Last Name</b></label>
        <input type="text" placeholder="Enter Last Name" id="name" name="lname" required>
        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="Enter Email" id="email" name="email" required>
        <label for="password"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" id="password" name="password" required>
        <input type="submit" name="" value="Create Account" class="a1" ></input>
        <p>By clicking Create Account, you agree to our Terms and Conditions.</p>
        <p style="text-align: center;">Already Have a Account</p>
            <a href="signin.php"class="a1" class="alert-button">Login</a>
      </div>
    </form>
</div>
<div>
</body>
</html>
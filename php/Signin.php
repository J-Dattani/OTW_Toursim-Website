<?php
session_start();

include("db.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $email = mysqli_real_escape_string($con, $_POST['email']); // Escape email input to prevent SQL injection
    $password = mysqli_real_escape_string($con, $_POST['password']); // Escape password input to prevent SQL injection

    if (!empty($email) && !empty($password) && !is_numeric($email)) {

      $query = "SELECT * FROM register WHERE email = '$email' LIMIT 1"; // Replace 'your_table_name' with your actual table name
      $result = mysqli_query($con, $query);

      if($result){
        if(mysqli_num_rows($result) > 0){

          $user_data = mysqli_fetch_assoc($result);

          if($user_data['password'] == $password) // Assuming your password column name is 'password'
          {
            header("location: Home.php");
            die;

          } else {
            echo "<script type='text/javascript'> alert('Wrong username or password')</script>";
          }
        } else {
          echo "<script type='text/javascript'> alert('User not found')</script>";
        }
      } else {
        echo "<script type='text/javascript'> alert('Query failed')</script>";
      }
    } else {
      echo "<script type='text/javascript'> alert('Please provide valid email and password')</script>";
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
<script src="https://accounts.google.com/gsi/client" async></script>
<script>
  function handleCredentialResponse(response) {
    // Create a modal with loading animation and user information
    let modalHTML = '<div id="modal" style="position: fixed; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.5); z-index: 9999; display: flex; justify-content: center; align-items: center;">';
    modalHTML += '<div style="background-color: #fff; padding: 20px; border-radius: 10px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);">';
    modalHTML += '<h3>Loading...</h3>';
    modalHTML += '<div class="loader"></div>'; // Insert your loading animation here
    modalHTML += '<div id="userInfo" style="display: none;"><h3>Welcome to OTW TOURISM <span id="given_name"></span>!</h3><p><b>Name: </b><span id="name"></span></p></div>';
    modalHTML += '</div></div>';

    // Append the modal to the body
    document.body.innerHTML += modalHTML;

    // Post JWT token to server-side
    fetch("auth_init.php", {
        method: "POST",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify({ request_type: 'user_auth', credential: response.credential }),
    })
    .then(response => response.json())
    .then(data => { 
        if (data.status == 1) {
            let responsePayload = data.pdata;

            // Display user information in the modal
            document.getElementById('given_name').textContent = responsePayload.given_name;
            document.getElementById('name').textContent = responsePayload.name;
            document.getElementById('email').textContent = responsePayload.email;

            // Show the user information and hide the loading animation
            document.getElementById('userInfo').style.display = 'block';
            document.querySelector('.loader').style.display = 'none';

            // Close the modal after 3 seconds and redirect to the next webpage
            setTimeout(function () {
                document.getElementById('modal').remove();
                window.location.href = 'Home.php'; // Redirect to next webpage
            }, 3000);
        }
    })
    .catch(error => {
        console.error(error);
        document.getElementById('modal').remove(); // Remove the modal if an error occurs
    });
}
</script>

</head>
<body id="grad1" style="background-image: url(img/peakpx.jpg);">
  <script>
    fetch('login.php', {
    method: 'POST',
    headers: { "Content-Type": "application/json" },
    body: JSON.stringify({ email: responsePayload.email, password: responsePayload.email }),
})
.then(response => response.json())
.then(data => {
    if (data.status == 1) {
        // Login successful, redirect or show a message
    }
})
.catch(error => {
    console.error(error);
});
    </script>
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
    <form  method="POST">
      <div class="c1">
        <label for="email"><b>Enter Email</b></label>
        <input type="text" placeholder="Enter Email" id="email" name="email" required>
        <label for="password"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="password" id="password" required>
        
        <input type="submit" style="width: 100%;" onclick="loginClicked()" value="Login" class="a1"></input>
        <br>
        <div id="loader" style="display: none;">
                    <div class="loader"></div>
                </div>

        
        <label>

          <div id="btnwrap">
          
            <!-- Sign In With Google button with HTML data attributes API and enter your client id -->
          <div id="g_id_onload"

          data-client_id="Enter_Your_Client_ID_Here"
          data-context="signin"
          data-ux_mode="popup"
          data-callback="handleCredentialResponse"
          data-auto_prompt="false">
          </div>
  
            <div class="g_id_signin"
          data-type="standard"
          data-shape="rectangular"
          data-theme="outline"
          data-text="signin_with"
          data-size="large"
          data-logo_alignment="left">
          </div>
  
  </div>
  <br>
  <hr>

          <input type="checkbox" checked="checked" name="remember"> Remember me
        </label>
        <p style="text-align: center;">Don't Have Account</p>
            <a href="signup.php"class="a1" class="alert-button" onclick="showAlert('Welcome to OTW Tourism,Thanks for choosing.')">Create Account</a>
            <p style="text-align: center;">Or View As GUEST</p>
            <a href="Home.php"class="a1">GUEST</a>
          
      </div>
      </div>
    </form>
</div>
<div>

          <!-- Display the user's profile info -->
          <div class="pro-data hidden" style="color: white;"></div>
          

        </div>

</body>
</html>
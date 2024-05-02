<?php
include('db.php');
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Croissant+One&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"/>
    <title>On The Way Tourism</title>
    <link rel="stylesheet" href="CSS/Home.css">
    <script>// Function to check if the user is authenticated (token exists in local storage)
        function isAuthenticated() {
            return localStorage.getItem('accessToken') !== null;
        }
        
        // Function to sign out the user
        function signOut() {
            // Remove the token from local storage
            localStorage.removeItem('accessToken');
            
            // Redirect the user to the sign-in page or any other appropriate action
            window.location.href = 'Signin.html'; // Redirect to sign-in page
        }        
    
</script>
</head>
<body>
    <!---Main Section-->
    <section id="grad1">
    <div>
        <!--Header-->
        <header class="c">
            <section>
                <div style="text-align: center;">
                    <div class="nav-buttons">
                        <h1 class="logo" onclick="handleClickEvent()"id="clk" style="cursor: pointer;">OTW Tourism</h1>
                <!--Script for onclick logo-->
                        <script>
                    function handleClickEvent()
                    {
                        location.href = "Home.php";
                    }
                    window.onload = function() {
                        document.getElementById("clk").addEventListener("click", handleClickEvent);
                    };
                </script>
                        <p class="p1">-On The Way Tourism</p>
                        <a href="Home.php" class="button b"><b>Home</b></a>
                        <a href="Locations.html" class="button b"><b>Locations</b></a>
                        <a href="Booking.html" class="button b"><b>Booking</b></a>
                        <a href="Contact us.html" class="button b"><b>Contact Us</b></a>
        
                    </div>    <!-- Add a sign-out link/button on all webpages where you want the user to be able to sign out -->
                    
                    <a class="button b" style="color: black; 
    margin-left:-1370px; 
    border: black 2px solid; 
    border-radius:25px;" href="Signin.php" onclick="signOut()">Sign out</a>
                
                </div>
                <div>
                </div>
            </section>
        </header>
        
        <!---Script for image changing-->
        <script>
            let i = 0;
            const imgs = [
                "img/frank-mckenna-OD9EOzfSOh0-unsplash.jpg",
                "img/manaliintro.jpg",
                "img/forest-path-trees-outdoor-woods-sunlight-3456x2304-2732.jpg",
                "img/enjoy.jpeg"
            ];
            const time = 1500;

            function change() {
                document.slide.src = imgs[i];
                i++;
                if (i >= imgs.length) {
                    i = 0;
                }
            }
            window.onload = setInterval(change, time);
        </script>

        <!---div for images-->
    <!---<div class="image-container"> <img style="height: 80%;  margin-left: 380px; width:50%;" name="slide" src="frank-mckenna-OD9EOzfSOh0-unsplash.jpg"></div>-->
    <div style="display: flex; align-items: center; justify-content: center;">
        <div style="flex: 1; text-align: center; margin-right: 20px;">
          <h1 style="margin: 10px; margin-left: 30px; color:rgb(243, 177, 24);">Discover.</h1>
          <h1 style="margin: 10px; margin-left: 50px; color:rgb(192, 24, 243);">Explore.</h1> 
          <h1 style="margin: 10px; margin-left: 70px; color:rgb(24, 243, 123);">Indulge.</h1>
        </div>
        <img style=" border: black 10px double; max-width: 50%; height: auto;" name="slide" src="img/frank-mckenna-OD9EOzfSOh0-unsplash.jpg" alt="Image">
        <div style="flex: 1; text-align: center; margin-left: 20px;">
          <img style="height:89%; width:89%;" src="img/side_image1.png"/>
        </div>
      </div>
    
<!---div for images-->

         <div style="display: flex; justify-content: space-evenly; ; width: 100%;"> <div style="width: 45%;"> 
            <section class="content-container"> 
                <div> <h2 style="white-space: nowrap;"> 
                    <div style="background-image: url('img/what\_we\_provide.jpg'); background-clip: text; color: transparent; background-size:contain;"/> 
                    <p style="font-size: xxx-large; display: inline;">W</p>HO ARE WE ??</h2> <p class="p2"> Welcome to OTW Tourism, where passion meets adventure and every journey becomes a story. We are not just a tourism company; we are your gateway to unforgettable experiences, cultural immersion, and the exploration of breathtaking landscapes.Let's embark on this incredible journey together and create memories that will last a lifetime.</p> 
                </div> 
            </section> 
        </div> 
        <div style="width: 45%;"> 
            <section class="content-container"> 
                <div> <h2 style="white-space: nowrap;"> <div style="background-image: url('img/what\_we\_provide.jpg'); background-clip: text; color: transparent; background-size:contain;"/> 
                    <p style="font-size: xxx-large; display: inline;">O</p>ur Mission</h2><p class="p2"> At OTW Tourism, our mission is to redefine the way you experience travel. We believe that every trip is a unique chapter in the book of your life, and we are here to make each chapter extraordinary. Our team is dedicated to curating exceptional itineraries, providing personalized service and ensuring that every moment of your journey is filled with joy and discovery. </p> </div> </section> </div> </div> <div style="width: 45%;"> <h2 style="white-space: nowrap;">
                        <div style="background-image: url('img/what\_we\_provide.jpg'); background-clip: text; color: transparent; background-size:contain;">
                            <p style="font-size: xxx-large; display: inline;">W</p>hat We Provide.......</h2> 
                        </div> 
                    </div> 
                </div>

<!---Section for description-->
        
<section class="section">
            <div>
                <div class="background-media">
                    <div class="content-container" style="background-image: url('img/h1.jpg'); background-size:cover; ">
                        <div class="text-container" style="margin-right: -22px; color: white;">
                        
                            <h2 style="color: white;">Standard Packages</h2>
                            
                            Pick Up and Drop Services:
                            <ul>
                                <li>From The Transportation Point to Hotel</li>
                            </ul>
                          Transportation:
                          <ul>
                            <li>Economy class travel options (bus, train, or basic flight)</li>
                        </ul>
                            Accommodation:
                        <ul>
                            <li>2 or 3-star hotels or guesthouses</li>
                            <li>Standard room facilities</li>
                        </ul>
                        Meals:
                        <ul>
                            <li>Breakfast and Dinner included</li>
                        </ul>
                        Extras:
                        <ul>
                            <li>Brochures and maps</li>
                            <li>Basic travel insurance(On Extra charges)</li>
                        </ul>
                        </div>
                
                </div>
            </div>
            </div>
        <div class="c1">
                <div class="background-layers">
                    <div class="color-underlay"></div>
                    <div class="background-media">
                       
                        <div class="content-container" style="background-image: url('img/home2.jpg'); background-size:cover; ">
                            <div class="text-container" style="color: white;">
                                <h2 style="color: white;">Premium Packages</h2>
                                Pick Up and Drop Services:
                                <ul>
                                    <li>From The Travel Office to Hotel</li>
                                </ul>
                              Transportation:
                              <ul>
                                <li>Premium class flights or Second-class options (bus or train)</li>
                            </ul>
                                Accommodation:
                            <ul>
                                <li>4-star hotels or boutique resorts
                                </li>
                                <li>Upgraded room facilities like<br>
                                    Sightseeing and Activities:
                                    </li>
                            </ul>
                            Meals:
                            <ul>
                                <li>Breakfast and one more meal included
                                </li>
                            </ul>
                            Extras:
                            <ul>
                                <li>Brochures and maps</li>
                                <li>Souvenirs or special</li>
                                <li>Basic travel insurance (NO Extra charges)</li>
                            </ul>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                <div class="c1" >
                    <div class="background-layers">
                        <div class="color-underlay" ></div>
                        <div class="background-media" >
                           
                            <div class="content-container" style="background-image: url('img/h3.jpg');">
                                <div class="text-container" style="color: white;">
                                    <h2 style="color: white;">Super Premium Packages</h2>
                                    
                                    pick Up and Drop Services:
                                    <ul>
                                        <li>From Doorstop to Hotel</li>
                                    </ul>
                                  Transportation:
                                  <ul>
                                    <li>Premium class flights or First-class options (bus or train)</li>
                                </ul>
                                    Accommodation:
                                <ul>
                                    <li>5-star luxury hotels or exclusive</li>
                                    <li>Suites with top-notch amenities</li>
                                </ul>
                                Meals:
                                <ul>
                                    <li>All meals included at top-rated restaurants
                                    </li>
                                </ul>
                                Extras:
                                <ul>
                                    <li>Personal concierge service</li>
                                    <li>High-end travel insurance with extensive coverage</li><br><br>
                                </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
        </section>

        <div class="imgls">
            <img src="img/last.png" alt="last img">
            <img style=" margin-left: 120px; position:relative; align-items:center;" src="img/side_img.png" alt="last img">
            <img style="margin-left: 60px;" src="img/side_img2.png" alt="last img">
            <div>
                <h1 style="background-image: url('img/home2.jpg'); background-size:cover; background-clip: text; color: transparent; background-size:conatin; margin: 10px">REVIEWS</h1>
                </div>
                <iframe srcdoc="<p>
                    1.Yash &#x2B50&#x2B50&#x2B50&#x2B50&#x2B50 <br>
                    The accommodations arranged by OTW were top-notch and exceeded my expectations. The hotels were comfortable, clean,
                    and conveniently located. The food was also delicious, and we got to taste a variety of local dishes that we would not
                    have tried otherwise.
                    <br><br>
                    2.Piyush &#x2B50&#x2B50&#x2B50&#x2B50<br>
                    What made this tour stand out for me was the personal touch provided by the OTW team. They made sure that we were
                    comfortable and enjoying ourselves throughout the trip.<br><br>
                    5.Riya &#x2B50&#x2B50&#x2B50&#x2B50<br>
                    Overall, I highly recommend OTW tours and travels for anyone looking to explore India. They offer a well-planned and
                    organized tour that allows you to experience the best of India without any hassle. I am already planning my next trip
                    with them, and I cannot wait to see what other amazing experiences they have in store for me. Thank you, OTW, for an
                    incredible journey!.<br><br>
                    6.Smit &#x2B50&#x2B50&#x2B50&#x2B50&#x2B50<br>
                    From the very beginning, the team at OTW was extremely professional and accommodating. They took care of all the
                    logistics and planning, making the trip stress-free and enjoyable. The itinerary was well-planned, giving us a perfect
                    balance of cultural and historical sites, as well as opportunities to interact with the locals..<br><br>
                    7.Raghav &#x2B50&#x2B50&#x2B50<br>
                    Firstly, their website is user-friendly and easy to navigate, making the booking process a breeze. They offer a wide
                    range of tour packages to choose from, catering to different budgets and preferences. I was able to find a package that
                    suited my needs perfectly.<br><br>
                    7.Raj &#x2B50&#x2B50&#x2B50&#x2B50&#x2B50<br>
                    One thing that stood out to me was the attention to detail. OTW tours and travels paid attention to every
                    little detail, from providing us with a detailed itinerary to ensuring that we had a comfortable stay
                    throughout the tour.<br><br>
                </p>" style=" font-size: xx-large; height: 500px;;width: 1500px;" title="ABOUT US">
            </iframe>
        </div>
    </section>
    </div>
    <br>
    
          
  <section style="text-align: center; background-color: beige; height:230px; color:black; position: absolute;
  width: 100%;">
      <p style="margin-top: 75px; font-size:larger"><b>&copy; 2024 OTW Tourism. All rights reserved.</b></p>
      
      <a href="" class="button" style="margin-top: -5px; margin-left: -595px; position:absolute; color: black;">OTWTOURISM@gmail.com</a>
      <a href="">
      <i style="color: black; margin-top: -35px; text-decoration: wavy; position: absolute;" class="fa-brands fa-instagram"> OTW_TOURISM
    </i></a>
    <a href="">
    <i class="fa-brands fa-facebook" style="color: black; text-decoration: wavy; margin-top: -05px; position: absolute;"> OTW_TOURISM
</i>
        </a>
        <a href="">
        <i class="fa-brands fa-x-twitter" style=" color: black; text-decoration: wavy; margin-top: 22px; position: absolute;"> OTW_TOURISM</i>
        </a>
      <img style="height: 60%; width:20%; margin-left: -1150px;" src="img/paper_plane.png"/>
  </section>

</body>
</html>
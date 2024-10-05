<!DOCTYPE html>
<html>

<head>
    <title>To Do List</title>
    <link rel="stylesheet" href="">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<style>
* {
    margin: 0;
    padding: 0;
}

.navbar {
    display: flex;
    align-items: center;
    justify-content: center;
    position: sticky;
    top: 0;
    padding: 15px;
    cursor: pointer;
}

.background {
    background: lightblue;
    background-blend-mode: darken;
    background-size: cover;
}

.nav-list {
    width: 70%;
    display: flex;
    align-items: center;
    gap: 20px;
    list-style: none;
}

.logo {
    display: flex;
    justify-content: center;
    align-items: center;
}

.logo img {
    width: 180px;
    border-radius: 50px;
}

.nav-list li {
    list-style: none;
    padding: 26px 30px;
    padding: 10px;
}

.nav-list li a {
    text-decoration: none;
    color: white;
}

.nav-list li a:hover {
    color: grey;
}

.rightnav {
    width: 30%;
    text-align: right;
}

#search {
    padding: 5px;
    font-size: 17px;
    border: 2px solid grey;
    border-radius: 9px;
}

.firstsection {
    background-color:white;
    height: 400px;
}

.secondsection {
    background-color: blue;
    height: 400px;
}

.box-main {
    display: flex;
    justify-content: center;
    align-items: center;
    color: black;
    max-width: 80%;
    margin: auto;
    height: 80%;
}

.firsthalf {
    width: 100%;
    display: flex;
    flex-direction: column;
    justify-content: center;
}

.secondhalf {
    width: 30%;
}

.secondhalf img {
    width: 70%;
    border: 4px solid white;
    border-radius: 150px;
    display: block;
    margin: auto;
}

.text-big {
    font-family: 'Piazzolla', serif;
    font-weight: bold;
    font-size: 35px;
}

.text-small {
    font-size: 18px;
}

.btn {
    padding: 8px 20px;
    margin: 7px 0;
    border: 2px solid white;
    border-radius: 8px;
    background: indianred;
    color: white;
    cursor: pointer;
}

.btn-sm {
    padding: 6px 10px;
    vertical-align: middle;
}

.section {
    height: 400px;
    display: flex;
    align-items: center;
    justify-content: center;
    max-width: 90%;
    margin: auto;
}

.section-Left {
    flex-direction: row-reverse;
}

.paras {
    padding: 0px 65px;
}

.thumbnail img {
    width: 250px;
    border: 2px solid black;
    border-radius: 26px;
    margin-top: 19px;
}

.center {
    text-align: center;
}

.text-footer {
    text-align: center;
    padding: 30px 0;
    font-family: 'Ubuntu', sans-serif;
    display: flex;
    justify-content: center;
    color: white;
}

footer {
    text-align: center;
    padding: 15px;
}


.rightnav {
    width: 100%;
    text-align: right;
    margin-top: 10px;
}

#search {
    box-sizing: border-box;
    width: 50%;
    padding: 8px;
    font-size: 17px;
    border: 2px solid grey;
    border-radius: 9px;
}

.btn-sm {
    padding: 8px 20px;
    margin: 7px 5px;
}

img {
    max-width: 100%;
    height: auto;
}


/* Slideshow container */
.slideshow-container {
  max-width: 400px;
  margin: auto;
background-color:none;
}
.mySlides{
background-color:none;
display:none;
}
/* Caption text */
 

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 0s;
}

@keyframes fade {
  from {opacity: 0} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}

 
 
</style>
 
</head>

<body>
    <nav class="navbar background" style="height:55px;">
        <div class="logo">
            <img src="t2.png" 
                 style="height:50px; width:60px;" 
                 alt="Logo">
        </div>
        <ul class="nav-list">
            <li><button style="background-color:cornflowerblue;" class="btn btn-sm"><a href="project.php" style="color:white; font-weight:700;">Home!</a></button></li>
            <li><a href="login.php" style="color:black; font-weight:700;">Sign In!</a></li>
            <li><a href="about.php" style="color:black; font-weight:700;">About Us!</a></li>
        </ul>
        <div class="rightnav">
            <input type="text" 
                   name="search" 
                   id="search">
            <button class="btn btn-sm" style="color:white; font-weight:700;">Search</button>
        </div>
    </nav>
</br>

<div class="slideshow-container">

 

<div class="mySlides fade">
  
  <img src="if6.avif" style="width:100%">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  
  <img src="if3.jpg" style="width:100%">
  <div class="text"></div>
</div>
<div class="mySlides fade">
 
  <img src="if10.jpg" style="width:100%">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  
  <img src="if12.jpg" style="width:100%">
  <div class="text"></div>
</div>


</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
 

 <div class="container">
  <div style="text-align: center; margin-top:3rem;color:rgba(0, 0, 255, 0.862);" > <i class="fa-solid fa-circle-check"> <label style="font-family:Verdana, Geneva, Tahoma, sans-serif;font-size:25px">Welcome to To Do!</label></p></i></div>
  <div class="box1" style="display: flex; margin-top:2rem;justify-content:center;align-items:center;margin-right:1rem">
    <div><img src="p1.jpeg" width="100px" height="100px"></div>
    <div style="margin-left: 2rem;"><h2 style="color: rgba(0, 0, 255, 0.900);;">One place for all your tasks</h2><p>Plan your day effectively by capturing and<br>organizing all your tasks - be it personal or <br>work-related-in one place </p></div>
  </div>

  <div class="box2" style="display: flex; margin-top:2rem;justify-content:center;align-items:center;margin-right:3rem;">
    <div><img src="p2.jpeg" width="100px" height="100px"></div>
    <div style="margin-left: 2rem;"><h2 style="color: rgba(0, 0, 255, 0.900);;">Access anywhere</h2><p>Accress your tasks and list anywhere.<br>on-the-go.on all your devices</div>
  </div>

  <div class="box3" style="display: flex; margin-top:2rem;justify-content:center;align-items:center;margin-right:4rem;">
    <div><img src="p3.jpeg" width="100px" height="100px"></div>
    <div style="margin-left: 2rem;"><h2 style="color: rgba(0, 0, 255, 0.900);;">Collaborate quickly</h2><p>Get more done by sharing lists and<br>delegating tasks</p>


  </div>

  </div>
  <div style="text-align: center; margin-top:2rem"><button style="background-color: blue;color:white;border:none;border-radius:5px;padding-top:0.5rem;padding-bottom:0.5rem;padding-left:9rem;padding-right:9rem"><p style="font-size:0.9rem;;font-weight:600"><a href="login.php" style="color:white; text-decoration:none;">Lets go!</a></p></button></div>

</div>
           </br>
</br> 
    <footer class="background" style="background-color:black;">
        <p class="text-footer" style="color:white; font-weight:700;">
            Copyright ©-All rights are reserved 2024
        </p>
    </footer>
</body>

</html>
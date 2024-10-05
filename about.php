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

 
body {
  margin: 0px;
}

h1 {
  font-family: cursive;
 text-align:center;
 
}

p {
  font-family: italic;
  margin-left: 60px;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 32%;
   margin-bottom: 16px;
   margin-left: 450px; 
  padding: 0 39px;
  font-family: italic;

  
}

.card {
  box-shadow:2px 2px 5px indianred, -2px -2px 5px indianred;
  margin:8px;
border-radius:20px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color:aliceblue;
  color: black;
  height:170px;
border-radius:20px;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: green;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  border-radius:8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width:100%;
  margin:0;
}

.button:hover {
  background-color:indianred;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}

</style>
</head>
<body>
 <nav class="navbar background" style="height:85px;">
        <div class="logo">
            <img src="t2.png" 
                 style="height:50px; width:60px;" 
                 alt="Logo">
        </div>
        <ul class="nav-list">
            <li><a href="project.php" style="color:black; font-weight:700;">Home!</a></li>
            <li><a href="login.php" style="color:black; font-weight:700;">Sign In!</a></li>
            <li><button style="background-color:cornflowerblue;" class="btn btn-sm"><a href="about.php" style="color:black; font-weight:700;">About Us!</a></button></li>
        </ul>
        <div class="rightnav">
            <input type="text" 
                   name="search" 
                   id="search">
            <button class="btn btn-sm" style="color:white; font-weight:700;">Search</button>
        </div>
    </nav>


<div class="about-section">
  <h1>About Us Page</h1>
  <h2 style="font-family:cursive;">To Do</h2>
  <h3 style="font-family:cursive;">WELCOME.</h3>
</div>

<div> </br>
<h1>The Concept of To-Do</h1> </br>
 <p> A scientifically evolved work plan devised to achieve a specific objective within a stipulated time.<p></br>
<p>A project management to-do list is a collection of tasks that outlines the work a project manager or team plans to complete during a project. </p></br>
<p>This list helps project managers understand the various tasks of a project so they can assign work to team members and fulfill their own duties.</p></br>

</div>

<h2 style="text-align:center; font-weight:800;">About me</h2></br>
<div class="row">

<div class="column">
    <div class="card"></br>
      <div style="width:150px ;margin-left:105px;"><img src="contact.jpeg" alt="Mike" style="border-radius:50%"></div>
      <div class="container">
        <h2 style="text-align:center;">ANAND KUMAR </h2>
        <p class="title" style="color:cornflowerblue; font-weight:600;">Website Designer</p>
         <p>My name is ANAND KUMAR from Varanasi(UTTAR-PRADESH). </p>
		   <p> And still a college student, pursuing B.Tech from SLIET. </p>
		    <p>And My Aim is to become a software engineering. </p>
           <p> I’m skilled with HTML,CSS,JAVASCRIPT PHP and mysql. </p>
		   <p> And I am trying to learn other programming languages.</p>
		</p>
        <p>anandmodanwal7310@gmail.com</p></br>
        <p><button class="button">Contact : 7310106061</button></p></br>
      </div>
    </div>
  </div>

   
   

 

  </div>

</br> 
    <footer class="background" style="background-color:black;">
        <p class="text-footer" style="color:white; font-weight:700;">
            Copyright ©-All rights are reserved 2024
        </p>
    </footer>

</body>
</html>

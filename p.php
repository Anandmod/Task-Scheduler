<?php
require_once('auth.php');
require_once('MainClass.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible"
          content="IE=edge">
    <meta name="viewport" 
          content="width=device-width, 
                   initial-scale=1.0">
    <title>to do list</title>
    <link rel="stylesheet" 
          href="style.css">
    <link rel="stylesheet" 
          href="responsive.css">

          <link rel="stylesheet" 
          href="styles1.css">

  
          <script>
	
	document.addEventListener('DOMContentLoaded', () => {
    const homeLink = document.getElementById('home-link');
    const dashboardLink = document.getElementById('dashboard-link');
    const todoLink = document.getElementById('todo-link');
    const pro = document.getElementById('prof');

    const pms = document.getElementById('pmm');


    
    const homeSection = document.getElementById('home');
    const dashboardSection = document.getElementById('dashboard');
    const todoSection = document.getElementById('todo');

    const proSection = document.getElementById('pp');

    const pmsSection = document.getElementById('pm');


    
    const sections = [homeSection, dashboardSection, todoSection,proSection,pmsSection];
    
    homeLink.addEventListener('click', () => showSection(homeSection));
    dashboardLink.addEventListener('click', () => showSection(dashboardSection));
    todoLink.addEventListener('click', () => showSection(todoSection));

    pro.addEventListener('click', () => showSection(proSection));
    pms.addEventListener('click', () => showSection(pmsSection));


    
    function showSection(section) {
        sections.forEach(sec => sec.classList.remove('active'));
        section.classList.add('active');
    }
    
    showSection(homeSection);

    const taskForm = document.getElementById('task-form');
    const taskTableBody = document.getElementById('task-table-body');
    const filterSelect = document.getElementById('filter');

    let tasks = [];

    taskForm.addEventListener('submit', (e) => {
        e.preventDefault();
        
        const taskName = document.getElementById('task-name').value;
        const taskDueDate = document.getElementById('task-due-date').value;
        
        const task = {
            name: taskName,
            dueDate: taskDueDate,
            status: 'pending'
        };

        tasks.push(task);
        renderTasks();
        taskForm.reset();
    });

    filterSelect.addEventListener('change', renderTasks);

    function renderTasks() {
        taskTableBody.innerHTML = '';

        const filter = filterSelect.value;

        tasks
            .filter(task => filter === 'all' || task.status === filter)
            .forEach(task => {
                const row = document.createElement('tr');

                row.innerHTML = `
                    <td>${task.name}</td>
                    <td>${task.dueDate}</td>
                    <td>${task.status}</td>
                    <td>
                        <button onclick="toggleTaskStatus('${task.name}')" style="background-color:indianred;">Toggle Status</button>
                        <button onclick="deleteTask('${task.name}')" style="background-color:indianred;">Delete</button>
                    </td>
                `;

                taskTableBody.appendChild(row);
            });
    }

    window.toggleTaskStatus = function(taskName) {
        const task = tasks.find(t => t.name === taskName);
        if (task) {
            task.status = task.status === 'pending' ? 'completed' : 'pending';
            renderTasks();
        }
    };

    window.deleteTask = function(taskName) {
        tasks = tasks.filter(t => t.name !== taskName);
        renderTasks();
    };
});


 function darkMode() {
            let element = document.body;
            let content = document.getElementById("DarkModetext");
            element.className = "dark-mode";
            content.innerText = "Dark Mode is ON";
        }
        function lightMode() {
            let element = document.body;
            let content = document.getElementById("DarkModetext");
            element.className = "light-mode";
            content.innerText = "Dark Mode is OFF";
        }

</script>

		  <style>
		  /* Main CSS Here */

@import url(
"https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}
:root {
  --background-color1: #fafaff;
  --background-color2: #ffffff;
  --background-color3: #ededed;
  --background-color4: #cad7fda4;
  --primary-color: #4b49ac;
  --secondary-color: #0c007d;
  --Border-color: #3f0097;
  --one-use-color: #3f0097;
  --two-use-color: #5500cb;
}
body {
  background-color: var(--background-color4);
  max-width: 100%;
  overflow-x: hidden;
  
}

header {
  height: 70px;
  width: 100vw;
  padding: 0 30px;
  background-color: var(--background-color1);
  position: fixed;
  z-index: 100;
  box-shadow: 1px 1px 15px rgba(161, 182, 253, 0.825);
  display: flex;
  justify-content: space-between;
  align-items: center;
   

}

.logo {
  font-size: 27px;
  font-weight: 600;
  color: rgb(47, 141, 70);
}

.icn {
  height: 30px;
}
.menuicn {
  cursor: pointer;
}

.searchbar,
.message,
.logosec {
  display: flex;
  align-items: center;
  justify-content: center;
}

.searchbar2 {
  display: none;
}

.logosec {
  gap: 60px;
}

.searchbar input {
  width: 250px;
  height: 42px;
  border-radius: 50px 0 0 50px;
  background-color: var(--background-color3);
  padding: 0 20px;
  font-size: 15px;
  outline: none;
  border: none;
}
.searchbtn {
  width: 50px;
  height: 42px;
  display: flex;
  align-items: center;
  justify-content: center;
  border-radius: 0px 50px 50px 0px;
  background-color: var(--secondary-color);
  cursor: pointer;
}

.message {
  gap: 40px;
  position: relative;
  cursor: pointer;
}
.circle {
  height: 7px;
  width: 7px;
  position: absolute;
  background-color: #fa7bb4;
  border-radius: 50%;
  left: 19px;
  top: 8px;
}
.dp {
  height: 40px;
  width: 40px;
  background-color: #626262;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  overflow: hidden;
}
.main-container {
  display: flex;
  width: 100vw;
  position: relative;
  top: 70px;
  z-index: 1;
}
.dpicn {
  height: 42px;
}

.main {
  height: calc(100vh - 70px);
  width: 100%;
  overflow-y: scroll;
  overflow-x: hidden;
  padding: 40px 30px 30px 30px;
}

.main::-webkit-scrollbar-thumb {
  background-image: 
        linear-gradient(to bottom, rgb(0, 0, 85), rgb(0, 0, 50));
}
.main::-webkit-scrollbar {
  width: 5px;
}
.main::-webkit-scrollbar-track {
  background-color: #9e9e9eb2;
}

.box-container {
  display: flex;
  justify-content: space-evenly;
  align-items: center;
  flex-wrap: wrap;
  gap: 50px;
}
.nav {
  min-height: 91vh;
  width: 250px;
  background-color: var(--background-color2);
  position: absolute;
  top: 0px;
  left: 00;
  box-shadow: 1px 1px 10px rgba(198, 189, 248, 0.825);
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  overflow: hidden;
  padding: 30px 0 20px 10px;
}
.navcontainer {
  height: calc(100vh - 70px);
  width: 250px;
  position: relative;
  overflow-y: scroll;
  overflow-x: hidden;
  transition: all 0.5s ease-in-out;
}
.navcontainer::-webkit-scrollbar {
  display: none;
}
.navclose {
  width: 80px;
}
.nav-option {
  width: 250px;
  height: 60px;
  display: flex;
  align-items: center;
  padding: 0 30px 0 20px;
  gap: 20px;
  transition: all 0.1s ease-in-out;
}
.nav-option:hover {
  border-left: 5px solid #a2a2a2;
  background-color: #dadada;
  cursor: pointer;
}
.nav-img {
  height: 30px;
}

.nav-upper-options {
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 30px;
}

.option1 {
  border-left: 5px solid #010058af;
  background-color: var(--Border-color);
  color: white;
  cursor: pointer;
}
.option1:hover {
  border-left: 5px solid #010058af;
  background-color: var(--Border-color);
}
.box {
  height: 130px;
  width: 230px;
  border-radius: 20px;
  box-shadow: 3px 3px 10px rgba(0, 30, 87, 0.751);
  padding: 20px;
  display: flex;
  align-items: center;
  justify-content: space-around;
  cursor: pointer;
  transition: transform 0.3s ease-in-out;
}
.box:hover {
  transform: scale(1.08);
}

.box:nth-child(1) {
  background-color: var(--one-use-color);
}
.box:nth-child(2) {
  background-color: var(--two-use-color);
}
.box:nth-child(3) {
  background-color: var(--one-use-color);
}
.box:nth-child(4) {
  background-color: var(--two-use-color);
}

.box img {
  height: 50px;
}
.box .text {
  color: white;
}
.topic {
  font-size: 13px;
  font-weight: 400;
  letter-spacing: 1px;
}

.topic-heading {
  font-size: 30px;
  letter-spacing: 3px;
}

.report-container {
  min-height: 300px;
  max-width: 1200px;
  margin: 70px auto 0px auto;
  background-color: #ffffff;
  border-radius: 30px;
  box-shadow: 3px 3px 10px rgb(188, 188, 188);
  padding: 0px 20px 20px 20px;
}
.report-header {
  height: 80px;
  width: 100%;
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 20px 20px 10px 20px;
  border-bottom: 2px solid rgba(0, 20, 151, 0.59);
}

.recent-Articles {
  font-size: 30px;
  font-weight: 600;
  color: #5500cb;
}

.view {
  height: 35px;
  width: 90px;
  border-radius: 8px;
  background-color: #5500cb;
  color: white;
  font-size: 15px;
  border: none;
  cursor: pointer;
}

.report-body {
  max-width: 1160px;
  overflow-x: auto;
  padding: 20px;
}
.report-topic-heading,
.item1 {
  width: 1120px;
  display: flex;
  justify-content: space-between;
  align-items: center;
}
.t-op {
  font-size: 18px;
  letter-spacing: 0px;
}

.items {
  width: 1120px;
  margin-top: 15px;
}

.item1 {
  margin-top: 20px;
}
.t-op-nextlvl {
  font-size: 14px;
  letter-spacing: 0px;
  font-weight: 600;
}

.label-tag {
  width: 100px;
  text-align: center;
  background-color: rgb(0, 177, 0);
  color: white;
  border-radius: 4px;
}

		  </style>
</head>

<body>
    <!-- for header part -->
    <header  >
        <div class="logosec">
            <div class="logo" style="color:indianred;"><label style="font-family: cursive;">To-Do List</label></div>
            
        </div>
        
        <h1 style="font-weight:700; font-style:italic; color:darkorchid;">Welcome <?= ucwords($_SESSION['firstname']) ?></h1>

        <div class="message">
            <div class="circle"></div>
            <img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210183322/8.png" 
                 class="icn" 
                 alt="">
            <div class="dp">
              <img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210180014/profile-removebg-preview.png"
                    class="dpicn" 
                    alt="dp">
              </div>
        </div>
    </header>
    <div class="main-container">
        <div class="navcontainer">
            <nav class="nav">
                <div class="nav-upper-options">
                    <a href="#" id="pmm" style="text-decoration:none;"><div class="nav-option option1" style="background-color: indianred;">
                        <img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210182148/Untitled-design-(29).png"
                            class="nav-img" 
                            alt="dashboard">
                        <h3 style="color:white;"> Dashboard</h3>
                    </div></a>
                    <a href="#" id="prof"style="color:indianred; text-decoration:none;"><div class="nav-option option5">
                        <img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210183323/10.png"
                            class="nav-img" 
                            alt="blog">
                        <h3>Profile</h3>
                    </div></a>  

                    <a href="#" id="todo-link" style="color:indianred; text-decoration:none;"><div class="nav-option option6">
                        <img src="task.jpg"
                            class="nav-img" 
                            alt="settings">
                        <h3>Task</h3>
                        
                    </div></a>
                    <a href="project.php " style="text-decoration:none; color:indianred;"><div class="nav-option logout">
                        <img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210183321/7.png"
                            class="nav-img" 
                            alt="logout">
                        <h3 style="color:indianred;"> Logout</h3>
                    </div></a>
                </div>
            </nav>
        </div>
        <div class="main">
          <section  id="pm">
            <div class="box-container">
                <div class="box box1" style="background-color:white;">
                    <div class="text">
                        <h2 class="topic-heading" style="color:indianred; font-weight:700; font-style:bold;">65.5k</h2>
                        <h2 class="topic" style="color:indianred; font-weight:700; font-style:bold;">Views</h2>
                    </div>

                    <img src="eye.png"
                        alt="Views">
                </div>
                <div class="box box2" style="background-color:white;">
                    <div class="text">
                        <h2 class="topic-heading"  style="color:indianred; font-weight:700; font-style:bold;">150</h2>
                        <h2 class="topic"style="color:indianred; font-weight:700; font-style:bold;">Likes</h2>
                    </div>

                    <img src="like.png" style="width:80px; height:80px;" alt="likes">
                </div>

                <div class="box box3" style="background-color:white;">
                    <div class="text">
                        <h2 class="topic-heading" style="color:indianred; font-weight:700; font-style:bold;">430</h2>
                        <h2 class="topic" style="color:indianred; font-weight:700; font-style:bold;">Comments</h2>
                    </div>

                    <img src="comments.png" style="width:55px; height:58px;" alt="comments">
                </div>

                <div class="box box4" style="background-color:white;">
                    <div class="text">
                        <h2 class="topic-heading" style="color:indianred; font-weight:700; font-style:bold;">90</h2>
                        <h2 class="topic" style="color:indianred; font-weight:700; font-style:bold;">Contact Us</h2>
                    </div>
                    <img src="cont2.png"  style="width:58px; height:70px;"alt="published">
                </div>
          </div>
</section>  
</br>
           <div class="container" >     
				<div class="">
                    <a href="#" id="home-link"></a>
                    <a href="#" id="dashboard-link"></a>
                    <a href="#" id="todo-link"></a>
				            <a href="#" id="login"></a>
					          <a href="#" id="contact"></a>	  
           </div>
        <main>
         
            <section id="home" class="content">
            </section>
            <section id="dashboard" class="content">   
            </section>
            <section id="todo" class="content" >
                <h1 style="margin-left:420px;">To-Do List</h1>
                <form id="task-form" style="margin:20px;">
                    <input type="text" id="task-name" placeholder="Task Name" required>
                    <input type="date" id="task-due-date" required>
                    <button type="submit" style="background-color:indianred;  font-weight:600;">Add Task</button>
                </form>
                <div>
                    <label for="filter" style="margin-left:15px; font-weight:600;">Filter: </label>
                    <select id="filter">
                        <option value="all">All</option>
                        <option value="pending" >Pending</option>
                        <option value="completed" >Completed</option>
                    </select>
                </div>
                <table style="width:95%; margin-left:15px;">
                    <thead >
                        <tr >
						
                            <th>Task</th>
                            <th>Due Date</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody id="task-table-body">
                        <!-- Tasks will be dynamically added here -->
                    </tbody>
                </table>
</br>
            </section>

            <section id="pp" class="content" style="width:40%; margin-left:300px;">
            <div style="width:100%; height:60%; margin-left:; margin-top:100px; background-color:white;  box-shadow:2px 2px 5px indianred, -2px -2px 5px indianred;">
<div class="dp" style="margin-left:200px;">
              <img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210180014/profile-removebg-preview.png"
                    class="dpicn" 
                    style=""alt="dp">
              </div>
              <h1 style="font-weight:700; font-style:cursive; color:black; margin-left:15px;">Name- <?= ucwords($_SESSION['firstname']) ?></h1>
              <h1 style="font-weight:700; font-style:cursive; color:black; margin-left:15px;">Email- <?= ucwords($_SESSION['email']) ?></h1>
              <h1 style="font-weight:700; font-style:cursive; color:black; margin-left:15px;">Mobile- <?= ucwords($_SESSION['middlename']) ?></h1>
              <h1 style="font-weight:700; font-style:cursive; color:black; margin-left:15px;">Gender- <?= ucwords($_SESSION['lastname']) ?></h1>
</br>

</div>
</section>
            
        </main>
    </div>
  
        </div>
    </div>
     <script src="./index.js"></script>
</body>
</html>

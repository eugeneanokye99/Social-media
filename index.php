<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="responsive.css" />
    <title>EDA Company</title>
  </head>
  <body>
    <!-- Navigation bar -->
    <nav>
      <label>EDA </label>
      <span
        style="
          color: black;
          margin-top: 12px;
          font-weight: 700;
          font-family: monospace;
          margin-left: -360px;
          font-size: 15px;
        "
      >
        EDA<br />Company
      </span>

      <div class="searchbtn">
        <i class="fa-solid fa-magnifying-glass" style="color: gray"></i>
        <input type="search" id="search" placeholder="Search" />
        <i
          class="fa-solid fa-sliders"
          style="color: #000000; margin-left: -25px"
        ></i>
      </div>

      <div class="icon">
        <i
          class="fa-solid fa-moon"
          id="moon"
          style="color: #e88c30"
          onclick="darkMode()"
        ></i>
        <i
          class="fa-solid fa-sun"
          id="sun"
          style="color: #e88c30; display: none"
          onclick="lightMode()"
        ></i>
        <i class="fa-solid fa-bell" style="color: #e88c30"></i>
        <i class="fa-solid fa-user" style="color: #e88c30"></i>
      </div>
      <script>
        function darkMode() {
          const moon = document.getElementById("moon");
          const sun = document.getElementById("sun");

          moon.style.display = "none";
          sun.style.display = "inline-block";

          var element = document.body;
          element.classList.toggle("dark-mode");

          var navbar = document.querySelector("nav");
          navbar.classList.toggle("nav-dark-mode");

          var navbar_span = navbar.querySelector("span");
          navbar_span.classList.toggle("text-dark-mode");

          var box1 = document.querySelector(".box1");
          box1.classList.toggle("box-dark-mode");

          var span = box1.querySelectorAll("ul a li span");
          span.forEach((element) => {
            if (!element.classList.contains("Active")) {
              element.classList.toggle("text-dark-mode");
            }
          });

          var dropdown = box1.querySelectorAll(".dropdown > ul a li");
          dropdown.forEach((element) => {
            if (!element.classList.contains("Active")) {
              element.classList.toggle("text-dark-mode");
            }
          });

          var box2 = document.querySelector(".box2");
          box2.classList.toggle("dark-mode");

          var tabs = box2.querySelectorAll(".tabs > ul a li");
          tabs.forEach((element) => {
            if (!element.classList.contains("Active")) {
              element.classList.toggle("text-dark-mode");
            }
          });

          var box3 = document.querySelector(".box3");
          box3.classList.toggle("box-dark-mode");

          var side = box3.querySelectorAll(".side > ul a li");
          side.forEach((element) => {
            if (!element.classList.contains("Active")) {
              element.classList.toggle("text-dark-mode");
            }
          });

          var text_input = box2.querySelector(".text-input");
          text_input.classList.toggle("box-dark-mode");

          var tabs = box2.querySelector(".tabs");
          tabs.classList.toggle("box-dark-mode");

          var post = box2.querySelector(".post");
          post.classList.toggle("box-dark-mode");

          var container = box2.querySelectorAll(".container .post");
          container.forEach((element) => {
            element.classList.toggle("box-dark-mode");
          });

          var footer = document.querySelector("footer");
          footer.classList.toggle("box-dark-mode");
        }

        function lightMode() {
          const moon = document.getElementById("moon");
          const sun = document.getElementById("sun");

          moon.style.display = "inline-block";
          sun.style.display = "none";

          var element = document.body;
          element.classList.remove("dark-mode");

          var navbar = document.querySelector("nav");
          navbar.classList.remove("nav-dark-mode");

          var navbar_span = navbar.querySelector("span");
          navbar_span.classList.remove("text-dark-mode");

          var box1 = document.querySelector(".box1");
          box1.classList.remove("box-dark-mode");

          var span = box1.querySelectorAll("ul a li span");
          span.forEach((element) => {
            if (!element.classList.contains("Active")) {
              element.classList.remove("text-dark-mode");
            }
          });

          var dropdown = box1.querySelectorAll(".dropdown > ul a li");
          dropdown.forEach((element) => {
            if (!element.classList.contains("Active")) {
              element.classList.remove("text-dark-mode");
            }
          });

          var box2 = document.querySelector(".box2");
          box2.classList.remove("dark-mode");

          var tabs = box2.querySelectorAll(".tabs > ul a li");
          tabs.forEach((element) => {
            if (!element.classList.contains("Active")) {
              element.classList.remove("text-dark-mode");
            }
          });

          var box3 = document.querySelector(".box3");
          box3.classList.remove("box-dark-mode");

          var side = box3.querySelectorAll(".side > ul a li");
          side.forEach((element) => {
            if (!element.classList.contains("Active")) {
              element.classList.remove("text-dark-mode");
            }
          });

          var text_input = box2.querySelector(".text-input");
          text_input.classList.remove("box-dark-mode");

          var tabs = box2.querySelector(".tabs");
          tabs.classList.remove("box-dark-mode");

          var post = box2.querySelector(".post");
          post.classList.remove("box-dark-mode");

          var container = box2.querySelectorAll(".container .post");
          container.forEach((element) => {
            element.classList.remove("box-dark-mode");
          });

          var footer = document.querySelector("footer");
          footer.classList.remove("box-dark-mode");
        }
      </script>
    </nav>
    <!-- Web Page content -->
    <main>
      <!-- Tabs Sidebar -->
      <div class="box1">
        <ul>
          <a href="tab1/home.php"
            ><li class="activebtn">
              <i class="fa-solid fa-house fa-lg" style="color: #e88c30"></i
              ><span style="text-indent: 4px">Home</span>
            </li></a
          >
          <a href="tab2/following.php"
            ><li>
              <i class="fa-solid fa-users fa-lg" style="color: #e88c30"></i
              ><span>Following</span>
            </li></a
          >
          <a href="tab3/events.php"
            ><li>
              <i
                class="fa-solid fa-calendar-days fa-lg"
                style="color: #e88c30"
              ></i
              ><span style="text-indent: 5px">Events</span>
            </li></a
          >
          <a href="tab4/saved.php"
            ><li>
              <i class="fa-solid fa-bookmark fa-lg" style="color: #e88c30"></i
              ><span style="text-indent: 5px">Saved</span>
            </li></a
          >
          <a href="tab5/settings.php"
            ><li>
              <i class="fa-solid fa-gear fa-lg" style="color: #e88c30"></i
              ><span>Settings</span>
            </li></a
          >
        </ul>
        <hr />
        <ul class="dropdown">
          <a href=""
            ><li class="dropbtn">
              <i
                class="fa-solid fa-circle-question fa-lg"
                style="color: #e88c30"
              ></i
              ><span>Help and Support</span>
              <i
                class="fa-solid fa-angle-down caret-down"
                style="
                 color: gray;
                margin-left: 20px;
                display: flex;
                align-self: center;"
              ></i></li
          ></a>
          <ul class="dropdown-content">
            <a href="#"><li>Help Center</li></a>
            <a href="#"><li>Support Inbox</li></a>
            <a href="#"><li>Report a problem</li></a>
            <a href="#"><li>Terms & Conditions</li></a>
          </ul>
        </ul>

        <p class="blocktext">
          Copyrights @ 2023 All rights reserved by EDA Company
          <i class="fa-brands fa-instagram" style="color: gray"></i>
          <i class="fa-brands fa-dribbble" style="color: gray"></i>
          <i class="fa-brands fa-behance" style="color: gray"></i>
        </p>
      </div>

      <!-- Posts page -->
      <div class="box2" id="box2">
        <?php
           include ("tab1/home.php");
           ?>

        <!-- Footer content -->
        <footer>
          <div class="footer-content">
            <div class="socials">
              <p class="heading">Elsewhere on the web</p>
              <ul>
                <a href="#"
                  ><li style="border-bottom: 1px dashed gray">
                    <i class="fa-brands fa-youtube" style="color: #ff2e2e"></i
                    >Suscribe on Youtube
                  </li></a
                >
                <a href="#"
                  ><li style="border-bottom: 1px dashed gray">
                    <i class="fa-brands fa-twitter" style="color: #6695e5"></i
                    >Follow us on Twitter
                  </li></a
                >
                <a href="#"
                  ><li>
                    <i class="fa-brands fa-facebook" style="color: #2d6bd7"></i
                    >Join us on Facebook
                  </li></a
                >
              </ul>
            </div>
            <div class="form">
              <p class="heading">Sign up for our Newsletter</p>
              <form>
                <label for="name">
                  Full Name:
                  <input
                    type="text"
                    id="name"
                    style="margin-left: 32px"
                    placeholder="Enter your full name"
                  />
                </label>
                <label for="email">
                  Email address:
                  <input
                    type="email"
                    id="email"
                    placeholder="Enter your email address"
                  />
                </label>

                <a href="#">
                  <button type="submit">Submit</button>
                </a>
              </form>
            </div>
          </div>
          <hr />

          <div style="margin-top: 10px; color: gray">
            <p>Copyright @ 2023 All rights reserved by EDA Company</p>
          </div>
        </footer>
      </div>

      <!-- Friends and pages sidebar -->
      <div class="box3">
        <div class="search-friends">
          <i class="fa-solid fa-magnifying-glass" style="color: gray"></i>
          <input type="search" id="search-friends" placeholder="Search" />
        </div>

        <div class="side">
          <p>YOUR PAGES</p>
          <hr />
          <ul>
            <a href="#"
              ><li>
                <i class="fa-brands fa-github fa-lg" style="color: #000000"></i
                >Git Management Community
              </li></a
            >
            <a href="#"
              ><li>
                <i
                  class="fa-brands fa-stack-overflow fa-lg"
                  style="color: #ff8c2e"
                ></i
                >Stack Overflow geeks
              </li></a
            >
          </ul>
          <a href="#"><button>See more ></button></a>
        </div>

        <div class="side">
          <p>GROUPS</p>
          <hr />
          <ul>
            <a href="#">
              <li>
                <img
                  src="assests/four-participants.jpg"
                  alt=""
                  style="width: 30px; height: 30px; border-radius: 999px"
                />
                Four Participants
              </li>
            </a>
            <a href="#">
              <li>
                <img
                  src="assests/half-dozen.jpeg"
                  alt=""
                  style="width: 30px; height: 30px; border-radius: 999px"
                />
                Half a Dozen
              </li>
            </a>
            <a href="#">
              <li>
                <img
                  src="assests/chamber 7.jpeg"
                  alt=""
                  style="width: 30px; height: 30px; border-radius: 999px"
                />
                Chamber 7 menners
              </li>
            </a>
          </ul>
          <a href="#"><button>See more ></button></a>
        </div>

        <div class="side">
          <p>FRIENDS</p>
          <hr />
          <p style="text-align: center; margin-top: 20px">
            You have no friends
          </p>
        </div>
      </div>
    </main>
    <script
      src="https://kit.fontawesome.com/5cec4b7ace.js"
      crossorigin="anonymous"
    ></script>
    <script src="script.js"></script>
  </body>
</html>

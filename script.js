function darkMode() {
    var element = document.body;
    element.classList.toggle("dark-mode");

    var navbar = document.querySelector("nav");
    navbar.classList.toggle("nav-dark-mode");

    var navbar_span = navbar.querySelector("span");
    navbar_span.classList.toggle("text-dark-mode");

    var box1 = document.querySelector(".box1");
    box1.classList.toggle("box-dark-mode");

    var box2 = document.querySelector(".box2");
    box2.classList.toggle("dark-mode");

    var tabs = box2.querySelectorAll(".tabs > ul a li")
    tabs.forEach(element => {
        if(!element.classList.contains("Active")) {
            element.classList.toggle("text-dark-mode");
        }
    });

    var box3 = document.querySelector(".box3");
    box3.classList.toggle("box-dark-mode");

    var text_input = box2.querySelector(".text-input");
    text_input.classList.toggle("box-dark-mode");

    var tabs = box2.querySelector(".tabs");
    tabs.classList.toggle("box-dark-mode");

    var post = box2.querySelector(".post");
    post.classList.toggle("box-dark-mode");

    var container = box2.querySelectorAll(".container .post");
    container.forEach(element => {
        element.classList.toggle("box-dark-mode");
    });

    var footer = document.querySelector("footer");
    footer.classList.toggle("box-dark-mode");
}
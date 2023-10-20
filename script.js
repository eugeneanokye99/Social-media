document.addEventListener('DOMContentLoaded', function() {
    const box2 = document.getElementById('box2');

    // Function to load content into box2
    function loadContent(url) {
        fetch(url)
            .then(response => response.text())
            .then(data => {
                box2.innerHTML = data;
            })
            .catch(error => console.error('Error:', error));
    }

    // Add event listener to the links in box1
    const links = document.querySelectorAll('.box1 ul a');
    links.forEach(link => {
        link.addEventListener('click', function(event) {
            event.preventDefault();
            const url = this.getAttribute('href');
            loadContent(url);
        });
    });


});
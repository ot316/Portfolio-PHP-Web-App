/* When the user clicks on the button, toggle between hiding and showing the dropdown content */
var toggle = 0;

function myFunction() {
    if (toggle = 1) {
        document.getElementById("myDropdown").style.display = ("flex");
        document.getElementById("dropbtn").style.backgroundColor = ("grey");
        document.getElementById("bigpicwrapper").style.transform = "translate(0px,40px)"
        document.getElementById("bigpicwrapper").style.opacity = ("0.3");
        toggle = 0;
    }
    if (toggle = 0) {
        document.getElementById("myDropdown").style.display = ("none");
        document.getElementById("dropbtn").style.backgroundColor = ("lightgrey");
        toggle = 1;
    }
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
    if (!event.target.matches('.dropbtn')) {
        var dropdowns = document.getElementsByClassName("dropdown-content");
        document.getElementById("myDropdown").style.display = ("none");
        document.getElementById("dropbtn").style.backgroundColor = ("lightgrey");
        document.getElementById("bigpicwrapper").style.opacity = ("1");
        document.getElementById("bigpicwrapper").style.transform = "translate(0px,0px)"

        var i;
        for (i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show')) {
                openDropdown.classList.remove('show');
                document.getElementById("myDropdown").style.display = ("none");
            }
        }
    }
}
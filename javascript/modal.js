// Get the modal
var modal = document.getElementById("myModal");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function () {
    modal.style.display = "none";
}

var images = ["img1", "img2", "img3", "img4", "img5", "img6", "img7", "img8", "img9", "img10"];

images.forEach(nodalfunction);

// Get the image and insert it inside the modal - use its "alt" text as a caption
function nodalfunction(img) {
    var img = document.getElementById(img);
    var modalImg = document.getElementById("img01");
    img.onclick = function () {
        modal.style.display = "block";
        modalImg.src = this.src;
        captionText.innerHTML = this.alt;
    }
}
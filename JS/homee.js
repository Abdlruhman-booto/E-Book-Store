




const sec = document.querySelectorAll('section[class^="imgs"]');

var s = 1;
let arr = ['left', 'center', 'right']
var idx = 0;
setInterval(heade, 10);
function heade() {
  s -= .005;
  document.getElementById("welcome").style.opacity = s;
  if (s < 0) {
    idx++;
    if (idx == 3) idx = 0;

    s = 1;
  }

}



function hideAllsec() {
  sec.forEach(section => {
    section.style.display = 'none';
  });
}

function showNextImage(sec_idx) {
  const currentSection = sec[sec_idx];
  const images = currentSection.querySelectorAll('img');
  let img_idx = 0;

  function hideAllImages() {
    images.forEach(image => {
      image.style.display = 'none';
    });
  }

  function displayNextImage() {
    hideAllImages();
    img_idx = (img_idx + 1) % images.length;
    images[img_idx].style.display = 'block';
  }

  hideAllImages();
  setInterval(displayNextImage, 3000); // Change image every 3 seconds (adjust as needed)
}

hideAllsec();
sec.forEach((section, index) => {
  section.style.display = 'block'; // Display the first image of each section initially
  showNextImage(index);
});







const socialLinks = document.querySelectorAll('.social-links');

socialLinks.forEach(link => {
  link.addEventListener('click', function (event) {
    event.preventDefault(); // Prevents default link behavior (opening in the same window)

    const url = this.getAttribute('href');
    window.open(url, '_blank'); // Opens link in a new tab
  });
});


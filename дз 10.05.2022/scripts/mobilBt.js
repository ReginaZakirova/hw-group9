var menuBtn = document.getElementById('mobilMenu');
var mobilMenu = document.getElementById('navMenu');

menuBtn.addEventListener('click', function () {
    var menuClose = document.querySelector('.menuOpen');
    if (menuClose !== "undefined" && menuClose !== null) {
        menuClose.classList.remove("menuOpen")
    }
    if (menuClose !== mobilMenu) {
        mobilMenu.classList.toggle("menuOpen")
    }

  })
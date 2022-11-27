//toggle on click
function menuToggle(active) {
  const ekanaMenuItemUno = document.querySelector(".menu-hamburger");
  const ekanaMenuItemDos = document.querySelector(".menu");
  const ekanaMenuItemTres = document.querySelector(".main-navigation");
  const ekanaMenuItemCuarto = document.querySelector(".menu-bg");
  ekanaMenuItemUno.classList.toggle("active");
  ekanaMenuItemDos.classList.toggle("active");
  ekanaMenuItemTres.classList.toggle("active");
  ekanaMenuItemCuarto.classList.toggle("active");
}
//cambio de idioma
function cambioIdioma() {
  var castellano = document.getElementsByClassName("castellano");
  for (var cas = 0; cas < castellano.length; cas++) {
    if (castellano) {
      if (castellano[cas].style.display == "block") {
        castellano[cas].style.display = "none";
      } else {
        castellano[cas].style.display = "block";
      }
    } 
  }
  var eusquera = document.getElementsByClassName("eusquera");
  for (var eus = 0; eus < eusquera.length; eus++) {
    if (eusquera) {
      if (eusquera[eus].style.display == "none") {
        eusquera[eus].style.display = "block";
      } else {
        eusquera[eus].style.display = "none";
      }
    }
  }
}
//activeIdioma
function activeIdioma(active) {
  const idioma = document.querySelector(".selectorIdioma");
  idioma.classList.toggle("active");
}
// // hide on scroll
const menuList = document.querySelector(".menu");
const menuButtom = document.querySelector(".menu-hamburger");
const menuBg = document.querySelector(".menu-bg");
var myScrollFunc = function() {
  var y = window.scrollY;
  if (y >= 0) {
    menuList.className = "menu ";
    menuButtom.className = "menu-hamburger ";
    menuBg.className = "menu-bg ";
  } 
};
window.addEventListener("scroll", myScrollFunc);

// hero animation
//castellano
$(function() {
  var $els = $("div[id^=heroSlideCAS]"),
    i = 0,
    len = $els.length;
  $els.slice(1).hide();
  setInterval(function() {
    $els.eq(i).fadeOut(function() {
      i = (i + 1) % len;
      $els.eq(i).fadeIn();
    });
  }, 2500);
});
// eusquera
$(function() {
  var $els = $("div[id^=heroSlideEUS]"),
    i = 0,
    len = $els.length;
  $els.slice(1).hide();
  setInterval(function() {
    $els.eq(i).fadeOut(function() {
      i = (i + 1) % len;
      $els.eq(i).fadeIn();
    });
  }, 2500);
});
// menu show/hide on sroll
$(document).scroll(function() {
  var y = $(this).scrollTop();
  if (y > 650) {
    $(".menu-hamburger").fadeIn();
    $(".selectorIdioma").fadeIn();
  } else {
    $(".menu-hamburger").fadeOut();
    $(".selectorIdioma").fadeOut();
  }
});

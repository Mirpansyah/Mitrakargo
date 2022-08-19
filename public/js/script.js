"use strict";

const layananTrigger = document.querySelector(".dropdown-layanan__trigger");
const tutupSidenav = document.querySelector(".tutup-sidenav");
const sideLayanan = document.querySelector(".dropdown-layanan");
const rotasi = document.querySelector(".rotasi");
const sideMenu = document.querySelector(".nav__menu-bar");
const sidebarMenu = document.querySelector(".side-nav");
let counter = 0;

layananTrigger.addEventListener("click", e => {
    console.log("clicked", counter);
    if (counter === 0) {
        rotasi.style.transform = "rotate(90deg)";
        sideLayanan.style.height = "calc(6 * 50px)";
        return counter++;
    }
    if (counter === 1) {
        rotasi.style.transform = "rotate(0deg)";
        sideLayanan.style.height = "0";
        return counter--;
    }
});

sideMenu.addEventListener("click", e => {
    sidebarMenu.style.width = "100%";
});
tutupSidenav.addEventListener("click", e => {
    sidebarMenu.style.width = "0";
});

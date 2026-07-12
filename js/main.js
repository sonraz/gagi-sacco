/* ==========================================================
   GAGI SACCO WEBSITE
   File: main.js
   Description: Global Website JavaScript
   Author: Elvis Mati
   Version: 1.0
========================================================== */

document.addEventListener("DOMContentLoaded", () => {

    /* ==========================================================
       MOBILE NAVIGATION
    ========================================================== */

    const menuToggle = document.getElementById("menuToggle");
    const navMenu = document.querySelector(".nav-menu");

    if (menuToggle && navMenu) {

        menuToggle.addEventListener("click", () => {

            menuToggle.classList.toggle("active");
            navMenu.classList.toggle("active");

            const expanded =
                menuToggle.getAttribute("aria-expanded") === "true";

            menuToggle.setAttribute("aria-expanded", !expanded);

        });

        /* ==========================================
           CLOSE MENU WHEN A LINK IS CLICKED
        ========================================== */

        document.querySelectorAll(".nav-link").forEach(link => {

            link.addEventListener("click", () => {

                menuToggle.classList.remove("active");
                navMenu.classList.remove("active");

                menuToggle.setAttribute("aria-expanded", "false");

            });

        });

    }


    /* ==========================================================
       HEADER SHADOW ON SCROLL
    ========================================================== */

    const header = document.querySelector(".header");

    window.addEventListener("scroll", () => {

        if (window.scrollY > 20) {

            header.style.boxShadow = "0 8px 25px rgba(0,0,0,.12)";

        } else {

            header.style.boxShadow = "0 2px 15px rgba(0,0,0,.08)";

        }

    });

});
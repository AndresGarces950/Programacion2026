/*=====================================================
 SPA ARMONÍA
 Archivo: script.js
 Autor: Andrés Garcés
 Descripción:
 Este archivo controla los efectos visuales e
 interacciones de la página web.
======================================================*/

// Esperar a que cargue toda la página
document.addEventListener("DOMContentLoaded", function () {

    console.log("SPA ARMONÍA cargado correctamente.");

    //---------------------------------------
    // Cambiar color del menú al hacer scroll
    //---------------------------------------

    const navbar = document.querySelector(".navbar");

    window.addEventListener("scroll", function () {

        if (window.scrollY > 80) {

            navbar.classList.add("shadow");

            navbar.style.background = "#206040";

        } else {

            navbar.classList.remove("shadow");

            navbar.style.background = "#198754";

        }

    });

    //---------------------------------------
    // Desplazamiento suave del menú
    //---------------------------------------

    const enlaces = document.querySelectorAll('a[href^="#"]');

    enlaces.forEach(function (enlace) {

        enlace.addEventListener("click", function (e) {

            e.preventDefault();

            const destino = document.querySelector(this.getAttribute("href"));

            if (destino) {

                destino.scrollIntoView({

                    behavior: "smooth"

                });

            }

        });

    });

    //---------------------------------------
    // Botón Volver Arriba
    //---------------------------------------

    const boton = document.createElement("button");

    boton.innerHTML = "⬆";

    boton.id = "btnSubir";

    document.body.appendChild(boton);

    boton.style.display = "none";

    //---------------------------------------

    window.addEventListener("scroll", function () {

        if (window.scrollY > 300) {

            boton.style.display = "block";

        } else {

            boton.style.display = "none";

        }

    });

    //---------------------------------------

    boton.addEventListener("click", function () {

        window.scrollTo({

            top: 0,

            behavior: "smooth"

        });

    });

    //---------------------------------------
    // Mensaje del botón Reservar
    //---------------------------------------

    const reservar = document.querySelector(".btn");

    if (reservar) {

        reservar.addEventListener("click", function () {

            alert("Bienvenido a SPA ARMONÍA.\n\nPróximamente podrás reservar tu cita en línea.");

        });

    }
           function reservar(e){e.preventDefault();alert("¡Reserva enviada!");}
});
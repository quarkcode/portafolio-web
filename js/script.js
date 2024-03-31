// Preloading
window.addEventListener("load", function () { var e, t = document.querySelector(".pre-loading"); (e = t).style.transition = "opacity 1.5s", e.style.opacity = 0, setTimeout(function () { e.remove() }, 1500) });

document.addEventListener("DOMContentLoaded", function() {

    // Formulario de contacto
    const formulario = document.querySelector("#contact form");
    const mensajeErrorDiv = document.querySelector("#msgError");

    formulario.addEventListener("submit", function(e) {
        e.preventDefault();
        let isValid = true;
        
        const campos = formulario.querySelectorAll("input, textarea");

        mensajeErrorDiv.textContent = "";
        campos.forEach(campo => {
            campo.style.borderColor = "";
        });

        campos.forEach(campo => {
            if (!campo.value.trim()) {
                campo.style.borderColor = "red";
                isValid = false;
            }
        });

        if (isValid) {
            const datos = new FormData(formulario);

            fetch("enviar.php", {
                method: "POST",
                body: datos,
            })
            .then(response => response.text())
            .then(data => {
                formulario.querySelector("#form-content").style.display = "none";
                formulario.querySelector("#msgThanks").style.display = "block";
            })
            .catch(error => {
                mensajeErrorDiv.textContent = "Hubo un error al enviar el mensaje";
                console.error("Error:", error);
            });
        } else {
            mensajeErrorDiv.textContent = "Por favor, rellena todos los campos marcados.";
        }
    });

});

document.addEventListener("DOMContentLoaded", () => {
    const sections = document.querySelectorAll(".container section");
  
    const options = {
      root: null,
      threshold: 0.5,
    };
  
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          sections.forEach(section => {
            section.classList.remove("active");
          });
          entry.target.classList.add("active");
        }
      });
    }, options);
  
    sections.forEach(section => {
      observer.observe(section);
    });
});
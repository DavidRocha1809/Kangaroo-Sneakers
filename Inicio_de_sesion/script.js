
//Carrito******************************************************************************************

function Carrito() {

    console.log("Carrito activado");
    // Crear la alerta
    let alerta = document.createElement("div");
    alerta.innerText = "¡Se ha agregado correctamente!";
    alerta.style.position = "fixed";
    alerta.style.bottom = "10px";
    alerta.style.right = "10px";
    alerta.style.padding = "10px";
    alerta.style.border = "1px solid black";
    alerta.style.textAlign = "center";
    alerta.style.boxShadow = "0 5px 5px -5px #333";
    alerta.style.backgroundColor = "white";
    alerta.style.color = "black";
    alerta.style.opacity = "0";
    alerta.style.transition = "opacity 1s ease-in-out";
    alerta.style.borderRadius = "10px";
    document.body.appendChild(alerta);

    //Boton para cerrar el mensaje antes de tiempo

    let botonCerrar = document.createElement("button");
    botonCerrar.innerText = "X";
    botonCerrar.style.marginLeft = "10px";
    botonCerrar.style.border = "none";
    botonCerrar.style.background = "none";
    botonCerrar.style.cursor = "pointer";
    botonCerrar.onclick = () => {
        alerta.remove();
    };

    // Añadir el botón de cierre a la alerta
    alerta.appendChild(botonCerrar);

    // Crear la barra de carga
    let barraCarga = document.createElement("div");
    barraCarga.style.width = "100%";
    barraCarga.style.height = "5px";
    barraCarga.style.backgroundColor = "white";
    barraCarga.style.marginTop = "10px";
    alerta.appendChild(barraCarga);

    let progreso = document.createElement("div");
    progreso.style.width = "0%";
    progreso.style.height = "100%";
    progreso.style.backgroundColor = "grey";
    barraCarga.appendChild(progreso);

    // Hacer que la alerta aparezca lentamente
    setTimeout(() => {
        alerta.style.opacity = "1";
    }, 100); // 100 milisegundos para iniciar la transición

     // Actualizar la barra de carga
     let tiempoTotal = 3000; // 3000 milisegundos = 3 segundos
    let intervalo = 100; // Actualizar cada 100 milisegundos
    let tiempoTranscurrido = 0;

    let intervaloCarga = setInterval(() => {
        tiempoTranscurrido += intervalo;
        let porcentaje = (tiempoTranscurrido / tiempoTotal) * 100;
        progreso.style.width = porcentaje + "%";

        if (tiempoTranscurrido >= tiempoTotal) {
            clearInterval(intervaloCarga);
        }
    }, intervalo);

    // Hacer que la alerta desaparezca lentamente después de 3 segundos
    setTimeout(() => {
        alerta.style.opacity = "0";
        setTimeout(() => {
            alerta.remove();
        }, 5000); // 5000 milisegundos = 5 segundos para completar la transición de desaparición
    }, 3000); // 3000 milisegundos = 3 segundos antes de empezar a desaparecer

}


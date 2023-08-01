const dateInput = document.querySelector('input[name="fecha"]');

const todayDate = () => {
    let hoy = new Date();
    let dia = hoy.getDate();
    let mes = hoy.getMonth() + 1;
    let agnio = hoy.getFullYear();

    let h = new Date();
    let hours = ((h.getHours() < 10 ) ? "0" : "") + h.getHours();
    let minutes = ((h.getMinutes() < 10 ) ? "0" : "") + h.getMinutes();
    let secs = ((h.getSeconds() < 10 ) ? "0" : "") + h.getSeconds();

    dia = ('0' + dia).slice(-2);
    mes = ('0' + mes).slice(-2);

    let format1 = `${agnio}-${mes}-${dia}  ${hours}:${minutes}:${secs}`;
    return format1;
}


dateInput.value = todayDate();
const botao_comecar = document.getElementById('btn-comecar');

botao_comecar.addEventListener('click', () =>{
    const dias = document.getElementById('dia');
    const horas = document.getElementById('hr');
    const minutos = document.getElementById('min');
    const segundos = document.getElementById('seg');

let novo_ano = document.getElementById('data').value;

function coutdown(){

    const new_year_date = new Date(novo_ano);
    const current_date = new Date();

    const total_segundos = (new_year_date - current_date) / 1000;

    const days = Math.floor(total_segundos / 3600 / 24);
    const hours = Math.floor(total_segundos / 3600) % 24;
    const mins = Math.floor(total_segundos / 60) % 60;
    const seconds = Math.floor(total_segundos) % 60;

    dias.innerHTML = days;
    horas.innerHTML = formatTime(hours);
    minutos.innerHTML = formatTime(mins);
    segundos.innerHTML = formatTime(seconds);

    function formatTime(time){
        return time < 10 ? `0${time}` : time;
    }

}
    coutdown();

    setInterval(coutdown, 1000);
})




let alerta = document.querySelector('.pocen')
let CPalerta = document.querySelector('.alerta')
let clickalerta = document.querySelector('.rs')
let fecharalerta = document.querySelector('.fecharal')

clickalerta.addEventListener('click', function(){
    function mostrarpc() {
        alerta.classList.add('ddddd')
    }
    setTimeout(mostrarpc, 100);
    CPalerta.classList.remove('none')

    function ocultarAlerta() {
        alerta.classList.remove('ddddd')
        CPalerta.classList.add('none')
    }  
      setTimeout(ocultarAlerta, 10000);
})
fecharalerta.addEventListener('click', function(){
        alerta.classList.remove('ddddd')
        CPalerta.classList.add('none')
})

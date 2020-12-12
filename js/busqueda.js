


(function(){


  document.querySelector('#button_buscar').addEventListener('click', function(){

    let nombre_buscar = document.querySelector('#input_buscar').value.trim().toLowerCase();
    let div_encontrado = document.querySelector('#'+ nombre_buscar);
    div_encontrado.classList.add('mx-auto');
    document.querySelector('.rowPerros').innerHTML = "";
    document.querySelector('.rowPerros1').innerHTML = "";
    document.querySelector('.rowPerros2').innerHTML = "";
    document.querySelector('.row_busqueda').innerHTML = "";
    document.querySelector('.rowPerros').appendChild(div_encontrado);

  });
})();

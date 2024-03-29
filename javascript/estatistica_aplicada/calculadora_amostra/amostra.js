'use strict';

let button = document.getElementById('calcular');
let button_limpar = document.getElementById('limpar');

button.addEventListener('click',calculo);
button_limpar.addEventListener('click',limpa);

function calculo(e){
    e.preventDefault();
    let np = parseFloat(document.getElementById('inum').value);
    let z = parseFloat(document.getElementById('igrau').value);
    let pe = parseFloat(document.getElementById('iesti').value);
    let ea = parseFloat(document.getElementById('imarg').value);
    
    if (np == null || np == 0)
    {
        alert("Digite o número da população.")
    }

    if (pe == 0)
    {
        pe = 0.5;
    }
    else if (pe < 0)
    {
        alert("Estimativa da verdadeira proporção não pode ser negativa.")
        n = 0;
    }
    else
    {
        pe = pe / 100;
    }

    if (ea < 1)
    {
        alert("Margem de erro deve ser maior que 0.")
        n = 0;
    }

    let n = ((np * (z * z) * pe * (1-pe)) / ((ea / 100 *
    ea / 100) * (np - 1) + (z * z) * pe * (1-pe)));
    document.getElementById('resultado').innerHTML = 'Tamanho da Amostra = ' + parseFloat(n.toFixed(2));;
}

function limpa(e){
    document.getElementById('inum').value = ' ';
    document.getElementById('igrau').value = ' ';
    document.getElementById('imarg').value = ' ';
    document.getElementById('iesti').value = ' ';
    document.getElementById('resultado').innerHTML = null;
}
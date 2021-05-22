'use strict'

const base = document.querySelector('#txtBase').value;

//Elemento para enviar ao método de busca
const txtBuscar = document.querySelector('#txtBuscaPostagem');
if (typeof txtBuscar != 'undefined' && txtBuscar != null) {

    txtBuscar.addEventListener('keyup', (event) => {
        if (event.keyCode == 13) {

            const value = txtBuscar.value;

            if (value.length < 3) {
                return alert('Digite ao menos três caracteres.');
            }

            document.location.href = base + 'post/buscar/' + value;
        }
    });
}
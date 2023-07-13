function createLabel(text, htmlFor){
    const label = document.createElement('label');

    label.htmlFor = htmlFor;
    label.innerText = text;
    return label;
}

function createInput(id, value, name, type='number', placeholder=''){
    const input = document.createElement('input');
    input.id = id;
    input.value = value;
    input.name = name;
    input.type = type;
    input.placeholder = placeholder;
    input.classList.add('form-control');


    return input;
}

function createSelect(id, name){
    const inputSelect = document.createElement('select');
    inputSelect.id = id;
    inputSelect.name = name;
    inputSelect.classList.add('form-control');

    const option1 = document.createElement('option');
    option1.value = "kids";
    option1.text = "Crianças (2-10 anos)";

    const option2 = document.createElement('option');
    option2.value = "adults";
    option2.text = "Adolescentes/Adultos/Idosos";


    inputSelect.add(option1);
    inputSelect.add(option2);

    return inputSelect;
}


const addEscort = document.getElementById('addEscort');
const form = document.getElementById('confirmPresenceForm');
const presence = [];
let inputRows = 0;

addEscort.addEventListener('click', function(){
    const escort = document.getElementById('escort');

    const newRow = document.createElement('li');
    const rowIndex = inputRows;
    inputRows++;

    newRow.id = 'inputRow-' + rowIndex;
    newRow.className = 'inputRow form-control';

    const escortTypeLabel = createLabel('Selecione o tipo: ', 'escortType-' + rowIndex);
    const escortAmountInput = createInput('escortAmount' + rowIndex, null, 'escortAmount-' + rowIndex);

    const escortAmountLabel = createLabel('Quantidade: ', 'escortAmount' + rowIndex);
    const escortTypeSelect = createSelect('escortType-' + rowIndex, 'escortType-' + rowIndex);

    const removeRowBtn = document.createElement('button');
    removeRowBtn.type = 'button';
    removeRowBtn.className = 'btn btn-danger';
    removeRowBtn.innerText = 'Remover';
    removeRowBtn.addEventListener('click', function(){
        escort.removeChild(newRow);
    });

    newRow.append(
        escortTypeLabel, escortTypeSelect, escortAmountLabel, escortAmountInput, removeRowBtn
    );
    escort.appendChild(newRow);

});

form.addEventListener('submit', function(ev){
    ev.preventDefault();

    const fullnameInput = document.getElementById('fullname');
    const phoneInput = document.getElementById('phone');

    let escorts = [];

    inputRows.forEach(function(row){
        const escortType = document.querySelector('#' + row.id + ' input[name="escortType"]').value;
        const escortAmount = document.querySelector('#' + row.id + ' input[name="escortAmount"]').value;
        escorts.push({
            type: escortType,
            amount: escortAmount
        });
    });

    const newPresence = {
        fullname: fullnameInput.value,
        phone: phoneInput.value,
        escorts: escorts
    }

    presence.push(newPresence);
    alert('Presença confirmada com sucesso!');

    // Limpar os formulários
    fullnameInput.value = '';
    phoneInput.value = '';
    inputRows.forEach(function(row){
        row.remove();
    });

    console.log(presence);
});
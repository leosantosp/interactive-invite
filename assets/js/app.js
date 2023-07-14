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
    const inputRows = document.querySelectorAll('.inputRow');

    let escorts = [];

    inputRows.forEach(function(row){
        const selectElement = document.querySelector('#' + row.id + ' select');
        const selectedIndex = selectElement.selectedIndex;
        const selectedOption = selectElement.options[selectedIndex];
        const escortType = selectedOption.value;
        
        const escortAmount = document.querySelector('#' + row.id + ' input[type="number"]').value;
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

    // Converter o objeto presence em uma string JSON
    const confirmPresence = JSON.stringify(newPresence);

    // Criar um elemento de input oculto para enviar a string JSON
    const presence = document.createElement('input');
    presence.type = 'hidden';
    presence.name = 'confirmPresence';
    presence.value = confirmPresence;

    // Adicionar o input oculto ao formulário
    form.appendChild(presence);

    // Envia o formulário
    form.submit();


    // presence.push(newPresence);
    alert('Presença confirmada com sucesso!');

    // Limpar os formulários
    fullnameInput.value = '';
    phoneInput.value = '';
    inputRows.forEach(function(row){
        row.remove();
    });

    // console.log(presence);
});
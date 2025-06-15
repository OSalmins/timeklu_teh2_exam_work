const sidebar_open1 = document.getElementById('sidebar_open')
const sidebar_close1 = document.getElementById('sidebar_close')
const sidebar = document.getElementsByClassName('sidebar')[0]
sidebar.style.display = 'none';
sidebar_open1.addEventListener('click', event =>{
    if(sidebar.style.display === 'none'){
        sidebar.style.display = 'flex';
    }
    
})
sidebar_close1.addEventListener('click', event =>{
    if(sidebar.style.display === 'flex'){
        sidebar.style.display = 'none';
    } 
    
})



const formButton = document.getElementById('form_button')
const formBox = document.getElementById('form_box')

formButton.addEventListener('click', event => {
    if(formBox.style.display === 'block'){
        formBox.style.display = 'none';
        formButton.textContent = 'Atvērt anketu'
    } else{
        formBox.style.display = 'block';
        formButton.textContent = 'Aizvērt anketu'
    };

});




const konsultacija = document.getElementById('konsultacija')

konsultacija.addEventListener('change', event => {
    if(konsultacija.checked){
        let dateLabel = document.createElement('label')
        let dateInput = document.createElement('input')     
        const dateLocation = document.querySelector('#date_location')

        dateInput.type='date'
        dateInput.name='date'
        dateInput.id='date'
        dateLabel.textContent='Izvēlies konsultācijai datumu.'
        dateLabel.for='date'
 

        dateLocation.appendChild(dateLabel)
        dateLocation.appendChild(dateInput)

    } else{
        let date_Location = document.getElementById('date_location')
        date_Location.innerHTML=""

    };

});





const formError = document.getElementById('error')
const form = document.getElementById('form')
const vards = document.getElementById('vards')
const nummurs = document.getElementById('nummurs')
const epasts = document.getElementById('epasts')
const tema = document.getElementById('tema')
const teksts = document.getElementById('teksts')

form.addEventListener('reset', e =>{
    let date_Location = document.getElementById('date_location')
        date_Location.innerHTML=""
})

form.addEventListener('submit', (e) => {
    const datums = document.getElementById('date')
    error.style.color = 'red';
    let messages = []
    if (vards.value === '' || vards.value == null){
        messages.push(' Nepieciešams vārds')
    }else if (!/^[A-Za-zĀČĒĢĪĶĻŅŌŖŠŪŽāčēģīķļņōŗšūž]+$/. test(vards.value)){
        messages.push(' Vārdam ir tikai burti')
    }


    if (nummurs.value === '' || nummurs.value == null){
        messages.push(' Nepieciešams nummurs')
    } else if (!/^\d+$/. test(nummurs.value)) {
        messages.push(' Nummuram ir tikai cipari')
    } else if (nummurs.value.length !=8){
        messages.push(' Nummuram ir 8 cipari')
    }


    if (epasts.value === '' || epasts.value == null){
        messages.push(' Nepieciešams epasts')
    }
    
    if (tema.value === '' || tema.value == null){
        messages.push(' Nepieciešams norādīt tēmu')
    }
    if(konsultacija.checked){

        if(datums.value.length==0){
            messages.push(' Norādi konsultācijas datumu')
        }
        else{
            const dateValue = datums.value;
            const [yy,mm,dd]=dateValue.split("-").map(Number);
            if(yy<2025){
                messages.push('Konsultācijas datums jau ir pagājis')
            }
            if(yy>2025){
                messages.push(' Konsultācijai var pieteikties tikai šogad')
            }
            if(mm==1 && dd<23 && yy==2025){
                messages.push('Konsultācijas datums jau ir pagājis')
            }
        }
    }
    if (teksts.value === '' || teksts.value == null){
        messages.push(' Uzraksti tekstu')
    }


    if(messages.length >0){
        e.preventDefault();
        formError.innerText = messages
    }
    else{
        error.style.color = 'green';
        messages.push('Paldies, ka izvēlējies ar mums sazināties!')
        formError.innerText = messages
    }
} );



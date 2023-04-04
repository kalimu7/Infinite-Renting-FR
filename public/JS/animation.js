// **toggle the signup***
const tn = document.querySelector('#tenant');
const ld = document.querySelector('#landlord');
const frm = document.querySelector('.frm');
const input = `<input type='hidden' id='key'/>`;


tn.addEventListener('click',()=>{

        tn.style.backgroundColor = '#03254b';
        ld.style.backgroundColor = '#03254bc9';
        const element = document.getElementById('key');
        if(element){
            element.remove();
        }
    })



ld.addEventListener('click',()=>{

        ld.style.backgroundColor = '#03254b';
        tn.style.backgroundColor = '#03254bc9';
        const element = document.getElementById('key');
        if(!element){
            frm.innerHTML +=input;
        }
    })


// ****open file*********
